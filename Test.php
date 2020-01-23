<!doctype html>
<html lang="en">
  <head>
    
 <?php
	include('head.php')
	?>
	
  </head>
  <body>
<?php
include('navbar.php')

?> 
<?php
include('dbconnect.php')
?>

 
<div class="text-center container">
<img src="img/logo.jpg" class="align-self-center image-responsive" style="width:15%; margin-top: 15px;" alt="...">
<p style="font-family: verdana; font-size:18px">Organization Registration</p>

</div>  

<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#1" aria-controls="1" role="tab" data-toggle="tab">Home</a></li>
    <li role="presentation"><a href="#2" aria-controls="2" role="tab" data-toggle="tab">Profile</a></li>
    <li role="presentation"><a href="#3" aria-controls="3" role="tab" data-toggle="tab">Messages</a></li>
    <li role="presentation"><a href="#4" aria-controls="4" role="tab" data-toggle="tab">Settings</a></li>
  </ul>


  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="1">
<div class="container text-left bg-light"> 
<div class="row">
<div class="col-sm-7">
<form class="" action="Create_Event.php" method="post"> 
	<input type="hidden" name="code" value="new">

<div class="form-group">
	<label for="Event" class="col-sm-4" style="margin-top: 8px" >Event Name</label>
	<div class="col-sm-7">
	<input type="text" class="form-control" id="Event" name="title" placeholder="Event name"required autofocus>
	</div>
	</div>
	
<div class="form-group">
	<label for="Org" class="col-sm-4" style="margin-top: 8px" >Venue</label>
	<div class="col-sm-7">
	<input type="text" class="form-control" id="location" name="location" placeholder="Location"required>
	</div>
	</div>

<div class="form-group">
	<label for="Org" class="col-sm-4" style="margin-top: 8px" >Start Date and Time</label>
	<div class="col-sm-4">
	<input type="date" class="form-control" id="start_date" name="start_date" placeholder="Event name"required>
	</div>
	<div class="col-sm-3">
	<input type="time" class="form-control" id="start_time" name="start_time" placeholder="Event name"required>
	</div>
	</div>		
<div class="form-group">
	<label for="Org" class="col-sm-4" style="margin-top: 8px" >End Date and Time</label>
	<div class="col-sm-4">
	<input type="date" class="form-control" id="end_date" name="end_date" placeholder="Event name"required>
	</div>
	<div class="col-sm-3">
	<input type="time" class="form-control" id="end_time" name="end_time" placeholder="Event name"required>
	</div>
	</div>		

<div class="form-group">
	<label for="Org" class="col-sm-4" style="margin-top: 8px" >Deadline</label>
	<div class="col-sm-7">
	<input type="date" class="form-control" id="deadline" name="deadline" placeholder="Deadline"required>
	</div>
	</div>	

<div class="form-group">
    <label for="exampleFormControlSelect2" class="col-sm-4">Ticketing</label>
	<div class="col-sm-7">
    <select class="form-control" id="exampleFormControlSelect2">
      <option>Walk-in</option>
      <option>Walk-in + Online Booking</option>
      <option>Booking Only</option>
      <option>Free Entry</option>
      <option>Other</option>
    </select>
	</div>
</div>
 
</div>

<div class="col-sm-5"> 

<div class="form-group row">
	<label for="" class="col-sm-4" style="margin-top: 8px">Photo Cover</label>
	<div class="col-sm-7">
	<input type="file" class="form-control-file" id="promo_pic" name="promo_pic" placeholder="Promo Picture" required>
	</div>
</div>

<div class="form-group">
    <label for="exampleFormControlTextarea1">Event Description</label>
    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
  </div>
  
 <div class="col-sm-4">
<button class="btn btn-info" style="margin-top: 10px" type="submit">
<span class=" glyphicon glyphicon-ok" aria-hidden="true"> Register</span>
	</button>
</div>
</form>
</div>


</div>
</div>

	</div>
    <div role="tabpanel" class="tab-pane" id="2">2
	</div>
    <div role="tabpanel" class="tab-pane" id="3">3</div>
    <div role="tabpanel" class="tab-pane" id="4">4</div>

  </div>

</div>

<div style="margin-top:140px">
<?php
include('footer.php')
?>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>