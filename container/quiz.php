<?php
if (isset($_GET['page']) && !empty($_GET['page'])) {
    $currentPage = (int)strip_tags($_GET['page']);
} else {
    $currentPage = 1;
}

$sql1 = "SELECT COUNT(*) AS nbre FROM t_offre";
$nbre = $app->fetch($sql1);
$nbArticles = $nbre['nbre'];
$parPage = 20;

$pages = ceil($nbArticles / $parPage);

$premier = ($currentPage * $parPage) - $parPage;


$sql3 = "SELECT * FROM t_offre WHERE Statut = 1 ORDER BY Created_on DESC LIMIT $premier,$parPage";
$req = $app->fetchPrepared($sql3);
?>
<div class="slide-single slide-single-page" style="background-image: url('');">
    <div class="overlay"></div>
    <div class="text text-page">
        <div class="this-item">
            <h2>QUIZ </h2>
        </div>
    </div>
</div>


<div class="single-channel">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i> Acceuil</a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-arrow-left"></i> <a
                        href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">Retour</a></li>
            </ol>
        </nav>


        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">









                    <div id="qq" class="container mt-sm-5 my-1">
                        <div class="question ml-sm-5 pl-sm-5 pt-2">
                            <div class="py-2 h5"><b>Q. which option best describes your job role?</b></div>
                            <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options">
                                <label class="options">Small Business Owner or Employee
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="options">Nonprofit Owner or Employee
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="options">Journalist or Activist
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="options">Other
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <!--                        <div class="d-flex align-items-center pt-3">-->
                        <!--                            <div id="prev">-->
                        <!--                                <button class="btn btn-primary">Previous</button>-->
                        <!--                            </div>-->
                        <!--                            <div class="ml-auto mr-sm-5">-->
                        <!--                                <button class="btn btn-success">Next</button>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                    </div>



                    <div id="qq" class="container mt-sm-5 my-1">
                        <div class="question ml-sm-5 pl-sm-5 pt-2">
                            <div class="py-2 h5"><b>Q. which option best describes your job role?</b></div>
                            <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options">
                                <label class="options">Small Business Owner or Employee
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="options">Nonprofit Owner or Employee
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="options">Journalist or Activist
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="options">Other
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
<!--                        <div class="d-flex align-items-center pt-3">-->
<!--                            <div id="prev">-->
<!--                                <button class="btn btn-primary">Previous</button>-->
<!--                            </div>-->
<!--                            <div class="ml-auto mr-sm-5">-->
<!--                                <button class="btn btn-success">Next</button>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>





                </div>


            </div>


        </div>

    </div>
</div>