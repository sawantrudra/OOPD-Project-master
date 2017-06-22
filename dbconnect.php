<?php
$servername = "localhost";
$username = "root";
$password = "";
$db= "oopd";
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>