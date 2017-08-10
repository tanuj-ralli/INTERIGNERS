<!DOCTYPE html>
<html lang="en">
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
  
  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image:url(images/slider/s1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Attarctive <span style="color:green">Design's</span></h1>
            <p class="animated fadeInRightBig">Sleek display's - All India Supply </p>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/s2.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Reliable and Durable <span> Interiors</span></h1>
            <p class="animated fadeInRightBig">India's No. 1 - Latest Design's</p>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/s3.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">We are <span>Creative</span></h1>
            <p class="animated fadeInRightBig">Designers - Choice</p>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

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
            <li>
			  <?php
                    session_start();			
                    $e = $_SESSION['e'];
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
            <li class="scroll"><a href="#blog">Products</a></li>
            <li class="scroll"><a href="#services">Services</a></li>
            <li class="scroll"><a href="#about-us">About Us</a></li>           
            <li class="scroll"><a href="#contact">Contact</a></li>       
            <li class="scroll"><a href="index.php">Logout</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->


  </header><!--/#home-->
 

  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Our Products</h2>
          <p>Hundreds of product to choose from,just login to buy your stuff.</p>
        </div>
      </div>
      <div class="blog-posts">
        <div class="row">
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="post-thumb">
              <div id="post-carousel1"  class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
               <div class="item active">  
			         <?php
				     $conn=new mysqli("localhost","root","","interigner");
					  if($conn == true)
					  {
						 $sql = "SELECT * FROM services WHERE category ='ktn'";
						 if($result=$conn->query($sql))
						 { 
							if($result->num_rows>0)
							{
								 $rw=$result->fetch_array();
								 {
								  echo"<a href=collectionset2.php?cat=".$rw[1]."&ee=".$e."><img class=img-responsive src=images/kitchen/k1.jpg alt=heloo></a>";
								 }
							}
							else
							{
								 echo"<h2>No Record Found.</h2>";
							}
						 }
						 else
						 {
							 echo"<h2>Query Problem.</h2>";
						 }
					  }  
					  else
					  {
						  echo"<h2>Connection not Established.</h2>";
					  }  
				  ?>
				  </div>
                  <div class="item">
				     <?php
				     $conn=new mysqli("localhost","root","","interigner");
					  if($conn == true)
					  {
						 $sql = "SELECT * FROM services WHERE category ='ktn'";
						 if($result=$conn->query($sql))
						 { 
							if($result->num_rows>0)
							{
								 $rw=$result->fetch_array();
								 {
								  echo"<a href=collectionset2.php?cat=".$rw[1]."&ee=".$e."><img class=img-responsive src=images/kitchen/k2.jpg alt=heloo></a>";
								 }
							}
							else
							{
								 echo"<h2>No Record Found.</h2>";
							}
						 }
						 else
						 {
							 echo"<h2>Query Problem.</h2>";
						 }
					  }  
					  else
					  {
						  echo"<h2>Connection not Established.</h2>";
					  }  
				  ?>
				  </div>
                  <div class="item">
				     <?php
				     $conn=new mysqli("localhost","root","","interigner");
					  if($conn == true)
					  {
						 $sql = "SELECT * FROM services WHERE category ='ktn'";
						 if($result=$conn->query($sql))
						 { 
							if($result->num_rows>0)
							{
								 $rw=$result->fetch_array();
								 {
								  echo"<a href=collectionset2.php?cat=".$rw[1]."&ee=".$e."><img class=img-responsive src=images/kitchen/k3.jpg alt=heloo></a>";
								 }
							}
							else
							{
								 echo"<h2>No Record Found.</h2>";
							}
						 }
						 else
						 {
							 echo"<h2>Query Problem.</h2>";
						 }
					  }  
					  else
					  {
						  echo"<h2>Connection not Established.</h2>";
					  }  
				  ?>
				  </div>
                  <div class="item">
				     <?php
				     $conn=new mysqli("localhost","root","","interigner");
					  if($conn == true)
					  {
						 $sql = "SELECT * FROM services WHERE category ='ktn'";
						 if($result=$conn->query($sql))
						 { 
							if($result->num_rows>0)
							{
								 $rw=$result->fetch_array();
								 {
								  echo"<a href=collectionset2.php?cat=".$rw[1]."&ee=".$e."><img class=img-responsive src=images/kitchen/k4.jpg alt=heloo></a>";
								 }
							}
							else
							{
								 echo"<h2>No Record Found.</h2>";
							}
						 }
						 else
						 {
							 echo"<h2>Query Problem.</h2>";
						 }
					  }  
					  else
					  {
						  echo"<h2>Connection not Established.</h2>";
					  }  
				  ?>
				  </div>
                  <div class="item">
				     <?php
				     $conn=new mysqli("localhost","root","","interigner");
					  if($conn == true)
					  {
						 $sql = "SELECT * FROM services WHERE category ='ktn'";
						 if($result=$conn->query($sql))
						 { 
							if($result->num_rows>0)
							{
								 $rw=$result->fetch_array();
								 {
								  echo"<a href=collectionset2.php?cat=".$rw[1]."&ee=".$e."><img class=img-responsive src=images/kitchen/k5.jpg alt=heloo></a>";
								 }
							}
							else
							{
								 echo"<h2>No Record Found.</h2>";
							}
						 }
						 else
						 {
							 echo"<h2>Query Problem.</h2>";
						 }
					  }  
					  else
					  {
						  echo"<h2>Connection not Established.</h2>";
					  }  
				  ?>
				  </div>
                </div>                               
                <a class="blog-left-control" href="#post-carousel1" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="blog-right-control" href="#post-carousel1" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
              </div>                            
            </div>
            <div class="entry-header">
              
              <?php
					  $conn=new mysqli("localhost","root","","interigner");
					  if($conn == true)
					  {
						 $sql = "SELECT * FROM services WHERE category ='ktn'";
						 if($result=$conn->query($sql))
						 { 
							if($result->num_rows>0)
							{
								 $rw=$result->fetch_array();
								 {
								   echo"<h3><a href=collectionset2.php?cat=".$rw[1]."&ee=".$e."><center>Kitchens</center></a></h3>"; 
								 }
							}
							else
							{
								 echo"<h2>No Record Found.</h2>";
							}
						 }
						 else
						 {
							 echo"<h2>Query Problem.</h2>";
						 }
					  }  
					  else
					  {
						  echo"<h2>Connection not Established.</h2>";
					  }
					?>
            </div>
            <div class="entry-content">
              <p>World Class Kitchens.</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="post-thumb">
              <div id="post-carousel2"  class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                 <div class="item active">  
                     <?php
				     $conn=new mysqli("localhost","root","","interigner");
					  if($conn == true)
					  {
						 $sql = "SELECT * FROM services WHERE category ='dwroom'";
						 if($result=$conn->query($sql))
						 { 
							if($result->num_rows>0)
							{
								 $rw=$result->fetch_array();
								 {
								  echo"<a href=collectionset2.php?cat=".$rw[1]."&ee=".$e."><img class=img-responsive src=images/dwroom/dw1.jpg alt=heloo></a>";
								 }
							}
							else
							{
								 echo"<h2>No Record Found.</h2>";
							}
						 }
						 else
						 {
							 echo"<h2>Query Problem.</h2>";
						 }
					  }  
					  else
					  {
						  echo"<h2>Connection not Established.</h2>";
					  }  
				  ?>
				  </div>
                  <div class="item">
				     <?php
				     $conn=new mysqli("localhost","root","","interigner");
					  if($conn == true)
					  {
						 $sql = "SELECT * FROM services WHERE category ='dwroom'";
						 if($result=$conn->query($sql))
						 { 
							if($result->num_rows>0)
							{
								 $rw=$result->fetch_array();
								 {
								  echo"<a href=collectionset2.php?cat=".$rw[1]."&ee=".$e."><img class=img-responsive src=images/dwroom/dw2.jpg alt=heloo></a>";
								 }
							}
							else
							{
								 echo"<h2>No Record Found.</h2>";
							}
						 }
						 else
						 {
							 echo"<h2>Query Problem.</h2>";
						 }
					  }  
					  else
					  {
						  echo"<h2>Connection not Established.</h2>";
					  }  
				  ?>
				  </div>
                  <div class="item">
				     <?php
				     $conn=new mysqli("localhost","root","","interigner");
					  if($conn == true)
					  {
						 $sql = "SELECT * FROM services WHERE category ='dwroom'";
						 if($result=$conn->query($sql))
						 { 
							if($result->num_rows>0)
							{
								 $rw=$result->fetch_array();
								 {
								  echo"<a href=collectionset2.php?cat=".$rw[1]."&ee=".$e."><img class=img-responsive src=images/dwroom/dw3.jpg alt=heloo></a>";
								 }
							}
							else
							{
								 echo"<h2>No Record Found.</h2>";
							}
						 }
						 else
						 {
							 echo"<h2>Query Problem.</h2>";
						 }
					  }  
					  else
					  {
						  echo"<h2>Connection not Established.</h2>";
					  }  
				  ?>
				  </div>
                  <div class="item">
				     <?php
				     $conn=new mysqli("localhost","root","","interigner");
					  if($conn == true)
					  {
						 $sql = "SELECT * FROM services WHERE category ='dwroom'";
						 if($result=$conn->query($sql))
						 { 
							if($result->num_rows>0)
							{
								 $rw=$result->fetch_array();
								 {
								  echo"<a href=collectionset2.php?cat=".$rw[1]."&ee=".$e."><img class=img-responsive src=images/dwroom/dw4.jpg alt=heloo></a>";
								 }
							}
							else
							{
								 echo"<h2>No Record Found.</h2>";
							}
						 }
						 else
						 {
							 echo"<h2>Query Problem.</h2>";
						 }
					  }  
					  else
					  {
						  echo"<h2>Connection not Established.</h2>";
					  }  
				  ?>
				  </div>
                  <div class="item">
				     <?php
				     $conn=new mysqli("localhost","root","","interigner");
					  if($conn == true)
					  {
						 $sql = "SELECT * FROM services WHERE category ='dwroom'";
						 if($result=$conn->query($sql))
						 { 
							if($result->num_rows>0)
							{
								 $rw=$result->fetch_array();
								 {
								  echo"<a href=collectionset2.php?cat=".$rw[1]."&ee=".$e."><img class=img-responsive src=images/dwroom/dw5.jpg alt=heloo></a>";
								 }
							}
							else
							{
								 echo"<h2>No Record Found.</h2>";
							}
						 }
						 else
						 {
							 echo"<h2>Query Problem.</h2>";
						 }
					  }  
					  else
					  {
						  echo"<h2>Connection not Established.</h2>";
					  }  
				  ?>
				  </div>   
                </div>                               
                <a class="blog-left-control" href="#post-carousel2" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="blog-right-control" href="#post-carousel2" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
              </div>             
            </div>
            <div class="entry-header">  
              <?php
					  $conn=new mysqli("localhost","root","","interigner");
					  if($conn == true)
					  {
						 $sql = "SELECT * FROM services WHERE category ='dwroom'";
						 if($result=$conn->query($sql))
						 { 
							if($result->num_rows>0)
							{
								 $rw=$result->fetch_array();
								 {
								    echo"<h3><a href=collectionset2.php?cat=".$rw[1]."&ee=".$e."><center>Drawing Rooms</center></a></h3>";
								 }
					        }
							else
							{
								 echo"<h2>No Record Found.</h2>";
							}
						 }
						 else
						 {
							 echo"<h2>Query Problem.</h2>";
						 }
					  }
					  else
					  {
						  echo"<h2>Connection not Established.</h2>";
					  }
					?>
            </div>
            <div class="entry-content">
              <p>Choose your Style.</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms">
            <div class="post-thumb">
              <div id="post-carousel3"  class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="item active">  
			         <?php
				     $conn=new mysqli("localhost","root","","interigner");
					  if($conn == true)
					  {
						 $sql = "SELECT * FROM services WHERE category ='bedroom'";
						 if($result=$conn->query($sql))
						 { 
							if($result->num_rows>0)
							{
								 $rw=$result->fetch_array();
								 {
								  echo"<a href=collectionset2.php?cat=".$rw[1]."&ee=".$e."><img class=img-responsive src=images/bedroom/br1.jpg alt=heloo></a>";
								 }
							}
							else
							{
								 echo"<h2>No Record Found.</h2>";
							}
						 }
						 else
						 {
							 echo"<h2>Query Problem.</h2>";
						 }
					  }  
					  else
					  {
						  echo"<h2>Connection not Established.</h2>";
					  }  
				  ?>
				  </div>
                  <div class="item">
				     <?php
				     $conn=new mysqli("localhost","root","","interigner");
					  if($conn == true)
					  {
						 $sql = "SELECT * FROM services WHERE category ='bedroom'";
						 if($result=$conn->query($sql))
						 { 
							if($result->num_rows>0)
							{
								 $rw=$result->fetch_array();
								 {
								  echo"<a href=collectionset2.php?cat=".$rw[1]."&ee=".$e."><img class=img-responsive src=images/bedroom/br2.jpg alt=heloo></a>";
								 }
							}
							else
							{
								 echo"<h2>No Record Found.</h2>";
							}
						 }
						 else
						 {
							 echo"<h2>Query Problem.</h2>";
						 }
					  }  
					  else
					  {
						  echo"<h2>Connection not Established.</h2>";
					  }  
				  ?>
				  </div>
                  <div class="item">
				     <?php
				     $conn=new mysqli("localhost","root","","interigner");
					  if($conn == true)
					  {
						 $sql = "SELECT * FROM services WHERE category ='bedroom'";
						 if($result=$conn->query($sql))
						 { 
							if($result->num_rows>0)
							{
								 $rw=$result->fetch_array();
								 {
								  echo"<a href=collectionset2.php?cat=".$rw[1]."&ee=".$e."><img class=img-responsive src=images/bedroom/br3.jpg alt=heloo></a>";
								 }
							}
							else
							{
								 echo"<h2>No Record Found.</h2>";
							}
						 }
						 else
						 {
							 echo"<h2>Query Problem.</h2>";
						 }
					  }  
					  else
					  {
						  echo"<h2>Connection not Established.</h2>";
					  }  
				  ?>
				  </div>
                  <div class="item">
				   <?php
				     $conn=new mysqli("localhost","root","","interigner");
					  if($conn == true)
					  {
						 $sql = "SELECT * FROM services WHERE category ='bedroom'";
						 if($result=$conn->query($sql))
						 { 
							if($result->num_rows>0)
							{
								 $rw=$result->fetch_array();
								 {
								  echo"<a href=collectionset2.php?cat=".$rw[1]."&ee=".$e."><img class=img-responsive src=images/bedroom/br4.jpg alt=heloo></a>";
								 }
							}
							else
							{
								 echo"<h2>No Record Found.</h2>";
							}
						 }
						 else
						 {
							 echo"<h2>Query Problem.</h2>";
						 }
					  }  
					  else
					  {
						  echo"<h2>Connection not Established.</h2>";
					  }  
				  ?>
				  </div>
                  <div class="item">
				     <?php
				     $conn=new mysqli("localhost","root","","interigner");
					  if($conn == true)
					  {
						 $sql = "SELECT * FROM services WHERE category ='bedroom'";
						 if($result=$conn->query($sql))
						 { 
							if($result->num_rows>0)
							{
								 $rw=$result->fetch_array();
								 {
								  echo"<a href=collectionset2.php?cat=".$rw[1]."&ee=".$e."><img class=img-responsive src=images/bedroom/br5.jpg alt=heloo></a>";
								 }
							}
							else
							{
								 echo"<h2>No Record Found.</h2>";
							}
						 }
						 else
						 {
							 echo"<h2>Query Problem.</h2>";
						 }
					  }  
					  else
					  {
						  echo"<h2>Connection not Established.</h2>";
					  }  
				  ?>
				  </div>
                 </div>                               
                <a class="blog-left-control" href="#post-carousel3" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="blog-right-control" href="#post-carousel3" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
              </div>                            
            </div>
            <div class="entry-header"> 
              <?php
					  $conn=new mysqli("localhost","root","","interigner");
					  if($conn == true)
					  {
						 $sql = "SELECT * FROM services WHERE category ='bedroom'";
						 if($result=$conn->query($sql))
						 { 
							if($result->num_rows>0)
							{
								 $rw=$result->fetch_array();
								 {
									 
									 echo"<h3><a href=collectionset2.php?cat=".$rw[1]."&ee=".$e."><center>Bed Rooms</center></a></h3>";
								 }
							}
							else
							{
								 echo"<h2>No Record Found.</h2>";
							}
						 }
						 else
						 {
							 echo"<h2>Query Problem.</h2>";
						 }
					  }  
					  else
					  {
						  echo"<h2>Connection not Established.</h2>";
					  }
					?>
            </div>
            <div class="entry-content">
              <p>Comfort is Everything</p>
            </div>
          </div>                    
        </div>              
      </div>
    </div>
  </section><!--/#blog-->
   
  
      <section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>Our Services</h2>
            <p>Interigner deal's with the Interior and Exterior designed products available all over the globe and provide facility to provide you the quality product at your door. </p>
          </div>
        </div> 
      </div>
      <div class="text-center our-services">
        <div class="row">
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="fa fa-coffee"></i>
            </div>
            <div class="service-info">
				<?php
                 echo"<a href=expert.php?id=".$e."><center><h3>Expert Suggestion</h3></center></a>";	
                ?>
               <p>One designer can actually help you to find the best availability of design as per the space available at your place </p>
            </div>
           </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="service-icon">
              <i class="fa fa-home"></i>
            </div>
            <div class="service-info">
              <?php
                 echo"<a href=delivery2.php?id=".$e."><center><h3>Home Delivery</h3></center></a>";	
                ?>
              <p>Get your item <br>with in five days from <br>ordering.</p>
            </div>
          </div>
          
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="service-icon">
              <i class="fa fa-envelope"></i>
            </div>
			<div class="service-info">
				<?php
                 echo"<a href=onlinecomp.php?id=".$e."><center><h3>Online Complaint</h3></center></a>";	
                ?>
              <p><a href="#contact">Contact us 24*7</a>,<br> Lodge your complaint anytime,<br> anywhere.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#services-->
 



  
  <section id="about-us" class="parallax">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2 style="color:#000;">About us</h2>
            <p>Leaders Worldwide </p>
            <p>Won award of reliable products in event hosted by Snapdeal in 2016.</p>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <p class="lead">Customer's Satisfaction</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="99">99%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
              <p class="lead">Reliability</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="95">95%</div>
              
              
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
              <p class="lead">Delivery Products</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="90">90%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
              <p class="lead">Designs</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="85">85%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#about-us-->
   <section id="features" class="parallax">
    <div class="container">
      <div class="row count">
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
          <i class="fa fa-user"></i>
          <h3 class="timer">4000</h3>
          <p>Happy Clients</p>
        </div>
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
          <i class="fa fa-desktop"></i>
          <h3 class="timer">200</h3>                    
          <p>Modern Designs</p>
        </div> 
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="700ms">
          <i class="fa fa-trophy"></i>
          <h3 class="timer">10</h3>                    
          <p>WINNING AWARDS</p>
        </div> 
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="900ms">
          <i class="fa fa-comment-o"></i>                    
          <h3>24/7</h3>
          <p>Fast Support</p>
        </div>                 
      </div>
    </div>
  </section><!--/#features-->

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