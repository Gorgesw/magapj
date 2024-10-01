<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$conexao = mysqli_connect("localhost","root","","teste");

if (!$conexao) {
echo "ERRO NA CONEXÃO";
}
echo"Conectado";

$nome = $_POST ["nome"];
$cpf = $_POST ["cpf"];
$contato = $_POST  ["contato"];

$sql = "INSERT INTO teste.dados(nome,cpf,contato) values ('$nome','$cpf','$contato')";
$final = mysqli_query($conexao, $sql);

echo "Concluido";


?>

    
</body>
</html>