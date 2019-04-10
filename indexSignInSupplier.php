<?php
session_start();
?>


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

    <link rel="stylesheet" href="css/responsive/searchResultsStyle.css">

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/bootstrap-table.min.css">

    <script type="text/javascript" src="//code.jquery.com/jquery.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/bootstrap-table.min.js"></script> -->
    <script type="text/javascript" src="formhandler.js"></script>

</head>

<body>




    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <nav class="h-100 navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.php"><img style="position:absolute;top:15px;"src="img/core-img/logo1.png" alt=""></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                            <!-- Nav -->
                            <div class="collapse navbar-collapse" id="dorneNav">
                                <div class="dorne-add-listings-btn">
                                  <button onclick="location.href='index.php'" class="btn dorne-btn float-right"><i  class="fa fa-sign-out btn" aria-hidden="true"></i>Sign out</button>

                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    <!-- ***** Header Area End ***** -->

    <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
    </style>

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/design2.jpg)">
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Contact Area Start ***** -->
    <div class="dorne-contact-area d-md-flex" id="contact">
    <section class="container">
         <h2>Packages appeared in the search: </h2>
           <p>Please modify your currently offered packages or add one to the database</p>

                                <!-- this button modal will add additional flight for the selected user -->

           <button class="btn dorne-btn" type="button" data-toggle="modal" data-target="#myModal">Add A Flight</button>
           <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Add Flight Details</h4>
        </div>
    <div class="modal-body">
                                            <!--  This form will gather the information to add to the database -->
<form>

    <div class="form-group col-xs-6">
        <label for="supIdo"  id="supIdo" name="supIdo">Supplier:</label>
        <input type="text" class="form-control" id="supId" name="supId"  value="<?php print($_GET["supId"]); ?>" >
    </div>
    <div id="alert-field" class="alert hidden">
      <p>Uh oh! Something went wrong!</p>
    </div>
    <div class="form-group col-xs-6">
      <label for="name">Destination</label>
      <input type="text" class="form-control" id="dest" name="destination" placeholder="destination" required>
    </div>


    <div class="form-group col-xs-6">
      <label for="price">Price</label>
      <input type="text" class="form-control" id="price" name="price" placeholder="price" required>
    </div>

    <div class="form-group col-xs-6">
      <label for="class">Class</label>
      <input type="text" class="form-control" id="class" name="class" placeholder="class" col="3" required>
    </div>

    <div class="form-group col-xs-6">
      <label for="date">Departure Time</label>
      <input type="date" class="form-control" id="departureTime" name="getdate" placeholder="departure time" col="3" required>
    </div>

    <div class="form-group col-xs-6">
      <label for="arrivalTime">Arrival time</label>
      <input type="date" class="form-control" id="arrivalTime" name="arrivalTime" placeholder="Arrival Time" col="3" required>
    </div>

    <div class="form-group col-xs-6">
      <label for="commision">Agency commission</label>
      <input type="number" class="form-control" id="commision" name="agencyCommision" placeholder="commision amount" col="3" required>
    </div>

    <div class="form-group col-xs-6">
      <label for="itenaryNumber">Itenary Number</label>
      <input type="number" class="form-control" id="itenaryNumber" name="itenaryNumber" placeholder="Itenary Number" col="3" required>
    </div>

    <div class="form-group col-xs-12">
      <button onclick="function(addFlight)" type="submit" id="addFlight" class="btn btn-primary btn-lg btn-block">Submit</button>
    </div>

  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="dorne-contact-area d-md-flex" id="contact">
  <section class="container">
         <div>
               <?php
                       $dbh = @mysqli_connect("localhost","root","","travelexperts");
                       if (! $dbh)
                       {
                         die("Error: " . mysqli_connect_errno() . " - " . mysqli_connect_error());
                       }

                    //    $select1 = $_GET["supplierName"];

                       $supId = $_GET["supId"];


                        $sql = "SELECT  bookingdetails.Destination, bookingdetails.BasePrice,
                        bookingdetails.AgencyCommission,  bookingdetails.BookingDetailId
                        from bookingdetails  where bookingdetails.ProductSupplierId = $supId";



                           if ($result = mysqli_query($dbh, $sql))
                           {
                            print("<table id=\"tableId\" name=\"tableName\" data-toggle=\"table\" data-classes=\"table table-hover table-condensed\" data-striped=\"true\" data-sort-name=\"Destination\" data-sort-order=\"desc\">");
                              print("<thead>");
                                print("<tr>");
                                   print("<th class=\"col-xs-1\" data-field=\"Destination\" data-sortable=\"true\">Destination</th>");
                                   print("<th class=\"col-xs-1\" data-field=\"BasePrice\" data-sortable=\"true\">Price</th>");
                                   print("<th class=\"col-xs-1\" data-field=\"AgencyCommission\" data-sortable=\"true\">Agency Commission</th>");
                                   print("<th class=\"col-xs-1\" data-field=\"flightNumber\" data-sortable=\"true\">Flight Number</th>");
                               print("</tr>");
                             print("</thead>");
                             print("<tbody>");

                             while ($row = mysqli_fetch_assoc($result))
                             {

                                  print("<tr  id=\"tr-id-2\" class=\"tr-class-2\"> ");
                                  foreach($row as $col){
                                    print("<td>$col</td>");
                                  }
                                    //print("<td><button onclick=\"function(removeFlight)\" id=\"removeFlight\" type=\"button\" class=\"btn btn-danger btn-rounded btn-sm my-2\">Delete</button></td>");

                             }

                             print("</tbody>");
                             print("</table>");
                             mysqli_free_result($result);

                           }

                           mysqli_close($dbh);
                         ?>





     </section>
    </div>
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


    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>


	<!--<script src="js/google-map/map-active.js"></script>
     Active JS -->
    <script src="js/active.js"></script>
     <!-- Validate JS -->
    <script src="js/others/validate.js"></script>
</body>

</html>
