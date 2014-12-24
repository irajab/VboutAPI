<?php
	require_once('../src/services/ApplicationWS.php');

	$user_key = array('api_key' => '{YOUR_API_KEY}');
	
	$app = new ApplicationWS($user_key);
	
	$results = $app->getBusinessInfo();
	
	/*
		Example results:
		****************
		{
			"businessName": "Rick's Club American",
			"contactName": "Paul",
			"phoneNumber": "--",
			"vboutName": "ricksclub",
			"package": "Test Account with No Social Media"
		}
	*/