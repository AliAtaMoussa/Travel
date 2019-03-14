 <?php
$servername = "localhost";
$username = "AliMoussa";
$password = "password";
$dbname = "travelexperts";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE agents SET AgtPosition='Senior Agent' WHERE AgentId=1";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?> 