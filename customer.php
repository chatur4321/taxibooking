<?php 
    session_start();
    // include("header.php"); 
    // print_r($_SESSION['p']);
    include("mania.php");
    if($_SESSION['username'] != "ADMIN")
   {
    include("customer-dashboard.php");

        $obj = new connection();

        $ary = $obj->dlocation();

        $array = [];

        $result = $ary;

        if ($result->num_rows > 0) 
        {

            while ($row = $result->fetch_assoc()){
                    array_push($array,$row);
                }
        }  

?>



        <div class="bookcontainer">
            <form action="customer.php" method="POST" id="form">
                <p href="#" >CED <span>CAB</span></p>
                <hr />
               <!--  <h4 >YOUR <span>EVERY</span> DAY <span>PATNER</span></h4> -->
                <div>
                    <div >
                        <select id="pickup_point" name="pickup_point">
                           
                            <?php 
                              if(isset($_SESSION['p'])) {
                                    echo '<option selected >'.$_SESSION['p'].'</option>';
                              }
                              else{
                                echo ' <option  disabled selected>select pickup point</option>';
                              }
                             
                            ?>
                           
                            <?php
                                foreach($array as $key => $values){
                            ?>
                           
                            <option>
                                <?php
                                    print_r($values['name']);
                                ?>                                
                            </option>

                            <?php 
                                }               
                            ?>
                        </select>
                    </div>

                   <div >
                        <select id="drop_point" name="drop_point">
                           
                            <?php 
                              if(isset($_SESSION['d'])) {
                                    echo '<option selected >'.$_SESSION['d'].'</option>';
                              }
                              else{
                                echo ' <option  disabled selected>select drop point</option>';
                              }
                             
                            ?>
                           
                            <?php
                                foreach($array as $key => $values){
                            ?>
                           
                            <option>
                                <?php
                                    print_r($values['name']);
                                ?>                                
                            </option>

                            <?php 
                                }               
                            ?>
                        </select>
                    </div>
                    <div >
                        <select id="car_type">
                           
                            <?php 
                              if(isset($_SESSION['c'])) {
                                    echo '<option selected >'.$_SESSION['c'].'</option>';
                              }
                              else{
                                echo ' <option  disabled selected>select cabtype</option>';
                              }
                             
                            ?>
                            <option>CedMicro</option>
                            <option>CedMini</option>
                            <option>CedRoyal</option>
                            <option>CedSUV</option>
                        </select>
                    </div>

                    <div id="lugwt">
                        <?php if(isset($_SESSION['w']))
                                {
                                  echo '<input type="text" name="lwgt" value="'.$_SESSION['w'].'" placeholder="Enter Luggage weight in KG" id="lwgt"
                            onkeypress="return isNumberKey(event)">';}
                              
                              else{
                                      echo '<input type="text" name="lwgt"  placeholder="Enter Luggage weight in KG" id="lwgt"
                            onkeypress="return isNumberKey(event)">';
                              }
                           
                         ?>
                         
                    </div>

                    <div id="msg"> 
                        <input type="hidden" name="msg" placeholder="total fare" id="msg" <?php if(isset($_SESSION['cost']))
                        {
                            echo "value='".$_SESSION['cost']."'";
                        }?> >
                    </div>
                    <div>
                        <?php if(isset($_SESSION['cost']))
                        {
                            echo('your fare is '.$_SESSION['cost']);
                        } ?>
                        
                    </div>
                    <div id="fare"><input type="text" name="fare" id="va" <?php if(isset($_SESSION['fare']))
                        {
                            echo "value='".$_SESSION['fare']."'";
                        }?>></div>

                    <div  id="display"></div>

                    <button type="submit" name="submit" id="submit" class="btn">Book Now</button>
                </div>
            </form>
        </div>

      <script type="text/javascript">

        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode;
            if ((charCode < 48 || charCode > 57))
                return false;

            return true;
        }

        $(document).ready(function () {
$('#fare').hide();
            //Disable Button at Car Type
            $('#car_type').change(function () {
                $("#lwgt").attr("disabled", $("#car_type").val() == "CedMicro");
                $car=$("#car_type").val();
                 if($car=="CedMicro")
                {
                    $("#lwgt").val("");
            $("#lwgt").hide();

         }else{
            $("#lwgt").show();
         }
            });

            //Send data using Ajax
            $("#submit").click(function (a) {
                a.preventDefault();

                var pickup = $("#pickup_point").val();
                var drop = $("#drop_point").val();
                var car = $("#car_type").val();
                var luggage = $("#lwgt").val();

                console.log(pickup);
                console.log(drop);
                console.log(car);
                console.log(luggage);




                if (pickup == null) {
                    $("#msg").text("PickUp Point is Null");
                    $("#display").hide();
                }

                if (drop == null) {
                    $("#msg").text("Drop Point is Null");
                    $("#display").hide();
                }

               

                if (car == null) {
                    $("#msg").text("Please Select Cab Type");
                    $("#display").hide();
                }

                if (pickup == null && drop == null) {
                    $("#msg").text("Please Select Pickup And Drop Point");
                    $("#display").hide();
                }

                if (pickup == null && car == null) {
                    $("#msg").text("Please Select Pickup and Cab Type");
                    $("#display").hide();
                }


                if (drop == null && car == null) {
                    $("#msg").text("Please Select Drop and Cab Type");
                    $("#display").hide();
                }

                if (pickup == null && drop == null && car == null) {
                    $("#msg").text("Please Complete all Fields");
                    $("#display").hide();
                }

                if (isNaN(luggage)) {
                    $("#msg").html("Luggage Weight Only In Number");
                    $("#display").hide();

                }

                 if (pickup == drop) {
                    if (car != null) {
                        $("#msg").text("Both Positions are same");
                        $("#display").hide();
                    }
                    else if (car == null) {
                        $("#msg").text("Both Positions are same and Cab Field is NULL");
                        $("#display").hide();
                    }
                }
                else
                {
                  // $r=confirm("do you want to confirm the ride");
                  // if($r==true)
                  //     {
                    $.ajax({
                        type: 'post',
                        url: 'main.php',
                        data: {
                            pickup: pickup,
                            drop: drop,
                            car: car,
                            luggage: luggage
                        },
                        success: function (msg) {
                            // $("#display").text(msg);
                            console.log(msg.cost);
                            $('#fare').show();
                            // $('#va').val(msg.cost);
                             alert(msg);
                            if (pickup != null && drop != null && car != null)
                            {
                         alert('your ride will be booked.Wait for the admin to confirm');
                         location.reload();
                        $("#submit").hide();
                     }

                        <?php
                            unset($_SESSION['p']);
                              unset($_SESSION['d']);  unset($_SESSION['c']);  unset($_SESSION['w']);
                             unset($_SESSION['cost']); 
                        ?>
                 }

                });
            // }
            // else{
            //      alert('you cancelled your last ride');
            // }
            }
                //unset($_SESSION["p"]);
            
            });
        });



$(document).ready(function()
{
function disablePrev()
{
window.history.forward()
}
window.onload = disablePrev();

window.onpageshow = function(evt)
{
if (evt.persisted)
{
disableBack() ;
}
}
});
// 
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

<!-- <?php
  // unset($_SESSION['p'],$_SESSION['d'],$_SESSION['c'],$_SESSION['w']);


?> -->



 <?php 
}
else

    echo "<script>alert('you cannot go to user pannel')
    window.location='logout.php';
</script>";
    // header("Location:logout.php");
?>

<?php include("footer.php"); ?>