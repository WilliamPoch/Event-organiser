<?php
include('dbconnect.php');
?>
<?php 
session_start();
?>
<?php 
if(!($_SESSION)){
    header("location:Sign In.php");
}
?>

<?php 
$id=$_SESSION['in'];
echo $id;
$io = $_REQUEST['promo_pic'];
echo $io;
$ii = $_REQUEST['start_date'];
echo $ii;
$ie = $_REQUEST['location'];

$if = $_REQUEST['title'];

$ig = $_REQUEST['description'];



$query = "UPDATE   my_event  SET promo_picture='$io' WHERE id=$id"; 

 mysqli_query($dbc,$query) or die ( mysqli_error());
$cc = "UPDATE my_event SET start_date = '$ii' WHERE id = $id";
mysqli_query($dbc,$cc) or die ( mysqli_error());
$ce = "UPDATE my_event SET location = '$ie' WHERE id = $id";
mysqli_query($dbc,$ce) or die ( mysqli_error());
$cf = "UPDATE my_event SET title = '$if' WHERE id = $id";
mysqli_query($dbc,$cf) or die ( mysqli_error());
$cg = "UPDATE my_event SET description = '$ig' WHERE id = $id";
mysqli_query($dbc,$cg) or die ( mysqli_error());
header("Location:OrganizerPage.php"); 

?>

