<?php
    include_once "../../config.php";
    include_once path('modulos/login/sessao.php');
?>
<!DOCTYPE html>
<title>Sua Agenda</title>
<html lang="pt-BR">
    <?php include_once path('templates/head.php') ?>

    <body>
        <?php include_once path('templates/barra_navegacao.php') ?>
        <?php include_once path('templates/barra_lateral.php') ?>

        <div class="container" id="lateral2">
            <h2>Contatos</h2>
            <li>asdasdasdasd</li>
            <input type="checkbox" name="selall" id="selall">
            <label for="checkbox">Selecionar todos</label>
            <input type="checkbox" name="ordal" id="ordal">
            <label for="checkbox">Ordem Alfabética</label>
        </div>
        
        <div class="clear"></div>
    </body>

</html>