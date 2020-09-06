<?php
 	$id = $_GET['id'];
	echo $query = "DELETE FROM compromissos WHERE id='$id'";
	
	$resultado = mysqli_query($conexao,$query);
	if($resultado){
		replace('painel.php?P=compromissos&a=listar');	
	}else{
		?><h4 class="conteudo"><?='Erro ao excluir, tente novamente!'?></h4><?
	}
?>