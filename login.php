<?php

session_start();
include ('conexao.php'); //include na conexao para pegar a conexão criada dentro do arquivo conexao.php

if (empty($_POST['email']) || empty($_POST['senha'])) {
    header ('Location: index.html');
    exit(); //verifica se o campo de email e senha esta em branco, se estiver retorna para o index.html entrando em loop, se estiver em branco o cod segue
}

$email = mysqli_real_escape_string($conn, $_POST['email']); //proteções contra ataques de sql injection no login
$senha = mysqli_real_escape_string($conn, $_POST['senha']); //proteções contra ataques de sql injection no login


$query = "select id, email from usuarios where email ='{$email}' and senha = md5('{$senha}')"; //verifica se o email e a senha são iguais aos que estão preechidos no BD
$result =mysqli_query($conn, $query); //executa o query no banco de dados
$row = mysqli_num_rows ($result); //exibe a quantidade de linhas retornadas pelo banco de dados

if($row == 1){
    $_SESSION ['email']= $email;
    header('Location: painelUsuario.php');
    exit();
}else{
    header('Location: index.html');
}

