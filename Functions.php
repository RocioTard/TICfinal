<?php


function AbrirConexion(){
	$db = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8mb4', 'username', 'password');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $db;
}

function TraerNoticia($id){
	try {
		$db->beginTransaction();

		$stmt = $db->prepare("SELECT * FROM table WHERE id=?");
		$stmt->bindValue(1, $id, PDO::PARAM_INT);
		$stmt->execute();
	if($noticia = $stmt->fetch(PDO::FETCH_ASSOC)){
		return $noticia;
	} else {
		return null;
	}
	   $db->commit();
	} catch(PDOException $ex) {
	   //Something went wrong rollback!
	   $db->rollBack();
	   echo $ex->getMessage();
	}
}

function TraerNoticias($set,$offset){
	try {
		$db->beginTransaction();

		$stmt = $db->prepare("SELECT * FROM table ORDER BY Fecha ASC LIMIT :set OFFSET :offset");
		$stmt->bindValue(':set', $set, PDO::PARAM_INT);
		$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
		$stmt->execute();
	if($noticias = $stmt->fetchAll(PDO::FETCH_ASSOC)){
		return $noticias;
	} else {
		return null;
	}
	   $db->commit();
	} catch(PDOException $ex) {
	   //Something went wrong rollback!
	   $db->rollBack();
	   echo $ex->getMessage();
	}
}

function TraerNoticiasDestacadas($set,$offset){
	try {
		$db->beginTransaction();

		$stmt = $db->prepare("SELECT * FROM table WHERE Destacada > 0 ORDER BY Fecha ASC LIMIT :set OFFSET :offset");
		$stmt->bindValue(':set', $set, PDO::PARAM_INT);
		$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
		$stmt->execute();
	if($destacadas = $stmt->fetchAll(PDO::FETCH_ASSOC)){
		return $destacadas;
	} else {
		return null;
	}
	   $db->commit();
	} catch(PDOException $ex) {
	   //Something went wrong rollback!
	   $db->rollBack();
	   echo $ex->getMessage();
	}
}
	



