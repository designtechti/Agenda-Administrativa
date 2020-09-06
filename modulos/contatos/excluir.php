<?php
 	$id = $_GET['id'];
	$query = " DELETE  FROM fornecedores WHERE id='$id'";
	
	$resultado = mysqli_query($conexao,$query);
	if($resultado){
		replace('painel.php?p=fornecedores&a=listar');	
	}else{
		echo 'Tente novamente, não foi possivel excluir.';
	}
?>