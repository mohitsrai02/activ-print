<?php
session_start();
?>
<html>
    <head><title>Contact Us</title><link rel="icon" href="image/icon.png">
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
            <script src="js/jquery-3.3.1.js"></script>
            <script src="js/bootstrap.js" type="text/javascript"></script>
                  
   <link href="style/css2.css" rel="stylesheet" type="text/css">
            <script src="js/ink.js"></script>
           <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
           <link href="css/contactus.css" rel="stylesheet" type="text/css">
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <?php
if(isset($_SESSION['PAGE'])){
  $p = $_SESSION['PAGE'];
  var_dump($p);
  if($p=='prateek'){  
?>
    <script type="text/javascript">
           $(document).ready(function() {
  $('#btnmodal').trigger('click');
});
           </script>

<?php
  }
  unset($_SESSION['PAGE']); 
}
?>
    <body> 
      <div class="container">
          <a type="button" class="btn btn-info btn-lg" id="feedback" data-toggle="modal" onclick="window.location.href='interested.php'">I'm Interested In</a>
        <!-- Modal -->
  </div>
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
            <img class="sticky responsive" src="images/contact-banner.jpg">
          
                    <div class="container-fluid">
                        <div class="row row1">
                            <div class="col-xl-6">
                              <h3>COMPANY INFORMATION</h3> 
                              
                              <p>
                                    For more information on products and our services or any comments, Drop us a message and our team will get back to you ASAP.
                              </p>  
                              <h4>Office conatct</h4>
                              
                              <p>        
                                                                    Phone No.:<br> +91 8770577714,+91 7999761118,+91 9977684655</a> <br>
                                                                    E-mail :<br>info@activprint.in</a>
                                                                    Address :<br>Scheme- 54 Vijay Nagar Factory-Sector A, Sanwer Road</a>        
                              </p>  
                            </div>  
                            <div class="col-xl-6">
                                    <h1 class='cont'>Contact Form</h1>

                                   
                                      <form action="contactus_submit.php" method="POST">
                                        
                                        <label for="name"> <i class="fa fa-user icon"></i><b>Customer Name</b></label>
                                        <input type="text" id="cname" name="cname" placeholder="Customer name.." required>
                                        
                                        <label for="name"> <i class="fa fa-phone icon"></i><b>Phone No.</b></label>
                                        <input type="text" id="cphone" name="mobile" placeholder="Contact Number.." required>
                                        
                                        <label for="email"><i class="fa fa-envelope icon"></i><b>Email</b></label>
                                        <input type="text" id="email" placeholder="Enter Email" name="email" required>
                                    
                                        <label for="subject"><i class="fa fa-pencil icon"></i><b>Subject</b></label>
                                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>
                                    
                                        <input type="submit" value="Submit">
                                        
                                      </form>
                                    
                                       
                                  </div>
                                  </div> 
                                  <br>
                                  <br>
                                   <div class="col-xl-12">
                                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7358.372639214133!2d75.8385613245215!3d22.758465733903105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3963026519d7903f%3A0xba1527828cf8583a!2sSector+A%2C+Sanwer+Road+Industrial+Area%2C+Indore%2C+Madhya+Pradesh!5e0!3m2!1sen!2sin!4v1533369525783" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                      </div></div>                            <footer class="footer">
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