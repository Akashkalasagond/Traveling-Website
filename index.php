
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!doctype html>
<html>
<head>
	<title>Travel the world with cheap and affordable prices</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="tours.css">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<img class="logo"src="" alt="">	
	
	
	<script>  
	$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
	});
</script>
</head>


<body background="Homebkg.jpg">
<br>
	<div class="navbar" id='nav'>
       <ul>
        <li><a style="text-decoration:none; color:white;" href="login.php"> Home</li>
       	 
       	 <li><a href="newbook.html"> Book a tour</li>
       	  <li><a href="about.html">About</li>
       </ul>
	 </div>

	<div class="loc">
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
        <div class="carousel-inner">
            <div class="item active">
                <img src="italy.jpg" alt="First Slide">
				<div class="carousel-caption">
				<h3>Italy</h3>
				<p>"Italy is always so much fun!"</p>
        </div>
            </div>
            <div class="item">
                <img src="Maldives.jpg" alt="Second Slide">
				<div class="carousel-caption">
				<h3>Maldives</h3>
				<p>"Experienced Relaxation at it's finest"</p>
        </div>
            </div>
            <div class="item">
                <img src="Dubai.jpg" alt="Third Slide">
				<div class="carousel-caption">
				<h3>Dubai</h3>
				<p>"As Regal As Ever"</p>
        </div>
            </div>
        </div>
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
	</div>
	
	<div>
		<br><br>
	</div>
	<p style="text-align:center; color:white;">
	Hover Over Display To View Tour ID   
	</p>
	<div class="container-fluid bg-3 text-center">    
	<hr>
	<div class="india">
	<h3 style="text-shadow:0.5px 0.5px #111010; color:rgb(2, 1, 1); font-size: x-large;"><u>India tours</u></h3>
    <div class="col-sm-3">
      <p style="text-shadow:0.5px 0.5px #111010; color:rgb(2, 1, 1); font-size: large; text-align:left;">Agra </p>
	  <a href="#" data-toggle="tooltip" data-placement="bottom" title="tour id=0001 and price= $400">
      <img src="agra.jpeg" class="img-responsive" style="height:190px; width:320px;" alt="Image" ></a>
    </div>
    <div class="col-sm-3"> 
      <p style="text-shadow:0.5px 0.5px #111010; color:rgb(2, 1, 1); font-size: large; text-align:left;">Jammu Kashmir </p>
	  <a href="C:\Akkii\fwt project\ak travels\tours.html" data-toggle="tooltip" data-placement="bottom" title="tour id=0002 and price= $500">
      <img src="jk.jpg" class="img-responsive" style="height:190px; width:320px;" alt="Image"></a>
    </div>
    <div class="col-sm-3"> 
      <p style="text-shadow:0.5px 0.5px #111010; color:rgb(2, 1, 1); font-size: large; text-align:left;">Ajanta Ellora Caves</p>
	  <a href="#" data-toggle="tooltip" data-placement="bottom" title="tour id=0003 and price= $600">
      <img src="ajanta.jpg" class="img-responsive" style="height:190px; width:320px;" alt="Image"></a>
    </div>
    <div class="col-sm-3">
      <p style="text-shadow:0.5px 0.5px #111010;  color:rgb(2, 1, 1); font-size: large; text-align:left;">Beaches of Goa </p>
	  <a href="#" data-toggle="tooltip" data-placement="bottom" title="tour id=0004 and price= $700">
      <img src="goa.jpg" class="img-responsive" style="height:190px; width:320px;" alt="Image"></a>
    </div>
	</div>  
	</div>
	<hr>
	<div class="container-fluid bg-3 text-center"> 
	<div class="Europe">
	<h3 style="text-shadow:0.5px 0.5px #111010; color:rgb(2, 1, 1); font-size:x-large;"><u>Europe tours</u></h3>
    <div class="col-sm-3">
    <br> <p style="text-shadow:0.5px 0.5px #111010; color:rgb(2, 1, 1); font-size: large; text-align:left;">UK </p>
	  <a href="#" data-toggle="tooltip" data-placement="bottom" title="tour id = 1003 price=$500">
      <img src="uk.jpg" class="img-responsive" style="height:190px; width:320px;" alt="Image"></a>	  
	</div>
    <div class="col-sm-3"> 
    <br>  <p style="text-shadow:0.5px 0.5px #111010; color:rgb(2, 1, 1); font-size: large;text-align:left;">Sweden </p>
	  <a href="#" data-toggle="tooltip" data-placement="bottom" title="tour id=1004 and price= $900">
      <img src="sweden.jpg" class="img-responsive" style="height:190px; width:320px;" alt="Image"></a>
    </div>
    <div class="col-sm-3"> 
    <br> <p style="text-shadow:0.5px 0.5px #111010; color:rgb(2, 1, 1); font-size: large;text-align:left;">Germany </p>
	  <a href="#" data-toggle="tooltip" data-placement="bottom" title="tour id=1003 and price=$600">
      <img src="germany.jpg" class="img-responsive" style="height:190px; width:320px;" alt="Image"></a>
    </div>
    <div class="col-sm-3">
    <br><p style="text-shadow:0.5px 0.5px #111010; color:rgb(2, 1, 1); font-size: large;text-align:left;">Russia </p>
	  <a href="#" data-toggle="tooltip" data-placement="bottom" title="tour id=1004 and price=$500">
      <img src="russia.jpg" class="img-responsive" style="height:190px; width:320px;" alt="Image"></a>
    </div>
	<div class="col-sm-3">
  <br><p style="text-shadow:0.5px 0.5px #111010; color:rgb(2, 1, 1); font-size: large;text-align:left; ">Spain </p>
	  <a href="#" data-toggle="tooltip" data-placement="bottom" title="tour id=1005 and price=$900">
      <img src="spain.jpg" class="img-responsive" style="height:190px; width:320px;" alt="Image"></a>
    </div>
    <div class="col-sm-3"> 
    <br><p style="text-shadow:0.5px 0.5px #111010; color:rgb(2, 1, 1); font-size: large;text-align:left;">France </p>
	  <a href="#" data-toggle="tooltip" data-placement="bottom" title="tour id=1006 and price=$600">
      <img src="france.jpg" class="img-responsive" style="height:190px; width:320px;" alt="Image"></a>
    </div>
    <div class="col-sm-3"> 
    <br><p style="text-shadow:0.5px 0.5px #111010; color:rgb(2, 1, 1); font-size: large; text-align:left;">Italy </p>
	  <a href="#" data-toggle="tooltip" data-placement="bottom" title="tour id=1007 and price=$100">
      <img src="italy.jpg" class="img-responsive" style="height:190px; width:320px;" alt="Image"></a>
    </div>
    <div class="col-sm-3">
      <br>
      <p style="text-shadow:0.5px 0.5px #111010; color:rgb(2, 1, 1); font-size: large; text-align:left;">spain </p>
	  <a href="#" data-toggle="tooltip" data-placement="bottom" title="tour id=1008 and price=$1600">
      <img src="spain.jpg" class="img-responsive" style="height:190px; width:320px;" alt="Image"></a>
    </div>
	</div>  
	</div>
	<hr>
	<div class="container-fluid bg-3 text-center"> 
	<div class="rest"><u>
	<h3 style="text-shadow:0.5px 0.5px #111010; color:rgb(2, 1, 1); font-size:x-large;"><u>Rest of The World</u> </h3> 
	<div class="col-sm-3">
    <br>
      <p style="text-shadow:0.5px 0.5px #111010; color:black; font-size: large; text-align:left;" >United States of America </p>
	  <a href="#" data-toggle="tooltip" data-placement="bottom" title="tour id=2001 and price=$1000">
      <img src="us.jpg" class="img-responsive" style="height:190px; width:320px;" alt="Image"></a>
    </div>
	<div class="col-sm-3">
    <br>
      <p style="text-shadow:0.5px 0.5px #111010; color:rgb(2, 1, 1); font-size: large; text-align:left;">Egypt </p>
	  <a href="#" data-toggle="tooltip" data-placement="bottom" title="tour id=2002 and price=$1200">
      <img src="egypt.jpg" class="img-responsive" style="height:190px; width:320px;" alt="Image"></a>
    </div>
	<div class="col-sm-3">
    <br>
      <p style="text-shadow:0.5px 0.5px #111010; color:rgb(2, 1, 1); font-size: large; text-align:left;">Australia </p>
	  <a href="#" data-toggle="tooltip" data-placement="bottom" title="tour id=2003 and price=$1200">
      <img src="australia.jpg" class="img-responsive" style="height:190px; width:320px;" alt="Image"></a>
    </div>
	<div class="col-sm-3">
    <br>
      <p style="text-shadow:0.5px 0.5px #111010; color:rgb(2, 1, 1); font-size: large; text-align:left;">Brazil </p>
	  <a href="#" data-toggle="tooltip" data-placement="bottom" title="tour id=2004 and price=$3100">
      <img src="brazil.jpg" class="img-responsive" style="height:190px; width:320px;" alt="Image"></a>
    </div>
	<div class="col-sm-3">
    <br>
      <p style="text-shadow:0.5px 0.5px #111010; color:rgb(2, 1, 1); font-size: large; text-align:left; ">Japan</p>
	  <a href="#" data-toggle="tooltip" data-placement="bottom" title="tour id=2005 and price=$2200">
      <img src="japan.jpg" class="img-responsive" style="height:190px; width:320px;" alt="Image"></a>
    </div>
	<div class="col-sm-3">
    <br>
      <p style="text-shadow:0.5px 0.5px #111010; color:rgb(2, 1, 1); font-size: large; text-align:left;">Argentina </p>
	  <a href="#" data-toggle="tooltip" data-placement="bottom" title="tour id=2006 and price=$3800">
      <img src="argentina.jpg" class="img-responsive" style="height:190px; width:320px;" alt="image"></a>
    </div>
	<div class="col-sm-3">
    <br>
      <p style="text-shadow:0.5px 0.5px #111010; color:rgb(2, 1, 1); font-size: large; text-align:left;">China </p>
	  <a href="#" data-toggle="tooltip" data-placement="bottom" title="tour id=2007 and price=$4300">
      <img src="china.jpg" class="img-responsive" style="height:190px; width:320px;" alt="Image"></a>
    </div>
	<div class="col-sm-3">
  <br><p style="text-shadow:0.5px 0.5px #111010; color:rgb(2, 1, 1); font-size: large;text-align:left;">South Africa</p>
	  <a href="#" data-toggle="tooltip" data-placement="bottom" title="tour id=2008 and price=$4300">
      <img src="sa.jpg" class="img-responsive" style="height:190px; width:320px;" alt="Image"></a>
    </div>
	</div>  
	</div>
	<hr>
</body>
<footer>
<p>
	Project By-
	Akash Kalsagond
</p>
</footer>
</html>