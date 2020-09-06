<?php
	
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$idGrupo = $_POST['idGrupo'];

	$sql = "INSERT INTO contatos (
									nome,
									idGrupo,
									telefone) 

									VALUES (
										'$nome', 
										'$idGrupo',
										'$telefone'
									)
			";
			
	$result = mysqli_query($conexao, $sql);						

	if ($result == true) {
		?><h4 class="conteudo"><?='Cadastrado com sucesso'?></h4><?
	}else {
		?><h4 class="conteudo"><?='Erro ao cadastrar'?></h4><?
	}

?>