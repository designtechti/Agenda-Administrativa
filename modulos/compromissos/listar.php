<table width="100%" class="conteudo">
	<tr>
		<th>ID</th>
		<th>Título</th>
		<th>Data</th>
		<th>Hora</th>
		<th>Descrição</th>
		<th colspan="8">Ação</th>
	</tr>
	<?php
		$sql = "SELECT *, DATE_FORMAT(data, '%d/%m/%Y') AS df, DATE_FORMAT(hora, '%H:%i') AS hf  FROM compromissos ORDER BY id";
		$result = mysqli_query($conexao, $sql);
		
		if(mysqli_num_rows($result) == 0){
	?>
		<tr>
			<th colspan="8">Nenhum registro encontrado.</th>
		</tr>
		<?php
		}else {
			//Lista todos os registros do banco na tela
		while ($dados = mysqli_fetch_assoc($result)){
		?>
			<tr>
				<td><?= $dados['id']?></td>
				<td><?= $dados['titulo']?></td>
				<td><?= $dados['df']?></td>
				<td><?= $dados['hf']?></td>
				<td><?= $dados['compromisso']?></td>
				<td><a href="painel.php?P=compromissos&a=editar&id=<?= $dados['id']?>"><img src="img/edit.png" alt="Editar registro" title="Editar registro"></a></td>
				<td><a href="#" onClick="if(confirm('Deseja realmente excluir este registro?')){document.location.replace('painel.php?P=compromissos&a=excluir&id=<?= $dados['id']?>')}"><img src="img/delete.png" alt="Apagar registro" title="Apagar registro"></a></td>
			</tr>
		<?php
			};
		}
		?>
		
</table>