<?php
$servername = getenv (MYSQL_HOSTNAME);
$username = getenv (MYSQL_USER);
$password = getenv (MYSQL_PASSWORD);
$hostname = gethostname();
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("$hostname: connection failed (" . $conn->connect_error . ")");
}
echo "$hostname: successfully connected to $servername";
?>
