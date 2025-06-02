<?php 
	ini_set('display_errors', E_ALL); 
	require_once './vendor/autoload.php'; 

	use App\ProjectClock; 
	use App\services\UserSubscription; 

	echo "hello";  

	// $customImpl = new Carbon(); 
	$clock = new ProjectClock(); 
	$userSubscription = new UserSubscription($clock); 
	var_dump(
		$userSubscription->isActive() 
	); 
