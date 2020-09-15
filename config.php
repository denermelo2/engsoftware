<?php
try {
	$pdo = new PDO("mysql:dbname=meupet;host=localhost", "root", "");
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}