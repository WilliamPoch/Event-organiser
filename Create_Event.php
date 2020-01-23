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
    include('dbconnect.php');
?>
<?php 
	include('navbar.php');
	?>
<div class="text-center container">
<img src="img/logo.jpg" class="align-self-center image-responsive" style="width:15%; margin-top: 15px;" alt="...">
<p style="font-family: verdana; font-size:18px">Create an Event</p>
</div>  

<?php
//********************** ADDING NEW RECORD *******************
if(isset($_REQUEST['code']) && $_REQUEST['code']=='new') {


$create_date=date('Y-m-d H:i:s');

//echo $_REQUEST['fname'].' '.$_REQUEST['lname'].' '.$_REQUEST['organization'].' '.$_REQUEST['address'].' '.$_REQUEST['phone'].' '.$_REQUEST['email'].' '.$_REQUEST['psswd'].' '.$create_date;

//1. check duplicate organization name and email
//prevent sql injection attack

$title = mysqli_real_escape_string($dbc, $_REQUEST['title']);

//read the data from db
$r = mysqli_query($dbc, "SELECT * FROM my_event 
WHERE title='$title'") or die ('Error: '.mysqli_error ());

//2. if duplicate is found then redirect user to error with error code
if (mysqli_num_rows($r)) { //case of duplicate 
    echo "<meta http-equiv='refresh' content='0;url=error.php?code=dup_event'>"; 
    exit(); 
}   //end check duplicate
//3. if not found then insert record to db
mysqli_query($dbc, "INSERT INTO my_event (title, description, start_date, start_time, end_date,
end_time, location, promo_picture, create_date, deadline, organizer_id) 
VALUES ('$_REQUEST[title]', '$_REQUEST[description]', '$_REQUEST[start_date]', 
'$_REQUEST[start_time]', '$_REQUEST[end_date]', '$_REQUEST[end_time]', '$_REQUEST[location]', 
'$_REQUEST[promo_pic]','$create_date', '$_REQUEST[deadline]', '$_SESSION[org_id]')") or die('Error: ' . mysqli_error());

//4. redirect the user to success page
echo "<meta http-equiv='refresh' content='0;url=success.php?code=add_event'>"; 

}   //end if


?>




<!-- display form -->
<?php 
    if(!isset($_REQUEST['code']) || $_REQUEST['code']=='') { 
?>

  
  
<div class="container text-left bg-light"> 
<div class="row">
<div class="col-sm-7">
<form class="" action="Create_Event.php" method="post"> 
	<input type="hidden" name="code" value="new">
	<input type="hidden" name="id" value="10">
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

<?php
}
?>
<div style="margin-top: 246px">
<?php
include('footer.php')
?>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>