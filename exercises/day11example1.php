<?php
	$mysqli = new mysqli("localhost", "AliMoussa", "password", "travelexperts");
	if (mysqli_connect_error())
	{
		print("Error: " . mysqli_connect_error());
		exit();
	}
	$sql = "SELECT AgencyId, AgncyAddress, AgncyCity FROM agencies";
	$result = $mysqli->query($sql);
	$agency = "<select name='AgencyId'>";
	while ($row = $result->fetch_row())
	{
		$agency .= "<option value=$row[0]>$row[1] $row[2]</option>";
	}
	$agency .= "</select>";
	$mysqli->close();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Example</title>
	</head>
	<body>
		<h1>Agent Entry Page</h1>
		<form method="get" action="day11example1-2.php">
		<!-- todo: add form validation return values to form fields -->
			First Name:<input type="text" name="AgtFirstName" value="" /><br />
			Middle Initial:<input type="text" name="AgtMiddleInitial" /><br />
			Last Name:<input type="text" name="AgtLastName" /><br />
			Phone:<input type="text" name="AgtBusPhone" /><br />
			Email:<input type="text" name="AgtEmail" /><br />
			Position:<input type="text" name="AgtPosition" /><br />
			Agency Id:<?php print($agency); ?><br />
			<input type="submit" value="Send" /><br />
		</form>
	</body>
</html>