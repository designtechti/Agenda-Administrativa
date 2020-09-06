<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" href="/css/padrao.css">
		</head>
		<body>
			<div class="conteudo">
				<form action="painel.php?P=contatos&a=realizaCadastro" method="POST" id="formulario">
					<strong>Novo contato</strong> <br><br>	
					<input type="text" name="nome" placeholder="Nome"> <br><br>
					<input type="text" name="telefone" class="telefone" placeholder="Telefone"> <br><br>
					<div style="text-align: left;">
						Grupo: 
						<select name="idGrupo">
							<?php
								$sql = "SELECT * FROM grupos ORDER BY id";
								$result = mysqli_query($conexao, $sql);
								while ($dados = mysqli_fetch_assoc($result)){
							?>
							<option value="<?=$dados['id']?>"><?=utf8_encode($dados['nome'])?></option>
							<?php
								}
							?>
						</select>
					</div>	
 					<input type="submit" value="Cadastrar">
				</form>
			</div>
		</body>
	</html>
