//自定义隐藏显示
!function ($) {

  "use strict"; // jshint ;_;
   var data_type = '[data-type="mhover"]';
   var Mhover = function (el) {
        $(el).on('mouseover', data_type, this.show);
		$(el).on('mouseout', data_type, this.hide);
   }
   
   Mhover.prototype.show = function (e) {
		var $this = $(this);
		var selector = $this.attr('data-targ');
		e && e.preventDefault()      //阻止元素默认行为
		$(selector).show();
   }
   
   Mhover.prototype.hide = function(e){
   		var $this = $(this);
		var selector = $this.attr('data-targ');
		e && e.preventDefault()      //阻止元素默认行为
		$(selector).hide();
   }
   

 /* Hover CLASS DEFINITION
  * ====================== */
	$.fn.mhover = function(option){
		return this.each(function () {
		  var $this = $(this)
			, data = $this.data('mhover');
		  if (!data) $this.data('mhover', (data = new Mhover(this)));
		  if (typeof option == 'string') data[option].call($this);
		})
	}
	
	$.fn.mhover.Constructor = Mhover;
	
// mhover Data Api

$(function () {
	$('body').on('mouseover.mhover.data-api', data_type, Mhover.prototype.show);
	$('body').on('mouseout.mhover.data-api', data_type, Mhover.prototype.hide);
})
  
}(window.jQuery);