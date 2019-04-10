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

$select = = "SELECT course_id, course_title, section_id, section_class_room, section_meeting_day,
		section_beginning_day, section_ending_day, (section_amount_of_seat-COUNT(enroll_stu_cwid)) as 'Seats'

	FROM Course, Enrollment, Section
	WHERE enroll_section_id = section_id
	AND course_id = section_course_id
	AND enroll_section_id = ".$_POST["stu_course_num"]." GROUP BY section_id;";

 $result = mysql_query($select,$link);

 if(!$result)//check if find data correct
 {
   die('Could not get data: '. mysql_error());
 }


   for($i=0; $i<mysql_numrows($result); $i++)
   {
    echo "Section Number: ", mysql_result($result,$i, section_id), "<br>";
    echo "Classroom Location: ", mysql_result($result,$i, section_class_room), "<br>";
    echo "Meeting Days: ", mysql_result($result,$i, section_meeting_day), "<br>";
    echo "Start Time: ", mysql_result($result,$i, section_beginning_day), "<br>";
    echo "End Time: ", mysql_result($result,$i, section_ending_day), "<br>";
    echo "Number of Seats: ", mysql_result($result,$i, "Seats"), "<br>", "<br>";
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
