<?php 
include "lessc.inc.php";
$less = new lessc('less/menus.less');
file_put_contents('css/menus.css', $less->parse());
$less2 = new lessc('less/responsive.less');
file_put_contents('css/responsive.css', $less2->parse());
?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html> <!--<![endif]-->
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>响应式布局</title>
<meta name="description" content=" ">
<meta name="keywords" content=" ">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/3d.css" />
<link rel="stylesheet" href="css/menus.css" />
<link rel="stylesheet" href="css/responsive.css" />
<!--[if IE]>
   <script src="js/html5.js"></script>
   <style type="text/css">
		a{blr:expression(this.onFocus=this.blur());}
   </style>
<![endif]-->
<!--[if lt IE 9]>    
    <script src="js/css3-mediaqueries.js"></script>    
<![endif]--> 
<!--[if IE 6]>
	<script src="js/png.js"></script>
   <script>
 	 DD_belatedPNG.fix('.png-bg');
   </script>
<![endif]-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap-mhover.js"></script>
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
				<li class="menu-item menu-item-time visible-desktop">
					<span>[服务时间]周一到周五8:30-17:30</span>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>