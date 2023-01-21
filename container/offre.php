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


                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-box clearfix">
                                    <div class="table-responsive">
                                        <table class="table user-list">
                                            <thead>
                                            <tr>
                                                <th><span>User</span></th>
                                                <th><span>Created</span></th>
                                                <th class="text-center"><span>Status</span></th>
                                                <th><span>Email</span></th>
                                                <th>&nbsp;</th>
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
                                                        <span class="user-subhead">Admin</span>
                                                    </td>
                                                    <td>
                                                        <?php echo $offre['Poste'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $offre['NombrePoste'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $app->dateconv($offre['Created_on']) ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="label label-default">Inactive</span>
                                                    </td>
                                                    <td>
                                                        <a href="#">mila@kunis.com</a>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        <a href="#" class="table-link">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
									</span>
                                                        </a>
                                                        <a href="#" class="table-link">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
									</span>
                                                        </a>
                                                        <a href="#" class="table-link danger">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
									</span>
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