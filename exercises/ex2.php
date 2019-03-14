<?php
$package_name = "two weeks in calgary";
$price = 25.14;
$num_of_travelers = 42;
define("GST", 5/100);
$tax = ($price * $num_of_travelers) * GST;
$url

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Suscribe</title>
	</head>
	<body>
			<h1>Travel Receipt: <?php print("$package_name sells for $$price and has been sold for $num_of_travelers people. <br/>");?></h1>
			<p>Tax ammount: <?php print($tax);?></p>
			<p>GST rate:  <?php print(GST);?></p>
			
			<?php $first = "Fred"; $last = "Smith"; printf("First name is %s, and last name is %s.", $first, $last); ?> 

	</body>
</html>
