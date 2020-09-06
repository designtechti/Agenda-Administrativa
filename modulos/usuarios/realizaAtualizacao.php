<?php
	
	$nome = $_POST['nome'];
	$usuario = $_POST['usuario'];
	$senha = md5 ($_POST['senha']);
	$id = $_POST['id'];
	
	if (!empty($_POST['senha'])) {
		$sql = "UPDATE usuarios SET
									nome = '$nome', 
									usuario = '$usuario', 
									senha = '$senha'

									WHERE id = $id								
			";
	}else {
		$sql = "UPDATE usuarios SET
									nome = '$nome', 
									usuario = '$usuario', 
									WHERE id = $id								
			";
	}

			
	$result = mysqli_query($conexao, $sql);						

	if ($result == true) {
		echo 'Atualizado com sucesso';
	}else {
		echo 'Erro ao atualizar';
	}

?>