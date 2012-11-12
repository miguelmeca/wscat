//base js
!function ($) {
	$(function () {
		//给所有input添加伪类class type ie6 hack
		$('input').each(function(){
			$(this).addClass("ie6-"+$(this).attr("type"));
		});
		//ie6 使用js支持[id^="ui-show"],[id*=" ui-show"]{display:none;}
		$("[id^='ui-show']").addClass("ie6-ui-show");
		//ie6 支持图标class通配
		$("[class^='icon-'],[class*=' icon-']").addClass("ie6-icon");

	})
}(window.jQuery);