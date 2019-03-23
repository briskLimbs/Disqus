<?php

/**
* Disqus addon allows you to add Disqus commenting system to your website 
* @version: 1.0
* @BriskLimbs: 1.0^
* @since: 23rd March, 2019
* @author: Saqib Razzaq
* @website: https://github.com/saqirzzq
*/

require 'functions.php';
$addons = new Addons();

define('DISQUS_CORE_PATH', __DIR__);
define('DISQUS_CORE_NAME', basename(DISQUS_CORE_PATH));
$pages = DISQUS_CORE_NAME . '|pages';
$menu = array(
  'twit_feed' => array(
    'display_name' => 'Disqus',
    'sub' => array(
      'Manage' => $pages . '|manage.php'
    )
  )
);

$addons->addMenu($menu);