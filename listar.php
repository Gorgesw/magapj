<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="page">
    <div class="listagem">
        <h1>USUARIOS:</h1>

        <?php
        $conexao = mysqli_connect("localhost","root","","cadastro");

        if (!$conexao) {
            echo "ERRO NA CONEXÃO";
            exit;
        }

        $sql = "SELECT * FROM dados";
        $resultado = mysqli_query($conexao, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            echo "<ul>";
            
            while ($linha = mysqli_fetch_assoc($resultado)) 
            {
                echo "<li>";
                echo "ID: " . htmlspecialchars($linha['id']) . " - ";
                echo "Nome: " . htmlspecialchars($linha['nome']) . " - ";
                echo "CPF: " . htmlspecialchars($linha['cpf']) . " - ";
                echo "contatos: " . htmlspecialchars($linha['contato']) . " - ";

                echo " | <a href='editar.php?id=" . htmlspecialchars($linha['id']) . "'>Editar</a> | ";
                echo "<a href='excluir.php?id=" . htmlspecialchars($linha['id']) . "'>Excluir</a>";
                echo "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Nenhum usuário cadastrado.</p>";
        }
        
        mysqli_close($conexao);
        ?>

<li><a href="Usuarios">GERENCIAR USUARIOS</a></li> 
    </div>
</div>
 
</body>
</html>
