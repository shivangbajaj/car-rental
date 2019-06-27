<?php 
session_start();


  $_SESSION['enddate'] = $_POST['enddate'];
  $_SESSION['endtime'] = $_POST['endtime'];

?>
<!doctype html>
<html>
<head>
<title></title>

<style>
.tariff{
  display:grid;
  margin-top:0;
  grid-template-rows: 1fr 1fr;
  grid-template-columns: 1fr 1fr;
  margin-bottom: 0;
}
#butt1,#butt2,#butt3,#butt4{
    padding: 10px 60px;
    background-color: #70ad4d;
    color: #fff;
    border-radius: 3px;
    margin-right: 80px;
	margin-top: 20px;
	margin-bottom: 20px;
    position: relative;
	float:bottom;
}
</style>
  <link rel="stylesheet" type="text/css" href="flip_style1.css">

</head>
<body style="background-image:url('img/bgall');width:100%;">
<form action="confirm.php" method="POST">

<h1 align="center" style="font-size:50px;color:white;">Choose Vehicle</h1>
<div class="tariff">
<div class="flip-card" style="margin: 5% 0 5% 30%;">
  <div class="flip-card-inner">
    <div class="flip-card-front" style="background-color:#e0e2e2;">
      <img src="img/ecosport.png" alt="flooding" style="width:350px;height:300px; "> <h1 style="font-weight: bold;">EcoSport</h1>
    </div>
    <div class="flip-card-back">
      <h1 align="center" style="color:black;">Prices</h1> 
      <ul>
      <li align="left">Weekday  Rs.89/hr</li>
      <li align="left">Weekend  Rs.149/hr</li>
      <li align="left">Peak Season Rs.175/hr</li>
      <li align="left">Extra km charges Rs.11/km</li>
    </ul>
		<button id="butt1" name="submit" type="submit" value="EcoSport" onclick="location.href='confirm.php'">GO!</button>

    </div>
</div>
</div><div class="flip-card" style="margin: 5% 0 5% 30%;">
  <div class="flip-card-inner">
    <div class="flip-card-front" style="background-color:#e0e2e2;">
      <img src="img/celerio.jpg" alt="flooding" style="width:350px;height:300px; "> <h1 style="font-weight: bold;">Celerio</h1>
    </div>
    <div class="flip-card-back">
      <h1 align="center" style="color:black;">Prices</h1> 
      <ul>
      <li align="left">Weekday  Rs.49/hr</li>
      <li align="left">Weekend  Rs.99/hr</li>
      <li align="left">Peak Season Rs.119/hr</li>
      <li align="left">Extra km charges Rs.9/km</li>
    </ul>
		<button id="butt2" name="submit" type="submit" value="Celerio" onclick="location.href='confirm.php'">GO!</button>

    </div>
</div>
</div><div class="flip-card" style="margin: 5% 0 5% 30%;">
  <div class="flip-card-inner">
    <div class="flip-card-front" style="background-color:#e0e2e2;">
      <img src="img/scorpio.jpg" alt="flooding" style="width:350px;height:300px; "> <h1 style="font-weight: bold;">Scorpio</h1>
    </div>
    <div class="flip-card-back">
      <h1 align="center" style="color:black;">Prices</h1> 
      <ul>
      <li align="left">Weekday  Rs.85/hr</li>
      <li align="left">Weekend  Rs.159/hr</li>
      <li align="left">Peak Season Rs.175/hr</li>
      <li align="left">Extra km charges Rs.11/km</li>
    </ul>
		<button id="butt3" name="submit" type="submit" value="Scorpio" onclick="location.href='confirm.php'">GO!</button>

    </div>
</div>
</div><div class="flip-card" style="margin: 5% 0 5% 30%;">
  <div class="flip-card-inner">
    <div class="flip-card-front" style="background-color:#e0e2e2;">
      <img src="img/innova.jpg" alt="flooding" style="width:350px;height:300px; "> <h1 style="font-weight: bold;">Innova</h1>
    </div>
    <div class="flip-card-back">
      <h1 align="center" style="color:black;">Prices</h1> 
      <ul>
      <li align="left">Weekday  Rs.115/hr</li>
      <li align="left">Weekend  Rs.205/hr</li>
      <li align="left">Peak Season Rs.225/hr</li>
      <li align="left">Extra km charges Rs.12/km</li>
    </ul>
		<button id="butt4" name="submit" type="submit" value="Innova" onclick="location.href='confirm.php'">GO!</button>

    </div>
</div>
</div>
</div>
</form>
</body>
</html>