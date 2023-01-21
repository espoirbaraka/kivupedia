<?php
$offre = $_GET['offre'];

$sql = "SELECT * FROM t_offre
                WHERE offre_slug = '$offre'";
$req = $app->fetch($sql);
?>


<div class="single-channel">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index"><i class="fa fa-home"></i> Acceuil</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-arrow-left"></i> <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">Retour</a></li>
                    </ol>
                </nav>
                <iframe src="superadmin/offre/<?php echo $req['Fichier'] ?>" style="width: 100%; height: 100vh;"></iframe>
            </div>
        </div>
    </div>
</div>