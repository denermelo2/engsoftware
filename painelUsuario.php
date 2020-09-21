<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="painelUsuario.css">
    <title> Bem vindo </title>
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&family=Open+Sans&display=swap"
        rel="stylesheet">
    
</head>

<body>
    <div class="leftmenu">
    <div class="user_name"><?php session_start(); ?> <?php echo $_SESSION['email']; ?></div>

    <div class="buttons">
    <input type="button" value="Cadastrar Tipo Animal">
    <input type="button" value="Cadastrar Animal">
    <input type="button" value="Cadastrar Raças">
    <input type="button" value="Cadastrar Serviços">
    <input type="button" value="Realizar Agendamentos">
    </div>
    
    

    </div>
    <div class="container">
        <div class="top">
            <div class="top_right"> <a href ="logout.php"> Sair </a></div>
            <div class = "top_right">Olá, <?php echo $_SESSION['email']; ?></div>
    </div>


<div class="content">

<button class="button button1">Adicionar</button>
<button class="button button2">Alterar</button>
<button class="button button3">Excluir</button>

    

    </div>
    
</body>


<footer>
</footer>
</html>



    
