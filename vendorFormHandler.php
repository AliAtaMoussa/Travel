<?php
session_start();

$destination = $_REQUEST['destination'];
$price = $_REQUEST['price'];
$description = $_REQUEST['description'];
$className = $_REQUEST['className'];
$commision = $_REQUEST['commision'];
// $supplierName = $_REQUEST['supplier'];
$supplierId = $_REQUEST['supplierId'];
$departureTime = $_REQUEST['departureTime'];
$arrivalTime =  $_REQUEST['arrivalTime'];
$itenary =  $_REQUEST['itenary'];

$sql = "INSERT into bookingdetails (Destination, BasePrice, Description, AgencyCommission,TripStart,TripEnd,ItineraryNo, ProductSupplierId)
VALUES('".$destination."', '".$price."', '".$description."', '".$commision."', '".$departureTime."', '".$arrivalTime."', '".$itenary."', '".$supplierId."')";
    print($sql);
    $dbh = @mysqli_connect("localhost","root","","travelexperts");
  if (! $dbh)
  {
    die ("Error: " . mysqli_connect_errno() . " - " . mysqli_connect_error());
  }
  $stmt = mysqli_prepare($dbh, $sql);
  if (! $stmt)
  {
    die ("Error: " . mysqli_error($dbh));
  }
  mysqli_stmt_execute($stmt);
  if (mysqli_error($dbh))
  {
    print("Statement has an error: " . mysqli_error());
  }
  
  ?>
