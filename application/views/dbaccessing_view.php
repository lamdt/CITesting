<meta charset="utf-8">

<?php 

/*
	$db = new DatabaseAccessing;
	echo "Data: <br>"
	$db->GettingData();
*/
$db = new DbAccessing;
echo "<br><b>Lay data theo kieu thong thuong:</b>"; $db->GettingData();
echo "<br><b>Lay data theo this->db->get</b>"; $db->ActiveClass_get();
echo "<br><b>Lay data theo this->db->get_where</b>"; $db->ActiveClass_getwhere();
?>
