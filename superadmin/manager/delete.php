<?php
session_start();
require '../../class/app.php';
$event=$_POST['event'];


 if($event=='DELETE_SUPERADMIN'){
    $data=[$_POST['id']];
    $sql="DELETE FROM t_superadmin WHERE CodeSuper=?";
    if($app->prepare($sql,$data,1)){
     $_SESSION['success'] = 'Super administrateur supprimé';
    }
    header("Location: ../superadmin");
 }

if($event=='DELETE_ADMIN'){
    $data=[$_POST['id']];
    $sql="DELETE FROM t_superadmin WHERE CodeSuper=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Administrateur supprimé';
    }
    header("Location: ../admin");
}
if($event=='DELETE_DOMAINE'){
    $data=[$_POST['id']];
    $sql="DELETE FROM t_domaine WHERE CodeDomaine=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Domaine supprimé';
    }
    header("Location: ../domaine");
}