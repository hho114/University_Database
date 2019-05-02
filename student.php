

<?php
$servername = "ecsmysql";
$username = "cs332t15";
$password = "Oaj2chea";
$mydb = "mariadb";

// username and password need to be replaced by your username and password
// $link = mysql_connect('ecsmysql', 'username', 'password');
$link = mysql_connect($servername, $username, $password, $mydb);
if (!$link)
{
  die('Could not connect: ' . mysql_error());

}


 mysql_select_db($username,$link);

$stu_id = $_POST["student_cwid"];
//use SQL SELECT to query data
$sql = "SELECT course_title, enroll_grade
	FROM Enrollment, Course, Section, Student
	WHERE  stu_cwid = enroll_stu_cwid AND enroll_section_id = section_id
  AND section_course_id = course_id AND enroll_stu_cwid =  '$stu_id'";



 $result = mysql_query($sql,$link);

 if (!$result) {
     echo "Could not successfully run query ($sql) from DB: " . mysql_error();
     exit;
 }

 if (mysql_num_rows($result) == 0) {
     echo "No data found, nothing to print";
     exit;
 }

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>

  <div class="container-fluid bg-success text-center">
    <h3>Courses Enrollment</h3>
  </div>
  <div class="container-fluid text-center">

    <table class="table table-striped table-bordered">


    <thead>
     <tr class="info text-center">
       <th>Course Title</th>
       <th>Grade</th>

     </tr>
    </thead>
    <tbody>
        <?php
      while($row = mysql_fetch_assoc($result))
      {?>

      <tr>
      <td><?php echo $row["course_title"];?></td>
      <td><?php echo $row["enroll_grade"];?></td>
      </tr>
      <?php}?>
    </tbody>

</table>
</div>
</body>
</html>
<?php
 mysql_close($link);

 ?>
