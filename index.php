<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>WheelWave
</title>
  <link rel="stylesheet" type="text/css" href="flip_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-latest.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript">
(function($) {          
    $(document).ready(function(){                    
        $(window).scroll(function(){                          
            if ($(this).scrollTop() > 375) {
                $('#menu').fadeIn(500);
            } else {
                $('#menu').fadeOut(500);
            }
        });
    });
})(jQuery);
</script>
<style>
.chng{
	color:white;
}
.imag{
	background-image:url("img/bgall1.jpg");
}
#milersclub{
width:100%;
height:600px;
color:white;
margin-top:0px;

}

#menu {
	position:fixed;
	top:65px;
	width:100%; 
	height:45px; 
    background-color: #33414f;
	color: #FFFFFF;
	z-index:9999;
	display: none;
	justify-content:center;
}
#menu1{
	width:100%;
	z-index:999;
	top:0px;
}

#menu a:hover{
	font-style:italic; 
	font-size:30px; !important
}
.dropbtn button:hover{
	cursor: pointer;

}
nav{
		position:fixed;
font-family: Open Sans;
    background-color: #33414f;
    height: 65px;
    display: flex;
    align-items: center;
    padding: 0 0 0 25px;
}
.type{
    flex-grow: 1;
    margin-left: 1em;
	cursor: pointer;

}

.dropbtn {
	font-family: Open Sans;
    background-color: #33414f;
    color: white;
    padding: 16px;
    font-size: 25px;
    border: none;
height: 48px;
margin-bottom:12px;
cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;cursor: pointer;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn:hover {opacity:0.6;cursor: pointer;	border-bottom: 2px solid #fff;
}


.headercar:hover {
		border-bottom: 2px solid #fff;
}
.headercar{
    color: #fff;
    text-decoration-line: none;
    margin: 0 15px;
    margin-top: 0px;
    margin-right: 15px;
    margin-bottom: 0px;
    margin-left: 15px;
    font-size: 25px;
    padding-bottom: 4px;
}
footer{
font-family: Open Sans;
    background-color: #33414f;
    height: 64px;
    display: flex;
    align-items: center;
    padding: 0 15px 0 25px;
	color: #fff;
	justify-content:space-around;
}
.options{
background-color: transparent;
    height: 300px;
    display: flex;
	justify-content:space-around;
    padding: 0 15px 0 25px;
}
.opt{
background-color:#black;
color:white;
height:175px;
width:250px;
border-radius:25px;
text-align:center;
font-style:bold;
font-size:40px;
}
.advantagee{
  display:grid;
  margin-top:0;
  /*grid-template-rows: 50% 50%;
  grid-template-columns: 30% 30% 30%;*/
  margin-bottom: 0;
 grid-template-rows: 1fr 1fr;
  grid-template-columns: 1fr 1fr 1fr;
}
.advntg{
    height: 150px;
    display: flex;
	justify-content:space-around;
    padding: 0 15px 0 25px;
}
.adv{
height:125px;
width:200px;
border-radius:20px;
text-align:center;
font-style:bold;
font-size:30px;
}
.how{
    height: 250px;
    display: flex;
	justify-content:space-around;
    padding: 0 15px 0 25px;
}
#works{

}
.points{
background-color:transparent;
color:#ccc;
height:215px;
width:150px;
border-radius:20px;
text-align:center;
font-style:bold;
font-size:25px;
}
.club {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
table,th,td{
border:2px solid white;
font-size:25px;
border-collapse:collapse;
padding:15px;
}
th{
background-color:#8BBBBF;
color:black;
}
a{
text-decoration:none;
color:white;
cursor: pointer;
}
a:hover{
opacity:0.6;}
a.search:hover{
font-size:65px !important;
opacity:1;
font-style:italic;
}
.search a.click{
text-align:right;
}

.vid {
    border: 1px dotted black;
    width: 100%;
    height: 100%;
    text-align: center;
}
.vide {
    border: 1px solid black;
    position: relative;
}
.vidover {
    position: absolute;
	height: 100%;
	width:100%;
    left: 0px;
    top: 0px;
    margin: 10px;
    padding: 5px 5px;
    font-size: 20px;
    font-family: Helvetica;
    background-color: rgba(0, 0, 0, 0);
}

.icon {
  display: none;
}

/* @media only screen and (max-device-width: 400px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}
@media only screen and (max-device-width: 400px)  {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
} */
.head1{
	font-size:105px;
	text-align:center;
	margin:0;
	font-style:bold;
	margin-top:100px;
}
@media only screen and (max-device-width: 600px) {
	.head1 {
		font-size:50px;
	}
}
</style>
</head>
<body>
<nav class="topnav" id="menu1">
<img src="img/logo1.jpg" alt="Logo" width="105px" height="30px">
<div class="type">
<a href="" class="headercar">WheelWave</a>
</div>
<div class="type">
<a href="#advantage" class="headercar">Advantages</a>
</div><div class="type">
<a href="#milersclub" class="headercar">Club</a>
</div>
<div class="type">
<a href="#works" class="headercar">How It Works</a>
</div>
<div class="type">
<a href="dealers.html" class="headercar">Our Dealers</a>
</div>
 <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
<div class="type">
<?php
if(isset($_SESSION['loginstatus'])){ ?>
<div class="dropdown">
  <button class="dropbtn"> <?php echo($_SESSION['username']); ?></button>
  <div class="dropdown-content">
    <a href="profile3.php">Profile</a>
    <a href="logout.php">Logout</a>
  </div>
</div>
<?php }
else {
	?>
<a href="logsign.php" class="headercar">Login/SignUp</a>
<?php
	}
?>

<script>
function myFunction() {
    var x = document.getElementById("menu1");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
<!---<a href="logsign.php" class="headercar">Login/SignUp</a>--->
</div>
</nav>
<nav id="menu">
<a href="book.php" class="search1" style="text-decoration:none;font-size:30px;">Start Your Wonderful Journey
<img src="img/start.jpg" style="height:25px;width:25px;background-color:transparent;border-radius:20px;"></a>
</nav>

<div class="vid">
<div class="vide">
<video width="100%" autoplay loop muted>
  <source src="img/movie1.mp4" type="video/mp4">
  </video>
  <div class="vidover">
  <div class="intro"><br><br><br><br>
<p class="head1">DRIVE YOUR WAY</p>
</div><br><br><br>
<div class="intro1" style="font-size:40px;text-align:center;font-style:bold;color;black;">
<a href="book.php" class="search" style="text-decoration:none;font-size:60px;">Get Started
<img src="img/start.jpg" style="height:40;width:40px;background-color:transparent;border-radius:20px;"></a>
</div><br><br><br><br><br><br><br>
<div class="options">
<div class="opt"><br>
<!--- <a href="airport.html">Airport Services</a> --->
</div>
<div class="opt">
<!--- <p> &nbsp;&nbsp;&nbsp; To &nbsp;&nbsp; A &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trip!!!</p>
</div>
<div class="opt">
<p>Pedal Your Way</p>
</div> --->
<div class="opt">
<!--- <p>&nbsp;&nbsp;&nbsp;Join Our &nbsp;&nbsp;&nbsp; Club</p> --->
</div>
</div>
</div>
</div>
</div>
</div>


<div class="imag">
<div id="advantage" >
<!--- <div> ---><br><br><br><br><br><br><br>
<h1 style="text-align:center;font-size:60px;margin-top:0px;color:white;">ADVANTAGES</h1>
<!--- <p style="text-align:center;font-size:25px;">We simplified car rentals, so you can focus on what's important to you.</p>
</div>
<div class="advntg">
<div class="adv">
<p>Fuel Cost Included</p>
</div>
<div class="adv">
<p>No Hidden Charges</p>
</div>
<div class="adv">
<p>Flexi Pricing Packages</p>
</div>
</div>
<div class="advntg">
<div class="adv">
<p>Go Anywhere</p>
</div>
<div class="adv">
<p>24x7 Roadside Assistance</p>
</div>
<div class="adv">
<p>Damage Insurance	</p>
</div>
</div>
</div> --->
<div class="advantagee">
<div class="flip-card" style="margin: 5% 0 5% 30%;">
  <div class="flip-card-inner">
    <div class="flip-card-front" style="background-color:#333;color:white;">
      <img src="img/f11.png" alt="flooding" style="width:100%;height:65%; "> <h1 style="font-weight: bold;">Fuel Cost Included</h1>
    </div>
    <div class="flip-card-back">
      <h1 align="center" style="color:black;">Details</h1> 
      <p>Don't worry about mileage! All fuel costs are included. If you refill fuel, we'll pay you back!</p>
    </div>
</div>
</div>
<div class="flip-card" style="margin: 5% 0 5% 30%;">
  <div class="flip-card-inner">
    <div class="flip-card-front" style="background-color:#333;color:white;">
      <img src="img/f2.png" alt="flooding" style="width:250px;height:190px; "> <h1 style="font-weight: bold;">No Hidden Charges</h1>
    </div>
    <div class="flip-card-back">
      <h1 align="center" style="color:black;">Details</h1> 
      <p>Our prices include taxes and insurance.<br>What you see is what you really pay!</p>
    </div>
</div>
</div>
<div class="flip-card" style="margin: 5% 0 5% 30%;">
  <div class="flip-card-inner">
    <div class="flip-card-front" style="background-color:#333;color:white;">
      <img src="img/f3.png" alt="flooding" style="width:250px;height:190px; "> <h1 style="font-weight: bold;">Flexi Pricing Packages</h1>
    </div>
    <div class="flip-card-back">
      <h1 align="center" style="color:black;">Details</h1> 
      <p>One size never fits all! Choose a balance of time and kilometers that works best for you.</p>
    </div>
</div>
</div>
<div class="flip-card" style="margin: 5% 0 5% 30%;">
  <div class="flip-card-inner">
    <div class="flip-card-front" style="background-color:#333;color:white;">
      <img src="img/f44.png" alt="flooding" style="width:250px;height:190px; "> <h1 style="font-weight: bold;">Go Anywhere</h1>
    </div>
    <div class="flip-card-back">
      <h1 align="center" style="color:black;">Details</h1> 
      <p>Our cars have all-India permits.Just remember to pay state tolls and entry taxes.</p>
    </div>
</div>
</div>
<div class="flip-card" style="margin: 5% 0 5% 30%;">
  <div class="flip-card-inner">
    <div class="flip-card-front" style="background-color:#333;color:white;">
      <img src="img/f51.png" alt="flooding" style="width:250px;height:190px; "> <h1 style="font-weight: bold;">24x7 Roadside Assistance</h1>
    </div>
    <div class="flip-card-back">
      <h1 align="center" style="color:black;">Details</h1> 
      <p>We have round-the-clock, pan India partners. Help is never far away from you.</p>
    </div>
</div>
</div>
<div class="flip-card" style="margin: 5% 0 5% 30%;">
  <div class="flip-card-inner">
    <div class="flip-card-front" style="background-color:#333;color:white;">
      <img src="img/f6.png" alt="flooding" style="width:250px;height:190px; "> <h1 style="font-weight: bold;">Damage Insurance</h1>
    </div>
    <div class="flip-card-back">
      <h1 align="center" style="color:black;">Details</h1> 
      <p>All your bookings include damage insurance! Drive safe, but don’t worry!</p>
    </div>
</div>
</div>
</div></div><br><hr>
<div id="milersclub">
<br><br><br><br><br><br><br>
<img src="img/club.png" class="club">
<p style="text-align:center;font-size:25px;">The premium club that rewards you everytime you drive with Zoomcar</p>
<table align="center" style="padding:20px;">
<tr>
<th>ZERO SECURITY DEPOSIT</th>
<th>EARN MILERS POINTS</th>
</tr>
<tr>
<td>Milionmilers don't have to pay our standard security deposit ever</td>
<td>Earn milers - point for every Booking and redeem for free rides</td>
</tr>

</table>
</div>
<hr>
<div id="works">
<br>
<h1 style="font-size:40px;text-align:center;margin-top:0px;color:white">HOW IT WORKS</h1>
<div class="how">
<div class="points"><p><span class="chng">1.</span>Search for and book a car on our site!</p></div>
<div class="points"><p><span class="chng">2.</span>Upload your driver’s license, and pay a small security deposit.</p></div>
<div class="points"><p><span class="chng">3.</span>We SMS your car details 20 minutes before pickup.</p></div>
<div class="points"><p><span class="chng">4.</span>Fill the start checklist,Grab the keys from the glove-box and drive.</p></div>
<div class="points"><p><span class="chng">5.</span>Return the car to the same location and fill the end checklist.</p></div>
</div>
</div>
</div>
<footer>
<a href="AU.html">About Us </a>
<p>Contact Us </p>
<p>Terms & Conditions </p>
<p>Help </p>
<p>Safety Policies </p>
</footer>
</body>
</html>