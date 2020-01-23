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
	include('dbconnect.php')
	?>
<?php
include('navbar.php')

?>

<div class="container-fluid">
<div class="jumbotron">
<div class="text-center">
	<img src="img/5.jpg" style="width:80%; text-center">
	</div>
  <h1 class="display-4">Event!</h1>
  <p class="lead">This is a sample of an event display</p>
  <hr class="my-4">
  <p>
  Venue:
  <br>
  Start Date and Time:
  <br>
  End Date and Time:
  <br>
  </p>
  <h4>
  Event Description.
  </h4>
  <form>
  
  <p>
  <a class="btn btn-primary btn-lg" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Join
  </a>
  
</p>
</div>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
   <?php
	include('participant.php');
   ?>
  </div>
</div>

</form>
</div>

</div>
</div>






<?php
include('footer.php')
?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>