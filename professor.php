


<?php

$servername = "ecsmysql";
$username = "cs332t15";
$password = "Oaj2chea";
$mydb = "mariadb";

//$GLOBALS['print'] = "";
// username and password need to be replaced by your username and password
// $link = mysql_connect('ecsmysql', 'username', 'password');
$link = mysql_connect($servername, $username, $password, $mydb);
if (!$link)
{
  die('Could not connect: ' . mysql_error());

}


 mysql_select_db($username,$link);

$prof_ssn = $_POST["professor_ssn"];
 // TO DO: fix the sql command to sastify section a for Professor,
 // check project assigment for more info.
$sql = "SELECT course_title, section_class_room, section_meeting_day, section_beginning_day, section_ending_day
 FROM Course, Section, Professor
 WHERE prof_id = '$prof_ssn' AND prof_id = section_prof_id AND course_id = section_course_id ";


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

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container-fluid text-center">
  <table class="table table-striped table-bordered">
     <thead>
         <tr class="info text-center">
             <th>Title</th>
             <th>Classrooms</th>
             <th>Meeting Days</th>
             <th>Beginning Date</th>
             <th>End Date</th>
         </tr>
     </thead>
     <tbody>
  <?php
   while($row = mysql_fetch_assoc($result))
   {
     ?>
   <tr>
   <td><?php echo $row["course_title"];?> </td>
   <td> <?php echo $row["section_class_room"];?></td>
   <td><?php echo $row["section_meeting_day"];?></td>
   <td><?php echo $row["section_beginning_day"];?></td>
   <td><?php echo $row["section_ending_day"];?></td>
   </tr>

   <?php }  ?>

  </tbody>
  </table>

  <div class="text-center">
  <button type="button" class="btn btn-primary" onclick="goBack()">Go Back</button>
  </div>

  <script>
  function goBack() {
    window.history.back();
  }
  </script>
</div>
</body>
</html>

<?php
mysql_close($link);
?>
