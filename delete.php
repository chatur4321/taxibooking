<?php 

include("mania.php");

$obj = new connection();

$userid = $_GET['id'];

$sql = $obj->delete($userid);

$result = $sql;

if($sql){
	// header("location:primemember.php");
	echo "<script>alert('user ride deleted')
    window.location='primemember.php';
</script>";
}
 
 
?>