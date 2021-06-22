<?php

session_start();

require './vendor/autoload.php';

$fb= new Facebook\Facebook ([
    'app_id' => '168205798531595',
    'app_secret' =>'ba60084a25d6cc0b890cbbe0830aa237',
    'default_graph_version' => 'v2.7'
]);


$helper = $fb->getRedirectLoginHelper();
$login_url= $helper->getLoginUrl('http://localhost/facebook_api/');

try {

	$access_token= $helper->getAccessToken();
	if(isset($access_token)){
		$_SESSION['access_token'] = (string) $access_token;

	$fb->setDefaultAccessToken($_SESSION['access_token']);
	$res = $fb->get('/me?fields=id, first_name, last_name,name, email, picture.type(large)', $_SESSION['access_token']);
	$user= $res->getGraphNode()->asArray();
	$_SESSION['user_data']=$user;
	
	header("Location:index.php");
		

		
	}
	
} catch (Exception $e) {

	echo $e->getTraceAsString();
	
}

?>
