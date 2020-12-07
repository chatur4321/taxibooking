<?php

include("header.php");
include("mania.php");
$obj = new connection();

$msg = "";

if (isset($_POST['register']))
{
$username = $_POST['username'];
$mobile = $_POST['mobile'];
$passwordA = $_POST['pws1'];
$passwordB = $_POST['pws2'];
$name = "";



if ($passwordA == $passwordB)
{
$sql = $obj->display();

$result = $sql;

if ($result->num_rows > 0)
{

while($row = $result->fetch_assoc())
{
$name = $row['user_name'];
echo "<script>
console.log('".$row["user_name"]."');
</script>";


if($username != $name)
{
echo "<script>
console.log('".$name."');
</script>";

$sql = $obj->insert($username, $mobile, md5($passwordA));
echo "<script>alert('User Registered Successfully.please wait for admin to accept')
window.location='login.php';
</script>";
}
elseif($username == $name)

{
echo "<script>alert('USername already present')
window.location='registration.php';
</script>";
}
}

}
}

else
{
echo "<script>alert('Password is not same please enter same password')
window.location='registration.php';
</script>";
}
}
?>

<div class="ashu">
    <div>
        <form action="registration.php" method="POST">

            <div class="container">
                <h1>REGISTRATION</h1>
                <hr>

                <div id="display" style="text-align: center;">
                    <?php echo  $msg; ?>
                </div>

                <label><b>User Name</b></label>
                <input type="text" placeholder="Enter User Name" name="username" id="username" required pattern="[A-Za-z]{1,50}"
title="Name should only contain letters numbers And length should be 50." />

                <label><b>Mobile</b></label>
                <input type="text" placeholder="Enter Mobile No." name="mobile" id="mobile" required onkeypress="return isNumberKey(event)  " maxlength="10" minlength="10">

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pws1" id="pws1" required>

                <label><b>Re Password</b></label>
                <input type="password" placeholder="Re Password" name="pws2" id="pws2" required>
                 <!-- <a href="index.php" style="float: left;">Back to home</a> -->
                <button type="submit" class="btn" name="register">Register</button>
            </div>
<!-- 
            <div class="registercontainer signin">
                <p>Already have an account? <a href="login.php">Sign in</a>.</p>
            </div> -->

        </form>
    </div>
</div>

<script type="text/javascript">
    function isNumberKey(evt) {
         var charCode = (evt.which) ? evt.which : event.keyCode;
         if ((charCode < 48 || charCode > 57))
         return false;
         
         return true;
         }

         $('#username').on("cut copy paste drag drop",function(e) {
e.preventDefault();
});
         $('#mobile').on("cut copy paste",function(e) {
e.preventDefault();
});
$('#psw1').on("cut copy paste",function(e) {
e.preventDefault();
});
$('#psw2').on("cut copy paste",function(e) {
e.preventDefault();
});
//          document.getElementById('username').addEventListener('keydown' ,function(e) {
//     var k =e.keyCode
//     k ==32 &&e.preventDefault()
// })
        
</script>
<?php include("footer.php"); ?>