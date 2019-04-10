<?php
	session_start();
  include "config.php";
	$account = $_REQUEST["accountSelect"];
	if (isset($_REQUEST["userName"]))
	{
		if($account == "Customer"){
			//connect to db
			$sql = "SELECT Password FROM customers WHERE UserName=?";
			$mysqli = new mysqli($host,$user,$pwd,$db);
			if (mysqli_connect_errno())
			{
				die("Error: " . mysqli_connect_error());
			}
			$stmt = $mysqli->prepare($sql);
			$stmt->bind_param("s", $_REQUEST["userName"]);
			$stmt->execute();
			$result = $stmt->get_result();
			if ($row = $result->fetch_row())
			{
				if ($row[0] != $_REQUEST["psw"])
				{
					$_SESSION["message"] = "User Id or Password is incorrect";
					$mysqli->close();

					header("Location: index.php");
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
							$returnpage = "indexSignInCustomer.php?userName=".$_REQUEST["userName"]."";
					}
					unset($_SESSION["returnpage"]);
					$mysqli->close();
					header("Location: $returnpage");
				}
			}

			else
			{
				$_SESSION["message"] = "User Id or Password is incorrect";
				$mysqli->close();
				header("Location: index.php");
				exit;
			}
		}
		elseif ($account == "Agent") {
			//connect to db
			$sql = "SELECT Password FROM agents WHERE UserName=?";
			$mysqli = new mysqli($host,$user,$pwd,$db);
			if (mysqli_connect_errno())
			{
				die("Error: " . mysqli_connect_error());
			}
			$stmt = $mysqli->prepare($sql);
			$stmt->bind_param("s", $_REQUEST["userName"]);
			$stmt->execute();
			$result = $stmt->get_result();
			if ($row = $result->fetch_row())
			{
				if ($row[0] != $_REQUEST["psw"])
				{
					$_SESSION["message"] = "User Id or Password is incorrect";
					$mysqli->close();

					header("Location: index.php");
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
						$returnpage = "indexSignInAgent.php?userName=".$_REQUEST["userName"]."";
					}
					unset($_SESSION["returnpage"]);
					$mysqli->close();
					header("Location: $returnpage");
				}
			}
			else
			{
				$_SESSION["message"] = "User Id or Password is incorrect";
				$mysqli->close();
				header("Location: index.php");
				exit;
			}
		}


		elseif ($account == "Supplier") {
			//connect to db
			$sql = "SELECT Password, SupplierId FROM suppliers WHERE UserName=?";
			//print($sql);
			$mysqli = new mysqli($host,$user,$pwd,$db);
			if (mysqli_connect_errno())
			{
				die("Error: " . mysqli_connect_error());
			}
			$stmt = $mysqli->prepare($sql);
			$stmt->bind_param("s", $_REQUEST["userName"]);
			$stmt->execute();
			$result = $stmt->get_result();
			if ($row = $result->fetch_row())
			{
				if ($row[0] != $_REQUEST["psw"])
				{
					$_SESSION["message"] = "User Id or Password is incorrect";
					$mysqli->close();

					header("Location: index.php");
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
						$returnpage = "indexSignInSupplier.php?userName=".$_REQUEST["userName"]."&supId=$row[1]";
					}
					unset($_SESSION["returnpage"]);
					$mysqli->close();
					header("Location: $returnpage");
				}
			}
			else
			{
				$_SESSION["message"] = "User Id or Password is incorrect";
				$mysqli->close();
				header("Location: index.php");
				exit;
			}
		}
	}

?>
