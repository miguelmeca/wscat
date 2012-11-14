<?php 
include "lessc.inc.php";
$less = new lessc('less/meto.less');
file_put_contents('css/meto.css', $less->parse());
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
<link rel="stylesheet" href="css/meto.css" />
<script type="text/javascript" src="js/jquery.js"></script>
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
<body class="meto"> 
	<div style="height: 692px; width: 3110px;">
		<div class="header clear"> 
			<div class="header-context">
				<div class="logo en-ft"> 
					<h1>wscat</h1>
				</div>
				<div class="editor"> 
					<div class="editor-name"> 
						<p>前端工程师</p>
						<p>css,php技术</p>
					</div>
					<div class="editor-pic"> 
						<a href="#"><img src="images/meto/myface.jpg" alt="" /></a>
					</div>
				</div>
			</div>
		</div>
		<div class="page"> 
			
		</div>
		<div class="footer"> 
			
		</div>
	</div>
</body>
</html>