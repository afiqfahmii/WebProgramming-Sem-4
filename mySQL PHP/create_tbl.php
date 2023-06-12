<?php


// Create a connection
$conn = mysqli_connect("localhost", "root", "", "db_afiq");

// Check connection
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}

// Create the table
$sql = "CREATE TABLE Persons (
    FirstName varchar(15),
    LastName varchar(15),
    Age int
)";

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>
