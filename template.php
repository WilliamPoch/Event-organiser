<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Event Organizer</title>

    <!-- Latest compiled and minified CSS --> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" integrity="sha384-PmY9l28YgO4JwMKbTvgaS7XNZJ30MK9FAZjjzXtlqyZCqBY6X6bXIkM++IkyinN+" crossorigin="anonymous"> 
    <!-- Optional theme --> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap-theme.min.css" integrity="sha384-jzngWsPS6op3fgRCDTESqrEJwRKck+CILhJVO5VvaAZCq8JYf8HsR/HPpBOOPZfR" crossorigin="anonymous"> 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js" integrity="sha384-vhJnz1OVIdLktyixHY4Uk3OHEwdQqPppqYR8+5mjsauETgLOcEynD9oPHhhz18Nw" crossorigin="anonymous"></script>

  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 0px;">
  <a class="navbar-brand" href="#">Event Organizer</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Create Event</a></li>
      <li><a href="#">Sign In</a></li>
    </ul>
    <ul class="navbar-nav mr-auto navbar-right">
      <li class="nav-item active">
        <a class="nav-link" href="#">Browse Events <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Organize
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Overview</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Pricing</a>
		  <div class="dropdown-divider"></div>
		  <a class="dropdown-item" href="#">Blog</a>
		  <div class="dropdown-divider"></div>
		  <a class="dropdown-item" href="#">Resources</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Help
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">How it works</a>
		  <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">What does it cost to create an event?</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Where are my tickets?</a>
		  <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">How to contact the event organizer</a>
		  <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Help Center</a>
        </div>
      </li>
    </ul>
    
  </div>

</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1.jpg" class="d-block w-100" alt="...">
	  <div class="carousel-caption d-none d-md-block">
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
<div class="container text-center">
<div class="row">
<p style="font-family: Verdana; font-size: 36px; color: purple; margin-right: 50px;">
Live your best life </p>

<div class="btn-group  role="group" aria-label="Button group with nested dropdown" style="margin-left: 25px; margin-top: 10px;">
  
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
<div class="container">
<div class="row">
<div class="col-sm-4">
<div class="card" style="width: 36rem; margin-bottom: 10px;">
  <img src="img/4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Event 1</h5>
    <p class="card-text">Description and Location.</p>
    <a href="#" class="btn btn-primary">Details</a>
  </div>
</div>
</div>
<div class="col-sm-4">
<div class="card" style="width: 36rem; margin-bottom: 10px;">
  <img src="img/5.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Event 2</h5>
    <p class="card-text">Description and Location.</p>
    <a href="#" class="btn btn-primary">Details</a>
  </div>
</div>
</div>
<div class="col-sm-4">
<div class="card" style="width: 36rem; margin-bottom: 10px;">
  <img src="img/6.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Event 3</h5>
    <p class="card-text">Description and Location.</p>
    <a href="#" class="btn btn-primary">Details</a>
  </div>
</div>
</div>
<div class="col-sm-4">
<div class="card" style="width: 36rem; margin-bottom: 10px;">
  <img src="img/4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Event 1</h5>
    <p class="card-text">Description and Location.</p>
    <a href="#" class="btn btn-primary">Details</a>
  </div>
</div>
</div>
<div class="col-sm-4">
<div class="card" style="width: 36rem; margin-bottom: 10px;">
  <img src="img/5.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Event 2</h5>
    <p class="card-text">Description and Location.</p>
    <a href="#" class="btn btn-primary">Details</a>
  </div>
</div>
</div>
<div class="col-sm-4">
<div class="card" style="width: 36rem; margin-bottom: 10px;">
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







<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>