<?php
	include("variables.php");
	include("functions.php");
	if (isset($_REQUEST["AgentId"]))
	{
		$mysqli = connectDB($host, $user, $pwd, $db);
		if (mysqli_connect_error())
		{
			print(mysqli_connect_error());
			exit;
		}
		$sql = "SELECT * FROM agents WHERE AgentId = ?";
		$stmt = $mysqli->prepare($sql);
		$stmt->bind_param("i", $_REQUEST["AgentId"]);
		$stmt->execute();
		$result = $stmt->get_result();
		while ($row = $result->fetch_assoc())
		{
			//print_r($row);
			print("{\"AgentId\":$row[AgentId], \"AgtFirstName\":\"$row[AgtFirstName]\", \"AgtMiddleInitial\":\"$row[AgtMiddleInitial]\", \"AgtLastName\":\"$row[AgtLastName]\", \"AgtBusPhone\":\"$row[AgtBusPhone]\", \"AgtEmail\":\"$row[AgtEmail]\", \"AgtPosition\":\"$row[AgtPosition]\", \"AgencyId\":$row[AgencyId]}");
		}
		$mysqli->close();
	}
	
?>