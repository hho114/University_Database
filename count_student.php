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

// TO DO: fix the sql command to sastify section b for Professor,
// check project assigment for more info.
$select = "SELECT Count(DISTINCT enroll_grade) as 'Count'
 FROM Course , Section , Enrollment
 WHERE course_id = section_course_id
 AND enroll_section_id = section_id
 AND course_id = ".$_POST["course_num"]." AND section_id = ".$_POST["section_num"]." GROUP BY enroll_grade;";

 $result = mysql_query($select,$link);

 if(!$result)//check if find data correct
 {
   die('Could not get data: '. mysql_error());
 }

 for($i=0; $i<mysql_numrows($result); $i++)
 {
   echo mysql_result($result,$i,"Count"), " student(s) got: ", mysql_result($result,$i, grade), "<br>";
 }

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
