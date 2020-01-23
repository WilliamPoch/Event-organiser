<!doctype html>
<html lang="en">
  <head>
    <?php include("head.php"); ?>
  </head>
  <body>

<!-- insert your codes here -->





<div class="container" style="width:90%; margin-top:20px;">



<div class="row text-center">

<H1>
    <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> <br>
    Success
</H1>

<p>
<?php
  if (isset($_REQUEST['code']) && $_REQUEST['code']=='org_added') {
    $temp_msg = "Organizer is added.";
    $temp_link = 'Organizerform.php';
  } elseif (isset($_REQUEST['code']) && $_REQUEST['code']=='add_participant') {
	$temp_msg = "New user created.";
    $temp_link = 'Participant.php';
  }
?>
    <?php echo $temp_msg; ?>
</p>

<a class="btn btn-default" href="<?php echo $temp_link; ?>" role="button">Next</a>




</div>

    <!-- footer -->
    <div class="row text-center" style="width:100%; margin:0 auto;"><hr><small>&copy; 2019 Every Event version 1.0</small></div>

</div>  <!-- /container -->

  </body>
</html>