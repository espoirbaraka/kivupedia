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

if($event=='UPDATE_SOUS_DOMAINE'){
    $data=[$_POST['domaine'],$_POST['id']];
    $dom = $_POST['id'];
    $sql="UPDATE t_sous_domaine SET Sous_domaine=? WHERE CodeSousDomaine=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Sous-domaine modifié';
    }
    header("Location: ../detail_domaine?domaine=$dom");
}

if($event=='UPDATE_LIVRE'){
    $data=[$_POST['titre'],$_POST['sous_titre'],$_POST['auteur'],$_POST['description'],$_POST['editeur'],$_POST['edition'],$_POST['isbn'],$_POST['id']];
    $sql="UPDATE t_livre SET Titre=?, SousTitre=?, AuteurPrincipal=?, Description=?, NomEditeur=?, LieuEdition=?, ISBN=?  WHERE CodeLivre=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Livre modifié';
    }
    header("Location: ../books");
}

if($event=='UPDATE_MEMOIRE'){
    $data=[$_POST['sujet'],$_POST['auteur'],$_POST['institution'],$_POST['id']];
    $sql="UPDATE t_memoire SET Sujet=?, Auteur=?, Institution=?  WHERE CodeMemoire=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Memoire/TFC modifié';
    }
    header("Location: ../memoire");
}

if($event=='UPDATE_COURS'){
    $data=[$_POST['cours'],$_POST['institution'],$_POST['id']];
    $sql="UPDATE t_cours SET Cours=?, Institution=? WHERE CodeCours=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Cours modifié';
    }
    header("Location: ../cours");
}

if($event=='ACTIVATE_LIVRE'){
    $data=[1,$_POST['id']];
    $sql="UPDATE t_livre SET Statut=?  WHERE CodeLivre=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Livre activé';
    }
    header("Location: ../books");
}

if($event=='DESACTIVATE_LIVRE'){
    $data=[0,$_POST['id']];
    $sql="UPDATE t_livre SET Statut=?  WHERE CodeLivre=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Livre desactivé';
    }
    header("Location: ../books");
}

if($event=='ACTIVATE_MEMOIRE'){
    $data=[1,$_POST['id']];
    $sql="UPDATE t_memoire SET Statut=?  WHERE CodeMemoire=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Memoire activé';
    }
    header("Location: ../memoire");
}

if($event=='DESACTIVATE_MEMOIRE'){
    $data=[0,$_POST['id']];
    $sql="UPDATE t_memoire SET Statut=?  WHERE CodeMemoire=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Memoire desactivé';
    }
    header("Location: ../memoire");
}

if($event=='ACTIVATE_COURS'){
    $data=[1,$_POST['id']];
    $sql="UPDATE t_cours SET Statut=?  WHERE CodeCours=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Cours activé';
    }
    header("Location: ../cours");
}

if($event=='DESACTIVATE_COURS'){
    $data=[0,$_POST['id']];
    $sql="UPDATE t_cours SET Statut=?  WHERE CodeCours=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Cours desactivé';
    }
    header("Location: ../cours");
}

if($event=='UPDATE_FACULTE'){
    $data=[$_POST['faculte'],$_POST['id']];
    $sql="UPDATE t_faculte SET Faculte=?  WHERE CodeFaculte=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Faculte modifiée';
    }
    header("Location: ../faculte");
}

if($event=='UPDATE_ANNEE'){
    $data=[$_POST['annee'],$_POST['id']];
    $sql="UPDATE t_annee_academique SET Annee=?  WHERE CodeAnnee=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Année modifiée';
    }
    header("Location: ../annee");
}