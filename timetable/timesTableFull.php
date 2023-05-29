<html>
<head>
    <title>timeTable</title>
</head>
<body>
<?php
    $mult = $_POST["mult"]; 
    $Snum = $_POST["fnum"];
    $Enum = $_POST["lnum"];

    for ($i = $Snum; $i <= $Enum; $i++)
    {
    echo $i . " multiplied by " . $mult . " = " . ($i * $mult);
    echo "<br />";
    }
?>
    <h1><b>Times Table Multiply</b></h1>
    Your Start Number is: <?php echo $Snum?><br>
    Your End Number is: <?php echo $Enum?><br> 
    Your Multiply By is: <?php echo $mult?>  
</body>

</html>