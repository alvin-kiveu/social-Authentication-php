<?php
/* 
 * Author: Alvin Kiveu 
 * Author URL: https://www.umeskiasoftwares.com 
 * Author Email: info@umeskiasoftwares.com 
 */

//GITHUB CONFIGS
$configs = array(
  'client_id' => 'e28bd2788eb2f55aabde',
  'client_secret' => 'b8a423cfe5673a23bdfa39cb35f8c590986bca11',
  'redirect_url' => 'https://portal.umeskiasoftwares.com/login',
  'app_name' => 'UMESKIA-SOFTWARES-PORTAL'
);

$client_id =  $configs['client_id'];
$client_secret =  $configs['client_secret'];
$redirect_url =  $configs['redirect_url'];
$app_name =  $configs['app_name'];


$authorizeURL = 'https://github.com/login/oauth/authorize';
$tokenURL = 'https://github.com/login/oauth/access_token';
$apiURLBase = 'https://api.github.com/';