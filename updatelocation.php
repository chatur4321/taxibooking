<?php

include("mania.php");

$obj = new connection();

$id = $_GET['id'];

$sql = $obj->updatelocation($id);

$result = $sql;

if($sql){
//echo "<script> alert('Ride Succefully Deleted');</script>";
// 
	echo "<script>alert('location updated successfully')
    window.location='location.php';
</script>";
}
?>