<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Document</title>
  </head>
  <body>
    Please fill in the following information: <br /><br />

    <form name="form1" method="POST" action="insert_student.php">
      <table border="0">
        <tr>
          <td>Student's Name</td>
          <td><input type="text" name="studentName" size="50" /></td>
        </tr>
        <tr>
          <td>IC Number</td>
          <td><input type="text" name="studentIC" size="15" /></td>
        </tr>
        <tr>
          <td>Matric Number</td>
          <td><input type="text" name="studentMatric" size="8" style="text-transform: uppercase;" /></td>
        </tr>
        <tr>
          <td></td>
          <td align="left">
            <br /><input type="submit" name="button1" value="Submit" />
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
