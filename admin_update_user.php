<!DOCTYPE html>
<html>
<style>
.head
{
  color:#0033FF;
  background-color:#00CCFF;
}
.sub
{
  color:#0033FF;
  background-color:#33CCFF;
  border:#0033FF;
  border:solid;
  border-width:2px;
  border-radius:5px;
   height:25px;
  width:250px; 
  font-size:16px;
  font-weight:bold;
  font-family:"Arial Black", Gadget, sans-serif;
}
.sub:hover
{
   height:25px;
  width:250px; 	
  color:#33CCFF;
  background-color:#0033FF;
  border:#FF0000;
  border:solid;
  border-width:2px;
  border-radius:5px;
  font-size:16px;
  font-weight:bold;
  font-family:"Arial Black", Gadget, sans-serif;
}
.ema
{
  width:250px;
  height:30px;
  padding-left:5px;
  border-radius:5px;
}

</style>
<head>

<!-- /.website title -->
<title>NIT Jalandhar</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<!-- CSS Files -->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet" media="screen">
<link href="css/owl.theme.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/css-index.css" rel="stylesheet" media="screen">
</head>
  
<body data-spy="scroll" data-target="#navbar-scroll" style=" color:#0033FF;">
<!-- NAVIGATION -->
<div id="menu">
	<nav class="navbar-wrapper navbar-default" role="navigation">
		<div class="container">
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-backyard">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand site-name" href="index.php"><img src="images/logo.gif" alt="logo"></a>
			  </div>
	 
			  <div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">
				<ul class="nav navbar-nav">
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
	</nav>
</div>
<center>
<h1 style="margin-top:40px;">UPDATE ENTRY </h1>
<pre style=" color:#0033FF; background-color:#33CCFF;">

<form name="f1" action="admin_update_user.php" method="post">
   EMAIL : <input type="email" name="t1" value="" class="ema" /><br>
PASSWORD : <input type="password" name="t2" class="ema"  /><br />
    Vote : <input type="text" name="t3" class="ema" /><br />
<input type="submit" name="b1" value="UPDATE to data base." class="sub"/>

</form>
</pre>
</center>

<?php
if(isset($_POST['b1']))
{
	$e=$_POST['t1'];
	$p=$_POST['t2'];
	$v=$_POST['t3'];
  $conn=new mysqli("localhost","root","","nitj");
  if($conn == true)
  {
     $sql = "SELECT * FROM vote WHERE email='$e'";
	 if($result=$conn->query($sql))
	 { 
	    if($result->num_rows>0)
		{
		     while($rw=$result->fetch_array())
			 {
                 $sql1= "UPDATE vote set email='$e',password='$p', vote='$v'where email='$e'";
				 if($conn->query($sql1)==true)
				 {
				    echo"<h2><center>Record Updated.</center></h2>";
				 }
				 else
				 {
				    echo"<h2><center>Record NOT Updated.</center></h2>";
				 }
			 }
		}
		else
		{
		     echo"<h2><center>No Record Found.</center></h2>";
		}
	 }
	 else
	 {
	     echo"<h2>Quary Problem.</h2>";
	 }
  }  
  else
  {
      echo"<h2>Connection not Established.</h2>";
  }

}
?>

</body>
</html>	