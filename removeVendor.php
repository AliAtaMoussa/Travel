<?php
session_start();

$supplierId = $_REQUEST['supplierId'];


$sql = "delete from bookingdetails where ProductSupplierId = ".$supplierId;
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
