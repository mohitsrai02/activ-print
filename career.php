<?php
session_start();
include("configfile.php");
?>
<html>
    <head><title>Career</title><link rel="icon" href="image/icon.png">
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
            <script src="js/jquery-3.3.1.js"></script>
            <script src="js/bootstrap.js" type="text/javascript"></script>
                  
            <script src="js/ink.js"></script>
           <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
           <link href="css/career.css" rel="stylesheet" type="text/css">
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--   <script type="text/javascript">
            $(function() {
                $('.multiselect-ui').multiselect({
                    includeSelectAllOption: true
                });
            });
            </script>-->
    </head>
    <?php
if(isset($_SESSION['GAME'])){
  $p = $_SESSION['GAME'];
  if($p=='prateek1'){
    
?>

    <script type="text/javascript">
           $(document).ready(function() {
           $('#btnm').click();
});
           </script>

<?php
  }
  unset($_SESSION['GAME']); 
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
          <img class="sticky responsive" src="images/career-background.png">
          <div class="container-fluid">
                <div class="row row1">
                    <div class="col-xl-12">
                      <h1>JOIN OUR TEAM</h1>
                      <br>
                      <br>
                      <h5>
                      ACTIVE PRINT Products possess high quality and deliver superior performance. We are not just manufacturer, we are a business partner that will go that extra mile to gain and retain customers. We provide our customers with excellent service and support packages that are individual and personalized. We make sure to stay at the forefront of technology and provide innovative solutions that will help you stay on top of the industry.
           
                      </h5> 
                      <br><br>
                      <button type="button" data-toggle="collapse" data-target="#form" class="btn btn-info btn-rounded">JOIN NOW</button>
                     </div></div>
                     <br>
                     <br>
                     <br>
                     <br>
                        
                     <div class="row row1">
                        <div class="col-xl-6">
                            <H1><CENTER>APPLY NOW</CENTER></H1>
                        <form class="form"action="career_submit.php" method="POST" enctype="multipart/form-data">
                                                        
                        <label for="full name"> <i class="fa fa-user icon"></i><b>Full Name</b></label>
                        <input type="text" id="fname" name="fullname" placeholder="Your full name.." required>
                        
    
                        
                        <label for="number"><i class="fa fa-phone icon"></i><b>Phone number</b></label>
                        <input type="text"  id="mobile" name="mobile" placeholder="Mobile Number" required>
                        
                        <label for="email"><i class="fa fa-envelope icon"></i><b>Email</b></label>
                         <input type="text" id="email" placeholder="Enter Email" name="email" required>
                         <div class="row">
                             <div class="col-xl-6">
                                <label for="age"><i class="fa fa-user-plus icon"></i><b>Age</b> </label>
                                <input type="text" id="age" name="age" placeholder="Your age..." required>
                         </div>
                         <div class="col-xl-6">
                                <label for="city"> <i class="fa fa-user icon"></i><b>City</b> </label>
                                <input type="text" id="city" name="city" placeholder="Your city..." required>
                        </div></div>
                        
                        <label for="country"><b>Position</b></label>
                        <select id="Position" name="Position">

                        <?php
                        $position=mysqli_query($conn,"SELECT position_name FROM user_position");
                        while ($row=mysqli_fetch_assoc($position)){

                        ?>
                        <option value="<?php echo $row['position_name']?>"><?php echo $row['position_name'];?></option>
                  
                       
                        <?php
                        }
                        ?>
                         </select>
                        <div class="row">
                            <div class="col-xl-6">
                               <label for="expted"> <i class="fa fa-user icon"></i><b>Expected Salary</b></label>
                               <input type="text" id="exp" name="exp" placeholder="expected salary" required>
                        </div>
                        <div class="col-xl-6">
                               <label for="start"> <i class="fa fa-user icon"></i><b>Start Date</b> </label>
                               <input type="text" id="start" name="start" placeholder="Start date" required>
                        </div></div>
                        
                        <label for="Experience"><i class="fa fa-pencil icon"></i><b>Experience</b></label>
                        <textarea id="Experience" name="Experience" placeholder="Write something.." style="height:200px" required></textarea>

                        
                                <label for="resume"><i class="fa fa-upload icon" aria-hidden="true"></i><b>Upload reusme</b></label>
                                <input type="file" name="resm" required>
                        <br><br>
                        <center> <input type="submit" value="Submit"></center>
                        
                        </form>

                        
                        </div>  
                        <div class="col-xl-6">
                        
                        <br><br><br><br><br><br><br><br><br><br><br><br>
                         Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                        
                         The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                        
                        <br><br><br> <br><br>
                         Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                        
                         The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                        
                                   
                              </div>
                              </div> 
        </div>

        <footer class="footer">
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
                                
                                <div class="row text-center"> © 2018. All Rights Reserved Xenon Nation</div>
                                </div>
                                <button type="button" id="btnm" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2" style=" visibility:hidden;">Open Modal</button>
                                                            <div class="modal fade modal1" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content  bg-dark text-white">
        <div class="modal-header">
        
      
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <h5><center>FORM SUBMITTED SUCESSFULLY</center></h5>
       
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
                                
                            </footer>
                                                  
                    
                    </body>
                </html>