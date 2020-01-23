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
include('navbar.php')

?> 
<?php
include('dbconnect.php');
?>
<?php
if (!($_SESSION)) {
	header('location:Sign In.php');
}
$current_date = date('Ymd')
?>
<div class="text-center container">
<img src="img/logo.jpg" class="align-self-center image-responsive" style="width:15%; margin-top: 15px;" alt="...">
<p style="font-family: verdana; font-size:18px">Participant Page</p>
<div class="col-sm-1">
</div>
</div>

<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#1" aria-controls="1" role="tab" data-toggle="tab">Upcoming events</a></li>
    <li role="presentation"><a href="#2" aria-controls="2" role="tab" data-toggle="tab">History</a></li>
    <li role="presentation"><a href="#3" aria-controls="3" role="tab" data-toggle="tab">Feedback</a></li>
	  </ul>
<div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="1">
<?php
//=============== list of events ===================
if (!isset($_REQUEST['code'])) {
?>

	<div class ="container">
    <div class="row text-center"><h1><strong>List of events</strong></h1></div>
    <div class="row" style="margin-top:10px;">

        <table class="table table-striped">
        <tr>
            <th>No.</th>
            <th>Image</th>
            <th>Event</th>
            <th>Join</th>
        </tr>

<?php
    //read data
      $r = mysqli_query($dbc, "SELECT *, (SELECT COUNT(id) FROM participant WHERE participant.my_event_id=my_event.id) AS my_count FROM my_event 
    WHERE organizer_id='$_SESSION[org_id]'") or die ('Error: '.mysqli_error ());$counter=1;
    while ($row=mysqli_fetch_array($r)) {
		
?>


        <tr>
            <td><?php echo $counter; ?></td>
            <td><img src="images/<?php echo $row['promo_picture']; ?>" class="img-thumbnail" style="max-width:200px;"></td>

            <td><a href="=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a><br>
                <?php echo $row['start_date']; ?>
				
            <br><?php echo $row['my_count']; ?> participants</td>
			<td><a href="participant.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-open" aria-hidden="true"></span></a>
            </td>
			</tr>
<?php  
        $counter+=1;

    }   //end while
?>        

        </table>


    </div>

<?php
    }   //end if (list of events)
?>
</div>
</div>
<div role="tabpanel" class="tab-pane" id="2">

</div>
<div role="tabpanel" class="tab-pane" id="3">

</div>


<div style="margin-top:140px">
<?php
include('footer.php')
?>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>