<?php 

	include("mania.php");

	$id = $_GET['id']; 

	$obj = new connection();

	$sql = $obj->approve($id);

	if($sql){
		// header("location:pending-request.php");
		echo "<script>alert('user accepted')
    window.location='pending-request.php';
</script>";
	}
?>