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
                $sql = "SELECT * FROM professor";
                $professores = retornaDados($sql);
            ?>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Telefone_sec</th>
                        <th scope="col">Email</th>
                        <th scope="col">Email_sec</th>
                        <th scope="col">Email_inst</th>
                        <th scope="col">Senha</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($professores as $professor){ ?>
                        <tr>
                            <th scope="row"><?= $professor['ID'] ?></th>
                            <td><?= $professor['nome'] ?></td>
                            <td><?= $professor['email'] ?></td>
                            <td><?= $professor['telefone'] ?></td>
                            <td><?= $professor['telefone_sec'] ?></td>
                            <td><?= $professor['email'] ?></td>
                            <td><?= $professor['email_sec'] ?></td>
                            <td><?= $professor['email_inst'] ?></td>
                            <td><?= $professor['senha'] ?></td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="visualizar.php?id=<?= $professor['ID'] ?>">Ver</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        
    </body>
</html>