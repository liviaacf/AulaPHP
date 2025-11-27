<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "menu.php" ?>

    <div class="conteudo">
        <h3>Confirmação de Cadastro</h3>
    
    <?php

        if (isset($_REQUEST["enviar"]) )
        {
            include "conexao.php";

            $nome = $_REQUEST["curso"];
            $cidade = $_REQUEST["coordenador"];

            $sql = "insert into cursos (curso, coordenador) values (:curso, :coordenador)";

            $result = $conexao->prepare($sql);
            $result->bindValue(":curso", $curso);
            $result->bindValue(":coordenador", $coordenador);
            $result->execute();

            echo "Aluno cadastrado com sucesso!<br>";
        }

    ?>

        <a href="curso_cadastro.php">Voltar</a>
    </div>
</body>
</html>