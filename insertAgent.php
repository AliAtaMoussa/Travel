<?php
session_start();

$dbh = @mysqli_connect("localhost","AliMoussa","password","travelexperts");
if (! $dbh)
{
	die("Error: " . mysqli_connect_errno() . " - " . mysqli_connect_error());
}

//(`AgentId`, `AgtFirstName`,  `AgtLastName`, `AgtBusPhone`, `AgtEmail`,  `password`)
$sql = "INSERT INTO `agents`(`AgentId`, `AgtFirstName`,  `AgtLastName`, `AgtBusPhone`, `AgtEmail`,  `password`) VALUES (NULL, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($dbh, $sql);
mysqli_stmt_bind_param($stmt, 'sssss', $_REQUEST["AgtFirstName"], $_REQUEST["AgtLastName"], $_REQUEST["AgtBusPhone"], $_REQUEST["AgtEmail"], $_REQUEST["password"]);


/* execute prepared statement */
mysqli_stmt_execute($stmt);

header("Location: agentInserted.html");

/* close statement and connection */
mysqli_stmt_close($stmt);


/* close connection */
mysqli_close($dbh);

?>
