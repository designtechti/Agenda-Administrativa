<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<h2 style="text-align: center; margin-bottom: 10px;">
		<?= 'Seja bem-vindo, ' . $_SESSION['nome'] . '!'; ?>
	</h2>
	<div class="conteudo">	
		
		<table width="100%">
			<tr>
				<th colspan="6">Compromissos</th>
			</tr>
			<tr>
				<th>ID</th>
				<th>Título</th>
				<th>Data</th>
				<th>Hora</th>
				<th>Descrição</th>
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
				
				$dtAtual = date("Y-m-d");
				$dtCompromisso = $dados['data']; // O índice 'df' é uma abreviação de "data formatada"

				if ($dtAtual < $dtCompromisso) { // Próximos compromissos
					$cor = '#0f0';
				}else if ($dtAtual > $dtCompromisso) { // Compromissos anteriores
					$cor = '#f00';
				}else { // Compromissos do dia
					$cor = 'yellow';
				}

				?>
					<tr style="color: <?=$cor?>">
						<td><?= $dados['id']?></td>
						<td><?= $dados['titulo']?></td>
						<td><?= $dados['df']?></td>
						<td><?= $dados['hf']?></td>
						<td><?= $dados['compromisso']?></td>			
					</tr>
				<?php
					};
				}
				?>
				
		</table>
	</div>
</body>
</html>