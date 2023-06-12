<!DOCTYPE html>
<html>


<head>
    <title>Student List</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Student Name</th>
            <th>Matric Number</th>
            <th>IC Number</th>
        </tr>
        <?php
        require_once("dbconn.php"); //This is how you call library file
        $query = mysqli_query($conn, "SELECT * FROM Student"); //Complete the statement
        if (!$query)
            die("SQL query error encounted: " . mysqli_error($conn));
        while ($record = mysqli_fetch_array($query)) {
            echo "<tr align=center>";
            echo "<td align=left>" . $record["name"] . "</td>";
            echo "<td>" . $record["matric"] . "</td>";
            echo "<td>" . $record["ic"] . "</td>";
            echo "</tr>";
        }

        mysqli_close($conn)
            ?>
    </table>
</body>

</html>