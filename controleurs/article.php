<?php 
include(dirname(__FILE__).'/../modeles/article.php');
$article = afficher_article($_GET['id']);
$titre = titre_article($_GET['id']);
include(dirname(__FILE__).'/../vues/article.php');
