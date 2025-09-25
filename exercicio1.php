<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <h1>Exercício de PHP</h1>

    <form action="exercicio1b.php">
        <p>
            Digite o nome do cliente <br>
            <input type="text" name="cliente">
        </p>

        <p>
            Escolha o sexo do cliente <br>
            <input type="radio" name="sexo" value="Feminino"> Feminino <br>
            <input type="radio" name="sexo" value="Masculino"> Masculino <br>
        </p>

        <p>
            Digite o valor da compra <br>
            <input type="number" name="valorcompra">
        </p>

        <p>
            <input type="submit" value="Enviar">
        </p>

</form>

</body>
</html>