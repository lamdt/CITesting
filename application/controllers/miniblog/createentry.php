<?php 
//Miniblog viet bai moi

class CreateEntry extends CI_Controller
{
	function index()
	{
		$this->load->library('form_validation');
		$this->load->model('miniblog/miniblog_mana');
		
		$this->form_validation->set_rules(_ENTRY_TITLE_,"TITLE",'required');
		$this->form_validation->set_rules(_ENTRY_BODY_,"CONTENT",'required');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('miniblog_createentry_view');
		}
		else
		{
			
			$this->miniblog_mana->CreateNewEntry();
			header('location:http://localhost/test/MVCtesting/CI/index.php/miniblog/miniblog');
		}
	}

}


?>
