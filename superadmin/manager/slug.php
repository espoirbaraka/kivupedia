<?php
session_start();
require '../../class/app.php';


$sql = "SELECT * FROM t_livre";
$req = $app->fetchPrepared($sql);
foreach ($req as $row){
    $book_slug = $app->slugify($row['Titre']);
    $today_slug = $app->slugify(date('Y:m:d H:i:s'));
    $slug = $book_slug.'-'.$today_slug;

    $id = $row['CodeLivre'];


    $data=[$slug,$id];
    $sql="UPDATE t_livre SET book_slug=? WHERE CodeLivre=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Slug ok';
    }
}

    header("Location: ../superadmin");


