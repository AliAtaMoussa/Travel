<?php
	session_start();
	
	if (isset($_REQUEST["userid"]))
	{
		$users = file("users.txt");
		$userdata = array();
		foreach ($users as $user)
		{
			list($u, $p) = explode(",", $user);
			$userdata[$u] = rtrim($p);
		}
		if (array_key_exists($_REQUEST["userid"], $userdata))
		{
			if ($userdata[$_REQUEST["userid"]] == $_REQUEST["password"])
			{
				$_SESSION["loggedin"] = false;
				
				if (isset($_SESSION["returnpage"]))
				{
					$returnpage = $_SESSION["returnpage"];
				}
				else
				{
					$returnpage = "index.php";
				}
				unset($_SESSION["returnpage"]);
				header("Location: $returnpage");
			}
			else
			{
				$_SESSION["message"] = "User Id or password is incorrect";
				header("Location: login.php");
			}
		}
		else
		{
			$_SESSION["message"] = "User Id or password is incorrect";
			header("Location: login.php");

		}
	}
	else
	{
		header("Location: login.php");
	}
?>