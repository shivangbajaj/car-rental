<?php 
include("/db/dbconfig.php");

session_start();
$username=$_SESSION['username'];
  $startloc=$_SESSION['startloc'];
  $endloc=$_SESSION['endloc'];
  $startdate=$_SESSION['startdate'];
  $starttime=$_SESSION['starttime'];
  $enddate=$_SESSION['enddate'];
  $endtime=$_SESSION['endtime'];
  $vehicle=$_SESSION['submit'];
  $ip="INSERT INTO bookings (username,startloc,endloc,startdate,starttime,enddate,endtime,vehicle) VALUES('$username','$startloc','$endloc','$startdate','$starttime','$enddate','$endtime','$vehicle')";
      $s= mysqli_query($conn,$ip);
if($s)
  {

	?>
    <script type="text/javascript">
 window.location="index.php";     
	 alert("Booked Successfully!");
     
    </script>
      <?php
  }
  else{
	  echo "Error!";
  }
  ?>