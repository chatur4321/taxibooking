<?php


include("admin.php");
include("mania.php");

$obj = new connection();

$msg = "";

if (isset($_POST['adduser'])) {
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    $passwordA = $_POST['pws1'];
    $passwordB = $_POST['pws2'];

    if ($passwordA == $passwordB) {

        $sql = $obj->insert($username, $mobile, md5($passwordA));
        // header("location:add-user.php");
        echo "<script>alert('user added successfully')
    window.location='add-user.php';
</script>";
    } else {
        $msg = "Password is not same please enter same password";
    }
}
?>

<div>
    <div>
        <form action="add-user.php" method="POST">

            <div class="container-byadmin">
                <h1>ADD USER</h1>
                <hr>

                <div id="display" style="text-align: center;">
                	<?php echo $msg; ?>
                </div>

                <label><b>User Name</b></label>
                <input type="text" placeholder="Enter User Name" name="username" id="username" required>

                <label><b>Mobile</b></label>
                <input type="text" placeholder="Enter Mobile No." name="mobile" id="mobile" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pws1" id="pws1" required>

                <label><b>Re Password</b></label>
                <input type="password" placeholder="Re Password" name="pws2" id="pws2" required>

                <button type="submit" class="btn" name="adduser">Add User</button>
            </div>

        </form>
    </div>
</div>


<?php include("footer.php"); ?>