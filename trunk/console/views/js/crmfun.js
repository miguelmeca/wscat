/* =================================================// jQuery  zhaogang common Plugins crm// author:ncc// date:2012-9-4// =================================================*/;(function($){	$.fn.extend({		switchFocus:function(){ //文本框聚焦、失焦移除和恢复文字插件		var $this = $(this);		var dValue = $this.attr("placeholder");		if( null == dValue )dValue = $this.attr("dvalue");		if( null == dValue )dValue = this.defaultValue;		$this.focus(function(){			if( this.value == dValue )this.value = '';		}).blur(function(){			if( this.value == '' )this.value = dValue;		});		return $this;		} 	});	$.fn.hoverIntent = function(f,g) { //延迟hover插件	var cfg = {		sensitivity: 7,		interval: 100,		timeout: 0	};	cfg = $.extend(cfg, g ? { over: f, out: g } : f );	var cX, cY, pX, pY;	var track = function(ev) {		cX = ev.pageX;		cY = ev.pageY;	};	var compare = function(ev,ob) {		ob.hoverIntent_t = clearTimeout(ob.hoverIntent_t);		if ( ( Math.abs(pX-cX) + Math.abs(pY-cY) ) < cfg.sensitivity ) {			$(ob).unbind("mousemove",track);			ob.hoverIntent_s = 1;			return cfg.over.apply(ob,[ev]);		} else {			pX = cX; pY = cY;			ob.hoverIntent_t = setTimeout( function(){compare(ev, ob);} , cfg.interval );		}	};	var delay = function(ev,ob) {		ob.hoverIntent_t = clearTimeout(ob.hoverIntent_t);		ob.hoverIntent_s = 0;		return cfg.out.apply(ob,[ev]);	};	var handleHover = function(e) {		var ev = jQuery.extend({},e);		var ob = this;		if (ob.hoverIntent_t) { ob.hoverIntent_t = clearTimeout(ob.hoverIntent_t); }		if (e.type == "mouseenter") {			pX = ev.pageX; pY = ev.pageY;			$(ob).bind("mousemove",track);			if (ob.hoverIntent_s != 1) { ob.hoverIntent_t = setTimeout( function(){compare(ev,ob);} , cfg.interval );}		} else {			$(ob).unbind("mousemove",track);			if (ob.hoverIntent_s == 1) { ob.hoverIntent_t = setTimeout( function(){delay(ev,ob);} , cfg.timeout );}		}	};	return this.bind('mouseenter',handleHover).bind('mouseleave',handleHover);};$.fn.kxbdMarquee = function(options){	var opts = $.extend({},$.fn.kxbdMarquee.defaults, options);	return this.each(function(){		var $marquee = $(this);//滚动元素容器		var _scrollObj = $marquee.get(0);//滚动元素容器DOM		var scrollW = $marquee.width();//滚动元素容器的宽度		var scrollH = $marquee.height();//滚动元素容器的高度		var $element = $marquee.children(); //滚动元素		var $kids = $element.children();//滚动子元素		var scrollSize=0;//滚动元素尺寸		var _type = (opts.direction == 'left' || opts.direction == 'right') ? 1:0;//滚动类型，1左右，0上下		//防止滚动子元素比滚动元素宽而取不到实际滚动子元素宽度		$element.css(_type?'width':'height',10000);		//获取滚动元素的尺寸		if (opts.isEqual) {			scrollSize = $kids[_type?'outerWidth':'outerHeight']() * $kids.length;		}else{			$kids.each(function(){				scrollSize += $(this)[_type?'outerWidth':'outerHeight']();			});		}		//滚动元素总尺寸小于容器尺寸，不滚动		if (scrollSize<(_type?scrollW:scrollH)) return; 		//克隆滚动子元素将其插入到滚动元素后，并设定滚动元素宽度		$element.append($kids.clone()).css(_type?'width':'height',scrollSize*2);		//设置margin-Top		$element.css(_type?'marginLeft':'marginTop',-scrollSize+"px");		var numMoved = 0;		var mgn=0;		function scrollFunc(){			var _dir = (opts.direction == 'left' || opts.direction == 'right') ? 'scrollLeft':'scrollTop';			var _mgn = (opts.direction == 'left' || opts.direction == 'right') ? 'marginLeft':'marginTop';			if (opts.loop > 0) {				numMoved+=opts.scrollAmount;				if(numMoved>scrollSize*opts.loop){					_scrollObj[_dir] = 0;					return clearInterval(moveId);				} 			}			if(opts.direction == 'left' || opts.direction == 'up'){				var newPos = mgn - opts.scrollAmount;				if(newPos<=-scrollSize){					newPos = 0;				}								mgn=newPos;				$element.css(_mgn,newPos+"px");							}else{				var newPos = mgn - opts.scrollAmount;				if(newPos<=0){					newPos += scrollSize;				}				mgn=newPos;				$element.css(_mgn,-newPos+"px");			}		};		//滚动开始		var moveId = setInterval(scrollFunc, opts.scrollDelay);		//鼠标划过停止滚动		$marquee.hover(			function(){				clearInterval(moveId);			},			function(){				clearInterval(moveId);				moveId = setInterval(scrollFunc, opts.scrollDelay);			}		);				//控制加速运动		if(opts.controlBtn){			$.each(opts.controlBtn, function(i,val){				$(val).bind(opts.eventA,function(){					opts.direction = i;					opts.oldAmount = opts.scrollAmount;					opts.scrollAmount = opts.newAmount;				}).bind(opts.eventB,function(){					opts.scrollAmount = opts.oldAmount;				});			});		}	});};$.fn.kxbdMarquee.defaults = {	isEqual:true,//所有滚动的元素长宽是否相等,true,false	loop: 0,//循环滚动次数，0时无限	direction: 'left',//滚动方向，'left','right','up','down'	scrollAmount:1,//步长	scrollDelay:100,//时长	newAmount:3,//加速滚动的步长	eventA:'mousedown',//鼠标事件，加速	eventB:'mouseup'//鼠标事件，原速};$.fn.kxbdMarquee.setDefaults = function(settings) {	$.extend( $.fn.kxbdMarquee.defaults, settings );};jQuery.extend( jQuery.easing,{	easeInQuad: function (x, t, b, c, d) {		return c*(t/=d)*t + b;	},	easeOutQuad: function (x, t, b, c, d) {		return -c *(t/=d)*(t-2) + b;	},	easeInOutQuad: function (x, t, b, c, d) {		if ((t/=d/2) < 1) return c/2*t*t + b;		return -c/2 * ((--t)*(t-2) - 1) + b;	},	easeInCubic: function (x, t, b, c, d) {		return c*(t/=d)*t*t + b;	},	easeOutCubic: function (x, t, b, c, d) {		return c*((t=t/d-1)*t*t + 1) + b;	},	easeInOutCubic: function (x, t, b, c, d) {		if ((t/=d/2) < 1) return c/2*t*t*t + b;		return c/2*((t-=2)*t*t + 2) + b;	},	easeInQuart: function (x, t, b, c, d) {		return c*(t/=d)*t*t*t + b;	},	easeOutQuart: function (x, t, b, c, d) {		return -c * ((t=t/d-1)*t*t*t - 1) + b;	},	easeInOutQuart: function (x, t, b, c, d) {		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;		return -c/2 * ((t-=2)*t*t*t - 2) + b;	},	easeInQuint: function (x, t, b, c, d) {		return c*(t/=d)*t*t*t*t + b;	},	easeOutQuint: function (x, t, b, c, d) {		return c*((t=t/d-1)*t*t*t*t + 1) + b;	},	easeInOutQuint: function (x, t, b, c, d) {		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;		return c/2*((t-=2)*t*t*t*t + 2) + b;	},	easeInSine: function (x, t, b, c, d) {		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;	},	easeOutSine: function (x, t, b, c, d) {		return c * Math.sin(t/d * (Math.PI/2)) + b;	},	easeInOutSine: function (x, t, b, c, d) {		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;	},	easeInExpo: function (x, t, b, c, d) {		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;	},	easeOutExpo: function (x, t, b, c, d) {		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;	},	easeInOutExpo: function (x, t, b, c, d) {		if (t==0) return b;		if (t==d) return b+c;		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;	},	easeInCirc: function (x, t, b, c, d) {		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;	},	easeOutCirc: function (x, t, b, c, d) {		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;	},	easeInOutCirc: function (x, t, b, c, d) {		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;	},	easeInElastic: function (x, t, b, c, d) {		var s=1.70158;var p=0;var a=c;		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;		if (a < Math.abs(c)) { a=c; var s=p/4; }		else var s = p/(2*Math.PI) * Math.asin (c/a);		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;	},	easeOutElastic: function (x, t, b, c, d) {		var s=1.70158;var p=0;var a=c;		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;		if (a < Math.abs(c)) { a=c; var s=p/4; }		else var s = p/(2*Math.PI) * Math.asin (c/a);		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;	},	easeInOutElastic: function (x, t, b, c, d) {		var s=1.70158;var p=0;var a=c;		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);		if (a < Math.abs(c)) { a=c; var s=p/4; }		else var s = p/(2*Math.PI) * Math.asin (c/a);		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;	},	easeInBack: function (x, t, b, c, d, s) {		if (s == undefined) s = 1.70158;		return c*(t/=d)*t*((s+1)*t - s) + b;	},	easeOutBack: function (x, t, b, c, d, s) {		if (s == undefined) s = 1.70158;		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;	},	easeInOutBack: function (x, t, b, c, d, s) {		if (s == undefined) s = 1.70158; 		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;	},	easeInBounce: function (x, t, b, c, d) {		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;	},	easeOutBounce: function (x, t, b, c, d) {		if ((t/=d) < (1/2.75)) {			return c*(7.5625*t*t) + b;		} else if (t < (2/2.75)) {			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;		} else if (t < (2.5/2.75)) {			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;		} else {			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;		}	},	easeInOutBounce: function (x, t, b, c, d) {		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;	}});})(jQuery);var zgFun = {	//延迟hover	hoverEvent: function(id1,id2,time){		$(id1).hoverIntent({			over: a,			timeout: time,			out: b		}); 		function a(){			$(id2).addClass("hover");		}		function b(){			$(id2).removeClass("hover");		}	},	//加载某个CSS非异步,dom流	loadCss: function(file){		var cssTag=document.getElementById('loadCss');		var head=document.getElementsByTagName('head').item(0);		if(cssTag)head.removeChild(cssTag);		css=document.createElement('link');		css.href="css/"+file+".css";		css.rel='stylesheet';		css.type='text/css';		css.id='loadCss';		head.appendChild(css);	},	//插入登录盒子	addIFBox:	function(logintitle,width,height,url){ 		$("body").append("<div id=\"i-panel\" style=\"display:none;\"><div class=\"i-content\" style=\"width:"+(width+20)+"px;\"> <h4 id=\"easyDialogTitle\" class=\"i-title\"><a id=\"closeBtn\" class=\"close_btn\" title=\"关闭窗口\" href=\"javascript:void(0)\">×</a><span>"+logintitle+"</span></h4><div class=\"i-text\"><iframe src="+url+" frameborder=\"0\" width="+width+" height="+height+" scrolling=\"no\"></iframe></div></div></div>");	},	//插入自定义盒子	addCusBox: function(logintitle,context,width){ 		$("body").append("<div id=\"i-panel\" style=\"display:none;width:"+width+"\"><div class=\"i-content\" style=\"width:"+(width+20)+"px;\"> <h4 id=\"easyDialogTitle\" class=\"i-title\"><a id=\"closeBtn\" class=\"close_btn\" title=\"关闭窗口\" href=\"javascript:void(0)\">×</a><span>"+logintitle+"</span></h4><div class=\"i-text\">"+context+"</div></div></div>");	},	//改变盒子内容	changeCusBox: function(context) {    $('.i-text').html("");    $('.i-text').append(context);	},};//改变framefunction changeFrame(id,url) {	var s = $("#"+id).attr("src",url);   	return s;}//改变父级framefunction changeparentFrame(url) {	var s= window.parent.window.frames[0].location.href =url;  	return s;}//刷新framefunction op_dialog(d_url,tl){	var patt = new RegExp('dialog=1');	var url=window.location;	var state=patt.test(url);	if(state){		art.dialog.open(d_url,{title:tl});	}}var TabbedContent = {     //tab		init: function(Id) {				$(Id).click(function(){				if ( $(this).parent('li').hasClass('active') ) return;				$(this).parent('li').addClass("active");						TabbedContent.slideContent($(this));				});		},		slideContent: function(obj) {			var	selector = obj.attr('tab');			selector = selector && selector.replace(/.*(?=#[^\s]*$)/, '') //strip for ie7			obj.parent('li').siblings().removeClass("active");			$(selector).siblings().css("display","none");			$(selector).fadeIn(500);		}	};//字数检测function autoText(el, opts){	var el, opts, max, sh, ie;	el = typeof el=="string" ? document.getElementById(el) : el;	opts = Object(opts);	max = opts.max || Number.MAX_VALUE;	el.onfocus = el.onblur = el.onkeyup = function (){		var val = this.value;		if (val.length>max) this.value = val.slice(0, max)		if (opts.change instanceof Function) opts.change.call(this, max - val.length)	}	if (opts.auto) { //高度是否自动变化		el.style.overflow = 'hidden';		el.setAttribute('rows', 2);		sh = el.offsetHeight;		if(!!window.ActiveXObject){			el.onpropertychange =function (e){				this.style.height=Math.max(sh, this.scrollHeight) + 'px'// ie scrollHeight auto size			}		}else{			el.oninput = function (){				this.style.height = 0; // no-ie				this.style.height=Math.max(sh, this.scrollHeight - 4) + 'px'			}		}   }}$(function() {	//全局input focus	$('input[type="text"],textarea').focusin(function(){		$(this).addClass('input-hover');		$(this).css('color','#3D3D3D');		}).focusout(function(){		if($(this).val()===""||$(this).val()===$(this).attr('placeholder')){			$(this).css('color','');		}		$(this).removeClass( 'input-hover');	});});