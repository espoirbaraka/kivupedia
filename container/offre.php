<?php
if (isset($_GET['page']) && !empty($_GET['page'])) {
    $currentPage = (int)strip_tags($_GET['page']);
} else {
    $currentPage = 1;
}

$sql1 = "SELECT COUNT(*) AS nbre FROM t_option";
$nbre = $app->fetch($sql1);
$nbArticles = $nbre['nbre'];
$parPage = 20;

$pages = ceil($nbArticles / $parPage);

$premier = ($currentPage * $parPage) - $parPage;


$sql3 = "SELECT * FROM t_option ORDER BY Designation LIMIT $premier,$parPage";
$req = $app->fetchPrepared($sql3);
?>
<div class="slide-single slide-single-page">
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
                <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-arrow-left"></i> <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">Retour</a></li>
            </ol>
        </nav>


        <div class="home-search">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 left">

                        <div class="seach">
                            <form action="search-option?word=" method="get">
                                <input type="text" autocomplete="off" name="word" class="form-control"
                                       placeholder="Recherchez une option">
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

                        <div class="card mb-3">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            <img class="card-img-bottom" src="..." alt="Card image cap">
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
                    <a href="item?page=<?= $currentPage - 1 ?>"><span class="<?= ($currentPage == 1) ? "disabled" : "" ?>">&#171; précédent</span></a>

                    <?php for($page = 1; $page <= $pages; $page++): ?>
                        <a href="item?page=<?= $page ?>"><span class="<?= ($currentPage == $page) ? "current" : "" ?>"><?= $page ?></span></a>
                    <?php endfor ?>

                    <a href="item?page=<?= $currentPage + 1 ?>"><span class="<?= ($currentPage == $pages) ? "disabled" : "" ?>">suivant &#187;</span></a>

                </div>
            </div>
        </div>
    </div>
</div>