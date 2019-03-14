<!DOCTYPE html>
<html>
	<head>
		<title>Example</title>
	</head>
	<body>
		<h1>Example page</h1>
<form action="#" method="get">
                                    <select class="custom-select">
                                        <option selected>Your Destinations</option>


                                        <?php
                                            	$dbh = @mysqli_connect("localhost","AliMoussa","password","travelexperts");
                                            	if (! $dbh)
                                            	{
                                            		die("Error: " . mysqli_connect_errno() . " - " . mysqli_connect_error());
                                            	}
                                            	
                                            	$sql = "SELECT classes.ClassName FROM classes;";
						
                                            	if ($result = mysqli_query($dbh, $sql))
                                            	{

                                            		while ($row = mysqli_fetch_assoc($result))
                                            		{

                                            			foreach ($row as $col)
                                            			{
                                            				print("<option>$col</option>");
                                            			}
                                            		}

                                            		mysqli_free_result($result);
                                            	}

                                            	mysqli_close($dbh);
                                            ?>
                                        <!--<option value="1">New York</option>
                                        <option value="2">Latvia</option>
                                        <option value="3">Dhaka</option>
                                        <option value="4">Melbourne</option>
                                        <option value="5">London</option>
                                      -->

                                    </select>

	</body>
</html>
