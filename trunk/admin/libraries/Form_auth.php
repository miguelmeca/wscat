<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once('phpass-0.1/PasswordHash.php');
define('STATUS_ACTIVATED', '1');
define('STATUS_NOT_ACTIVATED', '0');
//用户验证
class Form_auth{

	private $error = array();
	
	function __construct()
	{
		$this->ci =& get_instance();		//获得ci模型
		$this->ci->load->config('fx_auth', TRUE);  //加载验证配置
		$this->ci->load->model('admins');	//加载admin模型
	}
	//登录验证
	function login($login, $password){
		if ((strlen($login) > 0) AND (strlen($password) > 0)) {
			$get_user_func = 'get_user_by_username';		//使用用户名查询验证
			if (!is_null($user = $this->ci->admins->$get_user_func($login))) {	// 登录成功
			{
					// 密码是否在数据库加密
					$hasher = new PasswordHash(
						$this->ci->config->item('phpass_hash_strength', 'fx_auth'),
						$this->ci->config->item('phpass_hash_portable', 'fx_auth')
					);
					//检查加密密码
					if ($hasher->CheckPassword($password, $user->password)) {		// 密码正确
						if ($user->banned == 1) {									// 用户是否被锁定
							$this->error = array('banned' => $user->ban_reason);	//锁定原因
						}
						else{
							//设置session
							$this->ci->session->set_userdata(array(
								'user_id'	=> $user->id,
								'user_name'	=> $user->username,
								'status'	=> ($user->activated == 1) ? STATUS_ACTIVATED : STATUS_NOT_ACTIVATED,
							));
							if ($user->activated == 0) {							// 失败 未活动
								$this->error = array('not_activated' => '');
							}
							else{
								return true;
							}
						}
					}
					else {														// 错误密码
						$this->error = array('password' => 'auth_incorrect_password');
					}
				}
			}
		}
		return FALSE;
	}

	//返回错误信息
	function get_error_message()
	{
		return $this->error;
	}
	
	/**
	 * 判断是否登录
	 */
	function is_logged_in($activated = TRUE)
	{
		return $this->ci->session->userdata('status') === ($activated ? STATUS_ACTIVATED : STATUS_NOT_ACTIVATED);
	}
	
	/**
	 * 登出
	 */
	function logout()
	{
		$this->ci->session->set_userdata(array('user_id' => '', 'user_name' => '', 'status' => ''));
		$this->ci->session->sess_destroy();
	}
}