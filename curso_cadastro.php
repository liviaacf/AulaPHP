<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "menu.php"?>

    <div class="conteudo">

        <h3>Cadastro de Cursos</h3>

        <form action="curso_cadastro.php" method="post">

            <p>
                Informe o nome do curso: <br>
                <input type="text" name="curso">
            </p>

            <p>
                Informe o nome do coordenador <br>
                <input type="text" name="coordenador">
            </p>
            <p>
                <input type="submit" name="enviar" value="Cadastrar Curso">
            </p>
        </form>
</body>
</html>