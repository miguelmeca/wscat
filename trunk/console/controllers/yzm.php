<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Yzm extends CI_Controller
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
	public function create_yzm(){
		$this->load->library('Yz');
		$this->yz->initialize();
	}
}