<h1>Les news du site</h1>

<?php 
$req =mysql_query("SELECT id,auteur,titre, DATE_FORMAT(date,'%d/%m/%Y %H') AS date_formatee,contenu
FROM news
ORDER BY date DESC");
while($date = mysql_fetch_assoc($req)){
	echo '
	<div class="news">
	<h2>'.$data['titre'].'</h2>
	<p>News postée le '.$str_replace(' ', ' à ',
	$data['date_formatee']).' par '.$data['auteur'].'</p>
	<p>'.$data['contenu'].'</p>
	</div>';
}
?>