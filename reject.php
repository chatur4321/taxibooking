<?php 

	include("mania.php");

	$id = $_GET['id']; 

	echo $id;

	$obj = new connection();

	$sql = $obj->reject($id);

	if($sql){
		header("location:pending-request.php");
	}
?>