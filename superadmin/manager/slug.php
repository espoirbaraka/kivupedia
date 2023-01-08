<?php
session_start();
require '../../class/app.php';


$sql = "SELECT * FROM t_memoire";
$req = $app->fetchPrepared($sql);
foreach ($req as $row){
    $book_slug = $app->slugify($row['Sujet']);
    $today_slug = $app->slugify(date('Y:m:d H:i:s'));
    $slug = $book_slug.'-'.$today_slug;

    $id = $row['CodeMemoire'];


    $data=[$slug,$id];
    $sql="UPDATE t_memoire SET article_slug=? WHERE CodeMemoire=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Slug ok';
    }
}

    header("Location: ../superadmin");


