<?php 

	//test db accessing 
	class DbAccessing extends CI_Controller
	{

		public function index()
		{
			$this->load->view('dbaccessing_view');
		}

		function GettingData()
		{
			$query = $this->db->query("select * from news where id ='3'");
			// = mysql_query("select * from news");

			foreach ($query->result() as $row)
			{
				echo $row->title;
			}
			/**
			Có thể thay thế bằng
			foreach ($query->result_array() as $row)
			{
				echo $row['title'];
			}
			*/
			
		}
		
		function ActiveClass_get()
		{
			$query = $this->db->get('news');
			foreach ($query->result() as $row)
			{
				echo "<br>".$row->title;
			}
		}
		function ActiveClass_getwhere()
		{
			$query = $this->db->get_where('news',array('id' => '3'));
			foreach ($query->result() as $row)
			{
				echo "<br>".$row->title;
			}
		}
		
	}

?>
