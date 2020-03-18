<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('693335878324-0ifkl4lsklo1ppe7qopma66qrtpn9afs.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('9NiLEvHOEQkYYWZ18cSOEon8');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://kitarvin23.herokuapp.com/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');


//start session on web page
session_start()
// credits: john paul majaaaaaa
?>
