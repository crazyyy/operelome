$(function() {
	if (window.ymaps)
	{
		ymaps.ready(function() {
			var map = new YandexMaps();
			map.mapId = 'map-travmpunkts';
			map.selectId = 'map-travmpunkts-select';
			map.addressSearchId = 'map-travmpunkts-address';
			map.addressSearchResultsId = 'map-travmpunkts-address-results';
			map.init();
		});
	}
});

function YandexMaps()
{
	this.mapId;
	this.selectId;
	this.addressSearchId;
	this.addressSearchResultsId;

	this.map = null;
	this.maOptions = {
		center: [55.757478937200084,37.62277964550782],
		zoom: 11,
		behaviors: ['default', 'scrollZoom'],
		controls: ['zoomControl'],
	};
	this.clusterer = new ymaps.Clusterer({
		groupByCoordinates: false,
		preset: 'islands#invertedBlueClusterIcons',
	});

	this.ajax_url = 'http://operelome.ru/wp-admin/admin-ajax.php?action=travmpunkts';
	this.template = '<div class="travmpunkt"><div class="title">{title}</div><div class="address">Адрес: <strong>{address}</strong></div><div class="phone">Телефон: <strong>{phone}</strong></div><div class="hours">Время работы: <strong>{hours}</strong></div></div>';

	this.init = function()
	{
		var t = this;

		this.map = new ymaps.Map(this.mapId, this.maOptions);

		this.map.controls.add(new ymaps.control.FullscreenControl({
			options: {
				position: {right: 20, bottom: 20}
			}
		}));

		this.loadPlacemarks(null);
		this.addCityChangeHandler();
		this.addSearchHandler();
	}

	this.loadPlacemarks = function(city)
	{
		var t = this;

		$.get(this.ajax_url, {city: city}, function(travmpunkts) {
			t.removeAllPacemarks();
			t.createPlacemarks(travmpunkts);

			if (city && travmpunkts.length)
			{
				t.setLocation(city);
			}

		}, 'json');
	}

	this.removeAllPacemarks = function()
	{
		this.clusterer.removeAll();
	};

	this.createPlacemarks = function(travmpunkts)
	{
		var t = this;

		$.each(travmpunkts, function(index, travmpunkt) {
			var placemark = t.createPlacemark(travmpunkt);
			t.clusterer.add(placemark);
		});
		
		this.map.geoObjects.add(this.clusterer);
	}

	this.createPlacemark = function(travmpunkt)
	{
		var t = this;
		var coord = [travmpunkt.y, travmpunkt.x];

		var template = this.template;
		template = template.replace('{title}', travmpunkt.title);
		template = template.replace('{address}', travmpunkt.geo_address);
		template = template.replace('{phone}', travmpunkt.geo_phone);
		template = template.replace('{hours}', travmpunkt.geo_work_hours);

		var placemark = new ymaps.Placemark(coord, {
			balloonContent: template,
			hintContent: travmpunkt.geo_city + ' ' + travmpunkt.title,
		}, {
			preset: 'islands#blueCircleIcon',
		});

		placemark.events.add('click', function(e) {
			t.clickPlacemark(e.get('target'));
		});
		
		return placemark;
	}

	this.clickPlacemark = function(placemark)
	{
		
	}

	this.setLocation = function(city)
	{
		var t = this;
		ymaps.geocode('Россия, ' + city, {results: 1}).then(function(res) {
			t.map.setCenter(res.geoObjects.get(0).geometry.getCoordinates(), 11, {checkZoomRange: true, duration: 1000});
		});
	};

	this.addCityChangeHandler = function()
	{
		var t = this;
		$('#' + this.selectId).on('change', function() {
			var city = $(this).val();
			t.loadPlacemarks(city);
		});
	};

	this.addSearchHandler = function()
	{
		var t = this;
		var id = '#' + this.addressSearchId;
		var idResults = '#' + this.addressSearchResultsId;

		$(id).on('keyup', function(e) {
			var a = e.which;
            if (a == 37 || a == 38 || a == 39 || a == 40 || a == 13)
            {
            	return;
            }
			$(this).trigger('ymaps-search-places');
		});

		$(id).on('ymaps-search-places', function() {
			var query = $(this).val();

			if (query == '')
			{
				$(idResults).empty().hide();
				return;
			}

			ymaps.geocode('Россия, ' + query, {results: 5}).then(function(res) {
				var length = res.geoObjects.getLength();
				if (length)
				{
					$(idResults).empty().show();
					for(var i = 0; i < length; i++)
					{
						var obj = res.geoObjects.get(i);
						var name = obj.properties.get('name') + ' ' + obj.properties.get('description');
						var coord = obj.geometry.getCoordinates().join(' ');

						$(idResults).append(
							$('<div>').append(
								$('<span>').append(name).attr('data-coord', coord)
							)
						);
					}
				}
				else
				{
					$(idResults).empty().hide();
				}
			});

		});

		$(idResults).on('click', 'span', function() {
			var coord = $(this).attr('data-coord').split(' ');
			$(idResults).empty().hide();
			t.map.setCenter(coord, 11, {checkZoomRange: true, duration: 1000});
			/*t.map.balloon.open(coord, {
				contentBody: $(this).html(),
				maxWidth: 150,
			});*/
		});
	};

}