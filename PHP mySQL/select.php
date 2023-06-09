<?php
$con = mysqli_connect("localhost","","");
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($con,"my_db");
$result = mysqli_query("SELECT * FROM Persons");
while($row = mysqli_fetch_array($result))
{
echo $row['FirstName'] . " " . $row['LastName'];
echo "<br />";
}
mysqli_close($con);
?>