<?php
session_start();
require '../class/app.php';
$event=$_POST['event'];


 if($event=='DELETE_USER'){
    $data=[$_POST['id']];
    $sql="DELETE FROM tbl_user WHERE CodeUser=?";
    if($app->prepare($sql,$data,1)){
     $_SESSION['success'] = 'Utilisateur supprimé';
    }
    header("Location: ../user.php");
 }

if($event=='DELETE_MEDECIN'){
    $data=[$_POST['id']];
    $sql="DELETE FROM tbl_medecin WHERE CodeMedecin=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Medecin supprimé';
    }
    header("Location: ../medecin.php");
}

if($event=='DELETE_FOURNISSEUR'){
    $data=[$_POST['id']];
    $sql="DELETE FROM tbl_fournisseur WHERE CodeFournisseur=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Fournisseur supprimé';
    }
    header("Location: ../fournisseur.php");
}
if($event=='DELETE_MEDICAMENT'){
    $data=[$_POST['id']];
    $sql="DELETE FROM tbl_medicament WHERE CodeMedicament=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Medicament supprimé';
    }
    header("Location: ../medicament.php");
}

if($event=='DELETE_CLIENT'){
    $data=[$_POST['id']];
    $sql="DELETE FROM tbl_client WHERE CodeClient=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Client supprimé';
    }
    header("Location: ../Client.php");
}





?>