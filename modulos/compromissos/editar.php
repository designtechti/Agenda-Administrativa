<?php

	$id = $_GET['id'];
	$query = "SELECT *, DATE_FORMAT(data, '%d/%m/%Y') AS df, DATE_FORMAT(hora, '%H:%i') AS hf FROM compromissos WHERE id=$id";
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
				<form action="painel.php?P=compromissos&a=realizaAtualizacao" method="POST" enctype="multipart/form-data" id="formulario">
					<strong>Editar compromisso</strong><br><br>	
					<input type="text" name="titulo" value="<?= $dados['titulo'] ?>" placeholder="Título"> <br><br>
 					<input type="text" name="df" value="<?= $dados['df'] ?>" class="data" placeholder="Data"> <br><br>
 					<input type="text" name="hf" value="<?= $dados['hf'] ?>" class="hora" placeholder="Hora"> <br><br>
 					<textarea name="compromisso" class="ckeditor" placeholder="Compromisso"><?= $dados['compromisso'] ?></textarea> <br><br>
 					<input type="hidden" name="id" value="<?= $dados['id'] ?>">
					<input type="submit" value="Atualizar">
				</form>
			</div>
		</body>
	</html>
