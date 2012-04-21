<?php 
//miniblog load entries

class Miniblog_load extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function LoadEntries()
	{
		$this->db->order_by('id', "desc"); 
		$query = $this->db->get(MYTABLE);
		//MYTABLE là hằng được định nghĩa tại application/config/constants.php
		$data = array();
		$i=0;
		foreach($query->result() as $row)
		{
			$data[$i][_ENTRY_TITLE_] = $row->title;
			$data[$i][_ENTRY_BODY_] = $row->body;
			$data[$i][_ENTRY_ID_] = $row->id;
			$i++;
		}
		return $data;
	}
}

?>
