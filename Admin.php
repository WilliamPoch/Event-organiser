<!doctype html>
<html lang="en">
  <head>
<?php
	include('head.php')
	?>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 0px;">
<img src="img/logo.jpg" class="align-self-center image-responsive" style="width:2%; margin-right: -10px;" alt="...">
  <a class="navbar-brand" href="Main.php">Event Organizer</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Create Event</a></li>
      <li class="nav-item active"><a href="#">Sign In</a></li>
    </ul>
    <ul class="navbar-nav mr-auto navbar-right">
      <li class="nav-item">
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
<div class="text-center container">
<img src="img/logo.jpg" class="align-self-center image-responsive" style="width:15%; margin-top: 15px;" alt="...">
<p style="font-family: verdana; font-size:18px">Admin Page</p>

</div>
<div class="container text-left"> 
<div class="row">
<div class="col-sm">
<div class="table-responsive">
<table class="table table-striped"> 
<thead class="thead-dark">
<tr>
<th style="font-family:Arial; font-size: 16px; width: 2%">
	ID	
	</th>

<th style="font-family:Arial; font-size: 16px; width: 20%">
	Organization
	</th>
<th style="font-family:Arial; font-size: 16px; width: 12%">
	Contact	
	</th>

</tr>


</thead>
<tbody>
<tr>
<td style="font-family: verdana; font-size:14px">
	1
	</td>
<td style="font-family: verdana; font-size:14px">
	ABAC
	<div class="text-right">
	<a href="#" style="font-size:12px; color:blue; margin-right: 20px"> 4 Events Listed
	<span class="glyphicon glyphicon-tags" aria-hidden="true">
	</span></a>
	</div>
	<div class="text-right">
	<a href="#" style="font-size:12px; color:red; margin-right: 20px">2 Events Ongoing
	<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"> 
	</span></a>
	</div>
	</td>
<td style="font-family: verdana; font-size:14px">
	Address: #1, West-Street, Longview OH

	<p style="font-size:12px;">Tel: 012 345 678
	</p>
		<div> </div>
	<p style="font-size:12px;">Email: exampleemail@gmail.com
	</p>
	<div> </div>
	</td>
</tr>
</tbody>
<tbody>
<tr>
<td style="font-family: verdana; font-size:14px">
	2
	</td>
<td style="font-family: verdana; font-size:14px">
	Party Event
	<div class="text-right">
	<a href="#" style="font-size:12px; color:blue; margin-right: 20px"> 4 Events Listed
	<span class="glyphicon glyphicon-tags" aria-hidden="true">
	</span></a>
	</div>
	<div class="text-right">
	<a href="#" style="font-size:12px; color:red; margin-right: 20px">2 Events Ongoing
	<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"> 
	</span></a>
	</div>
	</td>
<td style="font-family: verdana; font-size:14px">
	Address: #1, West-Street, Longview OH

	<p style="font-size:12px;">Tel: 012 345 678
	</p>
		<div> </div>
	<p style="font-size:12px;">Email: exampleemail@gmail.com
	</p>
	<div> </div>
	</td>
</tr>
</tbody>
</table> 
</div>
</div> 
</div>
</div>

<div class="container-fluid bg-primary text-center" style="margin-top: 400px">
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" style="color:black" href="#">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:black" href="#">Contact</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:black" href="#">Help Center</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:black" href="#">FAQs</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:black" href="#">Languages</a>
  </li>
</ul>
</div>
<?php
include('footer.php')
?>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>