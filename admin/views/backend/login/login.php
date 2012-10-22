<?php $this->load->view('backend/_header') ?>
</head>
<body>
<?php 
	$login_label = '登录：';
	$pass_label = '密码：';
?>
<?=form_open($this->uri->uri_string()) ?>
<div class="login"> 
	<div class="login-box png-bg"> 
		<div class="login-panel"> 
			<div class="login-line-1">
				<?php echo form_label($login_label, 'userName'); ?>
				<input type="text" name="username" id="userName" value="<?php echo set_value('username'); ?>" />
			</div>
			<div class="login-line-2">
				<?php echo form_label($pass_label, 'passWord'); ?>
				<input type="password" name="password" id="passWord" value="<?php echo set_value('password'); ?>"/>
			</div>
			<button type="submit">登录</button>
		</div>
	</div>
</div>
<?=form_close() ?>
<?php $this->load->view('backend/_footer') ?>