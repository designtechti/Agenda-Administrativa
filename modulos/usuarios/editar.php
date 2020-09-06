<?php

	$id = $_GET['id'];
	$query = "SELECT * FROM usuarios WHERE id=$id";
	$result = mysqli_query($conexao, $query);
	$dados = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" href="/css/padrao.css">
		</head>
		<body>
			<div>
				<form action="painel.php?P=administradores&a=realizaAtualizacao" method="POST" id="formulario">
					<strong style="color: black;">Editar administrador</strong>	
					<input type="text" name="nome" value="<?= $dados['nome'] ?>" placeholder="Nome"> <br><br>
 					<input type="text" name="usuario" value="<?= $dados['usuarios'] ?>" class="" placeholder="Usuário"> <br><br>
 					<input type="password" name="senha" value="" placeholder="Senha"> <br><br>
 					<!-- <input type="password" name="confirm_senha" placeholder="Repita sua senha"><br><br> -->
 					<input type="hidden" name="id" value="<?= $dados['id'] ?>">
					<input type="submit" value="Atualizar">
				</form>
			</div>
		</body>
	</html>
