<?php
include "config.php";
$id = '';
if( isset( $_GET['id'])) {
    $id = $_GET['id'];
}
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$adr = $_GET['address'];
$city = $_GET['city'];
$state = $_GET['state'];
$zip = $_GET['zip'];
$phone = $_GET['phone'];
$email = $_GET['email'];
$CCName =  $_GET['cardname'];
$CCNumber =  $_GET['cardnumber'];
$CCExpirey = $_GET['expyear'].'"-"'.$_GET['expmonth'];
$CVV = $_GET['cvv'];

$sql = "INSERT into customers (CustFirstName, CustLastName, CustAddress, CustCity, CustProv, CustPostal, CustBusPhone, CustEmail)
VALUES('".$fname."', '".$lname."', '".$adr."', '".$city."', '".$state."', '".$zip."', '".$phone."', '".$email."')";

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


  //////////////////
  $sql = "select CustomerId from customers where CustBusPhone = '".$phone."' ";
  if ($result = mysqli_query($dbh, $sql))
  {

    while ($row = mysqli_fetch_assoc($result))
    {

      foreach ($row as $col)
      {

        $sql = "INSERT into creditCards (CCName, CCNumber, CCExpiry, CVV, CustomerId)
        VALUES('".$CCName."', '".$CCNumber."', '".$CCExpirey."', '".$CVV."', '".$col."')";

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
      }
    }

  /*  $to = "ali.moussa@shaw.ca";
    $subject = "Flight Booked";
    $txt = "Hello! Your Flight is booked.Enter always to your acount and check the details. Thank you for choosing Travel Experts! Ejoy your Trip with the real Experts!";
    $headers = "From: moussaali1988@gmail.com" . "\r\n" .";

    mail($to,$subject,$txt,$headers);*/

    header("Location: flightBooked.php?id=".$col);
    mysqli_free_result($result);
  }
  ////////////////////
  mysqli_close($dbh);

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
