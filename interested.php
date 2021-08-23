<?php
session_start();
?>
<html>
 <head>
 <title>I Am Interested In</title><link rel="icon" href="image/icon.png">
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="js/jquery-3.3.1.js"></script>
 <script src="js/bootstrap.js" type="text/javascript"></script> 
 <link href="style/css2.css" rel="stylesheet" type="text/css">
 <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
 <link href="css/contactus.css" rel="stylesheet" type="text/css">
 <link href="style/chosen.css" rel="stylesheet" />
 <link href="css/interested.css" rel="stylesheet" />
 <script src="js/chosen.jquery.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript">
 $(document).ready(function () {
 $('.chosen-select').chosen();
 });
</script>
 </head>
 <?php
if(isset($_SESSION['GAME'])){
 $p = $_SESSION['GAME'];
 if($p=='prateek1'){
 
?>

 <script type="text/javascript">
 $(document).ready(function() {
 
 $('#btnmodal').trigger('click');
});
 </script>

<?php
 }
 unset($_SESSION['GAME']); 
}?>
 <body> 
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark colll sticky-top navbg">
 <a class="navbar-brand" href="#"><img src="image/logo.png" class="img-fluid" width="120px"></a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="navbar-collapse collapse w-100 order-3 dual-collapse2" id="collapsibleNavbar">
 <ul class="navbar-nav ml-auto">
 <li class="nav-item">
 <a class="nav-link" href="index.php">Home</a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="aboutus.php">About Us</a>
 <ul></ul>
 </li>
 <li class="nav-item dropdown">
 <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
 Our Products
 </a>
 <div class="dropdown-menu drpp">
 <table class="tbl" align="right">
                                  <tr>
                                    <th><a class="drpd dropdown-item">Offset Ink</a></th>
                                    <th><a class="drpd dropdown-item" href="#">Offset Chemicals</a></th> 
                                  </tr>
                                  <tr>
                                    <td><a class="drp dropdown-item" href="Special_inks.php">Special Inks</a></td>
                                    <td><a class="drp dropdown-item" href="fountain_solutions.php">Fountain Solutions</a></td>
                                  </tr>
                                  <tr>
                                    <td><a class="drp dropdown-item" href="ink_additives.php">Ink Additives</a></td>
                                    <td><a class="drp dropdown-item" href="plate_care_products.php">Plate Care Products</a></td>
                                  </tr>
                                  <tr>
                                    <td></td>
                                    <td><a class="drp dropdown-item" href="press_washes.php">Press Washes</a></td>
                                  </tr>
                                  <tr>
                                    <td></td>
                                    <td><a class="drp dropdown-item" href="press_washes_for_uv.php">Press Washes For Uv</a></td>
                                  </tr>
                                  <tr>
                                      <td></td>
                                      </tr>
                                </table>
 </div>
 </li>
 <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Solutions<span class="caret"></span></a>
 <ul class="dropdown-menu drpp">
 <li>
 <a class="dropdown-item drp" href="ink.php">Ink Matching</a></li>
 </ul>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="contactus.php">Contact Us</a>
 </li>
 </ul>
 </div>
 </nav>
 
 <div class="modal-body col-xl-12" style="background-color: silver; padding:5%;">
 <form action="interested_submit.php" method="POST">
 <h2>Enquiry Form</h2>
 <label for="name"><b>Name</b></label>
 <input type="text" id="cname" name="iname" placeholder="Your Name"style="margin-left:10px" required>

 <label for="number"><b>Contact No.</b></label>
 <input type="text" id="mobile" name="imobile" placeholder="Mobile Number"style="margin-left:10px" required>
 
 <label for="email"><b>Email</b></label>
 <input type="text" id="email" placeholder="Enter Email" name="iemail"style="margin-left:10px" required>
 
 <label for="products"><b>Select Products</b></label>
 <div class="col-sm-3">
 <br><br>
 
 <select data-placeholder="Select Products" class="chosen-select" style="width:80%;" multiple tabindex="4" name="prod[]">
 <option value="Ultra">Ultra</option>
 <option value="Alcoplusplus">Alcoplus+</option>
 <option value="Perfect">Perfect</option>
 <option value="Alcozip">Alcozip</option>
 <option value="Plate_Cleaner_Gp">Plate Cleaner Gp</option>
 <option value="Plate_Cleaner_Sp">Plate Cleaner Sp</option>
 <option value="Plate_Cleaner_Uv">Plate Cleaner Uv</option>
 <option value="Uni_Gum">Uni Gum</option>
 <option value="Multi_Wash_Eco+">Multi Wash Eco+</option>
 <option value="Multi_Wash_Eco">Multi Wash Eco</option>
 <option value="Multi_Wash_Premium">Multi Wash Premium</option>
 <option value="Uv_Wash_Regular">Uv Wash Regular</option>
 <option value="Uv_Wash_Premium">Uv Wash Premium</option>
 <option value="silver_metallic inks">Silver/Metallic inks</option>
 <option value="Gold_Inks">Gold Inks</option>
 <option value="Fluorecent_Inks">Fluorecent Inks</option>
 <option value="Perl_Inks">Perl Inks</option>
 <option value="Misellaneous">Misellaneous</option>
 <option value="High_Gloss_Op">High Gloss Op</option>
 <option value="gendral_purpose op">Gendral Purpose Op</option>
 <option value="Hg Online Op">Hg Online Op</option>
 <option value="Track_Reducer_Jelly">Track Reducer Jelly</option>
 <option value="Track_Reducer_Liquid">Track Reducer Liquid</option>
 <option value="Track_Improver Ec">Track Improver Ec</option>
 <option value="Gel_Varnish">Gel Varnish</option>
 <option value="Transparent_White">Transparent White</option>
 <option value="Combination_Drier">Combination Drier</option>
 <option value="High_Speed_Drier">High Speed Drier</option>
 </select>
 </div>
 
 <input style='padding:10px; margin-left:5px; margin-top: 15px;' type="submit" value="Submit">
 </form>
 </div> 

 <footer class="footer">
 <div class="container">
 <div class="row">
 <div class="col-sm-3">
 <h4 class="title"></h4>
 <p><img src="image/logo.png" width="320px"; height="140px" class="img-fluid"></p>
 <p style=" text-align: justify;">ACTIVE PRINT Products possess high quality and deliver superior performance. We are not just manufacturer, we are a business partner that will go that extra mile to gain and retain customers.</p>
 <ul class="social-icon" style=" text-align: justify;">
 <a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
 <a href="#" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
 <a href="#" class="social"><i class="fa fa-google" aria-hidden="true"></i></a>
 </ul>
 </div>
 <div class="col-sm-3"style=" text-align: justify;">
 <h4 class="title">Quick Links</h4>
 <span class="acount-icon"> 
 <a href="index.php"><i class="fa fa-heart" aria-hidden="true"></i> Home</a>
 <a href="aboutus.php"><i class="fa fa-cart-plus" aria-hidden="true"></i> About</a>
 <a href="contactus.php"><i class="fa fa-user" aria-hidden="true"></i> Contact Us</a>
 
 <a href="career.php"><i class="fa fa-send" aria-hidden="true"></i> Career</a>
 </span>
 </div>
 <div class="col-sm-3"style=" text-align: justify;">
 <h4 class="title">Products Catogary</h4>
 <span class="acount-icon"> 
 <a href="Special Inks.php"><i class="fa fa-glass" aria-hidden="true"></i>Special Inks</a>
 <a href="Fountain Solutions.php"><i class="fa fa-fire" aria-hidden="true"></i>Fountain Solutions</a>
 <a href="Ink Additives.php"><i class="fa fa-thermometer" aria-hidden="true"></i>Ink Additives</a>
 <a href="Plate Care Products.php"><i class="fa fa-paint-brush" aria-hidden="true"></i>Plate Care Products</a>
 <a href="Press Washes.php"><i class="fa fa-flask" aria-hidden="true"></i>Press Washes</a> 
 <a href="Press Washes For Uv.php"><i class="fa fa-filter" aria-hidden="true"></i>Press Washes For Uv</a> 
 </div>
 
 <div class="col-sm-3" style=" text-align: justify;">
 <h4 class="title">Contact Us</h4>
 <span class="acount-icon"> 
 <a href="#">Phone No.:<br>+91 8770577714<br>+91 7999761118<br>+91 9977684655</a>
 <a href="#">E-mail :<br>info@activprint.in</a>
 <a href="#">Address :<br>Scheme- 54 Vijay Nagar<br>Factory-Sector A,Sanwer Road</a> 
 </span>
 </div>
 </div>
 <hr>
 
 <div class="row text-center"> © 2018. All Rights Reserved Xenon Nation</div>
 </div>
 <button type="button" id="btnmodal" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style=" visibility:hidden;">Open Modal</button>
 <div class="modal fade modal1" id="myModal" role="dialog">
 <div class="modal-dialog">
 
 <!-- Modal content-->
 <div class="modal-content bg-dark text-white">
 <div class="modal-header">
 
 
 <button type="button" class="close" data-dismiss="modal">&times;</button>
 </div>
 <div class="modal-body">
 <h5><center>FORM SUBMITTED SUCESSFULLY</center></h5>
 
 <p><center>Thank you</center></p>
 <center> <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> &nbsp&nbsp&nbsp&nbsp
 <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>&nbsp&nbsp&nbsp&nbsp
 <i class="fa fa-thumbs-o-up" aria-hidden="true"></i></center>
 </div>
 <div class="modal-footer">
 <button type="button" class="btn btn-default bg-info text-white" data-dismiss="modal">Close</button>
 </div>
 </div>
 
 </div>
 </div>
 
 </footer></body>
</html>