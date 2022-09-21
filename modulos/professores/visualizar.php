<?php
    include_once "../../config.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <?php include_once path('templates/head.php') ?>

    <body>
        <?php include_once path('templates/barra_navegacao.php') ?>
        <?php include_once path('templates/barra_lateral.php') ?>

        <div class="container" id="lateral2">
            <?php
                $id = $_GET['id'];

                $sql = "SELECT * FROM professor WHERE id = $id";
                $professor = retornaDado($sql);
            ?>

            <h1><?= $professor['nome'] ?></h1>
            <h1><?= $professor['telefone'] ?></h1>
            <h1><?= $professor['telefone_sec'] ?></h1>
            <h1><?= $professor['email'] ?></h1>
            <h1><?= $professor['email_sec'] ?></h1>
            <h1><?= $professor['email_inst'] ?></h1>
            <h1><?= $professor['senha'] ?></h1>
        </div>
        
        <div class="clear"></div>
        <?php include path('templates/importacoes.php');?>
    </body>

</html>