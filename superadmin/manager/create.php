<?php
session_start();
require '../../class/app.php';
$event = $_POST['event'];


if ($event == 'CREATE_SUPERADMIN') {
    $data = [$_POST['nom'], $_POST['email'], sha1($_POST['password']), 1];
    $sql = "INSERT INTO t_superadmin(NomComplet,Email,Password,CodeCategorie) VALUES(?,?,?,?)";
    if ($app->prepare($sql, $data, 1)) {
        $_SESSION['success'] = 'Super administrateur ajouté';
    }
    header("Location: ../superadmin");
}

if ($event == 'CREATE_ADMIN') {
        $data = [$_POST['nom'], $_POST['email'], sha1($_POST['password']),2];
        $sql = "INSERT INTO t_superadmin(NomComplet,Email,Password,CodeCategorie) VALUES(?,?,?,?)";
        if ($app->prepare($sql, $data, 1)) {
            $_SESSION['success'] = 'Administrateur ajouté';
        }
   header("Location: ../admin");
 }

if ($event == 'CREATE_DOMAINE') {
    $data = [$_POST['domaine'], $_SESSION['super']];
    $sql = "INSERT INTO t_domaine(Domaine,Created_by) VALUES(?,?)";
    if ($app->prepare($sql, $data, 1)) {
        $_SESSION['success'] = 'Domaine ajouté';
    }
    header("Location: ../domaine");
}

if ($event == 'CREATE_SOUS_DOMAINE') {
    $dom = $_POST['domaine'];
    $data = [$_POST['sous-domaine'],$_POST['domaine']];
    $sql = "INSERT INTO t_sous_domaine(Sous_domaine,CodeDomaine) VALUES(?,?)";
    if ($app->prepare($sql, $data, 1)) {
        $_SESSION['success'] = 'Sous-domaine ajouté';
    }else{
        $_SESSION['error'] = 'Problème d\'insertion';
    }
    header("Location: ../detail_domaine?domaine=$dom");
}

if ($event == 'CREATE_LIVRE') {
    $target_dir = "../fichier/";
    $temp = explode(".", $_FILES["fichier"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $target_file = $target_dir . basename($newfilename);
    $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (file_exists($target_file)) {
        $_SESSION['error'] = 'Un fichier avec le meme nom existe. Veuillez renomer votre fichier';
    }else{
        if ($_FILES["fichier"]["size"] > 10485760) {
            $_SESSION['error'] = 'Le fichier depasse 10 MB';
        }else{
            if($fileType != "pdf") {
                $_SESSION['error'] = 'Fichier PDF recuse';
            }else{
               if(move_uploaded_file($_FILES["fichier"]["tmp_name"], $target_file)){
                   $pdf = file_get_contents("../fichier/".$target_file);
                   $number = preg_match_all("/\/Page\W/", $pdf, $dummy);

                   $user = $_SESSION['super'];
                   $data = [$_POST['titre'],$_POST['domaine'],$_POST['description'],$_POST['editeur'],$_POST['edition'],$_POST['langue'],1,$user,1,$newfilename,$number];
                   $sql = "INSERT INTO t_livre(Titre,CodeDomaine,Description,NomEditeur,LieuEdition,CodeLangue,Validate,CodeAdmin,CodePropriete,Fichier_livre,NombrePage) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
                   if ($app->prepare($sql, $data, 1)) {
                       $_SESSION['success'] = 'Livre posté';
                   }else{
                       $_SESSION['error'] = 'Problème d\'insertion';
                   }
               }
            }
        }
    }
    header("Location: ../books");

}

