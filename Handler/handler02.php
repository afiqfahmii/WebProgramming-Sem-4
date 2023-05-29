<html>

<head>
    <title>Form</title>
</head>

<?php
$strHeading = "<h1>Hello" . $_POST["Username"] . "</h1>";
$colortype = $_POST["colortype"];

switch ($colorType) {
    case "r":
        $strBackgroundColor = "rgb(255,0,0)";
        break;

    case "g":
        $strBackgroundColor = "rgb(0,255,0)";
        break;

    case "b":
        $strBackgroundColor = "rgb(0,0,255)";
        break;

    default:
        $strBackgroundColor = "rgb(200,200,200)";
        echo "<h3> Please select your color</h3>";
        break;
}
?>

<body style="background: <?php echo $strBackgroundColor; ?>">
    <?php echo $strHeading; ?>

</body>

</html>