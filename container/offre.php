<?php
if (isset($_GET['page']) && !empty($_GET['page'])) {
    $currentPage = (int)strip_tags($_GET['page']);
} else {
    $currentPage = 1;
}

$sql1 = "SELECT COUNT(*) AS nbre FROM t_offre";
$nbre = $app->fetch($sql1);
$nbArticles = $nbre['nbre'];
$parPage = 30;

$pages = ceil($nbArticles / $parPage);

$premier = ($currentPage * $parPage) - $parPage;


$sql3 = "SELECT * FROM t_offre WHERE Statut = 1 ORDER BY Created_on DESC LIMIT $premier,$parPage";
$req = $app->fetchPrepared($sql3);
?>
<div class="slide-single slide-single-page" style="background-image: url('');">
    <div class="overlay"></div>
    <div class="text text-page">
        <div class="this-item">
            <h2>OFFRES D'EMPLOIS </h2>
        </div>
    </div>
</div>


<div class="single-channel">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home"><i class="fa fa-home"></i> Acceuil</a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-arrow-left"></i> <a
                            href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">Retour</a></li>
            </ol>
        </nav>


        <div class="home-search">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 left">

                        <div class="seach">
                            <form action="search-option?word=" method="get">
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
                                                        <a href="#" class="user-link"><?php echo $offre['Entreprise'] ?></a>
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
                                                        <a href="#">
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
                                        <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
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