<?php
include_once 'configs.php';
if (isset($_GET['code'])) {
  $code = $_GET['code'];
  $gitCurl = curl_init();
  curl_setopt($gitCurl, CURLOPT_URL, $tokenURL);
  curl_setopt($gitCurl, CURLOPT_POST, true);
  curl_setopt($gitCurl, CURLOPT_POSTFIELDS, array(
    'client_id' => $client_id,
    'client_secret' => $client_secret,
    'code' => $code,
  ));
  curl_setopt($gitCurl, CURLOPT_HTTPHEADER, array('Accept: application/json'));
  curl_setopt($gitCurl, CURLOPT_RETURNTRANSFER, 1);
  $response = curl_exec($gitCurl);
  $data = json_decode($response);
  $access_token = $data->access_token;
  if ($access_token != null) {
    $gitCurl = curl_init();
    curl_setopt($gitCurl, CURLOPT_URL, $apiURLBase . 'user');
    curl_setopt($gitCurl, CURLOPT_HTTPHEADER, array('Accept: application/json', 'User-Agent: ' . $app_name, 'Authorization: token ' . $access_token));
    curl_setopt($gitCurl, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($gitCurl);
    $data = json_decode($response);
    echo $data->login . '<br>';
    echo $data->id . '<br>';
    echo $data->avatar_url . '<br>';
    echo $data->html_url . '<br>';
    echo $data->name . '<br>';
    echo $data->email . '<br>';
    echo $data->bio . '<br>';
    echo $data->location . '<br>';
    echo $data->created_at . '<br>';
    echo $data->updated_at . '<br>';
    echo $data->public_repos . '<br>';
    echo $data->public_gists . '<br>';
    echo $data->followers . '<br>';
    echo $data->following . '<br>';
    echo $data->site_admin . '<br>';
    echo $data->type . '<br>';
    echo $data->hireable . '<br>';
    echo $data->blog . '<br>';
    echo $data->twitter_username . '<br>';
    echo $data->company . '<br>';
    echo $data->node_id . '<br>';
    echo $data->gravatar_id . '<br>';
    echo $data->url . '<br>';
    echo $data->followers_url . '<br>';
    echo $data->following_url . '<br>';
    echo $data->gists_url . '<br>';
    echo $data->starred_url . '<br>';
    echo $data->subscriptions_url . '<br>';
    echo $data->organizations_url . '<br>';
    echo $data->repos_url . '<br>';
    echo $data->events_url . '<br>';
    echo $data->received_events_url . '<br>';
  }
  curl_close($gitCurl);
} else {
  echo "<script>window.location.href='http://portal.umeskiasoftwares.com/';</script>";
}