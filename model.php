<?php
function get_pdo(){
	$pdo = new PDO("mysql:host=".getEnv('DB_HOST').";dbname=".getEnv('DB_NAME'), getEnv('DB_USERNAME'), getEnv('DB_PASSWORD'),[PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);
	return $pdo;
}
function get_all($table){
	$pdo = get_pdo();

	$result = $pdo->query('SELECT * FROM '.$table);

	// fetchAll: récupérer l'ensemble des résultats dans un tableau de tableau
    // chaque ligne de ce tableau est un tableau associatif PDO::FETCH_ASSOC
    //[['id'=> 1, 'title'=> 'php7', ], []]
	$result = $result->fetchAll(PDO::FETCH_ASSOC);

	return $result;
}
function get_single_post($id){
	$pdo = get_pdo();

    // chaine de caractères ave sprintf plus simple à manipuler avec PHP
    $query = sprintf('SELECT * FROM posts WHERE id=%s', (int) $id ) ;
	$result = $pdo->query($query);
	$post = $result->fetch(PDO::FETCH_ASSOC);
	
	$pdo = null;
	return $post;
}