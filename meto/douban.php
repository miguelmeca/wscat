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
	<div class="top"> 
		<div class="logo"> 
			<a title="豆瓣FM" href="/">
				<img title="豆瓣FMLOGO" src="http://img3.douban.com/pics/radio/home/fm_logoV1.png">
			</a>s
		</div>
		<ul class="top-nav">
			<li><em>立刻开启</em></li>
			<li><a href="#">登录</a></li>
			<li><a href="#">马上注册</a></li>
		</ul>
	</div>
	<div class="fm-section"> 
		<ul class="fm-cats">
			<li>
				<a href="#">我的私人兆赫</a>
			</li>
			<li>
				<a href="#">我的红心兆赫</a>
			</li>
		</ul>
		<div class="fm-try"> 
			<h3>试试这些
				<span class="line"></span>
			</h3>
			<ul class="fm-cats">
				<li class="active">
					<a href="#">Billboard Hot100 MHz</a>
					<span class="st-play"></span>
					<span class="st-down"></span>
				</li>
				<li>
					<a href="#">东风悦达起亚K3</a>
					<span class="st-play"></span>
					<span class="st-down"></span>
				</li>
			</ul>
		</div>
		<div class="fm-his"> 
			<h3>试试这些
				<span class="line"></span>
			</h3>
			<ul class="fm-cats">
				<li class="active">
					<a href="#">Billboard Hot100 MHz</a>
					<span class="st-play"></span>
					<span class="st-down"></span>
				</li>
				<li>
					<a href="#">东风悦达起亚K3</a>
					<span class="st-play"></span>
					<span class="st-down"></span>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>