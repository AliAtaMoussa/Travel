<?php
	if (isset($_REQUEST["phone"]))
	{
		// (403) 555-5555
		$pattern = "/\((\d{3})\) ?\d{3}-(\d{4})/i";
		if (preg_match_all($pattern, $_REQUEST["phone"], $match))
		{
			print_r($match);
			$file = fopen("phonenums.txt","a");
			for ($i=0; $i<count($match[0]); $i++)
			{
				fwrite($file, $match[0][$i] . "\n");
			}
			fclose($file);
		}
		else
		{
			print("no match");
		}
		print(preg_replace($pattern, "xxxxxxxxxx", $_REQUEST["phone"]));
	}
?>
<!DOCTYPE html>
<html>
	<head>
	
	</head>
	<body>
		<form>
			Phone number:<input type="text" name="phone" />
			<input type="submit" />
		</form>
	</body>
</html>