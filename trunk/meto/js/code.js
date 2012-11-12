//base js
!function ($) {
	$(function () {
		//给所有input添加伪类class type ie6 hack
		$('input').each(function(){
			$(this).addClass("ie6-"+$(this).attr("type"));
		});
		//ie6 使用js支持[id^="ui-show"],[id*=" ui-show"]{display:none;}
		$("[id^='ui-show']").each(function(){
			$(this).addClass("ie6-ui-show");
		});
	})
}(window.jQuery);