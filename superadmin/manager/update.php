<?php
session_start();
require '../../class/app.php';
$event=$_POST['event'];


 if($event=='UPDATE_SUPERADMIN'){
    $data=[$_POST['nom'],$_POST['email'],sha1($_POST['password']),$_POST['id']];
    $sql="UPDATE t_superadmin SET NomComplet=?, Email=?, Password=? WHERE CodeSuper=?";
    if($app->prepare($sql,$data,1)){
     $_SESSION['success'] = 'Super administrateur modifié';
    }
    header("Location: ../superadmin");
 }

if($event=='UPDATE_ADMIN'){
    $data=[$_POST['nom'],$_POST['email'],sha1($_POST['password']),$_POST['id']];
    $sql="UPDATE t_superadmin SET NomComplet=?, Email=?, Password=? WHERE CodeSuper=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Administrateur modifié';
    }
    header("Location: ../admin");
}

if($event=='UPDATE_DOMAINE'){
    $data=[$_POST['domaine'],$_POST['id']];
    $sql="UPDATE t_domaine SET Domaine=? WHERE CodeDomaine=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Domaine modifié';
    }
    header("Location: ../domaine");
}