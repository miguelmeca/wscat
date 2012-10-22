<html>
<head>
<title>Welcome to CodeIgniter</title>
<script type='text/javascript' src='<?php echo base_url()."/js/jquery.min.js";?>'></script> 
</head>
<body>
<?php 
if($this->session->flashdata('msg'))
echo $this->session->flashdata('msg');

echo form_open('welcome/index');?>
<a href="javascript:void(0)">
<img id="authcode"src="<?php echo site_url().'/imgauthcode/show';?>" onclick="refresh('/imgauthcode/show')"/></a>
<a href="javascript:void(0)" onclick="refresh()">点击刷新验证码</a>
<?php 
	$data = array(
              'name'        => 'authcode_input',
              'id'          => 'authcode_input',
              'value'       => '',
              'onblur'       => 'ajaxauth()',
            );
	echo form_input($data);
	echo form_submit('mysubmit','Submit Post!');
	echo form_close();
?>
<span id="authcode_result"></span>
<script lang="javascript">
function refresh()
{
var url='<?php echo site_url()."/imgauthcode/show/";?>'+Math.random();
$('#authcode').attr('src', url);
}
function ajaxauth()
{
var authcode = $('#authcode_input').val();
$.get("<?php echo site_url()."/imgauthcode/check/";?>"+authcode, function(data){
  if(data)
  {
	$('#authcode_result').text("正确");
  }
  else
  {
	$('#authcode_result').text("错误");
  }
}); 
}
</script>
</body>
</html>