<?php


function AbrirConexion(){
	$db = new PDO('mysql:host=localhost;dbname=tic;charset=utf8mb4', 'root', 'root');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $db;
}

function TraerNoticia($id){
		$db = AbrirConexion();
		$stmt = $db->prepare("SELECT * FROM noticias WHERE id=?");
		$stmt->bindValue(1, $id, PDO::PARAM_INT);
		$stmt->execute();
	if($noticia = $stmt->fetch(PDO::FETCH_ASSOC)){
		return $noticia;
	}
	return null;
}

function TraerNoticias($set,$offset){
		$db = AbrirConexion();
		$stmt = $db->prepare("SELECT * FROM noticias ORDER BY fecha ASC LIMIT :set OFFSET :offset");
		$stmt->bindValue(':set', $set, PDO::PARAM_INT);
		$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
		$stmt->execute();
	if($noticias = $stmt->fetchAll(PDO::FETCH_ASSOC)){
		return $noticias;
	}
		return [];
}

function TraerNoticiasDestacadas($set,$offset){
		$db = AbrirConexion();
		$stmt = $db->prepare("SELECT * FROM noticias WHERE destacada > 0 ORDER BY fecha ASC LIMIT :set OFFSET :offset");
		$stmt->bindValue(':set', $set, PDO::PARAM_INT);
		$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
		$stmt->execute();
	if($destacadas = $stmt->fetchAll(PDO::FETCH_ASSOC)){
		return $destacadas;
	}
	return [];
}

function CantidadNoticias() {
	$db = AbrirConexion();
		$stmt = $db->prepare("SELECT COUNT(*) as total FROM noticias");
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		return $result['total'];
}
