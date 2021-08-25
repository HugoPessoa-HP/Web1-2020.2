<?php 
require_once("conexaoBD.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>
<body>
    <h1>Dados Não Sensíveis De Todos os Usuários</h1> <!-- Apenas Teste ou Acessados Exclusivamente pela PF -->
    <?php
    $result_usuario = "SELECT * FROM dadosUsuarios";
    $mostra_dados = mysqli_query($conn, $result_usuario);

    while($row_usuario = mysqli_fetch_assoc($mostra_dados)){
        echo "Id: " . $row_usuario['id'] . "<br>";
        echo "Nome: " . $row_usuario['nome'] . "<br>";
        echo "E-mail: " . $row_usuario['email'] . "<br><hr>";
    }

?>
</body>
</html>

