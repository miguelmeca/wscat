<?php
class End extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->lang->load('tank_auth','chinese');
		$this->load->library('fire_php');
		$this->load->library('form_auth');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('security');
	}
	
	function index(){
		if ($message = $this->session->flashdata('message')) {
			//弹出信息后3秒返回历史页面
			$this->load->view('backend/login/message', array('message' => $message,'t' => 3));
		} else {
			redirect('/end/login/');
		}
	}
	
	//用户登录
	function login(){
		if ($this->form_auth->is_logged_in()) {									
			redirect('/main/');
		}
		else
		{
			//表单验证
			$rule_config=array(
			   array(
					 'field'   => 'username', 
					 'label'   => 'UserName', 
					 'rules'   => 'required'
				  ),
			   array(
					 'field'   => 'password', 
					 'label'   => 'PassWord', 
					 'rules'   => 'required'
				  ) 
			);
			$this->form_validation->set_rules($rule_config); 
			//验证
			if ($this->form_validation->run()) {
				if ($this->form_auth->login( $this->form_validation->set_value('username'),$this->form_validation->set_value('password'))) 
				{								
					redirect('/main/');
				} 
				else {
					$errors = $this->form_auth->get_error_message();
					if (isset($errors['banned'])) {								// banned user
						$this->_show_message($this->lang->line('auth_message_banned').' '.$errors['banned']);
					} else {													// fail
						foreach ($errors as $k => $v)	echo $this->lang->line($v);
					}
				}
			}
			//$this->fire_php->fire_start($this->form_auth->sql());          //使用firephp调试程序 
			$this->load->view('backend/login/login');
		}
	}

	/**
	 * 登出
	 */
	function logout()
	{
		$this->form_auth->logout();
		$this->_show_message($this->lang->line('auth_message_logged_out'));
	}
	
	/**
	 * 显示信息
	 */
	function _show_message($message)
	{
		$this->session->set_flashdata('message', $message);
		redirect('/end/');
	}
}
?>