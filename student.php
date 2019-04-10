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

//use SQL SELECT to query data
$select = "SELECT course_title, grade

	FROM Enrollment, Course, Section, Student
	WHERE  stu_cwid = enroll_stu_cwid AND enroll_section_id = section_id
  AND section_course_id = course_id AND enroll_stu_cwid =" .$_POST["student_cwid"];



 $result = mysql_query($select,$link);
  if(!$result)//check if find data correct
  {
    die('Could not get data: '. mysql_error());
  }

  for($i=0; $i<mysql_numrows($result); $i++)
  {
   echo "Course Title: ", mysql_result($result,$i, course_title), "<br>";
   echo "Grade: ", mysql_result($result,$i, grade), "<br>", "<br>";
  }

 echo "Fetched data successfully\n";
 mysql_close($link);

 ?>

 <button onclick="goBack()">Go Back</button>

 <script>
 function goBack() {
     window.history.back();
 }
 </script>

 </body>
 </html>
