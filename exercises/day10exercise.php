<?php
	include("functions.php");
	
	$data = array("AgtFirstName"=>"john", "AgtMiddleInitial"=>"J", "AgtLastName"=>"doe", "AgtBusPhone"=>"403-555-5555", "AgtEmail"=>"fred@smith.com", "AgtPosition"=>"Agent", "AgencyId"=>1);
	if (insertAgent($data))
	{
		print("Data inserted successfully");
	}
	else
	{
		print("Insert failed");
	}
?>