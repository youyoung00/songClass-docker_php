<?php
$servername = "host.docker.internal";
$username = "you889";
$password = "semin";
$mysql_database = 'you889db';
$mysql_port = '52000';
$mysql_charset = 'UTF8';

// Create connection
$conn = new mysqli($servername, $username, $password,$mysql_database, $mysql_port, $mysql_charset);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



$sql = "
INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

$conn->query($sql);

$conn->close();


?>