<html>
<body>

<?php
$servername = "ecsmysql";
$username = "cs322t15";
$password = "huythanh";
$dbname = "myDB";
// username and password need to be replaced by your username and password
// $link = mysql_connect('ecsmysql', 'username', 'password');
$professor_name = "";
$ssn;
$link = mysql_connect($servername, $username, $password);
if (!$link)
{
  die('Could not connect: ' . mysql_error());

}
 echo 'Connected successfully<p>';

 mysql_select_db($username,$link);

$select = "SELECT  Count(DISTINCT grade) as 'Count'
 FROM Course C, Section S, Enrollment E
 WHERE C.c_id = S.course_id AND S.s_id



 $result = mysql_query($select,$link);

 for($i=0; $i<mysql_numrows($result); $i++)
 {
 echo "Course Title: ", mysql_result($result,$i,title), "<br>";
 echo "Class Room: ", mysql_result($result,$i,class_room), "<br>";
 echo "Meeting Days: ", mysql_result($result,$i,meeting_day), "<br>";
 echo "Beginning Day: ", mysql_result($result,$i,beginning_day), "<br>";
 echo "Ending Day: ", mysql_result($result,$i,ending_day), "<br>";
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
