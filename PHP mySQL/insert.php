<?php
//create connection
mysqli_select_db($con, "afiq_db");
$sqli="INSERT INTO Persons (FirstName, LastName, Age)
VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";
if (!mysqli_query($sql,$con))
{
die('Error: ' . mysqli_error());
}
echo "1 record added";
mysqli_close($con)
?>
