<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Mlogin extends CI_Controller
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
	public function index(){
		if ($this->session->userdata('uid'))
		{
			redirect(BASE_URL.'index.php/main');
		}
		else
		{
			$data['error'] =$this->session->flashdata('error'); ;
			$this->load->vars($data);
			$this->load->view('mlogin');
		}
	}
	//验证
	public function check(){
		$username = $this->input->post('userName', TRUE);
		$password = $this->input->post('passWord', TRUE);
		$staffCode = $this->input->post('staffCode', TRUE);
		if($staffCode==$this->session->userdata('Checknum')){
			$this->load->model('Admin_model','',TRUE);
			$admin =$this->Admin_model->get_full_user_by_username($username);
			if ($admin){
				if ($admin->password == md5($password)){
					if ($admin->status == 1)
					{
						$this->session->set_userdata('uid', $admin->uid);
						redirect('main');
					}
					else
					{
						$this->session->set_flashdata('error', "用户名不存在!");
					}
				}
			}
		}
		else{
			$this->session->set_flashdata('error', "验证码错误!");
		}
		redirect(BASE_URL.'index.php/mlogin');
	}
	//退出
	public function quit(){
		$this->session->sess_destroy();
		redirect(BASE_URL.'index.php/mlogin');
	}
    // --------------------------------------------------------------------

    /**
	 * 注册生成验证码
	 *
	 *
	 */	
	public function yzm_img()
	{
		$this->load->helper('captcha');
  		$vals = array(
            'word'   =>random_string('alnum',4),
            'img_path'     => './views/captcha/',
            'img_url'      => base_url().'views/captcha/',
            'font_path'    => '././system/fonts/texb.ttf',
            'img_width'    => 100,
            'img_height'   => 30,
            'expiration'   =>3600
         );
         $cap = create_captcha($vals);
		 echo $cap['image'];
	}
}

/* End of file mlogin.php */
