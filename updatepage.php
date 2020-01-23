<?php 
include('head.php');
?>
<head>
<script LANGUAGE="JavaScript"> 
function confirmUpdate()
 { 
     var agree=confirm("Are you sure to update this record?");
      if (agree) return true ;
       else return false ;
        }
         </script>

</head>
<?php 
require('dbconnect.php');
?>
<?php 
session_start();
?>
<?php 
if(!($_SESSION)){
    header("location:Sign In.php");
} 
?>

<?php 
$_SESSION['in']= $_REQUEST['id'];


?>
<?php 
    $r = mysqli_query($dbc, "SELECT * FROM my_event LEFT JOIN organizer ON organizer.id = my_event.organizer_id WHERE

    my_event.id = '$_SESSION[in]' AND organizer.id = '$_SESSION[org_id]'") or die ('Error: '.mysqli_error ());

while ($row=mysqli_fetch_array($r)) {
  
  ?>






<div class="text-center container">
<img src="img/logo.jpg" class="align-self-center image-responsive" style="width:15%; margin-top: 15px;" alt="...">
<p style="font-family: verdana; font-size:18px">Update Event</p>
</div>




<div class="container text-left bg-light"> 
<div class="row">
<div class="col-sm-7">
<form class="" action="update.php" method="post" onSubmit="return confirmUpdate();"> 
	
<div class="form-group">
	<label for="Event" class="col-sm-4" style="margin-top: 8px" >Event Name</label>
	<div class="col-sm-7">
	<input type="text" class="form-control" id="Event" value="<?php echo $row['title'];?>" name="title"required autofocus>
	</div>
	</div>
	
<div class="form-group">
	<label for="Org" class="col-sm-4" style="margin-top: 8px" >Venue</label>
	<div class="col-sm-7">
	<input type="text" class="form-control" id="location" value = "<?php echo $row['location'];?>" name="location" value = "<?php echo $row['location'];?>" placeholder="Location"required>
	</div>
	</div>

<div class="form-group">
	<label for="Org" class="col-sm-4" style="margin-top: 8px" >Start Date and Time</label>
	<div class="col-sm-4">
	<input type="date" class="form-control" id="start_date" value = "<?php echo $row['start_date'];?>" name="start_date" placeholder="Event name"required>
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
    <textarea class="form-control" id="description" value = "<?php echo $row['description'];?>" name="description" rows="3"></textarea>
  </div>
  
 <div class="col-sm-4">
<button class="btn btn-info" style="margin-top: 10px" type="submit">
<span class=" glyphicon glyphicon-ok" aria-hidden="true"> Update</span>
	</button>
</div>
</form>
</div>


</div>
</div>

 <?php 
}
?>
   


  </body>
</html>

