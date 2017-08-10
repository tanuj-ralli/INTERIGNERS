<!DOCTYPE html>
<html lang="en">
<style>
.log
{
	width:95px; 
    height:45px; 
	color:#FFF; 
	background-color:#09c;
	border:0; 
	font-size:20px;
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
          <a class="navbar-brand" href="index2.php">
            <h1><img class="img-responsive" src="images/logo.png" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
        <li>
			  <?php
			        $pc=$_GET['id'];	
			        $e=$_GET['ee'];
                    echo"<a href=userdetail.php?id=".$e.">";
					
					$conn=new mysqli("localhost","root","","interigner");
					  if($conn == true)
					  {
						 $sql = "SELECT * FROM userdetail WHERE email='$e'";
						 if($result=$conn->query($sql))
						 { 
							if($result->num_rows>0)
							{
								 while($rw=$result->fetch_array())
								 {
									 echo"$rw[2]";				 
								 }
								 
							}
							else
							{
								 echo"<h2>No Record Found.</h2>";
								 
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
					
					echo"</a>";
		      ?>
			</li>                                     
            <li class="scroll"><a href="index2.php">Home</a></li>   
            <li class="scroll"><a href="#contact">Contact Us</a></li>       
            <li class="scroll"><a href="index.php">Logout</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->

  <form name="f1" method="post" action="emi.php?id=<?php echo $pc; ?>&ee=<?php echo $e; ?>">
  <section id="pricing">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Payment Options</h2>
          <p>128 bit encrypted, secured payment options.</p>
        </div>
      </div>
      <div class="pricing-table">
        <div class="row">
          <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <h3>Crtedit Card</h3>
              <center><input type="radio" name="r1" value="creditcard" /></center>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table featured wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <h3>Debit Card</h3>
              <center><input type="radio" name="r1" value="debitcard" /></center>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <h3>Cash on Delivery</h3>
              <center><input type="radio" name="r1" value="cod" /></center>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <h3>Net Banking</h3>
              <center><input type="radio" name="r1" value="netbanking" /></center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#pricing-->
  
  
  <center>
  <input type="submit" name="b1" value="Confirm" class="log" />
  </center>
  </form>
  
  <?php
if(isset($_POST['b1']))
{    
     if(!empty($_POST['r1']))
	 { 
	 $pm=$_POST['r1'];
      $conn=new mysqli("localhost","root","","interigner");
	  if($conn == true)
		  {
		   	  $sql = "SELECT * FROM userdetail WHERE email='$e'";
						 if($result=$conn->query($sql))
						 { 
							if($result->num_rows>0)
							{
								 while($rw=$result->fetch_array())
								 {
									$conn=new mysqli("localhost","root","","interigner");
	                                if($conn == true)
		                            {
			 
										 $sql1 = "INSERT INTO orderd VALUES('$e','$rw[2]','$pc','$pm')";
										 if($conn->query($sql1) == true)
										 { 
											 echo"<h2><center>Product Purchased.</center></h2>";
											 echo"<center><a href=index2.php class=log> Continue Shopping.</a></center>";
										 }
										 else
										 {
											 echo"<h2><center>Second Quary Problem</center></h2>";
										 }
									}
									else
								    {
										  echo"<h2><center>Connection not Established.</center></h2>";
							    	}
								 }
								 
							}
							else
							{
								 echo"<h2>No Record Found as email.</h2>";
								 
							}
						 }
						 else
						 {
							 echo"<h2>Quary Problem.</h2>";
						 }
          }  
		  else
		  {
			  echo"<h2><center>Connection not Established.</center></h2>";
		  }
	 }
	 else
	 {
	      echo"<h3><center>Select any option.</h3></center>";  	 
     }
}

?>

  
  <section id="contact">
    <div id="google-map" class="wow fadeIn" data-latitude="52.365629" data-longitude="4.871331" data-wow-duration="1000ms" data-wow-delay="400ms"></div>
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
          <a href="index2.php"><img class="img-responsive" src="images/logo.png" alt=""></a>
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