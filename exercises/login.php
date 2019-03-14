<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
	</head>
	<body>
		<h2 style="color:red;">
			<?php
				if (isset($_SESSION["message"]))
				{
					print($_SESSION["message"]);
					unset($_SESSION["message"]);
				}
			?>
		</h2>
		<form method="get" action="checklogin.php">
			User ID:<input type="text" name="userid" /><br />
			Password:<input type="password" name="password" /><br />
			<input type="submit" value="Log In" />
		</form>
	</body>
</html>