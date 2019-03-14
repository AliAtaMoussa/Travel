<?php
	session_start();

	if (isset($_REQUEST["email"]))
	{
		//connect to db
		$sql = "SELECT password FROM agents WHERE AgtEmail=?";
		$mysqli = new mysqli("localhost", "AliMoussa", "password", "travelexperts");
		if (mysqli_connect_errno())
		{
			die("Error: " . mysqli_connect_error());
		}
		$stmt = $mysqli->prepare($sql);
		$stmt->bind_param("s", $_REQUEST["email"]);
		$stmt->execute();
		$result = $stmt->get_result();
		if ($row = $result->fetch_row())
		{
			if ($row[0] != $_REQUEST["psw"])
			{
				$_SESSION["message"] = "User Id or password is incorrect";
				$mysqli->close();

				header("Location: loginFirst.html");
				exit;
			}
			else
			{
				$_SESSION["loggedin"] = True;
				if (isset($_SESSION["returnpage"]))
				{
					$returnpage = $_SESSION["returnpage"];
				}
				else
				{
					$returnpage = "indexSignIn.php?email=".$_REQUEST["email"]."";
				}
				unset($_SESSION["returnpage"]);
				$mysqli->close();
				header("Location: $returnpage");
			}
		}
		else
		{
			$_SESSION["message"] = "User Id or password is incorrect";
			$mysqli->close();
			header("Location: loginFirst.html");
			exit;
		}
	}
	else
	{
		$_SESSION["message"] = "You must log in first.";
		header("Location: loginFirst.html");
		exit;
	}
?>
