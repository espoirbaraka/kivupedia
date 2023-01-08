<?php
	include '../class/app.php';
	session_start();

	if(isset($_SESSION['super'])){
		header('location: dashboard');
	}
?>