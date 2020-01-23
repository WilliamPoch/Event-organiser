<!doctype html>
<html lang="en">
  <head>
  <?php
	include('head.php')
	?>
  </head>
  <body>
<?php
	session_start();
	include('dbconnect.php')
	?>
<?php
include('navbar.php')

?> 


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1.jpg" class="d-block w-100" alt="...">
	  <div class="carousel-caption"> 
	  <span class="splash">
		Events Landing Page 
		</span>
		<p>Image Description</p>
		
		</div>
    </div>
    <div class="carousel-item">
      <img src="img/2.png" class="d-block w-100" alt="...">
	  <div class="carousel-caption d-none d-md-block">
	  
		<p>Image Description</p>
		</div>
    </div>
    <div class="carousel-item">
      <img src="img/3.jpg" class="d-block w-100" alt="...">
	  <div class="carousel-caption d-none d-md-block">
		<p>Image Description</p>
		</div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
echo date('r');
?>
<div class="container text-center">
<div class="row">
<span class="splash">
<p style="font-family: Verdana; font-size: 36px; color: Maroon; margin-right: 50px;">
Events Near You </p></span>
<div class="col-sm-5 col-sm-offset-5" 

<div class="btn-group  role="group" aria-label="Button group with nested dropdown" style="margin-left: 5px; margin-top: 10px; margin-right: 10px;">
  
  <button type="button" class="btn btn-secondary">Pick a date</button>

  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Pick a category
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Dropdown link</a>
      <a class="dropdown-item" href="#">Dropdown link</a>
    </div>
  </div>
  <button type="button" class="btn btn-secondary">Free events only</button>
</div>
</div>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-sm-4">
<div class="card" style="margin-bottom: 10px;">
  <img src="img/4.jpg" class="card-img-top img-responsive" alt="...">
  <div class="card-body">
    <h5 class="card-title">Event 1</h5>
    <p class="card-text">Description and Location.</p>
    <a href="BrowseEvent.php" class="btn btn-primary">Details</a>
  </div>
</div>
</div>
<div class="col-sm-4">
<div class="card" style="margin-bottom: 10px;">
  <img src="img/5.jpg" class="card-img-top img-responsive" alt="...">
  <div class="card-body">
    <h5 class="card-title">Event 2</h5>
    <p class="card-text">Description and Location.</p>
    <a href="#" class="btn btn-primary">Details</a>
  </div>
</div>
</div>
<div class="col-sm-4">
<div class="card" style="margin-bottom: 10px;">
  <img src="img/6.jpg" class="card-img-top img-responsive" alt="...">
  <div class="card-body">
    <h5 class="card-title">Event 3</h5>
    <p class="card-text">Description and Location.</p>
    <a href="#" class="btn btn-primary">Details</a>
  </div>
</div>
</div>
<div class="col-sm-4">
<div class="card" style="margin-bottom: 10px;">
  <img src="img/4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Event 1</h5>
    <p class="card-text">Description and Location.</p>
    <a href="#" class="btn btn-primary">Details</a>
  </div>
</div>
</div>
<div class="col-sm-4">
<div class="card" style="margin-bottom: 10px;">
  <img src="img/5.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Event 2</h5>
    <p class="card-text">Description and Location.</p>
    <a href="#" class="btn btn-primary">Details</a>
  </div>
</div>
</div>
<div class="col-sm-4">
<div class="card" style="margin-bottom: 10px;">
  <img src="img/6.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Event 3</h5>
    <p class="card-text">Description and Location.</p>
    <a href="#" class="btn btn-primary">Details</a>
  </div>
</div>
</div>
</div>
</div>
<div class="container-fluid bg-primary">
<div class="row">
<div class="col-sm-4 text-center">
<p style="font-family:verdana; font-size: 14px;">Information </p>
<a style="font-size:12px; color:black" href="#">Contact Us</a>
<div> </div>
<a style="font-size:12px; color:black" href="#">Cookies</a>
<div> </div>
<a style="font-size:12px; color:black" href="#">Terms of Service</a>
<div> </div>
<a style="font-size:12px; color:black" href="#">Privacy Policy</a>
<div> </div>
</div>
<div class="col-sm-4 text-center">
<p style="font-family:verdana; font-size: 14px;">Navigation </p>
<a style="font-size:12px; color:black" href="#">Home</a>
<div> </div>
<a style="font-size:12px; color:black" href="#">Create Event</a>
<div> </div>
<a style="font-size:12px; color:black" href="#">Browse Events</a>
<div> </div>
<a style="font-size:12px; color:black" href="#">Search</a>
<div> </div>
</div>
<div class="col-sm-4 text-center">
<p style="font-family:verdana; font-size: 14px;">Other </p>
<a style="font-size:12px; color:black" href="#">Ads</a>
<div> </div>
<a style="font-size:12px; color:black" href="#">Promote your event here</a>
<div> </div>
<a style="font-size:12px; color:black" href="#">Report event</a>
<div> </div>
<a style="font-size:12px; color:black" href="#">FAQ</a>
<div> </div>
</div>
</div>
</div>

<?php
include('footer.php')
?>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>