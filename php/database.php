<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "user";

$conn = new mysqli($hostname, $username, $password, $dbname);
if(mysqli_connect_error()) {
    die("connection failed: ".mysqli_connect_error());
} else {
    echo "connection successfull";
}

?>