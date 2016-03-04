<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "dwayne";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if (mysqli_connect_errno()) 
{
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>