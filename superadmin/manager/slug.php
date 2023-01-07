<?php
session_start();
require '../../class/app.php';


$sql = "SELECT * FROM t_domaine";
$req = $app->fetchPrepared($sql);
foreach ($req as $row){
    $book_slug = $app->slugify($row['Domaine']);
    $today_slug = $app->slugify(date('Y:m:d H:i:s'));
    $slug = $book_slug.'-'.$today_slug;

    $id = $row['CodeDomaine'];


    $data=[$slug,$id];
    $sql="UPDATE t_domaine SET domain_slug=? WHERE CodeDomaine=?";
    if($app->prepare($sql,$data,1)){
        $_SESSION['success'] = 'Slug ok';
    }
}

    header("Location: ../superadmin");


