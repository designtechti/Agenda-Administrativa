<?php

	function replace($url)	{
		?>
			<script type="text/javascript">
				document.location.replace(' <?php echo $url ?> ');
			</script>
		<?php
	}

	
	function alert($msg) {
		?>
			<script>
				alert('<?=$msg?>');
			</script>
		<?php	
	}

?>