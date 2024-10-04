<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="page">
        <?php
        $conexao = mysqli_connect("localhost", "root", "", "cadastro");

        if (!$conexao) {
            echo "ERRO NA CONEXÃO";
        }


        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $contato = $_POST["contato"];

        $sql = "INSERT INTO cadastro.dados(nome,cpf,contato) values ('$nome','$cpf','$contato')";
        $final = mysqli_query($conexao, $sql);

        echo "Registro concluido";


        ?>
    <li><a href="index.html">GERENCIAR USUARIOS</a></li>
    </div>
</body>

</html>