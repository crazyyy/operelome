function init_gallery(){var t=1;$(".wp-gallery").each(function(){$(this).find("a").attr("rel","gallery-"+t++)}),$('a[href$=".bmp"], a[href$=".gif"], a[href$=".jpg"], a[href$=".jpeg"], a[href$=".png"]').fancybox({margin:100,padding:2,loop:!1,title:""})}function init_post_navigation(){var t=$(".post-navigation");t.find("div").append($("<a>").addClass("toggle").attr("href","#").html("[спрятать]")),t.find("ul a").on("click",function(){var t=$(this).attr("href");return $(t).servsiteScroll(),!1}),t.find(".toggle").on("click",function(){return t.find("ul").is(":visible")?($(this).html("[показать]"),t.find("ul").slideUp()):($(this).html("[спрятать]"),t.find("ul").slideDown()),!1})}function init_slidebars(){$.slidebars()}function init_sliders(){$.fn.sliderPro&&($("#home-slider").show(),$("#home-slider").sliderPro({height:280,orientation:"vertical",loop:!1,arrows:!1,buttons:!1,thumbnailsPosition:"right",thumbnailPointer:!0,thumbnailWidth:250,thumbnailHeight:68}))}function init_forms(){$('.wpcf7-form [aria-required="true"]').each(function(){$(this).closest(".item").find(".label").append($("<i>").html(" *"))})}function init_videos(){$('iframe[src*="youtube"]').each(function(){$(this).wrap($("<div>").addClass("video-container"))})}function init_add_link_on_copy(){function t(){var t=document.getElementsByTagName("body")[0],i=window.getSelection(),e="<br /><br /> Источник: <a href='"+document.location.href+"'>"+document.location.href+"</a>",n=i+e,s=document.createElement("div");s.style.position="absolute",s.style.left="-99999px",t.appendChild(s),s.innerHTML=n,i.selectAllChildren(s),window.setTimeout(function(){t.removeChild(s)},0)}document.oncopy=t}function init_print(){$(".link-print").on("click",function(){return window.print(),!1})}function init_fav(){$(".link-fav").on("click",function(){function t(t){title=document.title,url=document.location;try{window.external.AddFavorite(url,title)}catch(i){try{window.sidebar.addPanel(title,url,"")}catch(i){if("object"==typeof opera)return t.rel="sidebar",t.title=title,t.url=url,!0;alert("Нажмите Ctrl-D, чтобы добавить страницу в закладки")}}return!1}return t(this),!1})}function init_up(){var t=$('<a id="up" title="Наверх">↑</a>').appendTo($("body"));t.on("click",function(){return $("html, body").animate({scrollTop:0},"slow"),!1}),$(window).on("scroll",function(){$(this).scrollTop()>300?t.fadeIn():t.fadeOut()}),$(window).trigger("scroll")}$(document).ready(init_gallery),$(document).ready(init_post_navigation),$(document).ready(init_slidebars),$(document).ready(init_sliders),$(document).ready(init_forms),$(document).ready(init_videos),$(document).ready(init_add_link_on_copy),$(document).ready(init_print),$(document).ready(init_fav),$(init_up),function(t){t.fn.servsiteScroll=function(i){var i=t.extend({speed:1e3,index:0,offset:0},i);return this.eq(i.index).each(function(){var e=t(this).offset().top-10-i.offset;t("html, body").animate({scrollTop:e},i.speed)}),this}}(jQuery),!function(t){t.slidebars=function(i){function e(){!c.disableOver||"number"==typeof c.disableOver&&c.disableOver>=C?(w=!0,t("html").addClass("sb-init"),c.hideControlClasses&&_.removeClass("sb-hide"),n()):"number"==typeof c.disableOver&&c.disableOver<C&&(w=!1,t("html").removeClass("sb-init"),c.hideControlClasses&&_.addClass("sb-hide"),p.css("minHeight",""),(g||$)&&r())}function n(){p.css("minHeight","");var i=parseInt(p.css("height"),10),e=parseInt(t("html").css("height"),10);e>i&&p.css("minHeight",t("html").css("height")),v&&v.hasClass("sb-width-custom")&&v.css("width",v.attr("data-sb-width")),y&&y.hasClass("sb-width-custom")&&y.css("width",y.attr("data-sb-width")),v&&(v.hasClass("sb-style-push")||v.hasClass("sb-style-overlay"))&&v.css("marginLeft","-"+v.css("width")),y&&(y.hasClass("sb-style-push")||y.hasClass("sb-style-overlay"))&&y.css("marginRight","-"+y.css("width")),c.scrollLock&&t("html").addClass("sb-scroll-lock")}function s(t,i,e){function s(){o.removeAttr("style"),n()}var o;if(o=t.hasClass("sb-style-push")?p.add(t).add(k):t.hasClass("sb-style-overlay")?t:p.add(k),"translate"===T)"0px"===i?s():o.css("transform","translate( "+i+" )");else if("side"===T)"0px"===i?s():("-"===i[0]&&(i=i.substr(1)),o.css(e,"0px"),setTimeout(function(){o.css(e,i)},1));else if("jQuery"===T){"-"===i[0]&&(i=i.substr(1));var r={};r[e]=i,o.stop().animate(r,400)}}function o(i){function e(){w&&"left"===i&&v?(t("html").addClass("sb-active sb-active-left"),v.addClass("sb-active"),s(v,v.css("width"),"left"),setTimeout(function(){g=!0},400)):w&&"right"===i&&y&&(t("html").addClass("sb-active sb-active-right"),y.addClass("sb-active"),s(y,"-"+y.css("width"),"right"),setTimeout(function(){$=!0},400))}"left"===i&&v&&$||"right"===i&&y&&g?(r(),setTimeout(e,400)):e()}function r(i,e){(g||$)&&(g&&(s(v,"0px","left"),g=!1),$&&(s(y,"0px","right"),$=!1),setTimeout(function(){t("html").removeClass("sb-active sb-active-left sb-active-right"),v&&v.removeClass("sb-active"),y&&y.removeClass("sb-active"),"undefined"!=typeof i&&(void 0===typeof e&&(e="_self"),window.open(i,e))},400))}function a(t){"left"===t&&v&&(g?r():o("left")),"right"===t&&y&&($?r():o("right"))}function l(t,i){t.stopPropagation(),t.preventDefault(),"touchend"===t.type&&i.off("click")}var c=t.extend({siteClose:!0,scrollLock:!1,disableOver:!1,hideControlClasses:!1},i),d=document.createElement("div").style,f=!1,h=!1;(""===d.MozTransition||""===d.WebkitTransition||""===d.OTransition||""===d.transition)&&(f=!0),(""===d.MozTransform||""===d.WebkitTransform||""===d.OTransform||""===d.transform)&&(h=!0);var u=navigator.userAgent,b=!1,m=!1;/Android/.test(u)?b=u.substr(u.indexOf("Android")+8,3):/(iPhone|iPod|iPad)/.test(u)&&(m=u.substr(u.indexOf("OS ")+3,3).replace("_",".")),(b&&3>b||m&&5>m)&&t("html").addClass("sb-static");var p=t("#sb-site, .sb-site-container");if(t(".sb-left").length)var v=t(".sb-left"),g=!1;if(t(".sb-right").length)var y=t(".sb-right"),$=!1;var w=!1,C=t(window).width(),_=t(".sb-toggle-left, .sb-toggle-right, .sb-open-left, .sb-open-right, .sb-close"),k=t(".sb-slide");e(),t(window).resize(function(){var i=t(window).width();C!==i&&(C=i,e(),g&&o("left"),$&&o("right"))});var T;f&&h?(T="translate",b&&4.4>b&&(T="side")):T="jQuery",this.slidebars={open:o,close:r,toggle:a,init:function(){return w},active:function(t){return"left"===t&&v?g:"right"===t&&y?$:void 0},destroy:function(t){"left"===t&&v&&(g&&r(),setTimeout(function(){v.remove(),v=!1},400)),"right"===t&&y&&($&&r(),setTimeout(function(){y.remove(),y=!1},400))}},t(".sb-toggle-left").on("touchend click",function(i){l(i,t(this)),a("left")}),t(".sb-toggle-right").on("touchend click",function(i){l(i,t(this)),a("right")}),t(".sb-open-left").on("touchend click",function(i){l(i,t(this)),o("left")}),t(".sb-open-right").on("touchend click",function(i){l(i,t(this)),o("right")}),t(".sb-close").on("touchend click",function(i){if(t(this).is("a")||t(this).children().is("a")){if("click"===i.type){i.stopPropagation(),i.preventDefault();var e=t(this).is("a")?t(this):t(this).find("a"),n=e.attr("href"),s=e.attr("target")?e.attr("target"):"_self";r(n,s)}}else l(i,t(this)),r()}),p.on("touchend click",function(i){c.siteClose&&(g||$)&&(l(i,t(this)),r())})}}(jQuery);