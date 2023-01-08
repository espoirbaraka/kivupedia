<?php
$book = $_GET['course'];

$sql = "SELECT * FROM t_cours
                WHERE cours_slug = '$book'";
$req = $app->fetch($sql);
$readed = $req['Readed'];
$newreaded = $readed + 1;

$data = [$newreaded, $req['CodeCours']];
$sql2 = "UPDATE t_cours SET Readed=? WHERE CodeCours=?";
$app->prepare($sql2, $data, 1);
?>


<div class="single-channel">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home"><i class="fa fa-home"></i> Acceuil</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-arrow-left"></i> <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">Retour</a></li>
                    </ol>
                </nav>
                <iframe src="superadmin/fichier/<?php echo $req['Fichier'] ?>" style="width: 100%; height: 100vh;"></iframe>
            </div>
        </div>
    </div>
</div>