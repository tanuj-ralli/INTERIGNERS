<!DOCTYPE html>
<html lang="en">
<style>
#aa1
{
  background-color:#09C;
  height:500px;
  width:100%;
  float:left;
}
.ema
{
  width:250px;
  height:30px;
  padding-left:5px;
  border-radius:5px;
  color:#000;
}
.log
{
  border:0;
  color:#F00;
  background-color:#CCC; 
  border-radius:4px;
  height:25px;
  width:70px; 
}
.log:hover
{
  border:0;
  color:#F00;
  background-color:#FFF; 
  border-radius:4px;
  height:25px;
  width:70px; 
}
.sel
{
  height:25px;
  width:125px;
  border:0;
  border-radius:4px;
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
            <li class="scroll"><a href="index.php">Home</a></li>
            <li class="scroll"><a href="login.php">Login</a></li>
           </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
  
<div id="aa1">  
<form name="f1" action="signup.php" method="post">
<center>
<pre style="background-color:#09C;">
<br><br><br>
<input type="email" name="e1" placeholder="Email" class="ema" required ><br>
<input type="password" placeholder="Password" name="e2" class="ema" required ><br>
<input type="password" placeholder="Re-type Password" name="e3" class="ema" required ><br>
<input type="text" placeholder="Name" name="e4" class="ema" required ><br>
<input type="number" placeholder="Mobile number" name="e5" class="ema" required><br><br>
<select name="e6" class="ema">
				    <option>Select your Security Question</option>
					<option>Favourite Book</option>
					<option>Favourite Place</option>
			    </select><br>
<input type="text" placeholder="Answer" name="e7" class="ema" required ><br>
<input type="submit" name="b1" value="Sign Up" class="log">




</pre>
</center>
</form>
</div>
<?php
if(isset($_POST['b1']))
{ 
   if(!empty($_POST['e1']) && !empty($_POST['e2']) && !empty($_POST['e3']) && !empty($_POST['e4']) && !empty($_POST['e5']) && !empty($_POST['e7']))
  {	 
  $e=$_POST['e1'];
  $p=$_POST['e2'];
  $rp=$_POST['e3'];
  $n=$_POST['e4'];
  $m=$_POST['e5'];
  $q=$_POST['e6'];
  $a=$_POST['e7'];
  if($p==$rp)
  {
      $conn=new mysqli("localhost","root","","interigner");
	  if($conn == true)
	  {
		 $sql = "INSERT INTO userdetail VALUES('$e','$p','$n','$m','$q','$a')";
		 if($conn->query($sql) == true)
		 { 
			 echo"<h2><center>Successfully Signed In,Login to continue.</center></h2>";
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
      echo"<h2><center>Password did not match, Enter again.</center></h2>";
  }  
 }
 else
 {
	  echo"<h3><center>Fill out Empty Fields.</h3></center>";   
 }
}

?>
  <section id="contact">
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Contact Us</h2>
            <p>Anytine,Anywhere.</p>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <p>We will be happy to help you.</p>
                <ul class="address">
                  <li><i class="fa fa-map-marker"></i> <span> Address:</span> NIT Jalandhar </li>
                  <li><i class="fa fa-phone"></i> <span> Phone:</span> 987654321  </li>
                  <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="#">tanujralli97@gmail.com</a></li>
                  <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="#">nitj.ac.in</a></li>
                </ul>
              </div>                            
            </div>
          </div>
        </div>
      </div>
    </div>        
  </section><!--/#contact-->
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