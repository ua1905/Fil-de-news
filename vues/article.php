<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gestion des absences">
    <meta name="author" content="Ali Bayrak">
    <link rel="icon" href="favicon.ico">
	<meta name="robots" content="noindex">
	<meta name="googlebot" content="noindex">
	<link href="webdesign.css" rel="stylesheet">
    <title>Gestion des stages</title>
  </head>
<body>
<h1><?php foreach($titre as $t){echo $t['titre'];};?></h1>

<?php 

foreach($article as $a){
	echo '
	<div class="news">
	<h2><a href="index.php?page=article&id='.$a['id'].'">'.$a['titre'].'<a></h2>
	<p>News postée le '.$a['date_formatee'].' par '.$a['auteur'].'</p>
	<p>'.$a['contenu'].'</p>
	</div>';
}
?>
</body>
</html>