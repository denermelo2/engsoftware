<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="painelUsuario.css">
    <title> Bem vindo </title>
    
</head>

<body>
    <div class="leftmenu">
    <div class="user_name"><?php session_start(); ?> <?php echo $_SESSION['email']; ?></div>
    </div>
    <div class="container">
        <div class="top">
            <div class="top_right"> <a href ="logout.php"> Sair </a></div>
            <div class = "top_right">Olá, <?php echo $_SESSION['email']; ?></div>
    </div>
    
</body>
</html>



    
