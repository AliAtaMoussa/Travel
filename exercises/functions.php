<?php
function connectDB($h, $u, $p, $d)
{
	$mysqli = new mysqli($h, $u, $p, $d);
	if (mysqli_connect_error())
	{
		print("Error: " . mysqli_connect_error());
		exit();
	}
	return $mysqli;
}

function selectAgency($mysqli)
{
	$sql = "SELECT AgencyId, AgncyAddress, AgncyCity FROM agencies";
	$result = $mysqli->query($sql);
	$agency = "<select name='AgencyId'>";
	while ($row = $result->fetch_row())
	{
		$agency .= "<option value=$row[0]>$row[1] $row[2]</option>";
	}
	$agency .= "</select>";
	return $agency;
}

function selectAgents($mysqli)
{
	$sql = "SELECT AgentId, AgtFirstName, AgtLastName FROM agents";
	$result = $mysqli->query($sql);
	$agents = "<select name='AgentId' onchange='getAgent(this.value)'>";
	$agents .= "<option value=''>Select an Agent</option>";
	while ($row = $result->fetch_row())
	{
		$agents .= "<option value=$row[0]>$row[1] $row[2]</option>";
	}
	$agents .= "</select>";
	return $agents;
}
function insertAgent($agent)
{
	$sql = "INSERT INTO `agents` (`AgentId`, `AgtFirstName`, `AgtMiddleInitial`, `AgtLastName`, `AgtBusPhone`, `AgtEmail`, `AgtPosition`, `AgencyId`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?)";
	$dbh = mysqli_connect("localhost", "AliMoussa", "password", "travelexperts");
	if (! $dbh)
	{
		die ("Error: " . mysqli_connect_errno() . " - " . mysqli_connect_error());
	}
	$stmt = mysqli_prepare($dbh, $sql);
	if (! $stmt)
	{
		die ("Error: " . mysqli_error($dbh));
	}
	mysqli_stmt_bind_param($stmt, "ssssssi", $agent['AgtFirstName'], $agent['AgtMiddleInitial'], $agent['AgtLastName'], $agent['AgtBusPhone'], $agent['AgtEmail'], $agent['AgtPosition'], $agent['AgencyId']);
	mysqli_stmt_execute($stmt);
	if (mysqli_error($dbh))
	{
		print("Statement has an error: " . mysqli_error());
	}
	if (mysqli_stmt_affected_rows($stmt))
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

function updateAgent($agent)
{
	$sql = "UPDATE `agents` SET (`AgtFirstName`=?, `AgtMiddleInitial`=?, `AgtLastName`=?, `AgtBusPhone`=?, `AgtEmail`=?, `AgtPosition`=?, `AgencyId`=?) WHERE AgentId=?";
	$dbh = mysqli_connect("localhost", "harv", "password", "travelexperts");
	if (! $dbh)
	{
		die ("Error: " . mysqli_connect_errno() . " - " . mysqli_connect_error());
	}
	$stmt = mysqli_prepare($dbh, $sql);
	if (! $stmt)
	{
		die ("Error: " . mysqli_error($dbh));
	}
	mysqli_stmt_bind_param($stmt, "ssssssii", $agent['AgtFirstName'], $agent['AgtMiddleInitial'], $agent['AgtLastName'], $agent['AgtBusPhone'], $agent['AgtEmail'], $agent['AgtPosition'], $agent['AgencyId'], $agent['AgentId']);
	mysqli_stmt_execute($stmt);
	if (mysqli_error($dbh))
	{
		print("Statement has an error: " . mysqli_error());
	}
	if (mysqli_stmt_affected_rows($stmt))
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
/*


*/
function calcGST($p, $numtrav, $gst)
{
	global $num_uses;
	$num_uses++;
	print("in calcGST: $num_uses");
	return ($p * $numtrav) * $gst;
	//return $tax;
}

?>