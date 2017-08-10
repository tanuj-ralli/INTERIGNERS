<!DOCTYPE html>
<html lang="en">
<style>
#aa1
{
  background-color:#09C;
  height:800px;
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
          <a class="navbar-brand" href="index2.php">
            <h1><img class="img-responsive" src="images/logo.png" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
			  <li>
			  <?php
                $e=$_GET['id'];
                echo"<a href=index2.php?id=".$e.">Home</a>";	
              ?>
              </li>
              <li>
			  <?php
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
            <li class="scroll"><a href="index.php">Logout</a></li>       
		   </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
  
<div id="aa1">		
<br>
<center>
<h1 style="color:#FFFFFF;">Expert Suggestion</h1>
<h3 style="color:#FFF;"><p>Write us your address and details, our Expert will contact you and visit you as soon as visible.</p></h3>
</center>
<br>
 <form name="f1" method="post" action="expert.php?id=<?php echo $e; ?>">
                    <div class="form-group2">
                      <input type="text" name="name" class="form-control" placeholder="Name" style="color:#000;" required>
                    </div>
                <div class="form-group2">
                  <textarea name="address" id="message" class="form-control" rows="2" placeholder="Enter your Address" required></textarea>
                </div>                        
                <div class="form-group2">
                  <input type="number" name="number" class="form-control" placeholder="Phone number(10 digits)" required>
                </div>
                <div class="form-group2">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Possible visiting hours." required></textarea>
                </div>                        
                <div class="form-group2">
                  <input type="submit" class="btn-submit2" name="b1" value="SendNow"> 
                </div>
  </form> 
</div aa1>

           <?php
				if(isset($_POST['b1']))
				{
				  if(!empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['number']) && !empty($_POST['message']))
				  {	
				  $n=$_POST['name'];
				  $a=$_POST['address'];
				  $num=$_POST['number'];
				  $m=$_POST['message'];
					  $conn=new mysqli("localhost","root","","interigner");
					  if($conn == true)
					  {
						 $sql = "INSERT INTO expert VALUES('$n','$e','$a','$num','$m')";
						 if($conn->query($sql) == true)
						 { 
							 echo"<h2><center>Thanks for writing to us,Our Expert will contact you soon.</center></h2>";
						 }
						 else
						 {
							 echo"<h2><center>Quary problem.</center></h2>";
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