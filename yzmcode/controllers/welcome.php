<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
	}
	
	function index()
	{
		//autoload.php 里 自动载入url和session
		$this->load->helper('form');
		$this->load->library('validation');		
		$rules['authcode_input'] = "trim|required|xss_clean";
		$this->validation->set_rules($rules);
		$fields['authcode_input'] = '验证码';
		$this->validation->set_fields($fields);
		
		if ($this->validation->run() == FALSE)
		{
			$this->load->view('welcome_message');
		}
		else
		{
			$this->load->library('authcode');
			if ($this->authcode->check($this->input->post('authcode_input')))
			{
				$this->session->set_flashdata('msg','验证码正确。');
				redirect('welcome/index');
			} 
			else 
			{
				$this->session->set_flashdata('msg','验证码错误。');
				redirect('welcome/index');
			}		
		}		
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */