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

                $sql = "SELECT * FROM aluno WHERE id = $id";
                $aluno = retornaDado($sql);
            ?>

            <h1><?= $aluno['nome'] ?></h1>
            <h1><?= $aluno['telefone'] ?></h1>
            <h1><?= $aluno['telefone_sec'] ?></h1>
            <h1><?= $aluno['responsavel'] ?></h1>
            <h1><?= $aluno['responsavel_sec'] ?></h1>
            <h1><?= $aluno['email'] ?></h1>
            <h1><?= $aluno['email_sec'] ?></h1>
            <h1><?= $aluno['email_inst'] ?></h1>
            <h1><?= $aluno['senha'] ?></h1>
        </div>
        
        <div class="clear"></div>
    </body>

</html>