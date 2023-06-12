<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<?php
        $con = mysqli_connect("localhost", "root", "");
        if (!$con) {
            die('Could not connect: ' . mysqli_error());
        }
        mysqli_close($con);

        ?>
</body>
</html>
   
        
        
