<?php

include("mania.php");

$obj = new connection();

$id = $_GET['id'];

$sql = $obj->updatelocation1($id);

$result = $sql;

if($sql){
//echo "<script> alert('Ride Succefully Deleted');</script>";
header("location:location.php");
}
?>