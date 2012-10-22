<?php include_once '_header.php';?>
<link rel="stylesheet" href="<?=base_url()?>/views/css/login.css" />
</head>
<body>
<form method="post" enctype="multipart/form-data" action="<?=base_url()."index.php/mlogin/check"?>">
	<div class="login"> 
		<div class="login-box png-bg"> 
			<div class="login-panel"> 
				<div class="login-line-1">
					<input type="text" name="userName" id="userName" value=""/>
				</div>
				<div class="login-line-2">
					<input type="password" name="passWord" id="passWord"/>
				</div>
				<div class="login-line-3">
					<input type="text" name="staffCode" id="staffCode"/>
					<span class="login-t">
						<img id="yzm" src="<?=base_url()."index.php/yzm/create_yzm"?>" />
					</span>
					<span class="error-msg"><?=$error?></span>
				</div>
				<input type="submit" class="lg-bt" value="登录">
			</div>
		</div>
	</div>
</form>
<script type="text/javascript"> 
	In.ready(function(){
		$("#yzm").click(function(){
			$(this).attr('src','<?=base_url()."index.php/yzm/create_yzm/"?>'+new Date().getTime());
		});
	});
</script>
</body>
</html>