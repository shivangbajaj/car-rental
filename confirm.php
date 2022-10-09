<?php 
include("/db/dbconfig.php");

session_start();
if( isset($_POST['submit']))
{
  $_SESSION['submit'] = $_POST['submit'];
}
  
  ?>
  <html>
  <head>
    <link rel="stylesheet" href="box.css"> 

  <title>Confirmation</title>
  <style>
  .butt{
    padding: 10px 60px;
    background-color: #70ad4d;
    color: #fff;
    border-radius: 3px;
    margin-right: 80px;
	margin-top: 50px;
    position: relative;
	float:centre;
}
  </style>
  </head>
  <body>
<?php
if(isset($_SESSION['loginstatus'])){ ?>
  <div class='box'>
  <div class='wave -one'></div>
  <div class='wave -two'></div>
  <div class='wave -three'></div>
  <div class='title'>
 <p> <?php echo($_SESSION['username']); ?> Your Details Are As Follows</p>
 <p>Start Location : <?php echo($_SESSION['startloc']); ?></p>
   <p>End Location : <?php echo($_SESSION['endloc']); ?></p>
   <p>Start Date : <?php echo($_SESSION['startdate']); ?></p>
 <p>Start Time : <?php echo($_SESSION['starttime']); ?></p>
 <p>End Date : <?php echo($_SESSION['enddate']); ?></p>
 <p>End Time : <?php echo($_SESSION['endtime']); ?></p>
 <p>Vehicle  : <?php echo($_SESSION['submit']); ?></p>

  <button class="butt" onclick="location.href='done.php'">
  Confirm
  </button>
  
  </div>
</div>
<?php }
else {
	?>
	<script type="text/javascript">
      alert("First you need to Login!");
     window.location="logsign.php";
    </script>
<?php
	}
?>
</body>
</html>
 

