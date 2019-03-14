<?php
	include("functions.php");
	
	function validate($data)
	{
		$message = "";
		foreach($data as $k=>$v)
		{
			if ($v == "")
			{
				$message .= "$k must have a value<br />";
			}
		}
		return $message;
	}
	
	if (isset($_REQUEST["AgtFirstName"]))
	{
		$messages = validate($_REQUEST);
		if ($messages == "")
		{
			if (updateAgent($_REQUEST))
			{
				print("Data inserted successfully");
			}
			else
			{
				print("Insert failed");
			}
		}
		//add session variable to store the message
		//store the data in the session to load into form
		header("Location: day11example1.php");
	}
	else
	{
		header("Location: day11example1.php");
	}
?>