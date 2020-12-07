<?php 

include("mania.php");

$obj = new connection();

$id = $_GET['id'];

$sql = $obj->deletelocation($id);

$result = $sql;

if($sql){
	header("location:location.php");
}
 
 
?>