<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once('FirePHPCore/fb.php');
class Fire_php{
	//使用firephp
	function fire_start($vars){
		ob_start(); 
		fb($vars);
	}
}