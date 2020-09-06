<?php

	$id = $_GET['id'];
	$query = "SELECT * FROM contatos WHERE id=$id";
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
				<form action="painel.php?P=contatos&a=realizaAtualizacao" method="POST" id="formulario">
					<strong>Editar Contatos</strong><br><br>	
					<input type="text" name="nome" value="<?= $dados['nome'] ?>" placeholder="Nome"> <br><br>
 					<input type="text" name="tel" value="<?= $dados['telefone'] ?>" class="telefone" placeholder="Telefone"> <br><br>
					<div style="text-align: left;">
						Grupo: 
						<select name="idGrupo" >
							<?php
								$sql = "SELECT * FROM grupos ORDER BY id";
								$result = mysqli_query($conexao, $sql);
								while ($grupos = mysqli_fetch_assoc($result)){
							?>
							<option value="<?=$grupos['id']?>"<?= $dados['id'] == $grupos['id'] ? 'selected' : NULL ?>><?=utf8_encode($grupos['nome'])?></option>
							<?
								}
							?>
						</select>
					</div>	
					<input type="hidden" name="id" value="<?= $dados['id'] ?>">
					<input type="submit" value="Atualizar">
				</form>
			</div>
		</body>
	</html>
