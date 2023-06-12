<?php
$con = mysqli_connect("localhost", "root", "");
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

echo "<br/>Connection to database established";


/*Create database is not allowed in comp_server!
One db per person only!

if(mysqli_query($con,"CREATE DATABASE my_db")){
    echo "<br/>Connection to database established";
}else{
    die('<br/>Error creating database: '.mysqli_error());
}*/

//Create table in my_db database
mysqli_select_db($con, "my_tutorial");
$sql = "CREATE TABLE Student
        (
            name varchar(100),
            ic varchar(12),
            matric varchar(8) not null,

            primary key (matric),
            unique (ic)
        )";

if (mysqli_query($con, $sql)) {
    echo "<br/> Table Student Created";
} else {
    die('<br/>Error Creating Table: ' . mysqli_error());
}

mysqli_close($con);


?>