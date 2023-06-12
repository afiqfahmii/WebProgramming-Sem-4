<?php
$con=mysqli_connect("localhost","root"," ","my_afiq");
if(!$con){
    die('Could not connect: ' . mysql_error());
}
mysqli_select_db($con,"my_afiq");

$result =mysqli_query("Select * FROM Persons where firstname ='Afiq'");
?>