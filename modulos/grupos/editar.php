<?php

	$id = $_GET['id'];
	$query = "SELECT * FROM grupos WHERE id=$id";
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
			<div class="conteudo">
				<form action="painel.php?P=grupos&a=realizaAtualizacao" method="POST" id="formulario">
					<strong>Editar Grupo</strong> <br><br>	
					<input type="text" name="nome" value="<?= $dados['nome'] ?>" placeholder="Nome"> <br><br>
					<input type="hidden" name="id" value="<?= $dados['id'] ?>">
					<input type="submit" value="Atualizar">
				</form>
			</div>
		</body>
	</html>
