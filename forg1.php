<!DOCTYPE html>
<html lang="en">
<style>
#aa1
{
  background-color:#09C;
  height:400px;
  width:100%;
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
  color:#ff3333;
  background-color:#CCCCCC; 
  border-radius:4px;
  height:25px;
  width:70px; 
}
.log:hover
{
  border:0;
  color:#ff3333;
  background-color:#FFFFFF; 
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
            <li class="scroll"><a href="login.php">Login</a></li>
           </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
  
<div id="aa1">
<br><br>
<?php
{
  session_start();
  $rww = $_SESSION['e'];
  echo"<h1><center>  Question : ".$rww[4]. "?</center></h1>";
}
?>

<form name="f1" action="forg1.php" method="post">
<center>
<pre style="background-color:#09C;">
Type your Answer :<input type="text" name="e1" class="ema" required ><br>
<input type="submit" name="b1" value="CONFIRM" class="log">

</pre>
</center>
</form>
</div>
<?php
if(isset($_POST['b1']))
{ 
  if(!empty($_POST['e1']))
  {	
  $ans=$_POST['e1'];
  if($ans==$rww[5])
  {
     session_start();
	 $_SESSION['ps']=$rww;
	 header('location:forg2.php');
  }
  else
  {
    echo"<center><h2>INVALID Answer, Enter again.</h2></center>";
  }
  }
 else
 {
	 echo"<h3><center>Fill out Empty Field.</h3></center>";  
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