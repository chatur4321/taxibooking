<?php include("header.php"); 
   if(isset($_SESSION['username']))
   {

  if($_SESSION['username'] != "ADMIN")
   {

?>




<!-- Side navigation -->
<div class="sidenav">
	<a href="customer.php">Book Now</a>
	 <ul>
  <li class="li"><a href="#">View rides</a>
<ul class="ul">
<a href="alluserride.php"><li class="li">all ride
</li></a>
<a href="userpendingride.php"><li class="li">pending ride
</li></a>


<a href="usercompleteride.php"><li class="li">
completed ride</li></a></ul></li></ul>
<a href="userupdatemobile.php"><li class="li">
update mobile</li></a></ul></li></ul>
<a href="userupdatepassword.php"><li class="li">
update pass</li></a></ul></li></ul>
  <!-- <a href="#">Total Expense</a> -->
  <!-- <a href="#">Clients</a>
  <a href="#">Contact</a> -->
</div>
 

  <?php 
}
else
    echo "<script>alert('you cannot go to user pannel')
    window.location='logout.php';
</script>";
}
else
    echo "<script>alert('please login again')
    window.location='login.php';
</script>";

    // header("Location:logout.php");
?>















