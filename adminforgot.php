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
  width:170px; 
  font-size:16px;
  font-weight:bold;
}
.sub:hover
{
   height:25px;
  width:170px; 	
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

<body>
   	
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
				    <li><a href="admin_signup.php">Create Account</a></li>
                    <li><a href="delete_admin_account.php">Delete Account</a></li>
                    <li><a href="admin_page.php">Logout</a></li>
		   </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
  
<?php
$e=$_GET['id'];
?>
<form name="f1" action="adminforgot.php?id=<?php echo $e; ?>" method="post">
<center>
<pre style="height:400px; background-color:#09c;">
<br><br><br>
   <br>
  <input type="password" name="t2" placeholder="CURRENT PASSWORD" class="ema" required/><br>
  <input type="password" name="e1" placeholder="NEW PASSWORD" class="ema" required ><br>
  <input type="password" name="e2" placeholder="RE-TYPE NEW PASSWORD" class="ema" required >
   <br><br>
   <input type="submit" name="b1" value="Change Password" class="log">

</pre>
</center>
</form> 
<?php

if(isset($_POST['b1']))
{  
   if(!empty($_POST['e1']) && !empty($_POST['t2']) && !empty($_POST['e2']))
   {
   $np=$_POST['e1'];
   $nrp=$_POST['e2'];
   $p=$_POST['t2'];
   $conn=new mysqli("localhost","root","","interigner");
  if($conn == true)
  {
     $sql = "SELECT * FROM admin WHERE email='$e' and password='$p'";
	 if($result=$conn->query($sql))
	 { 
	    if($result->num_rows>0)
		{
		     while($rw=$result->fetch_array())
			 {
			     						
					   if($np==$nrp)
                 {
					
						 $sql1= "UPDATE admin set email= '$rw[0]',password='$np',name='$rw[2]', ques='$rw[3]', ans='$rw[4]' WHERE email='$rw[0]'";
					 if($conn->query($sql1)==true)
					 {
					   echo"<center><h2>New Password is saved.</h2></center>"; 
					 }
					 else
					 {
						echo"<h2><center>Second Quary Problem.</center></h2>";
					 }
			     }
			     else
			     {
				    echo"<center><h2>Password didn't Match, Enter New password again.</h2></center>";
			     }	 
				 
			  }
		}
		else
		{
		     echo"<h2><center>Check your Current Password.</center></h2>";
		}
	 }
	 else
	 {
	     echo"<h2><center>Quary Problem.</center></h2>";
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
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.php"><img class="img-responsive" src="images/logo.png" alt=""></a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; INTERIGNER's Company Limited</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Designed by <a href="#">TR</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

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