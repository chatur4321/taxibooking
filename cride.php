<?php 

	include("mania.php");

	$id = $_GET['id']; 

	// echo $id;

	$obj = new connection();

	$sql = $obj->cride($id);

	if($sql){
		// header("location:completeride.php");
		echo "<script>alert('ride accepted')
    window.location='completeride.php';
</script>";
	}
?>