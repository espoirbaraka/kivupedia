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
    $domain_slug = $app->slugify($_POST['domaine']);
    $today_slug = $app->slugify(date('Y:m:d H:i:s'));
    $slug = $domain_slug.'-'.$today_slug;

    $data = [$_POST['domaine'], $slug, $_SESSION['super']];
    $sql = "INSERT INTO t_domaine(Domaine,domain_slug,Created_by) VALUES(?,?,?)";
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
    $file_dir = "../fichier/";
    $image_dir = "../thumbmnail/";
    $file = explode(".", $_FILES["fichier"]["name"]);
    $image = explode(".", $_FILES["image"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($file);
    $newimagename = round(microtime(true)) . '.' . end($image);
    $target_file = $file_dir . basename($newfilename);
    $target_image = $image_dir . basename($newimagename);
    $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $imageType = strtolower(pathinfo($target_image,PATHINFO_EXTENSION));

    if (file_exists($target_file)) {
        $_SESSION['error'] = 'Un fichier avec le meme nom existe. Veuillez renomer votre fichier';
    }else{
        if ($_FILES["fichier"]["size"] > 10485760) {
            $_SESSION['error'] = 'Le fichier depasse 10 MB';
        }else{
            if($fileType != "pdf") {
                $_SESSION['error'] = 'Fichier PDF recuse';
            }else{
               if((move_uploaded_file($_FILES["fichier"]["tmp_name"], $target_file)) AND (move_uploaded_file($_FILES["image"]["tmp_name"], $target_image))){
                   $pdf = file_get_contents("../fichier/".$target_file);
                   $number = preg_match_all("/\/Page\W/", $pdf, $dummy);
                   $user = $_SESSION['super'];

                   $book_slug = $app->slugify($_POST['titre']);
                   $today_slug = $app->slugify(date('Y:m:d H:i:s'));
                   $slug = $book_slug.'-'.$today_slug;

                   $data = [$_POST['titre'],$slug,$_POST['domaine'],$_POST['description'],$_POST['editeur'],$_POST['edition'],$_POST['langue'],1,$user,1,$newfilename,$newimagename,$number,1];
                   $sql = "INSERT INTO t_livre(Titre,book_slug,CodeDomaine,Description,NomEditeur,LieuEdition,CodeLangue,Validate,CodeAdmin,CodePropriete,Fichier_livre,Image,NombrePage,Statut) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
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

if ($event == 'CREATE_FACULTE') {
    $faculte_slug = $app->slugify($_POST['faculte']);
    $today_slug = $app->slugify(date('Y:m:d H:i:s'));
    $slug = $faculte_slug.'-'.$today_slug;
    $data = [$_POST['faculte'],$slug];
    $sql = "INSERT INTO t_faculte(Faculte,faculte_slug) VALUES(?,?)";
    if ($app->prepare($sql, $data, 1)) {
        $_SESSION['success'] = 'Faculte ajoutée';
    }else{
        $_SESSION['error'] = 'Problème d\'insertion';
    }
    header("Location: ../faculte");
}

if ($event == 'CREATE_OPTION') {

    $option_slug = $app->slugify($_POST['option']);
    $today_slug = $app->slugify(date('Y:m:d H:i:s'));
    $slug = $option_slug.'-'.$today_slug;

    $data = [$_POST['option'],$slug];
    $sql = "INSERT INTO t_option(Designation,option_slug) VALUES(?,?)";
    if ($app->prepare($sql, $data, 1)) {
        $_SESSION['success'] = 'Option ajoutée';
    }else{
        $_SESSION['error'] = 'Problème d\'insertion';
    }
    header("Location: ../option");
}

if ($event == 'CREATE_ANNEE') {
    $data = [$_POST['annee']];
    $sql = "INSERT INTO t_annee_academique(Annee) VALUES(?)";
    if ($app->prepare($sql, $data, 1)) {
        $_SESSION['success'] = 'Année ajoutée';
    }else{
        $_SESSION['error'] = 'Problème d\'insertion';
    }
    header("Location: ../annee");
}

if ($event == 'CREATE_MEMOIRE') {
    $admin = $_SESSION['super'];
    $file_dir = "../fichier/";
    $file = explode(".", $_FILES["fichier"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($file);
    $target_file = $file_dir . basename($newfilename);
    $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (file_exists($target_file)) {
        $_SESSION['error'] = 'Un fichier avec le meme nom existe. Veuillez renomer votre fichier';
    }else {
        if ($_FILES["fichier"]["size"] > 10485760) {
            $_SESSION['error'] = 'Le fichier depasse 10 MB';
        } else {
            if ($fileType != "pdf") {
                $_SESSION['error'] = 'Fichier PDF recuse';
            } else {
                if ((move_uploaded_file($_FILES["fichier"]["tmp_name"], $target_file))) {
                    $pdf = file_get_contents("../fichier/" . $target_file);
                    $number = preg_match_all("/\/Page\W/", $pdf, $dummy);

                    $article_slug = $app->slugify($_POST['sujet']);
                    $today_slug = $app->slugify(date('Y:m:d H:i:s'));
                    $slug = $article_slug.'-'.$today_slug;

                    $data = [$_POST['sujet'],$slug, $_POST['auteur'], $newfilename, $_POST['institution'], $_POST['annee'], $_POST['categorie'], $_POST['faculte'], $admin, 1, 1];
                    $sql = "INSERT INTO t_memoire(Sujet,article_slug,Auteur,Fichier,Institution,CodeAnnee,CodeCategorie,CodeFaculte,CodeAdmin,CodePropriete,Statut) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
                    if ($app->prepare($sql, $data, 1)) {
                        $_SESSION['success'] = 'Memoire/TFC ajoutée';
                    } else {
                        $_SESSION['error'] = 'Problème d\'insertion';
                    }
                }
            }
        }
    }
    header("Location: ../memoire");
}


if ($event == 'CREATE_COURS') {
    $admin = $_SESSION['super'];
    $file_dir = "../fichier/";
    $file = explode(".", $_FILES["fichier"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($file);
    $target_file = $file_dir . basename($newfilename);
    $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (file_exists($target_file)) {
        $_SESSION['error'] = 'Un fichier avec le meme nom existe. Veuillez renomer votre fichier';
    }else {
        if ($_FILES["fichier"]["size"] > 10485760) {
            $_SESSION['error'] = 'Le fichier depasse 10 MB';
        } else {
            if ($fileType != "pdf") {
                $_SESSION['error'] = 'Fichier PDF recuse';
            } else {
                if ((move_uploaded_file($_FILES["fichier"]["tmp_name"], $target_file))) {
                    $pdf = file_get_contents("../fichier/" . $target_file);
                    $number = preg_match_all("/\/Page\W/", $pdf, $dummy);

                    $cours_slug = $app->slugify($_POST['cours']);
                    $today_slug = $app->slugify(date('Y:m:d H:i:s'));
                    $slug = $cours_slug.'-'.$today_slug;

                    $data = [$_POST['cours'],$slug,$_POST['auteur'], $_POST['institution'], $newfilename, $admin, 1, 1];
                    $sql = "INSERT INTO t_cours(Cours,cours_slug,Auteur,Institution,Fichier,CodeAdmin,CodePropriete,Statut) VALUES(?,?,?,?,?,?,?,?)";
                    if ($app->prepare($sql, $data, 1)) {
                        $_SESSION['success'] = 'Cours ajoutée';
                    } else {
                        $_SESSION['error'] = 'Problème d\'insertion';
                    }
                }
            }
        }
    }
    header("Location: ../cours");
}


if ($event == 'CREATE_ITEM') {
    $admin = $_SESSION['super'];
    $file_dir = "../fichier/";
    $file = explode(".", $_FILES["fichier"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($file);
    $target_file = $file_dir . basename($newfilename);
    $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (file_exists($target_file)) {
        $_SESSION['error'] = 'Un fichier avec le meme nom existe. Veuillez renomer votre fichier';
    }else {
        if ($_FILES["fichier"]["size"] > 10485760) {
            $_SESSION['error'] = 'Le fichier depasse 10 MB';
        } else {
            if ((move_uploaded_file($_FILES["fichier"]["tmp_name"], $target_file))) {
                $pdf = file_get_contents("../fichier/" . $target_file);
                $number = preg_match_all("/\/Page\W/", $pdf, $dummy);

                $data = [$_POST['session'], $_POST['annee'], $_POST['option'], $newfilename, $admin, 1, 1,$fileType];
                $sql = "INSERT INTO t_item(CodeSession,CodeAnnee,CodeOption,Fichier,CodeAdmin,CodePropriete,Statut,TypeFichier) VALUES(?,?,?,?,?,?,?,?)";
                if ($app->prepare($sql, $data, 1)) {
                    $_SESSION['success'] = 'ITEM ajoutée';
                } else {
                    $_SESSION['error'] = 'Problème d\'insertion';
                }
            }
        }
    }
    header("Location: ../item");
}