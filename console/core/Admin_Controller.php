<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
abstract class Admin_Controller extends CI_Controller
{
	/**
     * _admin
     * 保存当前登录用户的信息
     *
     * @var object
     * @access  public
     **/
	public $_admin = NULL;

	/**
     * 构造函数
     *
     * @access  public
     * @return  void
     */
	public function __construct()
	{
		parent::__construct();
		$this->_check_login();
	}
		
	// ------------------------------------------------------------------------

    /**
     * 检查用户是否登录
     *
     * @access  protected
     * @return  void
     */
	protected function _check_login()
	{
		if ( ! $this->session->userdata('uid'))
		{   
			redirect('/index.php/mlogin');
		}
	}
}

/* End of file Dili_Controller.php */
/* Location: ./admin/core/Dili_Controller.php */
	