<?php

include("exInsert.php");

	$data = array("AgtFirstName"=>"fred", "AgtMiddleInitial"=>"J", "AgtLastName"=>"smith","AgtBusPhone"=>"403-452-4125","AgtEmail"=>"fred@sss.ca","AgtPosition"=>"Agent","AgencyId"=>"1");
	if(insertAgent($data))
	{
		print("Data inserted successfully");
	}
	else{
		print("Something went wrong");
	}
?>