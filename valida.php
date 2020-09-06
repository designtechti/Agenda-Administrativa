<?php
	//Cria uma seção no PHP
	session_name('login');
	session_start();
	//Inclui uma página PHP
	include ('includes/functions.php');
	include ('includes/conexao.php');

	//Comando a ser executado no banco
	
	$usuario = $_POST['usuario'];
	$senha = md5($_POST['senha']);
	
	$query = "SELECT * FROM usuarios WHERE usuario ='{$_POST['usuario']}' AND senha ='".md5($_POST['senha'])."'";
	
	//Executa o comando no banco de dados
	$result = mysqli_query($conexao,$query);
	//Verifica quantos registros veio do banco de dados
	if(mysqli_num_rows($result)==0){
		
		replace('index.php?msg=Você não tem permissão de acesso!');
		echo $_GET['msg'];
	}else{

		$dados = mysqli_fetch_assoc($result);
		$_SESSION['logado'] = true;
		$_SESSION['nome'] = $dados['nome'];
		replace('painel.php?P=home&a=home');
	}

?>