<?php
session_start();
require '../../class/app.php';


$sql = "SELECT * FROM t_cours";
$req = $app->fetchPrepared($sql);
foreach ($req as $row){
    $book_slug = $app->slugify($row['Cours']);
    $today_slug = $app->slugify(date('Y:m:d H:i:s'));
    $slug = $book_slug.'-'.$today_slug;

    $id = $row['CodeCours'];


    $data=[$slug,$id];
    $sql="UPDATE t_cours SET cours_slug=? WHERE CodeCours=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Slug ok';
    }
}

    header("Location: ../superadmin");


