

 
<div class="text-center container">
<img src="img/logo.jpg" class="align-self-center image-responsive" style="width:15%; margin-top: 15px;" alt="...">
<p style="font-family: verdana; font-size:18px">Organization Registration</p>

</div>  
<?php
//********************** ADDING NEW RECORD *******************
if(isset($_REQUEST['code']) && $_REQUEST['code']=='new') {

//$var1 = $_REQUEST['fname'];
//echo 'ORG=' . $_REQUEST['organization'];

$create_date=date('Y-m-d H:i:s');

//echo $_REQUEST['fname'].' '.$_REQUEST['lname'].' '.$_REQUEST['organization'].' '.$_REQUEST['address'].' '.$_REQUEST['phone'].' '.$_REQUEST['email'].' '.$_REQUEST['psswd'].' '.$create_date;

//1. check duplicate organization name and email
//prevent sql injection attack
$organization = mysqli_real_escape_string($dbc, $_REQUEST['organization']);
$email = mysqli_real_escape_string($dbc, $_REQUEST['email']);

//read the data from db
$r = mysqli_query($dbc, "SELECT * FROM organizer 
WHERE organization_name='$organization' OR email='$email'") or die ('Error: '.mysqli_error ());

//2. if duplicate is found then redirect user to error with error code
if (mysqli_num_rows($r)) { //case of duplicate 
    echo "<meta http-equiv='refresh' content='0;url=error.php?code=org_duplicate'>"; 
    exit(); 
}   //end check duplicate


$password = $_REQUEST['password'];
$hash = password_hash($password, PASSWORD_DEFAULT);
//3. if not found then insert record to db
mysqli_query($dbc, "INSERT INTO organizer (first_name, last_name, organization_name, address, 
phone, email, password, register_date, activated) 
VALUES ('$_REQUEST[first_name]', '$_REQUEST[last_name]', '$_REQUEST[organization]', 
'$_REQUEST[address]', '$_REQUEST[phone]', '$_REQUEST[email]', '$hash', '$create_date', 0)") or die('Error: ' . mysqli_error());

//4. redirect the user to success page
echo "<meta http-equiv='refresh' content='0;url=success.php?code=org_added'>"; 

}   //end if


?>




<!-- display form -->
<?php 
    if(!isset($_REQUEST['code']) || $_REQUEST['code']=='') { 
?>
<div class="container text-left bg-light"> 
<div class="row">
<div class="col-sm-7">
<form class="" action="Organizerform.php" method="post">  
<div class="form-group">

	<input type="hidden" name="code" value="new"> 
	
	<label for="organization" class="col-sm-4" style="margin-top: 8px">Organization</label>
	<div class="col-sm-7">
	<input type="text" class="form-control" id="organization_name" name="organization" placeholder="Organization"required autofocus>
	</div>
	</div>
<div class="form-group">
	<label for="Name" class="col-sm-4" style="margin-top: 8px" >Contact Person</label>
	<div class="col-sm-4">
	<input type="text" class="form-control" id="First Name" name="first_name" placeholder="First name"required>
	</div>
	<div class="col-sm-3">
	<input type="text" class="form-control" id="Last Name" name="last_name" placeholder="Last name"required>
	</div>
	</div>

<div class="form-group">
	<label for="email" class="col-sm-4" style="margin-top: 8px">Email address</label>
	<div class="col-sm-7">
	<input type="email" class="form-control" id="email" name="email" placeholder="Email address"required>
	</div>
	</div>
<div class="form-group">
	<label for="pwd" class="col-sm-4" style="margin-top: 8px">Password</label>
	<div class="col-sm-7">
	<input type="password" class="form-control" id="pwd" name="password" placeholder="Password" required>
	</div>
	</div>
	<div class="form-group">
	<label for="pwd" class="col-sm-4" style="margin-top: 8px">Confirm Password</label>
	<div class="col-sm-7">
	<input type="password" class="form-control" id="pwd" name="cpassword" placeholder="Re-enter Password" required>
	</div>
	</div>
<div class="form-group">
	<label for="Phone" class="col-sm-4" style="margin-top: 8px">Phone</label>
	<div class="col-sm-7">
	<input type="number_format" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
	</div>
	<label for="organization" class="col-sm-4" style="margin-top: 8px">Address</label>
	<div class="col-sm-7">
	<input type="text" class="form-control" id="address" name="address" placeholder="Address"required>
	</div>
</div>
<div class="col-sm-4">
<button class="btn btn-info" style="margin-top: 10px" type="submit">
<span class=" glyphicon glyphicon-ok" aria-hidden="true"> Register</span>
	</button>
</div>

  
  
</form>  
</div>

<div class="col-sm-5"> 
<form>
<div class="form-group row">
	<label for="" class="col-sm-4" style="margin-top: 8px">Photo Cover</label>
	<div class="col-sm-7">
	<input type="file" class="form-control-file" id="promo-pic" name="promo-pic" placeholder="Promo Picture" required>
	</div>
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