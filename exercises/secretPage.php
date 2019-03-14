<?php
	session_start();
	
	if (! $_SESSION["loggedin"])
	{
		$_SESSION["message"] = "You must login first";
		$_SESSION["returnpage"] = "secretpage.php";
		header("Location: login.php");
	}
?>
<!DOCTYPE html>
<html>
	<body>
		<h1>Congratulations! You know the secret.</h1>
	</body>
</html>