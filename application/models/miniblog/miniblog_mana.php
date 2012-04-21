<?php 
//add - delete - edit entry

class Miniblog_mana extends CI_Model
{
	var $title = '';
	var $body = '';
	var $id = '';
	function __construct()
	{
		parent::__construct();
	}
	
	function CreateNewEntry()
	{
		$this->title = $this->security->xss_clean($_POST[_ENTRY_TITLE_]);
		// Lọc input tránh lỗi XSS
		$this->body = $this->security->xss_clean($_POST[_ENTRY_BODY_]);
		$this->db->insert(MYTABLE,$this);
	}
	
	function RemoveEntry($id_entry)
	{
		$this->id = $this->security->xss_clean($id_entry);
		$this->db->delete(MYTABLE,array('id' => $this->id));
	}
}

?>
