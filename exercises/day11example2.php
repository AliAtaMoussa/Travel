<?php
	include "variables.php";
	include "functions.php";
	
	$mysqli = connectDB($host, $user, $pwd, $db);

	//$mysqli->close();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Example</title>
		<script>
			var req;
			var agent;
			function getAgent(agentId)
			{
				console.log("getAgent: " + agentId);
				req = new XMLHttpRequest();
				var url = "/getagent.php?AgentId=" + agentId;
				req.open("get", url);
				req.onreadystatechange=handleResponse;
				req.send(null);
			}
			
			var handleResponse = function(){
				console.log("handleResponse");
				if (req.readyState == 4)
				{
					console.log("handleResponse: " + req.responseText);
					agent = JSON.parse(req.responseText);
					document.getElementById("AgentId").value = agent.AgentId;
					document.getElementById("AgtFirstName").value = agent.AgtFirstName;
					document.getElementById("AgtMiddleInitial").value = agent.AgtMiddleInitial;
					document.getElementById("AgtLastName").value = agent.AgtLastName;
					document.getElementById("AgtBusPhone").value = agent.AgtBusPhone;
					document.getElementById("AgtEmail").value = agent.AgtEmail;
					document.getElementById("AgtPosition").value = agent.AgtPosition;
				}
			}
		</script>
	</head>
	<body>
		<h1>Agent Update Page</h1>
		Select an Agent to update:
		<?php
			print(selectAgents($mysqli));
		?>
		<form method="get" action="day11example1-2.php">
			<input type="hidden" name="AgentId" id="AgentId" />
		<!-- todo: add form validation return values to form fields -->
			First Name:<input type="text" name="AgtFirstName" id="AgtFirstName" value="" /><br />
			Middle Initial:<input type="text" name="AgtMiddleInitial" id="AgtMiddleInitial" /><br />
			Last Name:<input type="text" name="AgtLastName" id="AgtLastName" /><br />
			Phone:<input type="text" name="AgtBusPhone" id="AgtBusPhone" /><br />
			Email:<input type="text" name="AgtEmail" id="AgtEmail" /><br />
			Position:<input type="text" name="AgtPosition" id="AgtPosition" /><br />
			Agency Id:<?php print(selectAgency($mysqli)); ?><br />
			<input type="submit" value="Send" /><br />
		</form>
	</body>
</html>