<?php
	session_start();
 ?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Contato</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
	<body>
		<div>
			<div>
				<h1>Pagina de Contato</h1>
			</div>
			<form method="POST" action="validacaoFormularioTarefa2.php">
				<div>
					<label>
						Nome: 
					</label>
					<div>
						<input type="text" name="nome" placeholder="Nome Completo" 
						<?php
							if(!empty($_SESSION['value_nome'])){
								echo "value='".$_SESSION['value_nome']."'";
								unset($_SESSION['value_nome']);
							}
						 ?>	>
						 <?php
							if(!empty($_SESSION['vazio_nome'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_nome']."</p>";
								unset($_SESSION['vazio_nome']);
							}
						 ?>
					</div>
				</div>
				
				<div>
					<label>
						E-mail: 
					</label>
					<div>
						 <input type="email" name="email" placeholder=" Seu e-mail" 
						<?php
							if(!empty($_SESSION['value_email'])){
								echo "value='".$_SESSION['value_email']."'";
								unset($_SESSION['value_email']);
							}
						 ?>>
						 <?php
							if(!empty($_SESSION['vazio_email'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_email']."</p>";
								unset($_SESSION['vazio_email']);
							}
						 ?>
					</div>
				</div>
				
				<div>
					<label>
						Endereço: 
					</label>
					<div>
						 <input type="text" name="endereco" placeholder="Seu seu endereço" 
						<?php
							if(!empty($_SESSION['value_endereco'])){
								echo "endereco='".$_SESSION['value_endereco']."'";
								unset($_SESSION['value_endereco']);
							}
						 ?>>
						 <?php
							if(!empty($_SESSION['vazio_endereco'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_endereco']."</p>";
								unset($_SESSION['vazio_endereco']);
							}
						 ?>
					</div>
				</div>
				
				<div>
					<label>
						Telefone: 
					</label>
					<div>
                    <input type="int" name="telefone" placeholder="Seu telefone">
						<?php
							if(!empty($_SESSION['value_telefone'])){ 
                                echo $_SESSION['value_telefone'];
								unset($_SESSION['value_mensagem']);
						    }
						?>
						 <?php
							if(!empty($_SESSION['vazio_telefone'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_telefone']."</p>";
								unset($_SESSION['vazio_telefone']);
							}
						 ?>
					</div>
				</div>
				
				<input type="submit" value="Enviar">
			</form>
		</div>
	</body>
</html>