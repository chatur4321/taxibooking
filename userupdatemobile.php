<?php
session_start();
include("mania.php");
include("customer-dashboard.php");


$obj = new connection();

if(isset($_POST['submit'])){
$name = $_SESSION['username'];
$oldm = $_POST['oldm'];
$newm = $_POST['newm'];

if($oldm!=$newm){
$sql = $obj->mobile($name,$newm);
if($sql){
echo "<script>alert('Mobile No. Updated');</script>";
}else{
echo "<script>alert('SQL QUERY FAIL');</script>";
}
}else{
echo "<script>alert('Old & New Password is same');</script>";
}
}

?>

<div class="bookcontainer">
<form method="POST" id="form">
<h1 style="text-align: center;">UPDATE MOBILE NUMBER</h1>
<hr />

<label>Old Contact Number</label>
<input type="text" name="oldm" placeholder="Enter Old Contact (10 digit)" id="oldm" maxlength="10" minlength="10" required onblur="this.value=removeSpaces(this.value);"><br>

<label>New Contact Number</label>
<input type="text" name="newm" placeholder="Enter New Contact (10 digit)" id="newm" maxlength="10" minlength="10" required onblur="this.value=removeSpaces(this.value);">

<button name="submit" class="btn">Change Mobile Number</button>
</form>
</div>


<script type="text/javascript">
function isNumberKey(evt) {
var charCode = (evt.which) ? evt.which : event.keyCode;
if ((charCode < 48 || charCode > 57))
return false;
return true;
}

function removeSpaces(string) {
return string.split(' ').join('');
}

</script>

<?php include("footer.php"); ?>
