<?php
if (isset($_GET['page']) && !empty($_GET['page'])) {
    $currentPage = (int)strip_tags($_GET['page']);
} else {
    $currentPage = 1;
}

$sql1 = "SELECT COUNT(*) AS nbre FROM t_memoire WHERE Statut=1";
$nbre = $app->fetch($sql1);
$nbArticles = $nbre['nbre'];
$parPage = 15;

$pages = ceil($nbArticles / $parPage);

$premier = ($currentPage * $parPage) - $parPage;


$sql = "SELECT * FROM t_memoire LEFT JOIN t_annee_academique
         ON t_memoire.CodeAnnee=t_annee_academique.CodeAnnee
         LEFT JOIN t_categorie_memoire
         ON t_memoire.CodeCategorie=t_categorie_memoire.CodeCategorie
         LEFT JOIN t_faculte
         ON t_memoire.CodeFaculte=t_faculte.CodeFaculte
         WHERE Statut=1
         ORDER BY Created_on DESC LIMIT $premier,$parPage";
$req = $app->fetchPrepared($sql);
?>
<div class="single-channel">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home"><i class="fa fa-home"></i> Acceuil</a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-arrow-left"></i> <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">Retour</a></li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

                <?php
                $sql3 = "SELECT * FROM t_faculte";
                $req = $app->fetchPrepared($sql3);
                foreach ($req as $row){
                    ?>
                    <div class="col-md-3 text-center">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="dropdown" style="padding: 0px;">

                                    <a href="#" class="btn btn-floating" style="float: right;" data-toggle="dropdown">
                                        <i class="fa fa-align-right"></i>
                                    </a>
                                    <a href="mode_paiement.php?section" class="avatar avatar-lg">
                                            <span class="">
                                                <i class="fa fa-folder fa-5x" style="color: #FFC542;"></i>
                                            </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="mode_paiement.php?section=" class="btn btn-default btn-sm">
                                            <li class="fa fa-window"></li> Ouvrir
                                        </a><br>

                                    </div>
                                </div>



                            </div>
                        </div>
                        <h6><?php echo $row['Faculte'] ?></h6>
                    </div>
                <?php
                }
                ?>










            </div>
        </div>
    </div>
</div>