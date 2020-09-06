<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" href="/css/padrao.css">
		</head>
		<body>
			<div class="conteudo">
				<form action="painel.php?P=compromissos&a=realizaCadastro" method="POST" enctype="multipart/form-data" id="formulario">
					<strong>Novo compromisso</strong>	
					<input type="text" name="titulo" placeholder="Título"> <br><br>
 					<input type="text" name="data" class="data" placeholder="Data"> <br><br>
 					<input type="time" name="hora" class="hora" placeholder="Hora"> <br><br>
 					<textarea name="compromisso" class="ckeditor" placeholder="Compromisso"></textarea>
					<input type="submit" value="Cadastrar">
				</form>
			</div>
		</body>
	</html>
