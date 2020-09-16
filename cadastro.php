<?php 

	include_once("conexao.php");
	error_reporting(0);
	ini_set(“display_errors”, 0 );

	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
	$celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);

	$result_usuarios = "INSERT INTO usuarios (nome, sobrenome, email, senha, cpf, celular) VALUES ('$nome', '$sobrenome', '$email', MD5 ('$senha'), '$cpf', '$celular')";

	$resultado_usuario = mysqli_query($conn, $result_usuarios);

	if($resultado_usuario){

		header("Location: cadastro_sucesso.html");
		exit();
	 
	 } else{
		header("Location: cadastro_naorealizado.html");
		exit();
	}
?>
