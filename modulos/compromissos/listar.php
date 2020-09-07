<table width="100%" class="conteudo">
	<tr>
		<th style="border: 1px solid #f1f1f1; padding: 30px; border-radius: 5px 0 0;">ID</th>
		<th style="border: 1px solid #f1f1f1; padding: 30px;">Título</th>
		<th style="border: 1px solid #f1f1f1; padding: 30px;">Data</th>
		<th style="border: 1px solid #f1f1f1; padding: 30px;">Hora</th>
		<th style="border: 1px solid #f1f1f1; padding: 30px;">Descrição</th>
		<th style="border: 1px solid #f1f1f1; padding: 30px; border-radius: 0 5px 0 0;" colspan="8">Ação</th>
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
				<td style="border: 1px solid #f1f1f1; padding: 15px;"><?= $dados['id']?></td>
				<td style="border: 1px solid #f1f1f1; padding: 15px;"><?= $dados['titulo']?></td>
				<td style="border: 1px solid #f1f1f1; padding: 15px;"><?= $dados['df']?></td>
				<td style="border: 1px solid #f1f1f1; padding: 15px;"><?= $dados['hf']?></td>
				<td style="border: 1px solid #f1f1f1; padding: 15px;"><?= $dados['compromisso']?></td>
				<td style="border: 1px solid #f1f1f1; padding: 15px;"><a href="painel.php?P=compromissos&a=editar&id=<?= $dados['id']?>"><img src="img/edit.png" alt="Editar registro" title="Editar registro"></a></td>
				<td style="border: 1px solid #f1f1f1; padding: 30px;"><a href="#" onClick="if(confirm('Deseja realmente excluir este registro?')){document.location.replace('painel.php?P=compromissos&a=excluir&id=<?= $dados['id']?>')}"><img src="img/delete.png" alt="Apagar registro" title="Apagar registro"></a></td>
			</tr>
		<?php
			};
		}
		?>
		
</table>