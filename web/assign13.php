<?php
   // user input
   $firstName   = $_GET['first_name'];
   $lastName    = $_GET['last_name'];
   $studentID   = $_GET['student_id'];
   $performance = $_GET['performance'];
   $skill       = $_GET['skill'];
   $instrument  = $_GET['instrument'];
   $location    = $_GET['location'];
   $room        = $_GET['room'];
   $time        = $_GET['time_slot'];
   $firstName2  = $_GET['first_name_2'];
   $lastName2   = $_GET['last_name_2'];
   $studentID2  = $_GET['student_id_2'];
   
   $name        = $firstName . " " . $lastName;
   $name2       = $firstName2 . " " . $lastName2;
   $addr        = $location . "<br>" . "Room " . $room;
   $perfor      = $performance . " for " . "<br>" . $skill . " " . $instrument;

   // data file
   $file = "./data/assign13.txt";

   // build table
   if($firstName != '')
    {
   $tableInner = "<tr>" .
                    "<td>" . $name . "</td>" .
                    "<td>" . $addr . "</td>" .
                    "<td>" . $time . "</td>" .
                    "<td>" . $perfor . "</td>" .
                 "</tr>" . "\n";}
   if($firstName2 != '')
     {
   $tableInner = $tableInner . "<tr>" .
                    "<td>" . $name2 . "</td>" .
                    "<td>" . $addr . "</td>" .
                    "<td>" . $time . "</td>" .
                    "<td>" . $perfor . "</td>" .
                 "</tr>" . "\n";}
      file_put_contents($file, $tableInner, FILE_APPEND);
      $string = file_get_contents($file);
   echo '<h2 style="text-align:center;"><b>Festival Schedule</b></h2>';
   echo "<table width='700' border='1' cellpadding='10' style='margin: 0 auto; border-collapse: collapse;'><tr><th>Name</th><th>Location</th><th>Time</th><th>Performance</th></tr>";
   echo $string;
?>