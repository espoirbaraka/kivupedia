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

if($event=='ACTIVATE_ITEM'){
    $data=[1,$_POST['id']];
    $sql="UPDATE t_item SET Statut=?  WHERE CodeItem=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'ITEM activé';
    }
    header("Location: ../item");
}

if($event=='DESACTIVATE_ITEM'){
    $data=[0,$_POST['id']];
    $sql="UPDATE t_item SET Statut=?  WHERE CodeItem=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'ITEM desactivé';
    }
    header("Location: ../item");
}

if($event=='UPDATE_FACULTE'){
    $data=[$_POST['faculte'],$_POST['id']];
    $sql="UPDATE t_faculte SET Faculte=?  WHERE CodeFaculte=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Faculte modifiée';
    }
    header("Location: ../faculte");
}

if($event=='UPDATE_OPTION'){
    $data=[$_POST['option'],$_POST['id']];
    $sql="UPDATE t_option SET Designation=?  WHERE CodeOption=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Option modifiée';
    }
    header("Location: ../option");
}

if($event=='UPDATE_ANNEE'){
    $data=[$_POST['annee'],$_POST['id']];
    $sql="UPDATE t_annee_academique SET Annee=?  WHERE CodeAnnee=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Année modifiée';
    }
    header("Location: ../annee");
}

if ($event == 'UPDATE_PHOTO') {
    $livre = $_POST['id'];
    $admin = $_SESSION['super'];
    $file_dir = "../thumbmnail/";
    $file = explode(".", $_FILES["fichier"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($file);
    $target_file = $file_dir . basename($newfilename);
    $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (file_exists($target_file)) {
        $_SESSION['error'] = 'Un fichier avec le meme nom existe. Veuillez renomer votre fichier';
    }else {
        if ($_FILES["fichier"]["size"] > 10485760) {
            $_SESSION['error'] = 'L\'image depasse 10 MB';
        } else {
            if ($fileType != "png" AND $fileType != "jpg" AND $fileType != "jpg" AND $fileType != "jpg") {
                $_SESSION['error'] = 'Image recuse';
            } else {
                if ((move_uploaded_file($_FILES["fichier"]["tmp_name"], $target_file))) {
                    $data = [$newfilename, $_POST['id']];
                    $sql = "UPDATE t_livre SET Fichier_livre=? WHERE CodeLivre=?";
                    if ($app->prepare($sql, $data, 1)) {
                        $_SESSION['success'] = 'Photo modifiée';
                    } else {
                        $_SESSION['error'] = 'Problème de modification';
                    }
                }
            }
        }
    }
    header("Location: ../detail_book?livre=$livre");
}