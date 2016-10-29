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
<h1>Les news du site</h1>

<?php 

foreach($news as $n){
	$contenu = html_entity_decode($n['contenu']);
	echo '
	<div class="news">
	<h2><a href="index.php?page=article&id='.$n['id'].'">'.$n['titre'].'<a></h2>
	<p>News postée le '.$n['date_formatee'].' par '.$n['auteur'].'</p>
	<p>'.$contenu.'</p>
	</div>';
}
?>
</body>
</html>