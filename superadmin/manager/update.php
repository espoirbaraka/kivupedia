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

if($event=='UPDATE_MEDECIN'){
    $data=[$_POST['nom'],$_POST['postnom'],$_POST['prenom'],$_POST['telephone'],$_POST['id']];
    $sql="UPDATE tbl_medecin SET NomMedecin=?, PostnomMedecin=?, PrenomMedecin=?, TelephoneMedecin=? WHERE CodeMedecin=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Medecin modifié';
    }
    header("Location: ../medecin.php");
}

if($event=='UPDATE_FOURNISSEUR'){
    $data=[$_POST['nom'],$_POST['postnom'],$_POST['prenom'],$_POST['adresse'],$_POST['id']];
    $sql="UPDATE tbl_fournisseur SET NomFournisseur=?, PostnomFournisseur=?, PrenomFournisseur=?, Adresse=? WHERE CodeFournisseur=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Fournisseur modifié';
    }
    header("Location: ../fournisseur.php");
}

if($event=='UPDATE_MEDICAMENT'){
    $data=[$_POST['designation'],$_POST['prix'],$_POST['id']];
    $sql="UPDATE tbl_medicament SET Designation=?, pv=? WHERE CodeMedicament=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Medicament modifié';
    }
    header("Location: ../article.php");
}


?>