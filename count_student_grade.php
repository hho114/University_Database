
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

echo "successfully connects";
 mysql_select_db($username,$link);

$course_id = $_POST["course_num"];
$section_id = $_POST["section_num"];
// TO DO: fix the sql command to sastify section b for Professor,
// check project assigment for more info.
$sql = "SELECT DISTINCT enroll_grade, course_title, Count(enroll_grade) as 'Count'
 FROM Course , Section , Enrollment
 WHERE course_id = section_course_id
 AND enroll_section_id = section_id
 AND course_id = '$course_id' AND section_id = '$section_id' GROUP BY enroll_grade;";

 $result = mysql_query($sql,$link);


 if (mysql_num_rows($result) == 0) {
     echo "No data found, nothing to print";
     exit;
 }

 $gradeTemplate = array('A' => 0, 'A-' => 0, 'B+' => 0, 'B' => 0, 'B-' => 0, 'C+' => 0,
  'C' => 0, 'C-' => 0, 'D+' => 0, 'D' => 0,'D-' => 0,'F' => 0);

 while($row = mysql_fetch_assoc($result))
 {
   $retrievedGrades[$row["enroll_grade"]] = $row["Count"];
 }

//merge two arrays
 $grades = array_merge($gradeTemplate,$retrievedGrades);

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
    <h3>Count Grade Courses</h3>
  </div>

<div class="container-fluid text-center">


  <table class="table table-striped table-bordered">
     <thead>
         <tr class="info text-center">
             <th>Grades</th>
             <?php
              foreach($grades as $x => $x_value)
              {
                ?>
                <th>  <?php  echo $x; ?> </th>

              <?php } ?>
         </tr>
     </thead>
     <tbody>
       <tr>
        <td>Number of Students </td>
        <?php
        foreach ($grades as $x => $x_value)
        {
          ?>
            <td> <?php echo $x_value; ?> </td>

        <?php } ?>
      </tr>
  </tbody>
  </table>

  <div class="text-center">
  <button type="button" class="btn btn-primary" onclick="goBack()">Go Back</button>
  </div>

  <script>
  function goBack() {
    window.history.back();
  }
  </script>
</div>
</body>
</html>


<?php
 mysql_close($link);

 ?>
