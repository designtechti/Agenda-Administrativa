<?php
	
	$nome = $_POST['nome'];
	$usuario = $_POST['usuario'];
	$senha = md5 ($_POST['senha']);
	$id = $_POST['id'];
	$sql = "INSERT INTO usuarios (
									nome, 
									usuario, 
									senha  
									)

									VALUES (
										'$nome', 
										'$usuario',
										'$senha'																			
									)
			";
			
	$result = mysqli_query($conexao, $sql);						

	if ($result == true) {
		echo 'Cadastrado com sucesso';
	}else {
		echo 'Erro ao cadastrar';
	}

?>