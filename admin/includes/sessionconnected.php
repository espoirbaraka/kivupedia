<?php
include '../class/app.php';
session_start();

if(!isset($_SESSION['admin']) || trim($_SESSION['admin']) == ''){
    header('location: ./index');
    exit();
}

$conn = $app->getPDO();

$id = $_SESSION['admin'];
$sql = "SELECT * FROM t_superadmin
         WHERE CodeSuper=$id";
$req = $app->fetch($sql);
$user = $req['CodeSuper'];

?>