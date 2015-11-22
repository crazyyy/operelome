$(function() {

	var form = new ServsiteModal1('.block-subscribe form');
	form.init();

});

function ServsiteModal1(formSelector)
{
	this.init = function()
	{
		this.formSelector = formSelector;
		this.addSubmitHandler();
	}

	this.addSubmitHandler = function()
	{
		$(this.formSelector).on('submit', function(e) {
			var form = $(this);
			$.ajax({
				type: 'post',
				url: form.attr('data-action'),
				data: form.serialize(),
				dataType: 'json',
				beforeSend: function(jqXHR, settings) {
					form.hasClass('process') ? jqXHR.abort() : form.addClass('process');
				},
			})
			.done(function(data, textStatus, jqXHR) {
				alert(data.result);
				if (data.status == 'success')
				{
					form.find('.input-email').val('');
				}
				form.removeClass('process');
			})
			.fail(function(jqXHR, textStatus, errorThrown) {
				alert(textStatus + ' ' + errorThrown);
				form.removeClass('process');
			});
			return false;
		});
	}

}