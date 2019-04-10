<!DOCTYPE html>
<html lang="en">
<?php
include "config.php";
?>
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

    <link rel="stylesheet" href="css/responsive/searchResultsStyle.css">


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
                          <!--  <div  style="position:absolute;right:500px;">
                                <a style="color: #fff;">Agent: <?php//  print($_GET["userName"]);  ?></a>
                            </div>-->
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


    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/design2.jpg)">
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Contact Area Start ***** -->
    <div class="dorne-contact-area d-md-flex" id="contact">
    <section class="container">
         <h2>Packages appeared in the search: </h2>
           <p>Select and book! Have a wonderful trip withe Travel experts!</p>

         <div class="trip_table_wdg">

               <?php
                       $dbh = @mysqli_connect($host,$user,$pwd,$db);
                       if (! $dbh)
                       {
                         die("Error: " . mysqli_connect_errno() . " - " . mysqli_connect_error());
                       }
                       $sql = "SELECT  packages.image, packages.PkgName, packages.PkgStartDate, packages.PkgEndDate, packages.PkgDesc, packages.PkgBasePrice from packages";

                       if ($result = mysqli_query($dbh, $sql))
                       {
                         while ($row = mysqli_fetch_assoc($result))
                         {
                           print("<ul style=\"width: 270px;\">");
                          print("<img src=\"img/pkg-img/". $row['image'] .".jpg\">");
                           //print("<li id=". $row['PackageId'] .">Package offer</li> ");

                           foreach ($row as $col)
                           {
                             print("<li>$col</li>");
                           }
                           print("<li><a class=\"buy_now\" onclick=\"Book($(this).closest('ul').attr('id'))\">Book Now</a></li>");

                           print("</ul>");
                         }
                         mysqli_free_result($result);

}

                       mysqli_close($dbh);
                     ?>


     </section>
    </div>
  </div>
    <!-- ***** Contact Area End ***** -->


    <div id="id02" class="modal">
      <div class="roww">
        <div class="col-755">
          <div id="cont" class="container">
            <form name="myForm1" action="/addBillingDetails.php">
              <span onclick="document.getElementById('id02').style.display='none';document.getElementById('myForm').reset();document.getElementById('myForm1').reset();" class="close" title="Close Modal">&times;</span>
              <div class="roww">
                <div class="col-500">
                  <h3>Billing Address</h3>
                  <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                  <div class="roww">
                    <div class="col-500">
                    <input type="text" id="fname" name="fname" placeholder="First name">
                    </div>
                  <div class="col-500">
                  <input type="text" id="lname" name="lname" placeholder="Last name">
                  </div>
                  </div>
                  <label for="email"><i class="fa fa-envelope"></i> Email</label>
                  <input type="email" id="email" name="email" placeholder="Enter your email">
                  <label for="phoneNo"><i class="fa fa-phone"></i> Phone</label>
                  <input type="text" id="phone" name="phone" placeholder="Enter your phone number">
                  <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                  <input type="text" id="adr" name="address" placeholder="Enter your address">
                  <label for="city"><i class="fa fa-institution"></i> City</label>
                  <div class="roww">
                    <div class="col-500">
                    <input type="text" id="city" name="city" placeholder="City">
                    </div>
                  <div class="col-500">
                  <input type="text" id="country" name="country" placeholder="Country">
                  </div>
                  </div>
                  <div class="roww">
                    <div class="col-500">
                      <label for="state">State/Province</label>
                      <input type="text" id="state" name="state" placeholder="Province">
                    </div>
                    <div class="col-500">
                      <label for="zip">ZIP/POSTAL</label>
                      <input type="text" id="zip" name="zip" placeholder="ZIP code">
                    </div>
                  </div>
                </div>

                <div class="col-500">
                  <h3>Payment</h3>
                  <label for="fname">Accepted Cards</label>
                  <div class="icon-container">
                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                    <i class="fa fa-cc-amex" style="color:blue;"></i>
                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                  </div>
                  <label for="cname">Name on Card</label>
                  <input type="text" id="cname" name="cardname" placeholder="Enter your name on the card">
                  <label for="ccnum">Credit card number</label>
                  <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                  <label for="expmonth">Exp Month</label>
                  <input type="text" id="expmonth" name="expmonth" placeholder="Enter expiry month">
                  <div class="row">
                    <div class="col-500">
                      <label for="expyear">Exp Year</label>
                      <input type="text" id="expyear" name="expyear" placeholder="Expiry year">
                    </div>
                    <div class="col-500">
                      <label for="cvv">CVV</label>
                      <input type="text" id="cvv" name="cvv" placeholder="CVV">
                    </div>
                  </div>
                </div>

      </div>

      <input type="submit" value="Confirm Booking" class="btnn">
    </form>
  </div>
</div>
</div>
</div>

      <script>
      function Book(id) {
        document.getElementById('id02').style.display='block';
        document.getElementById('myForm1').reset();
        //window.location.href = "/bookFlightDB.php?id=" + id;
        return false;
       }
       </script>

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

    <script src="js/bootstrap/bootpopup.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!--<script src="js/google-map/map-active.js"></script>
     Active JS -->
    <script src="js/active.js"></script>
     <!-- Validate JS -->
    <script src="js/validate.js"></script>



</body>

</html>
