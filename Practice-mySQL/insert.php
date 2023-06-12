<?php
// create connection
$con = mysqli_connect("localhost", "root", "", "my_afiq");
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// escape user inputs to prevent SQL injection
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$age = mysqli_real_escape_string($con, $_POST['age']);

// attempt to insert the values into the database
$sql = "INSERT INTO Persons (FirstName, LastName, Age) VALUES ('$firstname', '$lastname', '$age')";
if (mysqli_query($con, $sql)) {
    echo "1 record added";
} else {
    die('Error: ' . mysqli_error($con));
}

// close the database connection
mysqli_close($con);
?>
