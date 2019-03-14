<!DOCTYPE html>
<?php
$hour = date("G");
?>
<html>
	<head>
		<title>Example</title>
	</head>
	<body>
			<h1>

			<?php
			printf($hour);
				if($hour < 8)
				{
				print("Night");
				}
				elseif($hour < 12)
				{
					print("Morning");
				}
				elseif($hour < 18){
					print("Afternoon");
				}
				else
				{
				print("Evening");
				}
			?>
			</h1>
	</body>
</html>
