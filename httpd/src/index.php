<?php
$servername = '{{getenv "MYSQL_HOSTNAME"}}';
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
