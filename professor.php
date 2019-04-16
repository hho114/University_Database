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

  echo "
  <table>
  <tr>
  <th>Course Title</th>
  <th>Class Room</th>
  <th>Meeting Days</th>
  <th>Beginning Day</th>
  <th>Ending Day</th>
  </tr>";
   for($row = mysql_fetch_assoc($result))
   {
   echo "
   <tr>
   <td>".$row["course_title"]."</td>
   <td>".$row["section_class_room"]."</td>
   <td>".$row["section_meeting_day"]."</td>
   <td>".$row["section_beginning_day"]."</td>
   <td>".$row["section_ending_day"]."</td>
   </tr>";
   }
   echo "</table>";

   echo "\nFetched data successfully\n";

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
