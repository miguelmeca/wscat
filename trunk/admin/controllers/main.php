<?php
class Main extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('noya');
		$this->load->library('fire_php');
	}
	function index(){
		$data['system']=$_SERVER['HTTP_USER_AGENT'];			//操作系统与浏览器信息
		$data['server']=PHP_OS.'&nbsp;&nbsp; PHP v'.PHP_VERSION;			//php版本等信息
		$data['web']=$_SERVER['SERVER_SOFTWARE'].'&nbsp;&nbsp;'.getenv("HTTP_ACCEPT_LANGUAGE");		//WEB服务器版本
		$data['safe']=@ini_get('safe_mode') ? 'ON' : 'OFF';				//安全模式
		$data['mysql']=mysql_get_server_info();				//mysql版本
		$data['cfg_var']=get_cfg_var("memory_limit")?get_cfg_var("memory_limit"):"无";				//可用最大内存
		$data['cfg_max_size']=get_cfg_var("post_max_size");				//POST提交限制
		$data['max_execution_time']=get_cfg_var("max_execution_time");				//脚本超出时间 
		$data['max_file_size']=get_cfg_var("upload_max_filesize")? get_cfg_var("upload_max_filesize"):"不允许上传附件";				//上传限制 
		$data['allow_url_fopen']=@ini_get('allow_url_fopen') ? "ON" : "OFF";	//是否允许打开远程文件
		$data['disk_size']=$this->noya->get_file_size(disk_free_space("."));			//服务器剩余空间大小
		//计算数据库大小
		$content_datasize = $datasize = $indexsize = 0;
		$query = $this->db->query("SHOW TABLE STATUS");
		//$this->fire_php->fire_start($this->noya->get_last_query());
		if ($query->num_rows() > 0)
		{
		   foreach ($query->result() as $row)
		   {
			$datasize +=$row->Data_length;
			$indexsize +=$row->Index_length;
			$content_datasize +=$row->Data_length+$row->Index_length;
			
		   }
		} 
		$data['content_datasize']=$this->noya->get_file_size($content_datasize);
		//GD库是否支持
		$data['GD']=function_exists("imageline")==1?$this->noya->temp(function_exists("imageline")):$this->noya->temp(function_exists("imageline"));
		//SESSION是否支持
		$data['allow_session']=$this->noya->temp(function_exists("session_start"));
		//网站域名
		$data['host_name']=$_SERVER['SERVER_NAME'];
		//网站IP
		$data['host_address']= getHostByName(php_uname('n')).':'.$_SERVER['SERVER_PORT'];
		//网站当前时间
		$data['host_data']=date("Y-m-d  H:i");
		//当前访问者ip
		$data['memeber_ip']=$_SERVER["SERVER_ADDR"];
		//被屏蔽函数 
		$data['disable_funcs']=get_cfg_var("disable_functions")?get_cfg_var("disable_functions"):"无";
		$this->load->vars($data);
		$this->load->view('backend/main');
	}
}
?>