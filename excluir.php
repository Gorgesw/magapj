<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluido</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div id="page">
        <?php
        $conexao = mysqli_connect("localhost", "root", "", "cadastro");

        if (!$conexao) {
            echo "ERRO NA CONEXÃO";
            exit;
        }

        $id = $_GET['id'];
        $sql = "DELETE FROM dados WHERE id = $id";

        if (mysqli_query($conexao, $sql)) {
            echo "Registro excluido.";
        } else {
            echo "Erro ao excluir: " . mysqli_error($conexao);
        }

        mysqli_close($conexao);
        ?>
        <li><a href="listar.php">VOLTAR</a></li>
    </div>
</body>

</html>