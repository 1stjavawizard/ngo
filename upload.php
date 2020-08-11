<?php
  require("database/config.php");
if(isset($_GET['action']) && $_GET['action']=='event'){
  
	$folder_name = 'img/events/';

if(!empty($_FILES))
{
	 
    $temp_file = $_FILES['image_name']['tmp_name'];
  $image_message ="Events Image";
  $event_city    = $_POST['event_city'];
  $event_title    = $_POST['event_title'];
  $event_message    = $_POST['event_message'];
  $event_date    = $_POST['event_date'];
  $event_start_time = $_POST['event_start_time'];
  $event_end_time= $_POST['event_end_time'];
 
 $image_name =  $_FILES["image_name"]["name"];
 $location = $folder_name .$image_name;
 $image_type ="event";
 $move = move_uploaded_file($temp_file, $location);
 if($move){
     	mysqli_query($liftfund,"INSERT INTO image_collector (event_city, event_title, event_message, event_date, image_name,event_start_time,event_end_time, date_inserted) VALUES ('$event_city','$event_title','$event_message','$event_date','$image_name','$event_start_time','$event_end_time',NOW())");
     	 echo '<script>'.'window.location.href = "https://mentscrm.com.ng/liftfund/dashboard?page=event"'.'</script>';
 }
  
 
 }
	
}



?>

