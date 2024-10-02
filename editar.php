<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div id="page">

        <h1>EDITAR USUÁRIO</h1>

        <?php
        $conexao = mysqli_connect("localhost", "root", "", "cadastro");

        if (!$conexao) {
            echo "ERRO NA CONEXÃO";
            exit;
        }

        $id = $_GET['id'];
        $sql = "SELECT * FROM dados WHERE id = $id";
        $resultado = mysqli_query($conexao, $sql);

        if ($linha = mysqli_fetch_assoc($resultado)) {
            ?>

            <form method="post" action="atualizar.php?id=<?php echo $id; ?>">
                <label for="nome">NOME:</label>
                <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($linha['nome']); ?>"
                    maxlength="80"> <br>

                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" value="<?php echo htmlspecialchars($linha['cpf']); ?>"
                    maxlength="11"> <br>

                <label for="contato">CONTATO:</label>
                <input type="text" id="contato" name="contato" value="<?php echo htmlspecialchars($linha['contato']); ?>"
                    maxlength="50"> <br>

                <button type="submit">ATUALIZAR</button>
            </form>

            <?php
        } else {
            echo "<p>Usuário não encontrado.</p>";
        }

        mysqli_close($conexao);
        ?>

        <li><a href="listar.php">VOLTAR</a></li>
    </div>

</body>

</html>