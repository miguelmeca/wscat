<?php
class Less extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$this->load->library('lessc');
		$this->load->helper('directory');
		$this->createCss();
	}
	//编译CSS
	function createCss(){
		$inputFile ="views/backend/less/";
		$outFile ="views/backend/css/";
		$less_cats=array(
			"main.less"=>"main.css",
		);
		//批量编译
		for(reset($less_cats);$index=key($less_cats);next($less_cats))
		{
			try 
			{
				lessc::ccompile($inputFile.$index, $outFile.$less_cats[$index]);
				echo('<span>编译'.$inputFile.$index.'到'.$outFile.$less_cats[$index].'成功!</br></span>');
			} 
			catch (exception $ex) {
				echo('<span>编译错误信息:'.$ex->getMessage().'</span>');
			}
		}
	}
}
?>