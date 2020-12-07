<?php
session_start();
include("header.php");
include("mania.php");
$obj = new connection();

$msg = "";
$username = "";
$password = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['psw'];

    $sql = $obj->fetch($username, md5($password));
    $result = $sql;
   

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        echo "<script>alert('user login successful')
        window.location='customer.php';
        </script>";

        // header("location:customer.php");
    }else {
        $msg = "Admin still not Permit you to login / You insert wrong details";
        } 
    
    if ($username == "admin" && $password == "ashu@123") {
         $_SESSION['username'] = "ADMIN";
        header("location:admin-home.php");
    }
 }


?>

<div class="ashu">
    <div>
        <form action="login.php" method="POST">
            <div class="container" id="b1">
                <h1>LOGIN</h1>
                <hr>
                <div id="display" style="text-align: center;">
                    <?php echo $msg; ?>
                </div>
                <label><b>User Name</b></label>
                <input type="text" placeholder="Enter User Name" name="username" id="username" required pattern="[A-Za-z]{1,50}"
title="Name should only contain letters numbers And length should be 50." >

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
                <a href="updatepassword.php">forgot Password</a>
                <!-- <a href="index.php" style="float: right;">Back To Home</a> -->
                <button type="submit" class="btn" name="login">Login</button>
            </div>
        </form>

    </div>
</div>

<script type="text/javascript">
    
$('#username').on("cut copy paste",function(e) {
e.preventDefault();
});
$('#psw').on("cut copy paste",function(e) {
e.preventDefault();
});
</script>

<?php include("footer.php"); ?>