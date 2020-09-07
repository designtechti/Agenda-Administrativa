<table width="100%" class="conteudo">
	<tr>
		<th style="border: 1px solid #f1f1f1; padding: 30px; border-radius: 5px 0 0 0;">ID</th>
		<th style="border: 1px solid #f1f1f1; padding: 30px;">Nome</th>
		<th style="border: 1px solid #f1f1f1; padding: 30px;">Usuário</th>
		<th colspan="5" style="border: 1px solid #f1f1f1; padding: 30px; border-radius: 0 5px 0 0;">Ação</th>
	</tr>
	<?php
		$sql = "SELECT * FROM usuarios ORDER BY nome";
		$result = mysqli_query($conexao, $sql);
		
		if(mysqli_num_rows($result) == 0){
	?>
		<tr>
			<th colspan="5">Nenhum registro encontrado.</th>
		</tr>
		<?php
		}else {
			//Lista todos os registros do banco na tela
		while ($dados = mysqli_fetch_assoc($result)){
		?>
			<tr>
				<td style="border: 1px solid #f1f1f1; padding: 15px;"><?= $dados['id']?></td>
				<td style="border: 1px solid #f1f1f1; padding: 15px;"><?= $dados['nome']?></td>
				<td style="border: 1px solid #f1f1f1; padding: 15px;"><?= $dados['usuario']?></td>
				<td style="border: 1px solid #f1f1f1; padding: 15px;"><a href="painel.php?P=administradores&a=editar&id=<?= $dados['id']?>"><img src="img/edit.png" alt="Editar registro" title="Editar registro"></a></td>
				<td style="border: 1px solid #f1f1f1; padding: 15px;"><a href="#" onClick="if(confirm('Deseja realmente excluir este registro?')){document.location.replace('painel.php?P=administradores&a=excluir&id=<?= $dados['id']?>')}"><img src="img/delete.png" alt="Apagar registro" title="Apagar registro"></a></td>
			</tr>
		<?php
			};
		}
		?>
		
</table>