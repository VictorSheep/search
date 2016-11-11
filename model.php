<?php
function get_pdo(){
	$pdo = new PDO("mysql:host=".getEnv('DB_HOST').";dbname=".getEnv('DB_NAME'), getEnv('DB_USERNAME'), getEnv('DB_PASSWORD'),[PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);
	return $pdo;
}
function get_all_challenges(){
	$pdo = get_pdo();

	$query ='SELECT * FROM chall_list';

	$stmt = $pdo->query($query);

	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	// fetchAll: récupérer l'ensemble des résultats dans un tableau de tableau
    // chaque ligne de ce tableau est un tableau associatif PDO::FETCH_ASSOC
    //[['id'=> 1, 'title'=> 'php7', ], []]
	$pdo = null;
	return $result;
}
function get_chall($id){
  $pdo = get_pdo();

  $query = 'SELECT * FROM chall_list WHERE id='.$id;
  
  $stmt = $pdo->query($query);
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  $pdo = null;
  return $result;

}