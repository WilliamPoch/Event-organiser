

<div class="container text-center"> 
<?php
	if(isset($_REQUEST['code']) && $_REQUEST['code']='login') {
		$password = $_REQUEST['password'];
		$email =  $_REQUEST['email'];
		$pass = password_hash($password, PASSWORD_DEFAULT);

		//read the data from db
		$r = mysqli_query($dbc, "SELECT * FROM organizer 
		WHERE password='$pass' OR email='$email'") or die ('Error: '.mysqli_error ());
		
		if (!mysqli_num_rows($r)) { 
			echo "<meta http-equiv='refresh' content='0;url=error.php?code=invalid'>"; 		
		}
		
		$row = mysqli_fetch_array($r);
		$_SESSION['org_id'] = $row['id'];
		$_SESSION['name'] = $row['first_name']. ' '.$row['last_name'];
		$_SESSION['organization_name'] = $row['organization_name'];
		
		print_r($_SESSION);
		echo "<meta http-equiv='refresh' content='0;url=OrganizerPage.php'>"; 
	
	}

?>



<?php 
    if(!isset($_REQUEST['code'])) { 
?>
<div class="row">
<div class="col-sm">
<img src="img/logo.jpg" class="align-self-center image-responsive" style="width:15%; margin-top: 15px;" alt="...">
<p style="font-size: 30px; font-family: Verdana; margin-top: 10px;margin-bottom:-5px;">Get Started </p>
<small style="color:grey"> Enter your email address to login or sign up. </small>
<div class="form-group" style="margin-top: 5px;">
	<div class="col-sm-4 col-sm-offset-4">
	<form class="" method="post">
	<input type="hidden" name="code" value="login">
	<div class="input-group">
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" required autofocus>
	<input type="password" class="form-control" name="password" id="password" aria-describedby="pass" placeholder="Enter your password" required>
	<button class="btn btn-info" style="margin-top: 10px" type="submit">Sign In
	</button>
	</div>
	</form>
	</div>
	</div>

</div> 

</div>
<?php
	}
	?>
</div>
	
