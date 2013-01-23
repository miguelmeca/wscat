//自定义通用隐藏显示
!function ($) {

  "use strict"; // jshint ;_;
   var data_type = '[data-type="mhover"]';
   var Mhover = function (el, options) {
		this.options = $.extend({}, $.fn.mhover.defaults, options);
        $(el).on('mouseover', data_type, this.show);
		$(el).on('mouseout', data_type, this.hide);
   }
   
   Mhover.prototype.show = function (e) {
		var $this = $(this);
		$this.addClass('hover');
		var selector = $this.attr('data-targ');
		e && e.preventDefault()      //阻止元素默认行为
		if (!selector) {return false;}
		$(selector).show();
   }
   
   Mhover.prototype.hide = function(e){
   		var $this = $(this);
		$this.removeClass('hover');
		var selector = $this.attr('data-targ');
		e && e.preventDefault()      //阻止元素默认行为
		if (!selector) {return false;}
		$(selector).hide();
   }
   
   

 /* Hover CLASS DEFINITION
  * ====================== */
	$.fn.mhover = function(option){
		return this.each(function () {
		  var $this = $(this)
			, data = $this.data('mhover')
			, options = typeof option == 'object' && option;
		  if (!data) $this.data('mhover', (data = new Mhover(this,options)));
		  if (typeof option == 'string') data[option].call($this);
		})
	}
	
	$.fn.mhover.Constructor = Mhover;
	
	//参数
	$.fn.mhover.defaults = {
		ajaxShow : false 
	}
	
// mhover Data Api

$(function () {
	$('body').on('mouseenter.mhover.data-api', data_type, Mhover.prototype.show);
	$('body').on('mouseleave.mhover.data-api', data_type, Mhover.prototype.hide);
})
  
}(window.jQuery);