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