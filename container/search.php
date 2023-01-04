<?php
$word = $_GET['word'];
$search = '%'.$word.'%';

if (isset($_GET['page']) && !empty($_GET['page'])) {
    $currentPage = (int)strip_tags($_GET['page']);
} else {
    $currentPage = 1;
}

$sql1 = "SELECT COUNT(*) AS nbre FROM t_livre WHERE Statut=1 AND Titre LIKE '%$word%'";
$nbre = $app->fetch($sql1);
$nbArticles = $nbre['nbre'];
$parPage = 15;

$pages = ceil($nbArticles / $parPage);

$premier = ($currentPage * $parPage) - $parPage;


$sql = "SELECT * FROM t_livre LEFT JOIN t_domaine
                                    ON t_livre.CodeDomaine=t_domaine.CodeDomaine
                                    LEFT JOIN t_sous_domaine
                                    ON t_livre.CodeSousDomaine=t_sous_domaine.CodeSousDomaine
                                    LEFT JOIN t_langue
                                    ON t_livre.CodeLangue=t_langue.CodeLangue
                                    WHERE Statut=1 AND Titre LIKE '%$word%'
                                    ORDER BY Readed DESC LIMIT $premier,$parPage";
$req = $app->fetchPrepared($sql);
?>
<div class="slide-single slide-single-page">
    <div class="overlay"></div>
    <div class="text text-page">
        <div class="this-item">
            <h2><?php echo $nbArticles; ?> Resultats sur : <?php echo $word; ?> ...</h2>
        </div>
    </div>
</div>

<div class="videos">
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="row">

                    <?php
                    foreach ($req as $row){
                        ?>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 prop-3-col">
                            <div class="single-room">
                                <div class="photo-col3"
                                     style="background-image:url(superadmin/thumbmnail/<?php echo $row['Image']; ?>); margin: 5px 5px 5px 0px;"></div>
                                <div class="single-room-text">
                                    <h2 style="font-weight: bold;"><a href=""><?php echo $row['Titre']; ?></a></h2>
                                    <p>Auteur: <span style="font-weight: bold;"><?php echo $row['AuteurPrincipal']; ?></span>
                                    </p>
                                    <p>Domaine: <span style="font-weight: bold; color: red;">
                                    <?php
                                    echo $row['Domaine'];
                                    if (isset($row['Sous_domaine'])) {
                                        echo " (" . $row['Sous_domaine'] . ")";
                                    }
                                    ?>
                                </span></p>
                                    <p class="detail"><a
                                                href="../book/collaboration-and-co-teaching-strategies-for-english-learners.html">Lire</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="pagination">
                            <a href="search?word=<?php echo $word; ?>&page=<?= $currentPage - 1 ?>"><span class="<?= ($currentPage == 1) ? "disabled" : "" ?>">&#171; précédent</span></a>

                            <?php for($page = 1; $page <= $pages; $page++): ?>
                                <a href="search?word=<?php echo $word; ?>&page=<?= $page ?>"><span class="<?= ($currentPage == $page) ? "current" : "" ?>"><?= $page ?></span></a>
                            <?php endfor ?>

                            <a href="search?word=<?php echo $word; ?>&page=<?= $currentPage + 1 ?>"><span class="<?= ($currentPage == $pages) ? "disabled" : "" ?>">suivant &#187;</span></a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="channel-categories">
                    <h2>Domaine</h2>
                    <ul>
                        <?php
                        $sql3 = "SELECT * FROM t_domaine";
                        $req = $app->fetchPrepared($sql3);
                        foreach ($req as $row){
                            ?>
                            <li><a href="search_by_domaine?domaine=<?php echo $row['CodeDomaine'] ?>"><?php echo $row['Domaine'] ?></a></li>
                        <?php
                        }
                        ?>


                    </ul>
                </div>

                <div class="sidebar-adv">
                    <a href="#"><img src="image/cp.png" alt="advertisement"></a>

                </div>
                <div class="sidebar-adv">
                    <img src="image/isig.jpg" alt="advertisement">

                </div>

            </div>

        </div>

    </div>
</div>