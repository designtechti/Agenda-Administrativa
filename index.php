<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Agenda Administrativa</title>
	<link href="css/padrao.css" rel="stylesheet">
</head>

<body>
	<header class="headerLogin">
		&nbsp;
	</header>
	<div id="topo">
		Agenda Administrativa
	</div>
	<div id="login">
		<form action="valida.php" method="post">
			<ul>
				<li>
					<input type="text" placeholder="Usuário" name="usuario">
				</li>
				<li>
					<input type="password" placeholder="Senha" name="senha">    
				</li>
				<li>
					<input type="submit" value="Entrar">                
				</li>
				<li style="color: red; font-weight: bold;">
					<?=$_GET['msg'];?>
				</li>
			</ul>
		</form>    
	
	</div>
</body>
</html>


