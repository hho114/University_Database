<html>
<body>

<?php
// username and password need to be replaced by your username and password
// $link = mysql_connect('ecsmysql', 'username', 'password');

$link = mysql_connect('ecsmysql', 'cs322t15', 'huythanh');

if (!$link)
{
  die('Could not connect: ' . mysql_error());

}
 echo 'Connected successfully<p>';


 mysql_select_db("username",$link);

 $result = mysql_query("SELECT * FROM STUDENT",$link);

 // for($i=0; $i<mysql_numrows($result); $i++)
 // {
 // echo "SSN: ", mysql_result($result,$i,"ssn"), “<br>”;
 // echo "First NAME: ", mysql_result($result,$i,"fname"), “<br>”;
 // echo "Last NAME: ", mysql_result($result,$i,"lname"), “<br>”;• }
 // mysql_close($link);
 //
 ?>

 </body>
 </html>
