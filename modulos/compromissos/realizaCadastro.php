<?php

	$titulo = $_POST['titulo'];
	$data = $_POST['data'];
	$data = explode ('/', $data);
	$data = implode ('-', array_reverse($data));
	$hora = $_POST['hora'];		
	$compromisso = $_POST['compromisso'];
	$sql = "INSERT INTO compromissos (
									titulo, 
									data,
									hora, 
									compromisso) 

									VALUES (
										'$titulo', 
										'$data',
										'$hora', 
										'$compromisso'
									)
			";
			
	$result = mysqli_query($conexao, $sql);						

	if ($result == true) {
		?><h4 class="conteudo"><?='Cadastrado com sucesso'?></h4><?php
	}else {
		?><h4 class="conteudo"><?='Erro ao cadastrar'?></h4><?php
	}

?>