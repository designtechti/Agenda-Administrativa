<?php

	session_name('login');
	session_start();
	//$_SESSION = array();
	session_destroy();

	include 'includes/functions.php';
	replace('index.php');
?>