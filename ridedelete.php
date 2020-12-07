<?php

include("mania.php");

$obj = new connection();

$rideid = $_GET['id'];

$sql = $obj->deleterie($rideid);

$result = $sql;

if($sql){
//echo "<script> alert('Ride Succefully Deleted');</script>";
// header("location:pendingride.php");
	echo "<script>alert('ride deleted')
    window.location='pendingride.php';
</script>";
}
?>