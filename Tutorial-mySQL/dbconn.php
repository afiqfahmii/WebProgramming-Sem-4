<?php
// login to mySQL Server from PHP
$conn = mysqli_connect("localhost", "root","","my_tutorial");

// Check if the connection was successful
if (!$conn) {
    die("Error while connecting to MySQL: " . mysqli_connect_error());
}

// Check if the database selection was successful
if (!mysqli_select_db($conn, "my_tutorial")) {
    die("Cannot use database: " . mysqli_error($conn));
}
?>