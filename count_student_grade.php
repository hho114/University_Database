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

 if (!$result) {
     echo "Could not successfully run query ($sql) from DB: " . mysql_error();
     exit;
 }

 if (mysql_num_rows($result) == 0) {
     echo "No rows found, nothing to print so am exiting";
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

 $border_data = "<td style='width:150px;border:1px solid black;'>";
 $border_header = "<th style='width:150px;border:1px solid black;'>";

//table title
echo "<table style='border: solid 1px black;'>";
echo "<tr>";
echo $border_header. "Grades </th>";
foreach($grades as $x => $x_value)
{
  echo $border_header. $x ."</th>";
}
echo "</tr>";
//table data
echo "<tr>";
echo $border_data . "Number of Students </td>";
foreach ($grades as $i)
{
    echo $border_data . $i . '</td>';
}
echo "</tr>";

echo "</table>";


 mysql_close($link);

 ?>

 </body>
 </html>
