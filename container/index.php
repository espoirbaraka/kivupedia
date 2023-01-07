<?php
if (isset($_GET['page']) && !empty($_GET['page'])) {
    $currentPage = (int)strip_tags($_GET['page']);
} else {
    $currentPage = 1;
}

$sql1 = "SELECT COUNT(*) AS nbre FROM t_livre WHERE Statut=1";
$nbre = $app->fetch($sql1);
$nbArticles = $nbre['nbre'];
$parPage = 20;

$pages = ceil($nbArticles / $parPage);

$premier = ($currentPage * $parPage) - $parPage;


$sql = "SELECT * FROM t_livre LEFT JOIN t_domaine
                                    ON t_livre.CodeDomaine=t_domaine.CodeDomaine
                                    LEFT JOIN t_sous_domaine
                                    ON t_livre.CodeSousDomaine=t_sous_domaine.CodeSousDomaine
                                    LEFT JOIN t_langue
                                    ON t_livre.CodeLangue=t_langue.CodeLangue
                                    WHERE Statut=1
                                    ORDER BY Readed DESC LIMIT $premier,$parPage";
$req = $app->fetchPrepared($sql);
?>
<div class="home-search">
    <div class="container">
        <div class="row">
            <div class="col-md-6 left">

                <div class="seach">
                    <form action="search.php?word=" method="get">
                        <input type="text" autocomplete="off" name="word" class="form-control"
                               placeholder="Recherchez un ouvrage">
                    </form>
                </div>

            </div>
            <div class="col-md-6 right">
                <form action="book_domaine?domaine=" method="get">
                    <select name="domaine" class="form-control" onchange="this.form.submit()">
                        <option value="">Recherchez par domaine</option>
                        <?php
                        $sql4 = "SELECT * FROM t_domaine";
                        $req1 = $app->fetchPrepared($sql4);
                        foreach ($req1 as $row){
                            $dom = $row['Domaine'];
                            ?>
                            <option value="<?php echo $app->slugify($dom)  ?>"><?php echo $row['Domaine'] ?></option>
                            <?php
                        }
                        ?>

                    </select>
                </form>

            </div>
        </div>
    </div>
</div>

<div class="videos">
    <div class="container">
        <div class="row">
            <?php
            foreach ($req as $row) {
                ?>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 prop-4-col">
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
                                        href="detail_book?id=<?php echo $row['book_slug'] ?>">Lire</a>
                            </p>
                            <p class="detail"><a
                                        href="detail_book?book=<?php echo $row['book_slug'] ?>">Voir les details</a>
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
                    <a href="index?page=<?= $currentPage - 1 ?>"><span class="<?= ($currentPage == 1) ? "disabled" : "" ?>">&#171; précédent</span></a>

                    <?php for($page = 1; $page <= $pages; $page++): ?>
                        <a href="index?page=<?= $page ?>"><span class="<?= ($currentPage == $page) ? "current" : "" ?>"><?= $page ?></span></a>
                    <?php endfor ?>

                    <a href="index?page=<?= $currentPage + 1 ?>"><span class="<?= ($currentPage == $pages) ? "disabled" : "" ?>">suivant &#187;</span></a>

                </div>
            </div>
        </div>
    </div>
</div>