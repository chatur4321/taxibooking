<?php
session_start();
include("header.php");
include("mania.php");

$obj = new connection();

$msg = "";
if (isset($_POST['submit'])) {
$name = $_POST['username'];
$oldpass = $_POST['oldpass'];
$newpass = $_POST['newpass'];
$repass = $_POST['repass'];

if ($name == null && $oldpass == null && $newpass == null && $repass == null) {
$msg = "Please Complete All Fields";
}

if ($newpass == $repass) {

$sql = $obj->display();

$result = $sql;

if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
$username = $row['user_name'];
$password = $row['password'];




if ($name == $username) {
if (md5($oldpass) == $password) {
$sql = $obj->updatepass($username, md5($newpass));
if ($sql) {
echo "<script>alert('Password Updated');</script>";
} else {
echo "<script>alert('Password Updation Failed');</script>";
}
}
}
}
}
}
}
?>

<!-- <div class="logincontainer">
<h1 style="text-align: center;">Change Password</h1>
<hr />
<form method="POST" action="update.php">
<div style="color: red;text-align: center;">
<?php //echo $msg; ?>
</div>

<div>
<label>User Name</label>
<input type="text" name="username" placeholder="Enter User Name" onblur="this.value=removeSpaces(this.value);">
</div>

<div>
<label>Old Password</label>
<input type="password" name="oldpass" placeholder="Enter Old Password">
</div>

<div>
<label>New Password</label>
<input type="password" name="newpass" placeholder="Enter New Password">
</div>

<div>
<label>Re-Password</label>
<input type="password" name="repass" placeholder="Re-Password">
</div>

<div>
<input type="submit" name="submit" value="Change password" class="btn" style="width: 100%;">
</div>
</form>
</div> -->

<div class="form" style="background-image: url(lp3.jpg);">
<form method="POST" class="up" action="updatepassword.php">
<h1 style="text-align: center;">UPDATE PASSWORD</h1>
<hr />

<div style="color: red;text-align: center;">
<?php //echo $msg; ?>
</div>

<label>User Name</label>
<input type="text" name="username" placeholder="Enter User Name" onblur="this.value=removeSpaces(this.value);">

<label>Old Password</label>
<input type="password" name="oldpass" placeholder="Enter Old Password">

<label>New Password</label>
<input type="password" name="newpass" placeholder="Enter New Password">

<label>Re-Password</label>
<input type="password" name="repass" placeholder="Re-Password">

<input type="submit" name="submit" value="Change password" class="btn">
</form>
</div>

<script type="text/javascript">
function removeSpaces(string) {
return string.split(' ').join('');
}
</script>



<?php include("footer.php"); ?>