//base js
!function ($) {
	$(function () {
		//给所有input添加伪类class type ie6 hack
		$('input').each(function(){
			$(this).addClass("ie6-"+$(this).attr("type"));
		});
	})
}(window.jQuery);