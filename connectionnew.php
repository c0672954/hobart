<?php
$servername = "localhost";
$myusername = "root";
$mypassword = "";
$db = "lambtonkit";

// Create connection
$con = mysqli_connect($servername, $myusername, $mypassword, $db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>