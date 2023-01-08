<?php
session_start();
require '../../class/app.php';


$sql = "SELECT * FROM t_faculte";
$req = $app->fetchPrepared($sql);
foreach ($req as $row){
    $book_slug = $app->slugify($row['Faculte']);
    $today_slug = $app->slugify(date('Y:m:d H:i:s'));
    $slug = $book_slug.'-'.$today_slug;

    $id = $row['CodeFaculte'];


    $data=[$slug,$id];
    $sql="UPDATE t_faculte SET faculte_slug=? WHERE CodeFaculte=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Slug ok';
    }
}

    header("Location: ../superadmin");


