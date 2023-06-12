<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <?php


    // Create a connection
    $conn = mysqli_connect("localhost", "root", "", "my_afiq");

    // Check connection
    if (!$conn) {
        die('Could not connect: ' . mysqli_error($conn));
    }

    // Insert data into the table
    mysqli_query($conn, "INSERT INTO Persons (FirstName, LastName, Age) VALUES ('Peter', 'Griffin', '35')");
    mysqli_query($conn, "INSERT INTO Persons (FirstName, LastName, Age) VALUES ('Glenn', 'Quagmire', '33')");

    // Check if the data was inserted successfully
    if (mysqli_affected_rows($conn) > 0) {
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
    ?>
</body>

</html>