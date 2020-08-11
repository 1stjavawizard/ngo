php 

  include_once('config.php');


     
if(isset($_GET['action']) && $_GET['action']=='pay'){
    
     $amount= $_POST['amount'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
    $status = mysqli_query($liftfund, INSERT INTO `donation` (`amount`, `email`, `telephone`, `date_paid`) VALUES ('$amount', '$email','$phone',NOW()) );
    $last = mysqli_insert_id($liftfund);
    
$mailbody =my
div class=container
	div class=row
	
		div class=col-md-6 col-md-offset-3 post
			h2 MESSAGE FROM DIVINE DESTINY h2
			div pHello the user of {$email}p
			pWe have received the sum of  {$amount} naira from you. Thank Youp
			div
		div
    div
	
div		
my;

$subject =Message from liftfund;
$headers[] = 'MIME-Version 1.0';
$headers[] = 'Content-type texthtml; charset=iso-8859-1';
$headers[] = 'From Adminadmin@divinedestiny.com';
 mail($email,$subject,$mailbody,implode(rn,$headers));mail($email,$subject,$mailbody,$headers);
$headers3 = 'From Adminadmin@divinedestiny.com;';
$headers3 .='Content-type texthtml; charset=utf-8;';

$headers = 'Content-type texthtml; charset=utf-8';



$title =message sent now;

$message = mail($email,$subject,$mailbody,implode(rn,$headers));
if($message){
     
      $m = mysqli_query($liftfund, UPDATE `donation` SET message_sent ='1' where donation_id ='$last' );
      $message_type =donation message;
      if($status){
           mysqli_query($liftfund, INSERT INTO `message_sent` ( `title`, `body`,`message_type`, `sent_date`) VALUES ('$title', '$mailbody','$message_type',NOW()) );
       echo $last;
      }
      
      
    
}
}


if(isset($_GET['action']) && $_GET['action']=='contactus'){
    
     $name= stripslashes($_POST['name']);
     $name= mysqli_real_escape_string($liftfund,$name);
     $email = stripslashes($_POST['email']);
        $email     = mysqli_real_escape_string($liftfund,$email);
     $phone = stripslashes($_POST['phone']);
       $phone   = mysqli_real_escape_string($liftfund,$phone);
     $subject = stripslashes($_POST['subject']);
        $subject  = mysqli_real_escape_string($liftfund,$subject);
        $message1= $_POST['message'];
     $message  = stripslashes($_POST['message']);
         $message  = mysqli_real_escape_string($liftfund,$message);
    $status = mysqli_query($liftfund, INSERT INTO `contactus` (`name`, `email`, `phone`, `subject`, `message_body`, `date_sent`) VALUES ('$name', '$email','$phone','$subject','$message',NOW()) );
    $last = mysqli_insert_id($liftfund);
    
$mailbody =my

div class=container
	div class=row
	
		div class=col-md-12 col-md-12
			h2{$subject} h2  
			div
			 pName {$name}p
			 pE-mail {$email}p
		
			pPhone Number {$phone}p
			p
			  {$message1}
			p
			div
		div
    div
	
div		
my;

$subject =Message coming from {$name} with email {$email};
$headers[] = 'MIME-Version 1.0';
$headers[] = MIME-Version 1.0;
$headers[] = Content-type texthtml; charset=iso-8859-1;

$headers[] = From {$name} $email;
$headers = 'Content-type texthtml; charset=utf-8;From Adminadmin@divinedestiny.com';


$headers = osegun@mentapps.com;
$admin =osegun@mentapps.com;
$title =message sent now;

$message = mail($admin,$subject,$mailbody,implode(rn,$headers));
if($message){
     
     echo 1;
      
    
}
}

if(isset($_GET['action']) && $_GET['action']=='signin'){
    $googleId = $_POST['googleId'];
    $fname = $_POST['fname'];
    $image = $_POST['image'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
     
      $status = mysqli_query($liftfund, INSERT INTO `admin` (`googleId`, `fname`, `image`, `lname`, `email`, `date_registered`) VALUES ('$googleId', '$fname','$image','$lname','$email',NOW()) );
    $last = mysqli_insert_id($liftfund);
    
     
   if($last){
       $admin = mysqli_query($liftfund, SELECT  from admin where email='$email' and role='admin' LIMIT 1 );
    
    if(mysqli_num_rows($admin)  0){
        $id = mysqli_num_rows($admin);
        $_SESSION['admin_id'] =  $id;
        echo 1;
    } 
   }
   
    else{
        header(Location httpswww.mentscrm.com.ngliftfund);
    }


}

if(isset($_GET['action']) && $_GET['action']=='subscribe'){
    
    
     $email = stripslashes($_POST['email']);
        $email     = mysqli_real_escape_string($liftfund,$email);
    
         $message  = mysqli_real_escape_string($liftfund,$message);
    $status = mysqli_query($liftfund, INSERT INTO `who_subscribe` (`email`,`date_subcribed`) VALUES ('$email',NOW()) );
    $last = mysqli_insert_id($liftfund);
    
$mailbody =my

div class=container
	div class=row
	
		div class=col-md-12 col-md-12
			h2{$subject} h2  
			div
			 pName {$name}p
			 pE-mail {$email}p
		
			pPhone Number {$phone}p
			p
			  {$message1}
			p
			div
		div
    div
	
div		
my;

$subject =Message coming from {$name} with email {$email};
$headers[] = 'MIME-Version 1.0';
$headers = 'Content-type texthtml; charset=utf-8';


$headers = osegun@mentapps.com;
$admin =osegun@mentapps.com;
$title =message sent now;

$message = mail($admin,$subject,$mailbody,$headers);
if($message){
     
     echo 1;
      
    
}
} 
     
     
