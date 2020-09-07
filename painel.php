<?php
	
	session_name('login');
	session_start();

	if ($_SESSION['logado'] != true) {
		replace('index.php');
		die();	
	}
		include ('includes/functions.php');
		include('includes/conexao.php');

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Agenda Administrativa</title>
	<link href="css/padrao.css" rel="stylesheet">
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/jquery.mask.js"></script>    
	<script src="js/functions.js"></script>  
	<script src="js/ckeditor/ckeditor.js"></script>
</head>

<body style="background-image: url('img/fundo.jpg'); ">
	<div class="fundo">
		<div id="topo" style="color: #22FAC7;text-shadow: 3px 3px 3px #000;">
			Agenda Administrativa
		</div>
		<div id="menu">
				<?php 
					include ('includes/menu.php');
				?>
		</div>
		<div id="conteudo">
			<?php
				if (!empty($_GET['P']) && !empty($_GET['a'])) {
					include('modulos/'.$_GET['P'].'/'.$_GET['a'].'.php');
				}
						
			?>
		</div>
	</div>
	<footer>
		<h5>&copy Design Tech 2017 | Todos os direitos reservados. </h5>
	</footer>		
</body>
</html>
