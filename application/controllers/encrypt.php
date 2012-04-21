<?php 
//test encrypt class

class Encrypt extends CI_Controller{
	
	function index()
	{	
		$this->load->view('encrypt_view');
	}
	
	function encode($string)
	{
		$this->load->library('encrypt');
		$key = "yoyo";
		return  $this->encrypt->encode($string,$key);
	}
	
	function decode($string)
	{
		$this->load->library('encrypt');
		$key = "yoyo";
		return  $this->encrypt->decode($string,$key);
	}
	
	function encode_sha1($string)
	{
		return  $this->encrypt->sha1($string);
	}
}
?>
