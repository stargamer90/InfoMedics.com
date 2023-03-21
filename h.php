<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from iglyphic.com/themes/html/html_elevation/index-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 09:38:48 GMT -->
<head>



<style>
body{
    margin: 0px;
    padding: 0px;
    font-family: sans-serif;
    box-sizing: border-box;
    background-image: url( C:\Users\admin\Pictures\IMG-20210621-WA0043.jpg );
	background-color: trasparent;
    background-size: cover;
    background-attachment: fixed;
}
.formWraper{
    display: flex;
    width: 55%;
    height: 550px;
    background-color: black;
    margin-top: 80px;
    border-radius: 10px;
    box-shadow:0px 0px 20px black;
}
 
/* code for left sectin of form */
.formDiv{
    width: 50%;
    padding: 8%;
    background-color: lavender;
    text-align: center;
    border-radius: 10px 0px 0px 10px;
}
.formDiv h2 {
    color: green;
    margin-top: -5px;
}
 
/* code for right sectin of the registration form */
.welcomeDiv{
    width: 50%;
    padding: 10px;
    background-image: url(image1.jpg);
    background-size: cover;
    text-align: center;
    color: white;
}  
.welcomeDiv h2 {
    margin-top: 150px;
}
 
 
 /* ---- code for Font Awsome social icons */
.socialBtn{
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}
.icon{
    width: 30px;
    height: 30px;
    border-radius: 15px;
    background-color:lavender;
    margin: 5px;
    line-height: 30px;
    box-shadow: 0px 0px 10px black;
     
}
 
 
 
.text{
    font-size: small;
}
.orDiv {
    width: 10%;
    margin: 0 auto;
    background-color: lavender;
    position: relative;
    top: -16px;
    justify-content: center;
}
 
/* code for form input fields */
.formGroup{
    width: 100%;
    position: relative;
}
.formGroup input {
    width: 90%;
    padding: 10px;
    margin-bottom: 10px;
    border-style: none;
    padding-left: 30px !important;
}
 
 
/* Code for Icones inside html form input */
.formGroup i {
    position: absolute;
    left: 0px;
    top: 0px;
    color: grey;
    font-size: smaller;
    margin: 10px !important;
}
 
 
input::placeholder {
    position: relative;
    left: 10px;
}
input:focus{
    border-color: red;
}
.checkBox{
    width: 100%;
    margin-top: 2px;
}
 
.btn{
    width: 70%;
    padding: 15px;
    background-color: #178582;
    margin-top: 15px;
    color: lavender;
    border-radius: 20px;
    border-style: none;
}
.btn2{
    width: 70%;
    padding: 15px;
    background-color:#023020;
    margin-top: 15px;
    color: lavender;
    border-radius: 20px;
    border-style: none;
    border: 2px solid rgb(247, 243, 243);
}
 
/* CSS mouse hover efects */
.btn:hover, .btn2:hover, .icon:hover{
    background-color: rgb(7, 80, 35);
    color: whitesmoke;
}
/* making HTML registration form responsive to mobile devices */
@media screen and (max-width: 1000px){
    .formWraper{
        width: 70%;
    }
}
@media screen and (max-width: 670px){
    .formDiv{
        width: 90%;
        border-radius: 10px 10px 10px 10px;
    }
    .welcomeDiv{
        display: none;
    }
}
.container{
    display: flex;
    align-content: center;
    justify-content: center;
}
</style>




    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <!-- CSS file -->
    <link rel="stylesheet" href="formStyle.css">
    <!-- Font Awesome 5 CDN link to add social icons in html5 registration form -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
 








    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Info-Medics || Patient Details</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ================= Favicon ================== -->
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CRoboto+Condensed:300,400,700%7CRoboto:300,400,500,700,900%7CRubik:300,400,500,700,900%7CCabin:400,500,600,700" rel="stylesheet">
    <!-- Font Awesome css-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--Ion Icon-->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- Bootsrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Round Slider -->
    <link rel="stylesheet" href="css/roundslider.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Mega Menu -->
    <link rel="stylesheet" href="css/menuzord.css">
    <!--SLick -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.min.css">
    <!-- Style-->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Modernizr-->
    <script src="js/modernizr-2.8.3.min.js"></script>
</head>
<body>
<?php
include('header.php');
?>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->44
    <!-- == Top bar  ==-->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
                <div class="object" id="object_five"></div>
                <div class="object" id="object_six"></div>
                <div class="object" id="object_seven"></div>
                <div class="object" id="object_eight"></div>
            </div>
        </div>
    
    </div>

    <!-- == Image box == -->
        <div class="container">
            <div class="row">
                <div class="col-md-12"><br>
                    
                </div>
            </div>
      <body>
      
    <div class="container">
        <dive class="formWraper">
 
            <!-- Left section of responsive registration form -->
 
            <div class="formDiv">
                <h2>Create Account</h2>
                <p class="text"> Sign Up with Social Media</p>
 
             <!-- Font Awesome Icons -->
                <div class="socialBtn">
                    <div class="facebook icon"><i class="fab fa-facebook-f"></i></div>
                    <div class="twitter icon"><i class="fab fa-twitter"></i></div>
                    <div class="instagram icon"><i class="fab fa-instagram"></i></i></div>
                </div>
                 
                <!--Horizontal Line-->
                <hr>
                <div class="orDiv">Or</div>
 
                <p class="text">Sign Up with Email Address</p>
                <div class="formGroup">
                    <i class="far fa-user"></i>
                    <input type="text" name="name" id="name" placeholder="Name">
                </div>
                <div class="formGroup">
                    <i class="far fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="formGroup">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <div class="formGroup">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Re enter Password">
                </div>
               
			   <div class="checkBox">
                    <input type="checkbox" name="checkbox" id="checkbox">
                    <span class="text">I Agree with Term & Conditions.</span>
                </div>
                <button class="btn">SIGN UP</button>
            </div>
 
            <!-- Right section of responsive registration form -->
            <div class="welcomeDiv">
               <img src="C:\Users\admin\Desktop\1.jpeg" width="300px" height="400px">

            </div>
 
        </dive>
    </div>
 
</body>
   















   <!-- //  Image box  -->
    <!-- == Testimonial == -->
    <section class="testimonial-area mt100 pdb80">
        <div class="container-fluid">
            <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
                <div class="row">
                    <div class="col-lg-8 col-md-8 mt85 col-sm-7">
                       <!-- Wrapper for slides -->
                       <div class="carousel-inner ">
                           <div class="item active">
                               <div class="quote">
                                At V.S hospital we have 36 deluxe, 4 suites, 76 Double and Triple sharing rooms, as well as 1300 General Beds available where the patient's relative can also stay and keep their belongings too. Here we have 139 Intensive care units including 24 Pediatric ICU and Neonatal ICU beds.  
                               </div>
                               <p>Bacon questioned the Aristotelian concepts of formal cause and final cause, and promoted the idea that science should study the laws of "simple" natures, such as heat, rather than assuming</p>
                           </div>
                           <!-- End Item -->
                           <div class="item">
                               <div class="quote">
                                 In this hospital, there are 90 Consultation rooms, with over 20 specialities and well-experienced doctors. The Neat and clean waiting area is also available for a patient’s relatives.
                               </div>
                               <p>Aristotelian concepts of formal cause and final cause, Bacon questioned the  and promoted the idea that science should study the laws of "simple" natures, such as heat, rather than assuming</p>
                           </div>
                           <!-- End Item -->
                           <div class="item">
                               <div class="quote">
                                 Here we have 139 Intensive care units including 24 Pediatric ICU and Neonatal ICU beds.
                               </div>
                               <p>Bacon questioned the Aristotelian concepts of formal cause and final cause, and promoted the idea that science should study the laws of "simple" natures, such as heat, rather than assuming</p>
                           </div>
                           <!-- End Item -->
                           <div class="item">
                               <div class="quote">
                                  There are 32 Operation Theaters with 4 in each floor, of which 8 are Modular OT’s. All the OT’s are equipped with the latest medical devices.
                               </div>
                               <p>Bacon questioned the Aristotelian concepts of formal cause and final cause, and promoted the idea that science should study the laws of "simple" natures, such as heat, rather than assuming</p>
                           </div>
                           <!-- End Item -->
                           <div class="service-controller-thumb">
                               <ul class="navigation-control">
                                   <!-- <li class="prev-step"><i class='ion-ios-arrow-left'></i></li> -->
                                   <li class="next-step"><i class='ion-ios-arrow-thin-right'></i></li>
                               </ul>
                           </div>
                       </div>
                       <!-- End Carousel Inner -->

                   </div>
                   <!-- End Carousel -->
                    <div class="col-md-4 col-lg-4  col-sm-5">
                        <ul class="testimonial-carousel-control-nav pdt100">
                            <li data-target="#testimonial-carousel" data-slide-to="0" class="active">
                                <a href="#" data-toggle="tab">
                                    <img src="images/11.jpg" class="img-responsive" alt="client thumb" />
                                </a>
                            </li>
                            <li data-target="#testimonial-carousel" data-slide-to="1">
                                <a href="#" data-toggle="tab">
                                    <img src="images/12.jpg" class="img-responsive" alt="client thumb" />
                                </a>
                            </li>
                            <li data-target="#testimonial-carousel" data-slide-to="2">
                                <a href="#" data-toggle="tab">
                                    <img src="images/13.jpg" class="img-responsive" alt="client thumb" />
                                </a>
                            </li>
                            <li data-target="#testimonial-carousel" data-slide-to="3">
                                <a href="#" data-toggle="tab">
                                    <img src="images/14.jpg" class="img-responsive" alt="client thumb" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Testimonial  -->
     <!-- == Blog Section == -->
    <section class="blog mb75">
        <div class="container">
            <div class="section-heading text-center section-padding mb50">
                <h2>Your data is always safe with us!!</h2>
                <span>
				</span>
            </div>
            
                
            </div>
            
        </div>
    </section>

    <!-- == Get strated == -->
    <div class="get-started">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="left">
                        <div class="content">
                            <h2>Ready To Get Started?</h2>
                            <p>But I must explain to you how all this mistaken idea of denouncing </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="right text-right">
                        <a href="#" class="white-button">Start here<i class='ion-ios-arrow-thin-right'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // Get strated  -->
      <!-- == Footer == -->
     <?php
	 include('footer.php');
	 ?>
    <!-- // End Footer  -->
	<!-- == jQuery Librery == -->
    <script src="js/jquery-2.2.4.min.js"></script>
	<!-- == Bootsrap js File == -->
    <script src="js/bootstrap.min.js"></script>
	<!-- == Isotope == -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- == Isotope == -->
    <script src="js/menuzord.js"></script>
	<!-- == Progress Bar == -->
    <script src="js/jquery.barfiller.js"></script>
	<!-- == Scroll it == -->
    <script src="js/scrollIt.min.js"></script>
    <!-- == magnific-popup == -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- == Round slider == -->
    <script src="js/roundslider.js"></script>
	<!-- == OWl carousel == -->
    <script src="js/owl.carousel.min.js"></script>
	<!-- == Slick carousel == -->
    <script src="js/slick.js"></script>
    <!-- == jquery mb YTPlayer == -->
   <script src="js/jquery.mb.YTPlayer.js"></script>
	<!-- == Zingchart == -->
    <script src="js/zingchart.min.js"></script>
	<!-- == Prallex == -->
    <script src="js/prallex.js"></script>

	<!-- == custom Js File == -->
    <script src="js/custom.js"></script>

</body>


<!-- Mirrored from iglyphic.com/themes/html/html_elevation/index-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 09:39:00 GMT -->
</html>
