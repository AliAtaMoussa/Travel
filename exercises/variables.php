<?php
	$host = "localhost";
	$user = "AliMoussa";
	$pwd = "password";
	$db = "travelexperts";

	$num_uses = 0;
	$package_name = "two weeks in Red Deer";
	$price = 25.1987612345;
	$number_of_travellers = 42;
	define("GST", .05);
	//GST = .05;
	
	$mystring = sprintf("Package: %50.100s sells for $%9.2f and has been sold to %d people.<br />", $package_name, $price, $number_of_travellers);
	//$urls = array("BC"=>"https://www2.gov.bc.ca");
	
	$urls["BC"] = "https://www2.gov.bc.ca";
	$urls["Alberta"] = "https://www.alberta.ca/index.aspx";
	$urls["SK"] = "https://www.saskatchewan.ca/
";
	$urls["Manitoba"] = "https://www.gov.mb.ca/index.html";
	$u = "user4";
	$p = "pass4";
?>
