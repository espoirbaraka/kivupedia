<?php
$faculte = $_GET['slug'];
if (isset($_GET['page']) && !empty($_GET['page'])) {
    $currentPage = (int)strip_tags($_GET['page']);
} else {
    $currentPage = 1;
}

$sql1 = "SELECT COUNT(*) AS nbre FROM t_memoire LEFT JOIN t_faculte
         ON t_memoire.CodeFaculte=t_faculte.CodeFaculte WHERE Statut=1 AND faculte_slug='$faculte'";
$nbre = $app->fetch($sql1);
$nbArticles = $nbre['nbre'];
$parPage = 10;

$pages = ceil($nbArticles / $parPage);

$premier = ($currentPage * $parPage) - $parPage;


$sql = "SELECT * FROM t_memoire LEFT JOIN t_annee_academique
         ON t_memoire.CodeAnnee=t_annee_academique.CodeAnnee
         LEFT JOIN t_categorie_memoire
         ON t_memoire.CodeCategorie=t_categorie_memoire.CodeCategorie
         LEFT JOIN t_faculte
         ON t_memoire.CodeFaculte=t_faculte.CodeFaculte
         WHERE Statut=1 AND faculte_slug='$faculte'
         ORDER BY t_memoire.Created_on DESC LIMIT $premier,$parPage";
$req = $app->fetchPrepared($sql);


$sql2 = "SELECT * FROM t_faculte WHERE faculte_slug='$faculte'";
$facul = $app->fetch($sql2);

?>
<div class="slide-single slide-single-page">
    <div class="overlay"></div>
    <div class="text text-page">
        <div class="this-item">
            <h2>Articles : <?php echo $facul['Faculte'] ?> </h2>
        </div>
    </div>
</div>



<div class="single-channel">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home"><i class="fa fa-home"></i> Acceuil</a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-arrow-left"></i> <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">Retour</a></li>
            </ol>
        </nav>


        <div class="home-search">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 left">

                        <div class="seach">
                            <form action="search-faculte?word=" method="get">
                                <input type="text" autocomplete="off" name="word" class="form-control"
                                       placeholder="Recherchez une faculté">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <?php
                    foreach ($req as $row){
                        ?>

                        <div class="col-md-3 text-center">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="dropdown" style="padding: 5px;">


                                        
                                        <a href="detail_article?article=<?php echo $row['article_slug']; ?>" class="avatar avatar-lg">
                                            <span class="">
                                                <i class="fa fa-file-pdf-o fa-5x"></i>
                                            </span>
                                        </a>



                                    </div>



                                </div>
                            </div>
                            <h6><?php echo $row['Sujet'] ?></h6>
                        </div>
                        <?php
                    }
                    ?>
                </div>











            </div>





        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="pagination">
                    <a href="article-by-faculte?slug=<?= $faculte ?>&page=<?= $currentPage - 1 ?>"><span class="<?= ($currentPage == 1) ? "disabled" : "" ?>">&#171; précédent</span></a>

                    <?php for($page = 1; $page <= $pages; $page++): ?>
                        <a href="article-by-faculte?slug=<?= $faculte ?>&page=<?= $page ?>"><span class="<?= ($currentPage == $page) ? "current" : "" ?>"><?= $page ?></span></a>
                    <?php endfor ?>

                    <a href="article-by-faculte?slug=<?= $faculte ?>&page=<?= $currentPage + 1 ?>"><span class="<?= ($currentPage == $pages) ? "disabled" : "" ?>">suivant &#187;</span></a>

                </div>
            </div>
        </div>
    </div>
</div>