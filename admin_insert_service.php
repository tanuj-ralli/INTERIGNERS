<!DOCTYPE html>
<html>

<style>
#aa1
{
  background-color:#09C;
  height:350px;
  width:100%;
  float:left;
}
.ema
{
  width:250px;
  height:30px;
  padding-left:5px;
  border-radius:5px;
}
.log
{
  border:0;
  color:#0033FF;
  background-color:#CCCCCC; 
  border-radius:4px;
  height:25px;
  width:170px; 
}
.log:hover
{
  border:0;
  color:#0033FF;
  background-color:#FFFFFF; 
  border-radius:4px;
  height:25px;
  width:170px; 
}
.sel
{
  height:25px;
  width:125px;
  border:0;
  border-radius:4px;
}
.sub
{
  color:#0033FF;
  background-color:#FFF;
  border:#0033FF;
  border:solid;
  border-width:2px;
  border-radius:5px;
   height:25px;
  width:100px; 
  font-size:16px;
  font-weight:bold;
}
.sub:hover
{
   height:25px;
  width:100px; 	
  color:#FFF;
  background-color:#09C;
  border:#FF0000;
  border:solid;
  border-width:2px;
  border-radius:5px;
  font-size:16px;
  font-weight:bold;
}

</style>



<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Tanuj's Project | RICCS</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  
 
  <link rel="stylesheet" href="css/preload.css"> 
  
  
  <link rel="icon" href="images/tr.jpg">
</head><!--/head-->

<body style="background-color:#09c">
   	
  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->


    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">
            <h1><img class="img-responsive" src="images/logo.png" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
			        <li><a href="admin_options.php">Home</a></li>
                    <li>
					<?php
					$e = "lavya@gmail.com";
                    echo"<a href=adminforgot.php?id=".$e.">Change Password</a>";
					?>
                    </li>
                    <li><a href="admin_signup.php">Create Account</a></li>
                    <li><a href="delete_admin_account.php">Delete Account</a></li>
                    <li><a href="admin_page.php">Logout</a></li>  
		   </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->

<center>
<h1 style="margin-top:40px;">INSERT ENTRY </h1>
<pre style=" color:#0033FF; background-color:#09C;">
<form name="f1" action="admin_insert_service.php" method="post">
Enter the details of the student,
<br>
Product Code : <input type="number" name="t1" value="" class="ema" required/><br>
    Category : <input type="text" name="t2" value="" class="ema"  required/><br>
Company Name : <input type="text" name="t3" value="" class="ema" required /><br>
      Feature: <input type="text" name="t4" value="" class="ema" required /><br>
        Price: <input type="text" name="t5" value="" class="ema" required /><br>
   Image Ref.: <input type="text" name="t6" value="" class="ema" required /><br>
 <input type="submit" name="b1" value="INSERT to data base." class="log"/>

</form>
</pre>
</center>

<?php
if(isset($_POST['b1']))
{
	if(!empty($_POST['t1']) && !empty($_POST['t2']) && !empty($_POST['t3']) && !empty($_POST['t4']) && !empty($_POST['t5']) && !empty($_POST['t6']))
	{
	$pc=$_POST['t1'];
	$cat=$_POST['t2'];
	$cn=$_POST['t3'];
	$f=$_POST['t4'];
	$p=$_POST['t5'];
	$ir=$_POST['t6'];
  $conn=new mysqli("localhost","root","","interigner");
  if($conn == true)
  {
     $sql = "INSERT INTO services VALUES('$pc','$cat','$cn','$f','$p','$ir')";
	 if($conn->query($sql) == true)
	 { 
	     echo"<h2><center>Inserted.</center></h2>";
	 }
	 else
	 {
	     echo"<h2><center>Not Inserted.</center></h2>";
	 }
  }  
  else
  {
      echo"<h2><center>Connection not Established.</center></h2>";
  }
  }
  else
  {
       echo"<h3><center>Fill out Empty Fields.</h3></center>";  	  
  }
}
?>


  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

</body>
</html>