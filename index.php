<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastro</title>		
	</head>
	<body>
		<h1>Cadastrar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processamento.php">
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo"><br><br>
			
			<label>E-mail: </label>
			<input type="email" name="email" placeholder="Digite o seu e-mail"><br><br>

            <label>Data de Nascimento: </label>
            <input type="date" name="data" placeholder="Digite sua data de Nascimento"><br><br>

            <label>CPF: </label>
            <input type="" name="cpf" placeholder="Digite seu CPF"><br><br>
			
			<input type="submit" value="Cadastrar">
		</form>
		
<a href="mostrarDados.php">Mostrar Usuários Cadastrados</a>  <!-- Sem nenhum tipo de proteção(Somente teste) -->

	</body>
</html>