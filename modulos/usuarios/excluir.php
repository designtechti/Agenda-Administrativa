<?php
 	$id = $_GET['id'];
	$query = "DELETE FROM usuarios WHERE id='$id'";
	
	$resultado = mysqli_query($conexao,$query);
	if($resultado){
		replace('painel.php?p=administradores&a=listar');	
	}else{
		echo 'Tente novamente, não foi possivel excluir.';
	}
?>