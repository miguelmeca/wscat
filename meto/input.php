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
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/in.js"></script>
<script type="text/javascript" src="js/transform.js"></script>
<link rel="stylesheet" href="css/base.css" />
<link rel="stylesheet" href="css/jqtransform.css" />
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
	<div class="ui-form-panel ui-form-cross">
		<div class="ui-form-item">
			<label for="" class="ui-label">输入框</label>
			<input type="text" placeholder="我是输入框" class="ui-input" id="">
			<input type="text" placeholder="我是输入框" class="ui-input ui-input-warning " id="">
			<input type="text" placeholder="我是输入框" class="ui-input ui-input-error" id="">
			<input type="text" placeholder="我是输入框" class="ui-input ui-input-success" id="">
			<span class="ui-form-explain error">输入错误</span>
		</div>
		<div class="ui-form-item">
			<label for="" class="ui-label">文本输入区</label>
			<textarea class="ui-textarea"></textarea>
		</div>
		<div class="ui-form-item">
			<label for="" class="ui-label">单选按钮</label>
			<input type="radio" id="" name="question" value="0" checked ><label class="ui-radio-lb">男</label>
			<input type="radio" id="" name="question" value="1" ><label class="ui-radio-lb">女</label>
		</div>
		<div class="ui-form-item"> 
			<label>选择按钮: </label>
			<input type="checkbox" name="chbox" id="">
			<label class="ui-radio-lb">张三</label>
		</div>
		<div class="ui-form-item"> 
			<label class="fl">下拉框:</label>
			<select name="select" style="width:100px;">
				<option value="">张三</option>
				<option value="opt1">李四</option>
			</select>
		</div>
		<div> 
			<div class="placeholding-input">
				<input type="text" class="ui-input" id="name">
				<label class="placeholder" for="name">全名</label>
			</div>
		</div>
	</div>
	<script type="text/javascript"> 
		In.ready(function(){

		});
	</script>
</body>
</html>