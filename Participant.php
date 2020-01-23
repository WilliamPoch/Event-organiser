
<body>
<?php
include('dbconnect.php');
session_start();
?>


<?php
//********************** ADDING NEW RECORD *******************
if(isset($_REQUEST['code']) && $_REQUEST['code']=='new') {



$create_date=date('Y-m-d H:i:s');

//echo $_REQUEST['fname'].' '.$_REQUEST['lname'].' '.$_REQUEST['organization'].' '.$_REQUEST['address'].' '.$_REQUEST['phone'].' '.$_REQUEST['email'].' '.$_REQUEST['psswd'].' '.$create_date;

//1. check duplicate organization name and email
//prevent sql injection attack

$email = mysqli_real_escape_string($dbc, $_REQUEST['email']);

//read the data from db
$r = mysqli_query($dbc, "SELECT * FROM participant 
WHERE email='$email'") or die ('Error: '.mysqli_error ());

//2. if duplicate is found then redirect user to error with error code
if (mysqli_num_rows($r)) { //case of duplicate 

    echo "<meta http-equiv='refresh' content='0;url=error.php?code=dup_participant'>"; 
    exit(); 
}   //end check duplicate


$_SESSION['id']=$_REQUEST['i'];


//3. if not found then insert record to db
mysqli_query($dbc, "INSERT INTO participant (first_name, last_name, email, phone, my_event_id, register_date, reference_code) 
VALUES ('$_REQUEST[fname]', '$_REQUEST[lname]', '$_REQUEST[email]', '$_REQUEST[phone]', '$_REQUEST[i]', '$create_date', '$_REQUEST[reference]')") or die('Error: ' . mysqli_error());

//4. redirect the user to success page
echo "<meta http-equiv='refresh' content='0;url=success.php?code=add_participant'>"; 

}   //end if


?>




<!-- display form -->
<?php 
    if(!isset($_REQUEST['code']) || $_REQUEST['code']=='') { 
?>

  
  
<div class="container text-left"> 
<div class="row">
<div class="col-sm-7">
<form class="form-horizontal" action="myticket.php?id=<?php echo $_REQUEST['i']?>" method="post"> 
<div class="form-group">

	<input type="hidden" name="code" value="new"> 
	<input type="hidden" name="id" value="myticket.php?id=<?php echo $_REQUEST['i']?>">
	<label for="Name" class="col-sm-4" style="margin-top: 8px" >Name</label>
	<div class="col-sm-4">
	<input type="text" class="form-control" id="fname" name="fname" placeholder="First name"required autofocus>
	</div>
	<div class="col-sm-3">
	<input type="text" class="form-control" id="lname" name="lname" placeholder="Last name"required>
	</div>
	</div>

<div class="form-group">
	<label for="email" class="col-sm-4" style="margin-top: 8px">Email address</label>
	<div class="col-sm-7">
	<input type="email" class="form-control" id="email" name="email" placeholder="Email address"required>
	</div>
	</div>

<div class="form-group">
	<label for="Phone" class="col-sm-4" style="margin-top: 8px">Phone/Tel</label>
	<div class="col-sm-7">
	<input type="number_format" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
	</div>
</div>  

<div class="form-group">
	<label for="Phone" class="col-sm-4" style="margin-top: 8px">Reference Code</label>
	<div class="col-sm-7">
	<input type="number_format" class="form-control" id="ref" name="reference" placeholder="Organization Reference Code" required>
	</div>
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
	



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>