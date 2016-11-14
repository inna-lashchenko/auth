<?php
session_start();

require_once('vendor/autoload.php');

$fb = new Facebook\Facebook([
    'app_id' => '1734936170162588',
    'app_secret' => 'b3af21a7c32756d59bb6e4c9011a9f70',
    'default_graph_version' => 'v2.8',
]);

$helper = $fb->getRedirectLoginHelper();
$loginUrl = $helper->getLoginUrl('http://localhost:8000/init.php');

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';