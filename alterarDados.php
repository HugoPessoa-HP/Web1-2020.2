<?php

require_once("conexaoBD.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Dados</title>
</head>
<body>
    <h1>Selecione o cpf do Usuário que Terá os Dados Alterados</h1>
    <form method="POST" action="alterarDadosU.php">
        <label>CPF: </label>
        <input type="" name="cpf" placeholder="Digite o CPF">

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>

<?php

$result_usuario = "UPDATE usuarios SET nome='$nome', email='$email', cpf='$cpf', dataNascimento='$nascimento' WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

?>
