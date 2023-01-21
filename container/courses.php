<?php
if (isset($_GET['page']) && !empty($_GET['page'])) {
    $currentPage = (int)strip_tags($_GET['page']);
} else {
    $currentPage = 1;
}

$sql1 = "SELECT COUNT(*) AS nbre FROM t_cours WHERE Statut=1";
$nbre = $app->fetch($sql1);
$nbArticles = $nbre['nbre'];
$parPage = 20;

$pages = ceil($nbArticles / $parPage);

$premier = ($currentPage * $parPage) - $parPage;


$sql = "SELECT * FROM t_cours
         WHERE Statut=1
         ORDER BY t_cours.Created_On DESC LIMIT $premier,$parPage";
$req = $app->fetchPrepared($sql);


?>
<div class="slide-single slide-single-page">
    <div class="overlay"></div>
    <div class="text text-page">
        <div class="this-item">
            <h2>Cours </h2>
        </div>
    </div>
</div>



<div class="single-channel">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i> Acceuil</a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-arrow-left"></i> <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">Retour</a></li>
            </ol>
        </nav>


        <div class="home-search">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 left">

                        <div class="seach">
                            <form action="search-courses?word=" method="get">
                                <input type="text" autocomplete="off" name="word" class="form-control"
                                       placeholder="Recherchez un cours">
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



                                        <a href="detail_course?course=<?php echo $row['cours_slug']; ?>" class="avatar avatar-lg">
                                            <span class="">
                                                <i class="fa fa-file-pdf-o fa-5x" style="color: #ce4152;"></i>
                                            </span>
                                        </a>



                                    </div>



                                </div>
                            </div>
                            <h6><?php echo $row['Cours'] ?> : <?php echo $row['Institution'] ?></h6>
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