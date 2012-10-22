<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once('phpass-0.1/PasswordHash.php');
define('STATUS_ACTIVATED', '1');
define('STATUS_NOT_ACTIVATED', '0');
//�û���֤
class Form_auth{

	private $error = array();
	
	function __construct()
	{
		$this->ci =& get_instance();		//���ciģ��
		$this->ci->load->config('fx_auth', TRUE);  //������֤����
		$this->ci->load->model('admins');	//����adminģ��
	}
	//��¼��֤
	function login($login, $password){
		if ((strlen($login) > 0) AND (strlen($password) > 0)) {
			$get_user_func = 'get_user_by_username';		//ʹ���û�����ѯ��֤
			if (!is_null($user = $this->ci->admins->$get_user_func($login))) {	// ��¼�ɹ�
			{
					// �����Ƿ������ݿ����
					$hasher = new PasswordHash(
						$this->ci->config->item('phpass_hash_strength', 'fx_auth'),
						$this->ci->config->item('phpass_hash_portable', 'fx_auth')
					);
					//����������
					if ($hasher->CheckPassword($password, $user->password)) {		// ������ȷ
						if ($user->banned == 1) {									// �û��Ƿ�����
							$this->error = array('banned' => $user->ban_reason);	//����ԭ��
						}
						else{
							//����session
							$this->ci->session->set_userdata(array(
								'user_id'	=> $user->id,
								'user_name'	=> $user->username,
								'status'	=> ($user->activated == 1) ? STATUS_ACTIVATED : STATUS_NOT_ACTIVATED,
							));
							if ($user->activated == 0) {							// ʧ�� δ�
								$this->error = array('not_activated' => '');
							}
							else{
								return true;
							}
						}
					}
					else {														// ��������
						$this->error = array('password' => 'auth_incorrect_password');
					}
				}
			}
		}
		return FALSE;
	}

	//���ش�����Ϣ
	function get_error_message()
	{
		return $this->error;
	}
	
	/**
	 * �ж��Ƿ��¼
	 */
	function is_logged_in($activated = TRUE)
	{
		return $this->ci->session->userdata('status') === ($activated ? STATUS_ACTIVATED : STATUS_NOT_ACTIVATED);
	}
	
	/**
	 * �ǳ�
	 */
	function logout()
	{
		$this->ci->session->set_userdata(array('user_id' => '', 'user_name' => '', 'status' => ''));
		$this->ci->session->sess_destroy();
	}
}