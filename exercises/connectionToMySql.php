<!DOCTYPE html>
<html>
	<head>
		<title>Example</title>
	</head>
	<body>
			<h1>Getting data from sql tables:</h1>
			
			<?php
	$dbh = @mysqli_connect("localhost", "AliMoussa", "password", "travelexperts");
	if (!$dbh) {
		die("Error: ".mysqli_connect_errno()."-".mysqli_connect_error());
	}	
	//print("Connected successfully");
	$sql = "select * from agents";
	if($result = mysqli_query($dbh, $sql))
	{
		print("<table>");
		while($row = mysqli_fetch_assoc($result))
		{
			print("<tr>");
			foreach($row as $col)
			{
				print("<td>$col</td>");
			}
			print("</tr>");
		}
		print("</table>");
		mysqli_free_result($result);
	}
		
	mysqli_close($dbh);

?>

			
			
	</body>
</html>
