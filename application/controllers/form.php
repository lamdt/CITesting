<?php 
//test form

class Form extends CI_Controller{

	function index()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username', 'Username', 'required','callback_username_check');
		$this->form_validation->set_rules('password', 'Password', 'required|md5');
		$this->form_validation->set_rules('passconf', 'Password Confirm', 'required|md5');
		$this->form_validation->set_rules('email', 'Email', 'valid_email');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('form_view');
		}
		else
		{
			$this->load->view('form_view_success');
		}
	}
}

?>
