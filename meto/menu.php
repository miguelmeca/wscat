<?php 
include "lessc.inc.php";
$less = new lessc('less/menus.less');
file_put_contents('css/menus.css', $less->parse());
?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html> <!--<![endif]-->
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>找钢网首页</title>
<meta name="description" content=" ">
<meta name="keywords" content=" ">
<link rel="stylesheet" href="css/3d.css" />
<link rel="stylesheet" href="css/menus.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap-mhover.js"></script>
<!--[if IE]>
   <script src="js/html5.js"></script>
   <style type="text/css">
   a{blr:expression(this.onFocus=this.blur());}
   </style>
<![endif]-->
<!--[if IE 6]>
	<script src="js/png.js"></script>
   <script>
 	 DD_belatedPNG.fix('.png-bg');
   </script>
<![endif]-->
<style type="text/css"> 
	.al li{
		background: none repeat scroll 0 0 #E4F1F8;
		border-bottom: 1px dashed #C8E4F1;
		display: block;
		float: left;
		font-size: 0.9em;
		line-height: 1;
		list-style: none outside none;
		margin: 0;
		padding: 2.1%;
		text-shadow: 0 1px 0 rgba(255, 255, 255, 0.7);
		width: 29%;
	}
	.al span {
		display:block;
		width:40px;
		height:50px;
	}
</style>
</head>
<body> 
	<div class="head-nav"> 
		<div class="nav-hd  clear"> 
			<div class="login-topic l-tmp-link"> 
				欢迎来到找钢网，请<a href="#">登录</a><a href="#">免费注册</a>
			</div>
			<ul class="topic-menu m-link"> 
				<!--实现隐藏显示-->
				<li class="menu-item" data-type="mhover">
					<a class="menu-hd" href="#">我的找钢
						<i class="ui-shape-river ui-deg-icon"></i>
						<em class="line"></em>
					</a>
					<div id="menu-l1" class="menu-bd">
						<ul class="menu-list">
							<li><a href="#">我的采购单</a></li>
							<li><a href="#">我的资源单</a></li>
							<li><a href="#">我的关注</a></li>
						</ul>
					</div>
				</li>
				<li class="menu-item menu-item-find" data-type="mhover" >
					<a class="menu-hd" href="#">
						委托找货<span class="num">0</span>条
						<i class="ui-shape-river ui-deg-icon"></i>
						<em class="line"></em>
					</a>
					<div class="menu-bd"> 
						<ul class="menu-list">
							<li style="width:260px;"><span>暂无进行中的委托采购需求。</span> <button class="btn btn-mini btn-warning">委托找货</button></li>
						</ul>
					</div>
				</li>
				<li class="menu-item menu-item-time">
					<span>[服务时间]周一到周五8:30-17:30</span>
				</li>
			</ul>
		</div>
	</div>
	<div style="width:960px;margin:auto;"> 
		<h3>Attention seekers <small class="alignright"><a href="javascript:toggleCheck('attention');">check/uncheck all</a></small></h3>
		<ul class="al">
			<li><span 3d="flash" class="ui-3d">flash</span></li>
			<li><span 3d="shake" class="ui-3d">shake</span></li>
			<li><span 3d="bounce" class="ui-3d">bounce</span></li>
			<li><span 3d="tada" class="ui-3d">tada</span></li>
			<li><span 3d="swing" class="ui-3d">swing</span></li>
			<li><span 3d="wobble" class="ui-3d">wobble</span></li>
			<li><span 3d="wiggle" class="ui-3d">wiggle</span></li>
			<li><span 3d="pulse" class="ui-3d">pulse</span></li>
		</ul>
	</div>
	<script type="text/javascript"> 
		!function ($) {
			  $(function () {
					//全局绑定3d效果
					$('.ui-3d').hover(function(){
						$(this).addClass($(this).attr("3d"));
					},function(){
						$(this).removeClass($(this).attr("3d"));
					});
			  })
		}(window.jQuery);
	</script>
</body>
</html>