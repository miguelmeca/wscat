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
	//����CSS
	function createCss(){
		$inputFile ="views/backend/less/";
		$outFile ="views/backend/css/";
		$less_cats=array(
			"main.less"=>"main.css",
		);
		//��������
		for(reset($less_cats);$index=key($less_cats);next($less_cats))
		{
			try 
			{
				lessc::ccompile($inputFile.$index, $outFile.$less_cats[$index]);
				echo('<span>����'.$inputFile.$index.'��'.$outFile.$less_cats[$index].'�ɹ�!</br></span>');
			} 
			catch (exception $ex) {
				echo('<span>���������Ϣ:'.$ex->getMessage().'</span>');
			}
		}
	}
}
?>