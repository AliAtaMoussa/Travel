<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>TRAVEL EXPERTS - DIRECTORY &amp; LISTING</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

    <!-- Subscribe or register CSS -->
    <link rel="stylesheet" href="css/responsive/subscribeStyle.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>

    <!-- ***** Search Form Area ***** -->
    <div class="dorne-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Desire Destinations or Events">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <nav class="h-100 navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.php"><img src="img/core-img/logo1.png" alt=""></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                            <!-- Nav -->
                            <div class="collapse navbar-collapse" id="dorneNav">
                                <ul class="navbar-nav mr-auto" id="dorneMenu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#aboutus">About us <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Explore <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#cities">Cities you must see</a>
                                            <a class="dropdown-item" href="#destinations">Featured destinations</a>
                                            <a class="dropdown-item" href="#restaurants">Featured Restaurants</a>
                                            <a class="dropdown-item" href="#events">Featured events</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="selectAgent.php">Our Agents</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Contact</a>
                                    </li>
                                </ul>

                                <div class="dorne-add-listings-btn" style="position:absolute;right:200px;">
                                    <button onclick="location.href='index.php'" class="btn dorne-btn"><i  class="fa fa-sign-out btn" aria-hidden="true"></i>Sign out</button>
                                </div>
                                <div class="dorne-add-listings-btn">
                                  <!-- weather widget start -->
                                  <a target="_blank" href="https://www.booked.net/weather/calgary-30502">  <img src="https://w.bookcdn.com/weather/picture/23_30502_1_1_3498db_250_2980b9_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=569&anc_id=32147"  alt="booked.net"/></a><!-- weather widget end -->
                                  </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Sign in or register begin ***** -->
    <div id="id01" class="modal">
				<span onclick="document.getElementById('id01').style.display='none';document.getElementById('myForm').reset();document.getElementById('myForm1').reset();" class="close" title="Close Modal">&times;</span>
                <form class="modal-content" id="myForm" action="/bouncer.php"><!-- tbd-->
					<div class="container">
                        <h1>Sign In</h1>
						<p>Please fill in this form to open your account.</p>
						<hr>
						<label for="email"><b>Email</b></label>
						<input type="email" placeholder="Enter Email" name="email" required>

						<label for="psw"><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="psw" required>

                        <button type="submit" class="signinbtn">Sign In</button>

                    </div>
                </form>

				<form class="modal-content" id="myForm1" action="/bouncer.php"><!-- tbd-->
                    <div class="container">
						<h1>Sign Up</h1>
						<p>Please fill in this form to create an account.</p>
						<hr>

                        <label for="fname"><b>First name</b></label>
						<input type="text" placeholder="Enter first name" name="fname" required>

                        <label for="lname"><b>Last name</b></label>
						<input type="text" placeholder="Enter Last name" name="lname" required>

                        <label for="lname"><b>Phone number</b></label>
						<input type="text" placeholder="Enter phone number" name="phonenumber" required>

						<label for="email"><b>Email</b></label>
						<input type="text" placeholder="Enter Email" name="email" required>

						<label for="psw"><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="psw" required>

						<label for="psw-repeat"><b>Repeat Password</b></label>
						<input type="password" placeholder="Repeat Password" name="psw-repeat" required>

						<label>
							<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
						</label>

						<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

						<div class="clearfix">
							<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
							<button type="submit" class="signupbtn" >Sign Up</button>
						</div>
					</div>
				</form>
        </div>
    <!-- ***** Sign in or register End ***** -->

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/design2.jpg)">
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Contact Area Start ***** -->
    <div class="dorne-contact-area d-md-flex" id="contact">
        <!-- Contact Form Area -->
        <div style="padding:25px;">
            <div class="contact-text">
                <h2>Your flight/package <?php print($_GET['id']) ?> is booked!</h2>
                <h2 style="font-size:20px;">You will receive an email including the flight details.</h2><br>
                <h3>Thank you for your trust in Travel Experts!</h3>
                <p>Travel Experts are always ready for any requests, help and comments.</p><br><br><br>

                <h3>For more information, Contact Travel Experts:</h3>
                <div class="contact-info d-lg-flex">
                    <p>Calgary Branch:</h6><br>
                    <div class="single-contact-info">
                        <p><i class="fa fa-map-signs" aria-hidden="true"></i> 1155 8th Ave SW</h6>
                        <p><i class="fa fa-map-signs" aria-hidden="true"></i> Calgary, AB T2P 1N3</h6>
                    </div>
                    <div class="single-contact-info">
                        <p><i class="fa fa-envelope-o" aria-hidden="true"></i> contactca@travelexperts.com</h6>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> +1 403 271 9873 </h6>
                        <p><i class="fa fa-fax" aria-hidden="true"></i> +1 403 271 9872 </h6>
                    </div>
                </div>
                <div class="contact-info d-lg-flex">
                    <p>Okotoks Branch:</h6><br>
                    <div class="single-contact-info">
                        <p><i class="fa fa-map-signs" aria-hidden="true"></i> 110 Main Street</h6>
                        <p><i class="fa fa-map-signs" aria-hidden="true"></i> Okotoks, AB T7R 3J5</h6>
                    </div>
                    <div class="single-contact-info">
                        <p><i class="fa fa-envelope-o" aria-hidden="true"></i> contactok@travelexperts.com</h6>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> +1 403 563 2381 </h6>
                        <p><i class="fa fa-fax" aria-hidden="true"></i> +1 403 563 2382 </h6>
                    </div>
                </div>
            </div>


        </div>
        <!-- Map Area
        <div class="dorne-map-area equal-height">
            <div id="gmap_canvas"></div>
        </div> -->

    </div>
    <!-- ***** Contact Area End ***** -->

    <!-- ****** Footer Area Start ****** -->
    <footer class="dorne-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-md-flex align-items-center justify-content-between">
                    <div class="footer-text">
                        <p>

Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="index.php" target="_blank">Travel Experts team</a>
                        </p>
                    </div>
                    <div class="footer-social-btns">
                        <a href="https://www.linkedin.com/"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                        <a href="https://www.behance.net/"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
                        <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
                        <a href="https://slack.com/"><i class="fa fa-slack" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>






	<!--<script src="js/google-map/map-active.js"></script>
     Active JS -->
    <script src="js/active.js"></script>

</body>

</html>
