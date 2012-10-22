<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Set {
	public function initialize()
	{
		$CI =& get_instance();
		$num="";
		for($i=0;$i<4;$i++){
		$num .= rand(0,9);
		}
		Session_start();
		$_SESSION["Checknum"] = $num;
		$CI->load->library('session');
		$CI->session->set_userdata('Checknum', $num);
		echo $CI->session->userdata('Checknum');
		echo $_SESSION["Checknum"];
   }
}
/* Location: ./system/libraries/Email.php */