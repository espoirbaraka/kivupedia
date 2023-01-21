<?php
$option = $_GET['slug'];
if (isset($_GET['page']) && !empty($_GET['page'])) {
    $currentPage = (int)strip_tags($_GET['page']);
} else {
    $currentPage = 1;
}

$sql1 = "SELECT COUNT(*) AS nbre FROM t_item LEFT JOIN t_option
         ON t_item.CodeOption=t_option.CodeOption WHERE option_slug='$option'";
$nbre = $app->fetch($sql1);
$nbArticles = $nbre['nbre'];
$parPage = 20;

$pages = ceil($nbArticles / $parPage);

$premier = ($currentPage * $parPage) - $parPage;


$sql = "SELECT * FROM t_item LEFT JOIN t_option
         ON t_item.CodeOption=t_option.CodeOption
         LEFT JOIN t_annee_academique
         ON t_item.CodeAnnee=t_annee_academique.CodeAnnee
         LEFT JOIN t_session_exetat
         ON t_item.CodeSession=t_session_exetat.CodeSession
         WHERE option_slug='$option'
         ORDER BY Annee AND t_session_exetat.Session DESC LIMIT $premier,$parPage";
$req = $app->fetchPrepared($sql);


$sql2 = "SELECT * FROM t_option WHERE option_slug='$option'";
$facul = $app->fetch($sql2);

?>
<div class="slide-single slide-single-page">
    <div class="overlay"></div>
    <div class="text text-page">
        <div class="this-item">
            <h2>ITEMS : <?php echo $facul['Designation'] ?> </h2>
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



                                        <a href="detail_item?item=<?php echo $row['CodeItem']; ?>" class="avatar avatar-lg">
                                            <span class="">
                                                <i
                                                        <?php
                                                        if($row['TypeFichier']=='pdf'){
                                                            echo "class='fa fa-file-pdf-o fa-5x' style='color: #B70C0CFF'";
                                                        }elseif ($row['TypeFichier']=='docx'){
                                                            echo "class='fa fa-file-text fa-5x' style='color: #0861A1FF'";
                                                        }else{
                                                            echo "class='fa fa-file-image-o fa-5x' style='color: #FCB418FF'";
                                                        }
                                                        ?>
                                                        ></i>
                                            </span>
                                        </a>



                                    </div>



                                </div>
                            </div>
                            <h6><?php echo $row['Annee'] ?> : <?php echo $row['Session'] ?></h6>
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
                    <a href="item-by-option?slug=<?= $option ?>&page=<?= $currentPage - 1 ?>"><span class="<?= ($currentPage == 1) ? "disabled" : "" ?>">&#171; précédent</span></a>

                    <?php for($page = 1; $page <= $pages; $page++): ?>
                        <a href="item-by-option?slug=<?= $option ?>&page=<?= $page ?>"><span class="<?= ($currentPage == $page) ? "current" : "" ?>"><?= $page ?></span></a>
                    <?php endfor ?>

                    <a href="item-by-option?slug=<?= $option ?>&page=<?= $currentPage + 1 ?>"><span class="<?= ($currentPage == $pages) ? "disabled" : "" ?>">suivant &#187;</span></a>

                </div>
            </div>
        </div>
    </div>
</div>