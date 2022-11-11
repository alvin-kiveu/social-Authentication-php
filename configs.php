<?php
/* 
 * Author: Alvin Kiveu 
 * Author URL: https://www.umeskiasoftwares.com 
 * Author Email: info@umeskiasoftwares.com 
 */

//GITHUB CONFIGS
$configs = array(
  'client_id' => '',
  'client_secret' => '',
  'redirect_url' => '',
  'app_name' => ''
);

$client_id =  $configs['client_id'];
$client_secret =  $configs['client_secret'];
$redirect_url =  $configs['redirect_url'];
$app_name =  $configs['app_name'];


$authorizeURL = 'https://github.com/login/oauth/authorize';
$tokenURL = 'https://github.com/login/oauth/access_token';
$apiURLBase = 'https://api.github.com/';