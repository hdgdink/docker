<?php
$servername = "efpdb.c5fqlwkl0eso.us-east-1.rds.amazonaws.com";
$username = "root";
$password = "rootroot";
$hostname = gethostname();
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("$hostname: connection failed (" . $conn->connect_error . ")");
}
echo "$hostname: successfully connected to $servername";
?>
