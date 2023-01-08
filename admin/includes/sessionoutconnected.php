<?php
	include '../class/app.php';
	session_start();

	if(isset($_SESSION['admin'])){
		header('location: dashboard');
	}
?>