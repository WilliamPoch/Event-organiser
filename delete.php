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
    header("location:Sign In.php");
}
?>
<?php
$eid = $_REQUEST['id'];
?>
<?php 
$id=$_SESSION['org_id'];
echo $id;
$query = "DELETE FROM  participant  WHERE my_event_id=$id"; 
$result = mysqli_query($dbc,$query) or die ( mysqli_error());
$query2 = "DELETE FROM  my_event  WHERE id=$eid"; 
$result2 = mysqli_query($dbc,$query2) or die ( mysqli_error());
header("location:OrganizerPage.php");
?>