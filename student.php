

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
echo "successfully connect";

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

<?php
 mysql_close($link);

 ?>
