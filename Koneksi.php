<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "topup_game";

// Create connection
$connect = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>