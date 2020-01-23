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
include('navbar.php')
?> 
<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#1" aria-controls="1" role="tab" data-toggle="tab">Sign In</a></li>
    <li role="presentation"><a href="#2" aria-controls="2" role="tab" data-toggle="tab">Sign Up</a></li>
	  </ul>
<div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="1">
<?php
include('login.php')
?>
</div>
<div role="tabpanel" class="tab-pane" id="2">
<?php
include('Organizerform.php')
?>	
</div>

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