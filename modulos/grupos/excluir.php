<?php
 	$id = $_GET['id'];
	$query = " DELETE FROM grupos WHERE id='$id'";
	
	$resultado = mysqli_query($conexao,$query);
	if($resultado){
		replace('painel.php?P=grupos&a=listar');	
	}else{
		?><h4 class="conteudo"><?='Erro ao excluir, tente novamente!'?></h4><?
	}
?>