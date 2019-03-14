<?php
	session_start();
	
	if (isset($_REQUEST["userid"]))
	{
		$users = file("users.txt");
		foreach ($users as $user)
		{
			//explode into $u and $p
			//hint: $p may have a newline on it, chop() to remove newline
			if ($_REQUEST["userid"] == $u && $_REQUEST["password"] == $p)
			{
				$_SESSION["loggedin"] = True;
				header("Location: day12example2.php");
			}
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
	
	</head>
	<body>
		<form>
			UserId:<input type="text" name="userid" /><br />
			Password:<input type="password" name="password" /><br />
			<input type="submit" />
		</form>
	</body>
</html>