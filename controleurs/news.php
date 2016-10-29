<?php 
include(dirname(__FILE__).'/../modeles/news.php');
$news = recuperer_news();
include(dirname(__FILE__).'/../vues/news.php');