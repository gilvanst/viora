<?php
    include_once "../../config.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="logo_etec_cor.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="<?= arquivo('css/login.css') ?>">
</head>
<body>
    <div id="Login" >
        <h1>LOGIN</h1>
        <form action="#">
            <label for="user">Usuário</label>
            <input type="user" name="user" id="user" placeholder="Digite seu usuário" autocomplete="off">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Digite a sua senha">
            <input type="checkbox" id="senha" onclick="mostrarOcultarSenha()">
            <div id="fpws">
            <a href="./recuperacao_senha.php" id="Esqueceuasenha">Esqueceu a senha?</a>
            </div>
            <br>
            <div>
            <a id="btnsubmit" href= "<?= arquivo('modulos/pagina/index.php')?>" >ENTRAR</a>
            </div>
        </form> 
        
    </div>
    <script type="text/javascript" src=""></script>
</body>
</html>