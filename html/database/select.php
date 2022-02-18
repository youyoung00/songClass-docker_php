<?php
// $servername = "host.docker.internal";
// $username = "db_id";
// $password = "db_password";
// $mysql_database = 'db_name';
// $mysql_port = '52000';
// $mysql_charset = 'UTF8';

include "conn.php";

// Create connection
// $conn = new mysqli($servername, $username, $password,$mysql_database, $mysql_port, $mysql_charset);


$sql = "
SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

// if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
// } else {
//   echo "0 results";
// }

$conn->close();


?>