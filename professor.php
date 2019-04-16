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

$prof_ssn = $_POST["professor_ssn"];
 // TO DO: fix the sql command to sastify section a for Professor,
 // check project assigment for more info.
$select = "SELECT course_title, section_class_room, section_meeting_day, section_beginning_day, section_ending_day
 FROM Course, Section, Professor
 WHERE prof_id = '$prof_ssn' AND prof_id = section_prof_id AND course_id = section_course_id ";


 $result = mysql_query($select,$link);

  if(!$result)//check if find data correct
  {
    die('Could not get data: '. mysql_error());
  }

   for($i=0; $i<mysql_numrows($result); $i++)
   {

   echo "Course Title: ", mysql_result($result,$i,course_title), "<br>";
   echo "Class Room: ", mysql_result($result,$i,section_class_room), "<br>";
   echo "Meeting Days: ", mysql_result($result,$i,section_meeting_day), "<br>";
   echo "Beginning Day: ", mysql_result($result,$i,section_beginning_day), "<br>";
   echo "Ending Day: ", mysql_result($result,$i,section_ending_day), "<br>", "<br>";
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
