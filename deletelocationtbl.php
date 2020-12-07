<?php

include("mania.php");

$obj = new connection();

$id = $_GET['id'];

$sql = $obj->deletelocation($id);

$result = $sql;


if($sql){
//echo "<script> alert('Ride Succefully Deleted');</script>";
// header("location:location.php");
	echo "<script>alert('location deleted successfully')
    window.location='location.php';
</script>";
}
?>