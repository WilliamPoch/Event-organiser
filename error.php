<!doctype html>
<html lang="en">
  <head>
    <?php include("head.php"); ?>
  </head>
  <body>
<?php
session_start();
?>
<!-- insert your codes here -->





<div class="container">
<div class="row text-center">

<H1>
    <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> <br>
    Error
</H1>

<p style="font-size: 20px; margin-top: 60px; margin-left: 30px">

<?php
  if (isset($_REQUEST['code']) && $_REQUEST['code']=='org_duplicate') {
    $temp_msg = "Duplicate organization name and/or email address.<br>Please try again";
    $temp_link = 'Organizerform.php';
  }elseif (isset($_REQUEST['code']) && $_REQUEST['code']=='dup_participant') {
	$temp_msg = "User already exists with this email.";
    $temp_link = 'BrowseEvent.php';
  }elseif (isset($_REQUEST['code']) && $_REQUEST['code']=='dup_event') {
	$temp_msg = "Event already exists.";
    $temp_link = 'Create_Event.php';
  }elseif (isset($_REQUEST['code']) && $_REQUEST['code']=='invalid') {
	$temp_msg = "Invalid User";
    $temp_link = 'Sign In.php';
  }
?>
    <?php echo $temp_msg; ?>
</p>

<a style="height: 50%; margin-top: 50px" class="btn btn-default" href="<?php echo $temp_link; ?>" role="button">Next</a>




</div>


  </body>
</html>