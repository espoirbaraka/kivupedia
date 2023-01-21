<?php
	include '../class/app.php';
	session_start();

	if(isset($_SESSION['visitor'])){
		header('location: dashboard');
	}
?>