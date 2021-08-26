<?php
	session_start();
	include_once('conexaoFormularioTarefa2.php');
	if(empty($_POST['nome'])){
		$_SESSION['vazio_nome'] = "O nome é obrigatório";
		$url = 'localhost/Formulario/indexFormularioTarefa2.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
		$_SESSION['value_nome'] = $_POST['nome'];
	}
	
	if(empty($_POST['email'])){
		$_SESSION['vazio_email'] = "Campo e-mail é obrigatório";
		$url = 'localhost/Formulario/indexFormularioTarefa2.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
		$_SESSION['value_email'] = $_POST['email'];
	}
	
	if(empty($_POST['endereco'])){
		$_SESSION['vazio_endereco'] = "Campo de Endereço é obrigatório";
		$url = 'localhost/Formulario/indexFormularioTarefa2.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
		$_SESSION['value_endereco'] = $_POST['endereco'];
	}
	
	if(empty($_POST['telefone'])){
		$_SESSION['vazio_mensagem'] = "Campo de telefone é obrigatório";
		$url = 'localhost/Formulario/indexFormularioTarefa2.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
		$_SESSION['value_telefone'] = $_POST['telefone'];
	}
	
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$endereco = mysqli_real_escape_string($conn, $_POST['endereco']);
	$telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
	
	
	$cont = "INSERT INTO mensagens_contatos(nome, email, endereco, telefone) VALUES ('$nome', '$email', '$endereco', '$telefone')";
	$res = mysqli_query($conn, $cont);
?>