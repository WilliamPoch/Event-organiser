<!doctype html>
<html lang="en">
  <head>

    <?php
        include('head.php');
    ?>

  </head>
  <body>


<!-- insert your codes here -->

<?php
    include('dbconnect.php');
?>
<?php
session_start();
?>

<?php 
if(isset($_REQUEST['code']) && $_REQUEST['code']=='add') {
    $create_date=date('Y-m-d H:i:s');

    //1. check duplicate event
    //prevent sql injection attack
    $temp_title = mysqli_real_escape_string($dbc, $_REQUEST['title']);
    
    //read the data from db
    $r = mysqli_query($dbc, "SELECT * FROM my_event 
    WHERE title='$temp_title'") or die ('Error: '.mysqli_error ());
    
    //2. if duplicate is found then redirect user to error with error code
    if (mysqli_num_rows($r)) { //case of duplicate 
        echo "<meta http-equiv='refresh' content='0;url=error.php?code=event_duplicate'>"; 
        exit(); 
    }   //end check duplicate
    
    //3. if not found then insert record to db
    $temp_promo_picture='promo_picture/my_event.jpg';
    mysqli_query($dbc, "INSERT INTO my_event (title, description, start_date, start_time, end_date, end_time, location, promo_picture, create_date, deadline, organizer_id) 
    VALUES ('$temp_title', '$_REQUEST[description]', '$_REQUEST[start_date]', '$_REQUEST[start_time]', '$_REQUEST[end_date]', '$_REQUEST[end_time]', '$_REQUEST[location]', '$temp_promo_picture', '$create_date', '$_REQUEST[deadline]', $_REQUEST[id])") or die('Error: ' . mysqli_error());
    
    //4. redirect the user to success page
    echo "<meta http-equiv='refresh' content='0;url=success.php?code=event_added'>"; 
    

}   //end if (insert event)
?>


<?php
    //generate current date for date field in the form
    $current_date = date("Y-m-d");
    ?>
    <?php date_default_timezone_set('Asia/Bangkok'); 

    $current_time = date("h:i:s");
?>



<div class="row text-center"><h1><strong>List of events</strong></h1></div>


<div class="container" style="width:90%; margin-top:20px;">
<?php
//=============== create new event form ===================
if (isset($_REQUEST['code']) && $_REQUEST['code']=='new') {
?>

<div class="row text-center"><h1><strong>Create new event</strong></h1></div>
  <div class="row" style="margin-top:10px;">
            <form class="form-horizontal" action="OrganizerEvent.php" method="post">
                <input type="hidden" name="code" value="add">
                <input type="hidden" name="id" value="13">
                <div class="form-group">
                <label for="title" class="col-sm-3 control-label">Event Title</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="title" id="title" placeholder="Event Title" required autofocus>
                </div>
                </div>

                <div class="form-group">
                <label for="description" class="col-sm-3 control-label">Description</label>
                <div class="col-sm-7">
                    <textarea class="col-sm-7 form-control" rows="6" id="description" name="description" placeholder="Description"></textarea>
                </div>
                </div>

                <div class="form-group">
                <label for="start_date" class="col-sm-3 control-label">Start Date</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" name="start_date" id="start_date" min="<?php echo $current_date; ?>" required>
                </div>
                <label for="start_time" class="col-sm-1 control-label">Time</label>
                <div class="col-sm-3">
                    <input type="time" class="form-control" name="start_time" id="start_time" placeholder="Time" required>
                </div>
                </div>

                <div class="form-group">
                <label for="end_date" class="col-sm-3 control-label">End Date</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" name="end_date" id="end_date" min="<?php echo $current_date; ?>" required>
                </div>
                <label for="end_time" class="col-sm-1 control-label">Time</label>
                <div class="col-sm-3">
                    <input type="time" class="form-control" name="end_time" id="end_time" placeholder="Time" required>
                </div>
                </div>

                <div class="form-group">
                <label for="location" class="col-sm-3 control-label">Location</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="location" id="location" placeholder="Location" required>
                </div>
                <label for="promo_picture" class="col-sm-1 control-label">Promo Picture</label>
                <div class="col-sm-3">
                    <input type="file" class="form-control" name="promo_picture" id="promo_picture" accept="image/*">
                </div>
                </div>

                <div class="form-group">
                <label for="deadline" class="col-sm-3 control-label">Registration Deadline</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" name="deadline" id="deadline" min="<?php echo $current_date; ?>" required>
                </div>
                </div>

                <div class="form-group text-center">
                    <a class="btn btn-default" href="OrganizerEvent.php" role="button">Cancel</a>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
                
            </form>
</div>  <!-- /row -->
<?php
}   //end if (create bew event)
?>

<?php
//=============== list of events ===================
if (!isset($_REQUEST['code'])) {
?>









    <div class="row" style="margin-top:10px;">
    
    
        <table class="table table-responsive w3-red">
        <tr>
            <th>No.</th>
            <th>Image</th>
            <th>Event</th>
            <th>Delete</th>
        </tr>

<?php
    //read data
    

    $r = mysqli_query($dbc, "SELECT *, (SELECT COUNT(id) FROM participant WHERE participant.my_event_id=my_event.id) AS my_count FROM my_event 
    WHERE organizer_id='$_SESSION[org_id]' and end_date>='$current_date'and end_time<='$current_time'") or die ('Error: '.mysqli_error ());
    $counter=1;
    

    while ($row=mysqli_fetch_array($r)) {
       
        
?>
        <tr>
        
       
            <td> <p class = "bg-primary"><?php echo $counter; ?></p></td>
            <td><img src="<?php echo $row['promo_picture']; ?>" class="img-thumbnail" style="max-width:200px;"></td>
           <?php  $_SESSION['id'] = $row['id']; ?>

            <td><a href="updatepage.php?id=<?php echo $row['id']; ?>">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span></a><br>
            <?php echo $row['title']; ?></a><br>
                <?php 
                $newDate =strtotime($row['start_date']);
                $new = strtotime($current_date);
                $daysleft = $newDate-$new;

                $newtime = strtotime($row['start_time'])-strtotime('TODAY');
                $new2 = strtotime($current_time)-strtotime('TODAY');
                $timeleft = $newtime-$new2;
                $newly = date('d',strtotime($current_date));
                $difference = ($newDate - $new)/60/60/24;
                $f = $new2;
                if($difference<0){
                    echo "already started"."   ".($difference*-1)."   "."day ago";
                    echo "<br>";

                }else{
                echo $difference." "."days left"."<br>";
                }
                if($newtime>43200){
                    $e= $newtime-43200;
                }else{
                    $e= 43200-$newtime;

                }
                
               

                
                
                
               
               
                
                $loginTime = ($newtime);
                    if ($e>$f){
                        echo  "time left :".($e-$f)."<br>";
                       
                        
                    }else if( $e>$f && $difference<0){
                        echo  "already started"."  ".(date('s',($f-$e)/60))."   "."minutes ago";
                    
                }else if($e<$f && $difference<=0){
                   
                    echo  (date('s',($f-$e)/60))."   "."minutes ago";

                    }else{
                        
                        
                        
                    }
              
                 
                
                 
                ?>
         
            
            <br> <a href = "number.php?id=<?php echo $row['id'];?>"><?php echo $row['my_count']; ?> participants</td>
            
            <td><a href="confirmation.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
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




    </div>
   </div>
    </div>
    


</div>  <!-- /container -->
<div class="form-group text-center">
               <a href = "index.php">
               <button type="submit" class="btn btn-danger">Back</button></a>
           </div>

           <!-- <h1>Video Streaming Demonstration</h1>
    <img id="bg" src="{{ url_for('hello') }}"> -->


  </body>
</html>
