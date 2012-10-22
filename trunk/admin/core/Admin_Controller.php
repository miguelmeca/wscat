<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 后台控制器继承基类
 *
 * @editor  ncc
 */		
abstract class Admin_Controller extends CI_Controller
{
	/**
     * 构造函数
     */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->lang->load('tank_auth','chinese');
		$this->load->library('form_auth');
		$this->_check_login();
	}
	/**
	 * 检测是否登录
	 */	
	protected function _check_login(){
		if (!$this->form_auth->is_logged_in()) {
			redirect('/end/login/');
		}
	}
}
/* End of file Admin_Controller.php */
	