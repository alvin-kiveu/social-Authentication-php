<?php
session_start();
require_once 'vendor/autoload.php';
$google_client = new Google_Client();
$google_client->setClientId('Your Clint ID.apps.googleusercontent.com');
$google_client->setClientSecret('Your Client Secret Key');
$google_client->setRedirectUri('Your exact location where you want the code to be run');
$google_client->addScope('email');
$google_client->addScope('profile');