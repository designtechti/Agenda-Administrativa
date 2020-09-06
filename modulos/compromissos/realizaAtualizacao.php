<?php
		
	$titulo = $_POST['titulo'];
	$data = $_POST['data'];
	$hora = $_POST['hora'];
	$compromisso = $_POST['compromisso'];
	$id = $_POST['id'];

	$sql = "UPDATE compromissos SET
								titulo = '$titulo', 
								data = '$data', 
								hora = '$hora', 
								compromisso = '$compromisso',

								WHERE id = $id								
			";
			
	$result = mysqli_query($conexao, $sql);						

	if ($result == true) {
		?><h4 class="conteudo"><?='Atualizado com sucesso'?></h4><?
	}else {
		?><h4 class="conteudo"><?='Erro ao atualizar'?></h4><?
	}

?>