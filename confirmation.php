
<?php 
include('head.php');
?>
<?php 
include('dbconnect.php');
?>
<head>
<script LANGUAGE="JavaScript">
 function confirmDelete() { 
     var agree=confirm("Are you sure to delete this record?");
 if (agree) 
 return true ;
  else
   return false ; } 
  </script>
 
  </head>
  <?php
session_start();
?>
<?php 
if(!($_SESSION)){
  header("location:logout.php");
}
?>
  <?php 
  $_SESSION['id'] = $_REQUEST['id'];
  ?>
<?php 
    $r = mysqli_query($dbc, "SELECT * FROM my_event LEFT JOIN organizer ON organizer.id = my_event.organizer_id WHERE

    my_event.id = '$_SESSION[id]' AND organizer.id = '$_SESSION[org_id]'") or die ('Error: '.mysqli_error ());

while ($row=mysqli_fetch_array($r)) {
  
  ?>





  <form class="form-horizontal"  action = "checkis.php" method="post" onSubmit="return confirmDelete();">
 
  <div class="form-group text-center" style = "margin-top:100px">
                
                <button type="submit" class="btn btn-primary">Delete</button>
            </div>
            
  </head>
 </div>
 </form>
 <?php 
}
?>
 </body>
 </html>