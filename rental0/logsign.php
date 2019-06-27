<?php
$flag=0;
include("/db/dbconfig.php");

if(isset($_POST['submit']))
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $contact=$_POST['contact'];
  $email=$_POST['email'];
  $uname=$_POST['uname'];
  $pass=$_POST['pass'];
  $cpassword=$_POST['cpassword'];

  if($pass!=$cpassword)
  {
    $flag=1;
    ?>
    <script type="text/javascript">
      alert("passwords do not match!");
    </script>
    <?php
  }

  //second condition checking existence of email in database.
  $e="SELECT * FROM USER WHERE email='$email'";
  $eres=mysqli_query($conn,$e);
  $ec=mysqli_num_rows($eres);
  if($ec>0)
  {
    $flag=1;
    ?>
    <script type="text/javascript">
      alert("User With same email already exists");
      //window.location="../signup/";
    </script>
    <?php
  }

  //third condition checking existence of phone number in database.
  $p="SELECT * FROM USER WHERE contact='$contact'";
  $pres=mysqli_query($conn,$p);
  $pc=mysqli_num_rows($pres);
  if($pc>0)
  {
    $flag=1;
    ?>
    <script type="text/javascript">
      alert("User With same contact number already exists");
     // window.location="../signup/";
    </script>
    <?php
  }

  //fourth condition checking existence of username in database.
  $u="SELECT * FROM USER WHERE username='$uname'";
  $ures=mysqli_query($conn,$u);
  $uc=mysqli_num_rows($ures);
  if($uc>0)
  {
    $flag=1;
    ?>
    <script type="text/javascript">
      alert("User With same username already exists");
     // window.location="../signup/";
    </script>
    <?php
  }

  $iq="INSERT INTO user (username,fname,lname,email,contact,password) VALUES('$uname','$fname','$lname','$email','$contact','$pass')";
  if($flag==0)
  {
    $r= mysqli_query($conn,$iq);
  }
  else
  {
    alert("Failed!!!!!");

  }
  
   if($r)
  {

	?>
    <script type="text/javascript">
 window.location="logsign.php";     
	 alert("Registered!");
     
    </script>
      <?php
	          // header("Location:logsign.php");

  }

  else
  {
    ?>
    <script type="text/javascript">
      alert("Failed!");
     // window.location="../signup/";
    </script>
      <?php
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
  <link rel="stylesheet" href="style.css"> 
</head>

<body>
<a href="index.php">
<img src="img/home1.png" alt="Home" class="home" width="150px" height="65px" style="float:right;padding:10px 50px;"></a>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Create Account</h1>
          
          <form method="post">
          
			
			
          <div class="top-row">
            
			<div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="fname" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name="lname" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>

		  <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text" name="uname" required autocomplete="off"/>
          </div>
		  
          <div class="field-wrap">
            <label>
              Mobile number<span class="req">*</span>
            </label>
            <input type="integer" name="contact" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="pass" required autocomplete="off"/>
          </div>
		  
		  <div class="field-wrap">
            <label>
              Repeat Password<span class="req">*</span>
            </label>
            <input type="password" name="cpassword" required autocomplete="off"/>
          </div>
          
          <button type="submit" name="submit" value="submit" class="button button-block"/>Sign up</button>
          
          </form>

        </div>
		<?php



if(isset($_POST['login']))
{ session_start();
  $username=$_POST['username'];
   $password=$_POST['password'];

   $p="SELECT * FROM USER WHERE username='$username' AND password='$password'";
   $passwd= mysqli_query($conn,$p);
   $pc= mysqli_num_rows($passwd);

  if($pc>0)
  {
    $_SESSION['loginstatus']=1;
   $_SESSION['username']=$username;
   // $_SESSION['email']=$mail;

	header('location:index.php');
  }
  else
    {
     header("Location:logsign.php");
    }
    
}

?>
        <div id="login">   
          <h1>Welcome Back</h1>
          
          <form action="/rental/logsign.php" method="post">
          
           <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text"required name="username" autocomplete="off"/>
           </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required name="password" autocomplete="off"/>
          </div>
          
         <!--- <p class="forgot"><a href="#">Forgot Password?</a></p> --->
          
          <button value="login" type="login"name="login"class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/index.js"></script> 

</body>
</html>
