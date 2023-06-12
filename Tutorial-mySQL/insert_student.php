<HTML>

<HEAD>
    <TITLE>Insert Student</TITLE>
</HEAD>

<BODY>

    <?php
    $studentName = $_POST["studentName"];
    $studentIC = $_POST["studentIC"];
    $studentMatric = $_POST["studentMatric"];

    $studentMatric = strtoupper($studentMatric); // convert matric to uppercase 
    
    require_once("dbconn.php");

    $sql = "insert into Student(name, ic, matric) " . // don't forget this dot 
        "values('$studentName', '$studentIC', '$studentMatric')";

    $query = mysqli_query($conn, $sql);

    if (!$query)
        die("SQL query error encountered: " . mysqli_error());

    mysqli_close($conn);
    ?>

    <B> Insertion was successfull</B>
    <BR><BR>
    <a href="view_student.php">Click here to list the table</a>

</BODY>

</HTML>