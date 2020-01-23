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
?>
<?php 
include('navbar.php')
?>
<?php
include('dbconnect.php')
?>

<?php
$r = mysqli_query($dbc, "SELECT * FROM participant 
where my_event_id='6'") or die ('Error: '.mysqli_error ());

?>
<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
	  <th scope="col">Phone Number</th>
    </tr>	
  </thead>
  <tbody>
<?php
if ($r->num_rows> 0){
	while ($row = mysqli_fetch_array($r)) {		
		echo '<tr>
			<td scope="row">' . $row['id']. '</td>
			<td>' . $row['first_name'] .'</td>
			<td>' . $row['last_name'] .'</td>
			<td>' . $row['email'] .'</td>
			<td>' .$row['phone'] .'</td>
			</tr>';
	}
}else {
	echo "0 results found.";
}

?>
  </tbody>
</table>
 
<?php
include('footer.php')
?>

 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>