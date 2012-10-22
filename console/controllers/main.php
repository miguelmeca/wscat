<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Main extends CI_Controller
{
	/**
     * 构造函数
     *
     * @access  public
     * @return  void
     */
	public function __construct()
	{
		parent::__construct();
	}
	function index(){
		$this->load->view('main');
	}
}

/* End of file mlogin.php */
