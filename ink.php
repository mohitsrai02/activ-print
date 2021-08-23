<?php
session_start();
?>
<html>
    <head><title>Ink Matching</title><link rel="icon" href="image/icon.png">
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
            <script src="js/jquery-3.3.1.js"></script>
            <script src="js/bootstrap.js" type="text/javascript"></script>
            <script src="js/ink.js"></script>
           <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
           <link href="css/ink.css" rel="stylesheet" type="text/css">
           <link href="style/css2.css" rel="stylesheet" type="text/css">
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <?php
if(isset($_SESSION['SUCC'])){
  $p = $_SESSION['SUCC'];
  if($p=='prateek'){
    
?>

    <script type="text/javascript">
           $(document).ready(function() {
              
  $('#btnmodal').trigger('click');
});
           </script>

<?php
  }
  unset($_SESSION['SUCC']); 
}
?>
    <body>
        
    <div class="container">
        <a type="button" class="btn btn-info btn-lg" id="feedback" data-toggle="modal" onclick="window.location.href='interested.php'">I'm Interested In</a>
      <!-- Modal -->
</div>           <nav class="navbar navbar-expand-sm bg-dark navbar-dark colll sticky-top navbg">
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
                                    <td><a class="drp dropdown-item" href="special_inks.php">Special Inks</a></td>
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
            <img class="sticky responsive" src="images/bgink.jpg">
          
                    <div class="container-fluid">
                            <div class="col-xl-12 text-center"><h1 class='inkm'>Ink Matching Center</h1>
                                <p style="text-align: justify">
                                        Presenting the APM- Active Print Matching. APM is equipped with the technology to match colors accurately. So printers get accurate, high quality colors on time, every time. This saves them the unpredictability of manual color matching. It also saves them time and inventory.
                                        The APM is equipped with spectrophotometers, color matching software, proofing kits and mixing machines and the ink preparation processes are thus fully automated.
                                        
                                        All special colors matched are codified and stored in our data base. The problems associated with manual color matching are eliminated when the inks are matched in the ATMs the buyers are assured of accurate and consistent shades each time.
                                        
                                  </p>  
                                </div>
                                <div class="col-xl-12 text-center"><h1 style="padding: 3%">PERFECT MATCH FOR PERFECT COLOR.</h1>
                                    <h1 style="padding-bottom: 3%">____</h1>
                                    <p style="text-align: justify">
                                            As Leaders in the Ink Industry in Central Region of India , We add immense value to our customer`s business by consistent color production. Our Advanced Color Matching techniques and industry leading expertise are backed by modular APM, Automatic Ink matching & dispensing system , fully equipped with most modern instrument & technology.
                                    </p>
                                    <h1>How APM Works….</h1>
                                    <h1 style="padding-bottom: 3%">____</h1>
                                    </div>

                            <div class="container">
                                    <div class="row">
                                      <div class="col-xl-4">
                                          <img src="image/s1.jpg" class="img-fluid" width="350px" height="250px"><br>
                                            <p class="ccz">Walk in with a color reference.</p>
                                      </div>
                                      <div class="col-xl-4">
                                            <img src="image/s2.jpg" class="img-fluid" width="350px" height="250px"><br>
                                            <p class="ccz">After scanning the substrate specified & a recipe obtained.</p>
                                        </div>
                                      <div class="col-xl-4">
                                            <img src="image/s3.jpg" class="img-fluid" width="350px" height="250px"><br>
                                            <p class="ccz">The recipe is prepared & the color specs are matched.</p>
                                        </div>
                                        <div class="col-xl-4">
                                                <img src="image/s4.jpg" class="img-fluid" width="350px" height="250px"><br>
                                                <p class="ccz">The correct specs are instantly sent into production at the mini plant in the ATM itself.</p>
                                         </div>
                                        <div class="col-xl-4">
                                                <img src="image/s5.jpg" class="img-fluid" width="350px" height="250px"><br>
                                                <p class="ccz">The colour and the quantity you want is delivered to you on the spot in less than 2 hours.</p>
                                            </div>
                                        
                                    </div>  
                                  </div>
                        <div class="row row1">
                            <div class="col-xl-3"></div><div class="col-xl-6 forz"><br><br><br>
                                    <h1>Ink Matching Form</h1>

                                   
                                    <form action="ink_submit.php" method="POST">
                                      
                                      <label for="name"> <i class="fa fa-user icon"></i><b>Customer Name</b></label>
                                      <input type="text" id="cname" name="cname" placeholder="Customer name.." required>

                                      <label for="number"><i class="fa fa-phone icon"></i><b>Contact No.</b></label>
                                      <input type="text"  id="mobile" name="mobile" placeholder="Mobile Number" required>
                                  
                                      <label for="email"><i class="fa fa-envelope icon"></i><b>Email</b></label>
                                       <input type="text" id="email" placeholder="Enter Email" name="email" required>
                                  
                                      <label for="subject"><i class="fa fa-pencil icon"></i><b>Ink Description</b></label>
                                      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>
                                  
                                      <input type="submit" value="Submit">
                                      
                            </div>
                                      </form>
                                      <div class="col-xl-3"></div>
                                    
                                       
                                  </div>
                                  </div> 
                                  <br>
                                  <br></div>                            <footer class="footer">
                                        <div class="container">
                                                   <div class="row">
                                                         <div class="col-sm-3">
                                                            <h4 class="title"></h4>
                                                                <p><img src="image/logo.png" width="320px"; height="140px" class="img-fluid"></p>
                                                                <p>ACTIVE PRINT Products possess high quality and deliver superior performance. We are not just manufacturer, we are a business partner that will go that extra mile to gain and retain customers.</p>
                                                                <ul class="social-icon">
                                                                <a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                                <a href="#" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                                                <a href="#" class="social"><i class="fa fa-google" aria-hidden="true"></i></a>
                                                                </ul>
                                                                </div>
                                                            <div class="col-sm-3">
                                                                <h4 class="title">Quick Links</h4>
                                                                <span class="acount-icon">          
                                                                <a href="index.php"><i class="fa fa-heart" aria-hidden="true"></i> Home</a>
                                                                <a href="aboutus.php"><i class="fa fa-cart-plus" aria-hidden="true"></i> About</a>
                                                                <a href="contactus.php"><i class="fa fa-user" aria-hidden="true"></i> Contact Us</a>
                                                                  
                                                                <a href="career.php"><i class="fa fa-send" aria-hidden="true"></i> Career</a>
                                                              </span>
                                                                </div>
                                                            <div class="col-sm-3">
                                                              <h4 class="title">Products Catogary</h4>
                                                              <span class="acount-icon">          
                                                              <a href="special_inks.php"><i class="fa fa-glass" aria-hidden="true"></i>Special Inks</a>
                                                              <a href="fountain_solutions.php"><i class="fa fa-fire" aria-hidden="true"></i>Fountain Solutions</a>
                                                              <a href="ink_additives.php"><i class="fa fa-thermometer" aria-hidden="true"></i>Ink Additives</a>
                                                              <a href="plate_care_products.php"><i class="fa fa-paint-brush" aria-hidden="true"></i>Plate Care Products</a>
                                                              <a href="press_washes.php"><i class="fa fa-flask" aria-hidden="true"></i>Press Washes</a> 
                                                              <a href="press_washes_for_uv.php"><i class="fa fa-filter" aria-hidden="true"></i>Press Washes For Uv</a>             
                                                                  </span>
                                                                  </div>
                                                                  
                                                            <div class="col-sm-3">
                                                                    <h4 class="title">Contact Us</h4>
                                                                    <span class="acount-icon">          
                                                                    <a href="#">Phone No.:<br>+91 8770577714<br>+91 7999761118<br>+91 9977684655</a>
                                                                    <a href="#">E-mail :<br>info@activprint.in</a>
                                                                    <a href="#">Address :<br>Scheme- 54 Vijay Nagar<br>Factory-Sector A, Sanwer Road</a>        
                                                                  </span>
                                                                  </div>
                                                            </div>
                                                            <hr>
                                                            
                                                            <div class="row text-center">© 2018. All Rights Reserved Xenon Nation</div>
                                                            <button type="button" id="btnmodal" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style=" visibility:hidden;">Open Modal</button>
                                                            <div class="modal fade modal1" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content  bg-dark text-white">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <h5><center>DETAILS SUBMITTED</center></h5>
       
          <p><center>Thank you</center></p>
         <center> <i class="fa fa-thumbs-o-up"  aria-hidden="true"></i> &nbsp&nbsp&nbsp&nbsp
        <i class="fa fa-thumbs-o-up"  aria-hidden="true"></i>&nbsp&nbsp&nbsp&nbsp
        <i class="fa fa-thumbs-o-up"  aria-hidden="true"></i></center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default  bg-info text-white" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
                                                            </div>
                                                        </footer>
                                                                              
                          </div>
    </body>
</html>