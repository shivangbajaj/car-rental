<?php
session_start();
?>
<!doctype html>
<html>
<head>
<title>Booking</title>
<style>

#menu1{
	width:100%;
	z-index:999;
	top:0px;
}
.dropbtn button:hover{
	cursor: pointer;

}
nav{
font-family: Open Sans;
    background-color: #33414f;
    height: 65px;
    display: flex;
    align-items: center;
    padding: 0 0 0 25px;
}
.type{
    margin-left: 35em;
	cursor: pointer;

}

.dropbtn {
    background-color: #33414f;
    color: white;
    padding: 16px;
    font-size: 25px;
    border: none;
		border-bottom: 2px solid #fff;
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
.dropdown:hover .dropbtn:hover {opacity:0.6;cursor: pointer;}

a{
text-decoration:none;
color:white;
cursor: pointer;
}
a:hover{
opacity:0.6;}

.headercar{
    color: #fff;
    text-decoration-line: none;
    margin: 0 15px;
    margin-top: 0px;
    margin-right: 15px;
    margin-bottom: 0px;
    margin-left: 15px;
    font-size: 25px;
	border-bottom: 2px solid #fff;
    padding-bottom: 4px;
}

.component-progress-bar {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin-bottom: 40px;
	padding:0px 40px;
	
}
.component-progress-bar .progress-bar {
    display: flex;
    justify-content: space-between;
    flex-direction: row;
    width: 595px;
}
.component-progress-bar .progress-bar .item {
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    width: 110px;
}
.component-progress-bar .progress-bar .item .circle.selected {
    border-color: #70ad4d;
    background-color: #70ad4d;
}
.component-progress-bar .progress-bar .item .state-name {
    width: 150px;
    text-align: center;
}
.component-progress-bar .progress-bar .item,.item1 {
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    width: 110px;
}

.component-progress-bar .progress-bar .item .circle,.item1 .circle {
    width: 25px;
    height: 25px;
    border-radius: 50%;
    border: 1px solid #bdbdbd;
    position: relative;
    background-color: #fff;
}
.component-progress-bar .progress-bar .item:after {
    content: "";
    position: absolute;
    top: 12px;
    left: 67px;
    width: 218px;
    height: 1px;
    background-color: #bdbdbd;
}
p{
font-size:50px;
}
.butt{
    padding: 10px 60px;
    background-color: #70ad4d;
    color: #fff;
    border-radius: 3px;
    margin-right: 80px;
	margin-top: 120px;
    position: relative;
	float:right;
}
</style>
</head>
<body>
<nav id="menu1">
<img src="img/logo1.jpg" alt="Logo" width="105px" height="30px">
<div class="type">
<a href="" class="headercar">WheelWave</a>
</div>

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

<!---<a href="logsign.php" class="headercar">Login/SignUp</a>--->
</div>
</nav>



&nbsp;&nbsp;&nbsp;&nbsp;<div class="component-progress-bar">
<div class="progress-bar">
<div class="item">
<div class="circle selected"></div> 
<div class="state-name">Starting Point</div>
</div>
<div class="item">
<div class="circle">
</div> 
<div class="state-name">
Pickup Time</div>
</div>
<div class="item1">
<div class="circle"></div> 
<div class="state-name">Dropoff Time</div>
</div></div> 
<a href="index.php">
<img src="img/home.png" alt="Home" class="home" width="50px" height="50px" style="padding:10px 60px;"></a>
</div>
<br><div class="location" style="padding:0px 60px;">
<form action="book1.php" method="POST">
<p>&nbsp;&nbsp;Tell Us Your Starting Point</p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="startloc" placeholder="&nbsp;&nbsp;&nbsp;Tell Us Your Starting Point" style="height:40px;width:520px;font-size:25px" required />
<p>&nbsp;&nbsp;Tell Us Your Ending Point</p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="endloc" placeholder="&nbsp;&nbsp;&nbsp;Tell Us Your Ending Point" required style="height:40px;width:520px;font-size:25px">
<script>
function myFunction() {
    document.getElementByName('startloc').validity.valid;
	document.getElementByName('endloc').validity.valid;

}
</script>
<button class="butt" name="submit" type="submit" value="submit">NEXT</button>
</form>
</div>
</body>
</html>