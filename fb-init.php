<?php

  session_start();
  require 'vendor/autoload.php';

  $fb = new Facebook/Facebook([
    'app_id' => '718605038815200',
    'app_secret' => '9145878ea15d24ca46beda64b77265c6',
    'default_graph_version' => 'v2.7'
  ]);
    $helper = $fb->getRedirectLoginHelper();
    $login_url = $helper->getLoginUrl("http://localhost/");

    print_r($login_url);


 ?>
