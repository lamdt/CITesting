<?php 
//Miniblog vi du thao tac voi database

class MiniBlog extends CI_Controller
{
	function index()
	{
		$this->load->model('miniblog/miniblog_load');
		
		$this->load->view('miniblog_view');
	}
	
	public function removeentry($id)
	{
		$this->load->model('miniblog/miniblog_mana');
		$this->miniblog_mana->RemoveEntry($id);
		header('location:http://localhost/test/MVCtesting/CI/index.php/miniblog/miniblog');
	}

}


?>
