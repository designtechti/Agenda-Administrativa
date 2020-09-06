<?php
	
	$nome = $_POST['nome'];
	$sql = "INSERT INTO grupos (nome) VALUES ('$nome')";
			
	$result = mysqli_query($conexao, $sql);						

	if ($result == true) {
		?><h4 class="conteudo"><?='Cadastrado com sucesso'?></h4><?
	}else {
		?><h4 class="conteudo"><?='Erro ao cadastrar'?></h4><?
	}

?>