<?php //------ credits: john paul maja :D <3 

require_once 'vendor/autoload.php';

if (!session_id())
{
    session_start();
}

// Call Facebook API 

$facebook = new \Facebook\Facebook([
  'app_id'      => '2667018786758078',
  'app_secret'     => '596f0f89ce610cf66cd3a0f26601522b',
  'default_graph_version'  => 'v2.10'
]);

?>
