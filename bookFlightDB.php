<?php
include "config.php";
$id = '';
if( isset( $_GET['id'])) {
    $id = $_GET['id'];
}
print($id);
$sql = "UPDATE bookingdetails SET Booking = 'Booked' WHERE bookingdetails.BookingDetailId = '".$id."'";
//echo $sql;
  $dbh = mysqli_connect($host,$user,$pwd,$db);
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
  mysqli_close($dbh);
  header("Location: flightBooked.php?id=".$id);
  /*if (mysqli_stmt_affected_rows($stmt))
  {
    mysqli_close($dbh);
    header("Location: flightBooked.php");
    return true;
  }
  else
  {
    mysqli_close($dbh);
    return false;
  }*/
?>
