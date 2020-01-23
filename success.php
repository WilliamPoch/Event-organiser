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
    <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> <br>
    Success
</H1>

<p style="font-size: 20px; margin-top: 60px; margin-left: 30px">
<?php
  if (isset($_REQUEST['code']) && $_REQUEST['code']=='org_added') {
    $temp_msg = "Organizer is added.";
    $temp_link = 'Sign In.php';
  } elseif (isset($_REQUEST['code']) && $_REQUEST['code']=='add_participant') {
	$temp_msg = "Successful.";
    $temp_link = 'myticket.php';
  } elseif (isset($_REQUEST['code']) && $_REQUEST['code']=='add_event') {
	$temp_msg = "Event created.";
    $temp_link = 'OrganizerPage.php';
  } 
?>
    <?php echo $temp_msg; ?>
</p>
<a style="height: 50%; margin-top: 50px" class="btn btn-default" href="<?php echo $temp_link; ?>" role="button">Next</a>




</div>
</div>

  </body>
</html>