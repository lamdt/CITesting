miniblog_view
<hr>
<?php 
$blog = new Miniblog_load;
$data = $blog->LoadEntries();
for($i=0; $i < count($data); $i++)
{
	echo "<h3>".$data[$i][_ENTRY_TITLE_]."</h3> 
	<a href='"._URL_."miniblog/removeentry/".$data[$i][_ENTRY_ID_]."'>Remove</a><br>";
	//Link nay hướng đến function removeentry trong class miniblog ở controller 
	//Với id đi kèm Entry -> xóa theo id
	echo $data[$i][_ENTRY_BODY_];
	echo "<hr>";
}

?>

<a href="<?php echo _URL_;?>createentry">New Entry</a>
