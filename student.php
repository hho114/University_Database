<html>
<body>

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
 echo 'Connected successfully<p>';

 mysql_select_db($username,$link);

$stu_id = $_POST["student_cwid"];
//use SQL SELECT to query data
$sql = "SELECT course_title, enroll_grade, stu_first_name, stu_last_name, stu_cwid
	FROM Enrollment, Course, Section, Student
	WHERE  stu_cwid = enroll_stu_cwid AND enroll_section_id = section_id
  AND section_course_id = course_id AND enroll_stu_cwid =  '$stu_id'";



 $result = mysql_query($sql,$link);

 if (!$result) {
     echo "Could not successfully run query ($sql) from DB: " . mysql_error();
     exit;
 }

 if (mysql_num_rows($result) == 0) {
     echo "No rows found, nothing to print so am exiting";
     exit;
 }
 $border_data = "<td style='width:150px;border:1px solid black;'>";
 $border_header = "<th style='width:150px;border:1px solid black;'>";

echo mysql_result($result,$i,stu_first_name).",".mysql_result($result,$i,stu_last_name)."<br>";
echo "CWID: ".$stu_id."<br>";
 echo "<table style='border: solid 1px black;'>";
 echo "
 <tr>
 " .$border_header. "Course Title</th>
   " .$border_header. "Grade</th>

 </tr>";
  while($row = mysql_fetch_assoc($result))
  {
  echo "
  <tr>
  " .$border_data.$row["course_title"]."</td>
  " .$border_data.$row["enroll_grade"]."</td>

  </tr>";
  }
  echo "</table>";


 //echo "Fetched data successfully\n";

 mysql_close($link);

 ?>


 </body>
 </html>
