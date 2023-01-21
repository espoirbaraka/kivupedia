<?php
$word = $_GET['word'];
$search = '%'.$word.'%';

if (isset($_GET['page']) && !empty($_GET['page'])) {
    $currentPage = (int)strip_tags($_GET['page']);
} else {
    $currentPage = 1;
}

$sql1 = "SELECT COUNT(*) AS nbre FROM t_offre WHERE Statut=1 AND Entreprise LIKE '%$word%'";
$nbre = $app->fetch($sql1);
$nbArticles = $nbre['nbre'];
$parPage = 20;

$pages = ceil($nbArticles / $parPage);

$premier = ($currentPage * $parPage) - $parPage;

$sql3 = "SELECT * FROM t_offre WHERE Statut=1 AND Entreprise LIKE '%$word%' ORDER BY Created_on DESC LIMIT $premier,$parPage";
$req = $app->fetchPrepared($sql3);
?>
<div class="slide-single slide-single-page">
    <div class="overlay"></div>
    <div class="text text-page">
        <div class="this-item">
            <h2><?php echo $nbArticles; ?> Offres trouvés chez : <?php echo $word; ?> ... </h2>
        </div>
    </div>
</div>



<div class="single-channel">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index"><i class="fa fa-home"></i> Acceuil</a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-arrow-left"></i> <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">Retour</a></li>
            </ol>
        </nav>


        <div class="home-search">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 left">

                        <div class="seach">
                            <form action="search-offre?word=" method="get">
                                <input type="text" autocomplete="off" name="word" class="form-control"
                                       placeholder="Recherchez par entreprise">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">


                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-box clearfix">
                                    <div class="table-responsive">
                                        <table class="table user-list">
                                            <thead>
                                            <tr>
                                                <th><span>Employeur</span></th>
                                                <th><span>Description du poste</span></th>
                                                <th><span>Nombre poste</span></th>
                                                <th><span>Echéance</span></th>
                                                <th><span>Statut</span></th>
                                                <th><span>Télécharger</span></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            foreach ($req as $offre){
                                                ?>
                                                <tr>
                                                    <td>
                                                        <img src="image/offre.jpeg"
                                                             alt="">
                                                        <a href="read_offre?offre=<?php echo $offre['offre_slug'] ?>" class="user-link"><?php echo $offre['Entreprise'] ?></a>
                                                        <span class="user-subhead">Posté le <?php echo $app->dateconv($offre['Created_on']) ?></span>
                                                    </td>
                                                    <td>
                                                        <?php echo $offre['Poste'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $offre['NombrePoste'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo "Du ".$app->dateconv($offre['DateDebut'])." au ".$app->dateconv($offre['DateExpiration']) ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php
                                                        $debut = $offre['DateDebut'];
                                                        $fin = $offre['DateExpiration'];
                                                        $today = date('Y-m-d');
                                                        if($today < $debut){
                                                            ?>
                                                            <span class="label label-default">En attente ...</span>
                                                            <?php
                                                        }elseif ($debut<$today AND $today<$fin){
                                                            ?>
                                                            <span class="label label-primary">En cours</span>
                                                            <?php
                                                        }elseif ($debut<$today AND $fin<$today){
                                                            ?>
                                                            <span class="label label-danger">Dépassé</span>
                                                            <?php
                                                        }
                                                        ?>

                                                    </td>

                                                    <td>
                                                        <a href="read_offre?offre=<?php echo $offre['offre_slug'] ?>">
                                                            <i class="fa fa-download"></i>
                                                        </a>

                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>


                                            </tbody>
                                        </table>
                                    </div>
                                    <ul class="pagination pull-right">
                                        <li><a href="offre?word=<?php echo $word; ?>&page=<?= $currentPage - 1 ?>"><i class="fa fa-chevron-left <?= ($currentPage == 1) ? "disabled" : "" ?>"></i></a></li>
                                        <?php for($page = 1; $page <= $pages; $page++): ?>
                                            <li><a href="offre?word=<?php echo $word; ?>&page=<?= $page ?>"><span class="<?= ($currentPage == $page) ? "current" : "" ?>"><?= $page ?></span></a></li>
                                        <?php endfor ?>
                                        <li><a href="offre?word=<?php echo $word; ?>&page=<?= $currentPage + 1 ?>"><i class="fa fa-chevron-right <?= ($currentPage == $pages) ? "disabled" : "" ?>"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>



            </div>





        </div>
    </div>
</div>