<?php 
//session_start();
$dbhost = 'localhost';
     $dbuser = 'gethuz6q_lfund';
     $dbpass = '1234567890@segun';
	$dbase = 'gethuz6q_liftfund';
	$liftfund = mysqli_connect($dbhost, $dbuser, $dbpass, $dbase);
		if(!$liftfund){
			 die('Could not connect: '.mysqli_error($liftfund));
          mysqli_close($liftfund);
		}

?>