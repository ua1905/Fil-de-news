<?php 
session_start();

    $base = @mysql_connect ('localhost', 'root', '');
    mysql_select_db ('db_news', $base);
	
	if(!empty($_GET['page']) &&  
	is_file('controleurs/'.$_GET['page'].'.php'))
	{
		include 'controleurs/'.$_GET['page'].'.php';
	}
	else
	{
		include 'controleurs/accueil.php';
	}
	mysql_close();