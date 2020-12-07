<?php 
include("admin.php");
include("mania.php");

$obj = new connection();

// $id = $_GET['id']; 

// echo $id;

$msg = "";

if(isset($_POST['update'])){
	$username = $_POST['username'];
	$mobile = $_POST['mobile'];
	$id = $_GET['id'];
	$sql = $obj->update($id,$username,$mobile);

	if($sql){
		echo "<script>alert('user updated successfully')
    window.location='approved-request.php';
</script>";
	}else{
		$msg = "Updation Failed";
	}
}
 
?>

 <div>
        <form action="update.php" method="POST">

            <div class="container">
                <h1>UPDATE USER DATA</h1>
                <hr>

                <div style="text-align: center;">
                	<?php echo $msg; ?>
                </div>

                <label><b>User Name</b></label>
                <input type="text" placeholder="Enter User Name" name="username" id="username" required>

                <label><b>Mobile</b></label>
                <input type="text" placeholder="Enter Mobile No." name="mobile" id="mobile" required>

                <button type="submit" class="btn" name="update">Update Data</button>
            </div>

            <div class="container signin">
                <p>Already have an account? <a href="login.php">Sign in</a>.</p>
            </div>

        </form>
    </div>