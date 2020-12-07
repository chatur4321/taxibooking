<?php
session_start();

include("mania.php");

$obj = new connection();

$rideid = $_GET['id'];

$username = $_SESSION['username'];

$sql = $obj->deleteride1($rideid);

$result = $sql;

if ($sql) {
// header("location:userpendingride.php");
	echo "<script>alert('ride deleted successfully')
    window.location='userpendingride.php';
</script>";
}

?>