<?php
	
	$nome = $_POST['nome'];
	$id = $_POST['id'];
	$sql = "UPDATE grupos SET nome = '$nome' WHERE id = $id";
			
	$result = mysqli_query($conexao, $sql);						

	if ($result == true) {
		?><h4 class="conteudo"><?='Atualizado com sucesso'?></h4><?
	}else {
		?><h4 class="conteudo"><?='Erro ao atualizar'?></h4><?
	}

?>