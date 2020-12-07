<?php
    session_start();
  
      

?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
         integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://kit.fontawesome.com/4b2ee26aaa.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="styl123.css">
      <title>TAXI BOOKING</title>
   </head>
   <body>
      <!-- <header>            
         <nav class="navbar navbar-expand-sm  p-8 bg-light ">
         <h3>CED <span>CAB</span></h3>
         <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
         </button>
         
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
         
              <ul class="navbar-nav ml-auto mr-5"> 
                  <li class="nav-item active"> 
                       <a class="nav-link" href="#">Features<span class="sr-only">(current)</span></a>
                  </li> 
                  <li class="nav-item active"> 
                       <a class="nav-link" href="#">Reviews<span class="sr-only">(current)</span></a>
                  </li> 
                  <li class="nav-item"> 
                     <form class="form-inline my-2 my-lg-0">
                    <button class="btn btn-outline-success my-2 my-sm-0" id="secy" type="submit">Sign Up</button>
                    </form>
                  </li> 
              </ul>
          </div>
          </nav>
          </header>  -->
      <header style="background-color: white">
         <nav class="navbar navbar-expand-lg navbar-light">
            <h2 id="oslo">Ced<span>Cab</span></h2>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="login.php">Login<span class="sr-only">(current)</span></a>
                  </li>
                 <!--  <li class="nav-item">
                     <a class="nav-link" href="registration.php">Registration</a>
                  </li> -->
                   <li class="nav-item">
                     <a class="nav-link" href="logout.php">Logout</a>
                  </li>
               </ul>
            </div>
         </nav>
      </header>
      <div class="col col-xs col-sm col-md col-lg col-xl mt-lg-5 pt-lg-5 mt-sm-0 pt-sm-0 f2">
         <h1 class="text-center txt1">Book a city taxi to your destination in town</h1>
         <p class="text-center txt1">Choose from a range of categories and prices</p>
         <div class="form-div col-sm-12 col-md-5 col-lg-4 text-center ml-lg-5 ml-md-5 mt-lg-5 mb-lg-5">
            <form action="" method="POST" id="form" class="f1">
               <!-- <a href="#" class="bg-success">City Taxi</a> -->
               <button class="ts1">Ced <span> Cab</span></button>
               <hr />
               <h5>Your every day travel partner</h5>
               <h6>AC Cabs for point to point travel</h6>
               <div>
                  <div class="input-group mb-3 select">
                     <select id="pickup">
                        <option value="" selected hidden disabled>Pick Up Point</option>
                        <option>Charbagh</option>
                        <option>Indira Nagar</option>
                        <option>BBD</option>
                        <option>Barabanki</option>
                        <option>Faizabad</option>
                        <option>Basti</option>
                        <option>Gorakhpur</option>
                     </select>
                  </div>
                  <p class="p-3 mb-2 bg-danger text-white col-lg-12" id="alert1"></p>
                  <div class="input-group mb-3 select">
                     <select id="drop">
                        <option value="" selected hidden disabled>Drop Point</option>
                        <option>Charbagh</option>
                        <option>Indira Nagar</option>
                        <option>BBD</option>
                        <option>Barabanki</option>
                        <option>Faizabad</option>
                        <option>Basti</option>
                        <option>Gorakhpur</option>
                     </select>
                  </div>
                  <p class="p-3 mb-2 bg-danger text-white col-lg-12" id="alert2"></p>
                  <div class="input-group mb-3 select">
                     <select class="cartype ">
                        <option value="" selected hidden disabled >Cab Type</option>
                        <option>CedMicro</option>
                        <option>CedMini</option>
                        <option>CedRoyal</option>
                        <option>CedSUV</option>
                     </select>
                  </div>
                  <p class="p-3 mb-2 bg-danger text-white col-lg-12" id="alert3"></p>
                  <div class="input-group mb-3 select">
                     <input type="text" name="lugwt" placeholder="Luggage weight in KG" id="lugwt" onkeypress="return isNumberKey(event)">
                  </div>
                  <p class="p-3 mb-2 bg-danger text-white col-lg-12" id="as"></p>
                  <p class="p-3 mb-2 bg-success text-white col-lg-12" id="tf"></p>
                 <!--  <button type="submit" class="btn btn-success btn1" id="btn2" value="submit">Calculate fare</button> -->
                  <a type="submit" class="btn btn-success btn1" id="btn2" value="submit" href="login.php">calculate fare</a>
               </div>
         </div>
         </form>
      </div>
      </div>
      <footer id="foot">
         <div class="row">
            <div class="col-lg-4 pl-2 mt-3 text-center">
               <i class="fab fa-facebook display-4 ml-3"></i>
               <i class="fab fa-twitter-square display-4 ml-3"></i>
               <i class="fab fa-instagram-square display-4 ml-3"></i>
            </div>
            <div class="col-lg-2 ml-5 mr-5 mt-4 fr text-center">
               <h2 id="oslo">Ced<span>Cab</span></h2>
               </p>
            </div>
            <div class="col-lg-4 mt-4 fr text-center display-4">
               <h2 id="oslo1">&#169;Ced<span>Cab</span></h2>
            </div>
            <!--  <div class="col-lg-4 text-center mr-auto">
               <div>
                   <a  href="#features">FEATURES</a>
                   <a  href="#review">REVIEW</a>
                   <a href="#signup">SIGNUP</a>
               
               </div> -->
         </div>
         </div>
      </footer>
      <script type="text/javascript">
         $(document).ready(function(){
          
           $("#alert1").hide();
           $("#alert2").hide();
            $("#alert3").hide();
            $("#as").hide();
            $("#tf").hide();
         // function isNumberKey(evt) {
         // var charCode = (evt.which) ? evt.which : event.keyCode;
         // if (!(charCode < 48 || charCode > 57))
         // return false;
         
         // return true;
         // }
         $("#lugwt").bind("keypress", function (e) {
var keyCode = e.which ? e.which : e.keyCode

if (!(keyCode >= 48 && keyCode <= 57)) {
return false;
}
});
         
           $('#lugwt').on("cut copy paste drag drop",function(e) {
e.preventDefault();
});
         
         $('.cartype').change(function () {
         
         $("#lugwt").attr("disabled", $(".cartype").val() == "CedMicro");


         var car=$(".cartype").val();
         if(car=="CedMicro")
         {
            $("#lugwt").hide();
             $("#lugwt").val("");
         }else{
            $("#lugwt").show();
         }


         });

         $("#btn2").click(function(a){
         
         a.preventDefault();
         
         var pick=$("#pickup").val();
         var drop=$("#drop").val();
         var car=$(".cartype").val();
         var luggage=$("#lugwt").val();
         console.log(car);

             if(car=="CedMicro")
         {
            $("#lugwt").hide();
            $("#lugwt").val("");
            alert("weight not allow");
         }else{
            $("#lugwt").show();
         }
         
         
         $("#alert1").html("Pick Point is Null");
         $("#alert2").html("drop Point is Null");
         $("#alert3").html("Car catelogy is Null");
         $("#as").html("both position are same");
         
         
         if (pick == null) {
         // $("#alert1").show();
         return $("#alert1").show();
         $("#tf").hide();
         }
         else
         {
         $("#alert1").hide();
       
         }
         
         
         if (drop == null) {
         return $("#alert2").show();
         $("#tf").hide();
         }
         else
         {
         $("#alert1").hide();
       
         }
         
         
         if (car == null) {
         return $("#alert3").show();
         $("#tf").hide();
         }
         else
         {
         $("#alert3").hide();
       
         }
         if(pick==drop)
         
         { 
         $("#tf").hide();
         return $("#as").show();
         
         }
         else
         {
         $("#as").hide();
       
         }
         
         // if (pick == drop) {
         // $("#as").text("Both Positions are same");
         // $("#tf").hide();
         // }
         
         if(isNaN(luggage))
         {
         $("#as").html('only numbers');
         $("#tf").hide();
         
         }
         else
         {
               $("#as").hide();
             
         }
         
         
         
         $.ajax({
         type: 'post',
         url: 'ashu1.php',
         data: {
         name: pick,
         name1:drop,
         name2:car,
         name3:luggage,
         
         },
         success: function (msg) {
         
      $("#tf").hide();


         alert(msg);

           alert('Please Login First');
         
    window.location='login.php';

   
         
       

         } 
         }); 
      

         
         });
         });
     
           


         
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   </body>
</html>

















