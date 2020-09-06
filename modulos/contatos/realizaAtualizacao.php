<?php
	
	$nome = $_POST['nome'];
	$telefone = $_POST['tel'];
	$id = $_POST['id'];
	$idGrupo = $_POST['idGrupo'];

	$sql = "UPDATE contatos SET
									nome = '$nome', 
									idGrupo = '$idGrupo',
									telefone = '$telefone' 

									WHERE id = $id								
			";
			
	$result = mysqli_query($conexao, $sql);						

	if ($result == true) {
		?><h4 class="conteudo"><?='Atualizado com sucesso'?></h4><?
	}else {
		?><h4 class="conteudo"><?='Erro ao atualizar'?></h4><?
	}
?>