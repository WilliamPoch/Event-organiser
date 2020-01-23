
<style type="text/css">

.myLabel {
    color: #CCCCCC;
}

<!--
    div.zone { border: 2mm solid #EEEEEE; border-radius: 5mm; background: #FFFFFF; border-collapse: collapse; padding:3mm; font-size: 2.7mm;}
    h1 { padding: 0; margin: 0; color: #DD0000; font-size: 10mm; }
    h2 { padding: 0; margin: 0; color: #222222; font-size: 5mm; }
    h3 { padding: 0; margin: 0; color: #222222; font-size: 10mm; }
-->
</style>
<?php
include('dbconnect.php');
?>
<?php
session_start();
?>
<?php
$_SESSION['id'] = $_REQUEST['id']
?>
<?php
	$r = mysqli_query($dbc, "SELECT * FROM my_event LEFT JOIN participant on my_event_id = participant.my_event_id 
	WHERE my_event_id='$_SESSION[id]'") or die ('ERROR:'.mysqli_error ());
	
	$row=mysqli_fetch_array($r)
?>
<page format="176x250" orientation="L" backcolor="#FFFFFF" style="font: arial;">

    <table style="width: 96%;border: none;" cellspacing="4mm" cellpadding="0">
        <tr>
            <td style="width: 75%; vertical-align: top;">
                <div class="zone myLabel" style="height: 34mm;position: relative;font-size: 5mm;">
                    Event<br><br>
                    <h1><?php echo $row['title'] ?></h1>     
                     
                    <br>Date/Time <h2><?php echo $row['start_date'] ?></h2>
                    <br>Localtion <h2><?php echo $row['location'] ?></h2>
                </div>
            </td>
            <td style="width: 25%; vertical-align: top;">
                <div class="zone myLabel" style="height: 20mm;position: relative;font-size: 5mm;">
                    <img src="img/<?php echo $row['promo_pic'] ?>" width="200">
                    <br><br>Reference Number<br>
                    <h2><?php echo $row['reference_code'] ?></h2>
                    <br>
                </div>
            </td>
        </tr>

        <tr>
            <td style="width: 75%; vertical-align: top;">
                <div class="zone myLabel" style="height: 24mm;position: relative;font-size: 5mm;">
                    Name<br><br>
                    <h3><?php echo $row['first_name'] ?>
					<?php echo $row['last_name'] ?></h3>
                </div>
            </td>
            <td style="width: 25%; vertical-align: top;">
                <div class="zone myLabel" style="position: relative; text-align: center; font-size: 5mm;">
                    <qrcode value="<?php echo $num."\n".$nom."\n".$date; ?>" ec="Q" style="width: 24mm; border: none;" ></qrcode>
                </div>            
            </td>
        </tr>
    </table>
<?php 

?>
</page>
