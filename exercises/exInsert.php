<?php
function insertAgent($agent){

$sql = "INSERT INTO 'agents' ('AgentId', 'AgtFirstName', 'AgtMiddleInitial', 'AgtLastName', 'AgtBusPhone', 'AgtEmail', 'AgtPosition', 'AgencyId') VALUES (NULL, ?, ?, ?, ?, ?, ?, ?)";
$dbh = mysqli_connect("localhost", "AliMoussa", "password", "travelexperts");
if (!$dbh) {
		die("Error: ".mysqli_connect_errno()."-".mysqli_connect_error());
	}
	
$stmt = mysqli_prepare($dbh, $sql);
if(! $stmt)
{
	die("Error: " .mysqli_error($dbh));
}
mysqli_stmt_bind_params($stmt,"ssssssi",$agent['AgtFirstName'], $agent['AgtMiddleInitial'],$agent['AgtLastName'],$agent['AgtBusPhone'],$agent['AgtEmail'],$agent['AgtPosition'],$agent['AgencyId']);
mysqli_stmt_exceute($stmt);
if(mysqli_stmt_affected_rows($stmt))
{
	mysqli_close($dbh);
	return true;
	}
	else
	{
	mysqli_close($dbh);
	return false;
	}
}


?>

