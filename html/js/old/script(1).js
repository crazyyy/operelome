function ServsiteModal1(t){this.init=function(){this.formSelector=t,this.addSubmitHandler()},this.addSubmitHandler=function(){$(this.formSelector).on("submit",function(t){var s=$(this);return $.ajax({type:"post",url:s.attr("data-action"),data:s.serialize(),dataType:"json",beforeSend:function(t,e){s.hasClass("process")?t.abort():s.addClass("process")}}).done(function(t,e,a){alert(t.result),"success"==t.status&&s.find(".input-email").val(""),s.removeClass("process")}).fail(function(t,e,a){alert(e+" "+a),s.removeClass("process")}),!1})}}$(function(){var t=new ServsiteModal1(".block-subscribe form");t.init()});