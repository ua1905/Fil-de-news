<?php 
function afficher_article($id_article)
{
	$article = array();
	$req =mysql_query("SELECT id,auteur,titre, 
	DATE_FORMAT(date,'%d/%m/%Y %H') 
	AS date_formatee,contenu 
	FROM news WHERE id='$id_article.'");
	while($data = mysql_fetch_assoc($req)){
		
		$article[] = $data;
	}
	return $article;
}

function titre_article($id_article)
{
	$titre_article = array();
	$req =mysql_query("SELECT titre 
	FROM news WHERE id='$id_article.'");
	while($data = mysql_fetch_assoc($req)){

		$titre_article[] = $data;
	}
	return $titre_article;
}