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
</head>
<body> 
	<div class="head-nav"> 
		<div class="nav-hd  clear"> 
			<ul class="topic-menu m-link"> 
				<li class="menu-item">
					<a href="#" class="menu-hd menu-width">登录</a>
				</li>
				<li class="menu-item">
					<a href="#" class="menu-hd menu-width">注册</a>
				</li>
				<li class="menu-item">
					<a href="#" class="menu-hd menu-width">我要爆料</a>
				</li>
				<!--实现隐藏显示-->
				<li class="menu-item" data-type="mhover">
					<a class="menu-hd" href="#">帮助中心
						<i class="ui-shape-river ui-deg-icon"></i>
					</a>
					<div id="menu-l1" class="menu-bd">
						<ul class="menu-list">
							<li><a href="#">帮助</a></li>
							<li><a href="#">意见反馈</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>