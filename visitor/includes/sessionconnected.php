<?php
include '../class/app.php';
session_start();

if(!isset($_SESSION['visitor']) || trim($_SESSION['visitor']) == ''){
    header('location: ../login');
    exit();
}

$conn = $app->getPDO();

$id = $_SESSION['visitor'];
$sql = "SELECT * FROM t_compte
         WHERE CodeCompte=$id";
$req = $app->fetch($sql);

?>