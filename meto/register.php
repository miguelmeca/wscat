<?php 
include "lessc.inc.php";
$less = new lessc('less/base.less');
file_put_contents('css/base.css', $less->parse());
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
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/transform.js"></script>
<link rel="stylesheet" href="css/base.css" />
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
	<section> 
		<form action="">
			<div class="ui-form-a"> 
				<p class="ui-field"> 
					<input type="text" />
					<i class="iconawefont"></i>
				</p>
				<p class="ui-field"> 
					<input type="text" />
					<i class="iconawefont"></i>
				</p>
				<p class="ui-submit"> 
					<button> 
						<i></i>
					</button>
				</p>
			</div>
		</form>
	</section>
</body>
</html>