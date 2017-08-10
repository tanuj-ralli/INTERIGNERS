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
  width:70px; 
}
.log:hover
{
  border:0;
  color:#0033FF;
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

<form name="f1" action="admin_delete_service.php" method="post">
    <center>
	<br/><br><br><br>
	Enter the Product ID whose rocord is to be deleted : <input type="number" name="t1" class="ema" required /><br /><br/> 
	<input type="submit" name="b1" value="SUBMIT" class="log"/><br/><br>
    </center>
</form>

<?php
if(isset($_POST['b1']))
{
  if(!empty($_POST['t1']))
  {
  $e=$_POST['t1'];
  $conn=new mysqli("localhost","root","","interigner");
  if($conn == true)
  {
     $sql = "SELECT * FROM services WHERE productcode='$e'";
	 if($result=$conn->query($sql))
	 { 
	    if($result->num_rows>0)
		{
		     while($rw=$result->fetch_array())
			 {
			     $sql1= "DELETE FROM services WHERE email='$e'";
				 if($conn->query($sql1)==true)
				 {
				    echo"<h2><center>Record Deleted.</center></h2>";
				 }
				 else
				 {
				    echo"<h2><center>Record NOT Deleted.</center></h2>";
				 }
			 }

		}
		else
		{
		     echo"<h2><center> No Record Found.</center></h2>";
			 
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
       echo"<h3><center>Please fill the column.</h3></center>";	  
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