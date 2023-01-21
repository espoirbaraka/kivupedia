<?php
$article = $_GET['course'];

$sql = "SELECT * FROM t_cours
        WHERE cours_slug = '$article'";
$req = $app->fetch($sql);
?>


<div class="single-channel">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home"><i class="fa fa-home"></i> Acceuil</a></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-arrow-left"></i> <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">Retour</a></li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="channel-text">
                            <div class="channel-video">

                            </div>
                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="channel-text">
                            <div class="channel-text">
                                <div class="book-table">
                                    <div class="book-table-row">
                                        <div class="book-table-cell">Designation du cours</div>
                                        <div class="book-table-cell"><span style="font-weight: bold;"><?php echo $req['Cours'] ?></span>
                                        </div>
                                    </div>

                                    <div class="book-table-row">
                                        <div class="book-table-cell">Auteur(s)</div>
                                        <div class="book-table-cell"><span style="font-weight: bold;"><?php if($req['Auteur']!=''){echo $req['Auteur'];}else{echo "<span style='color: red;'>-</span>";}  ?></span></div>
                                    </div>
                                    <div class="book-table-row">
                                        <div class="book-table-cell">Institution</div>
                                        <div class="book-table-cell"><span style="font-weight: bold;"><?php if($req['Institution']!=''){echo $req['Institution'];}else{echo "<span style='color: red;'>-</span>";}  ?></span></div>
                                    </div>


                                    <div class="book-table-row">
                                        <div class="book-table-cell">Nombre des <span class="error">"j'aime"</span></div>
                                        <div class="book-table-cell">
                                            <?php if($req['Liked']!=''){echo $req['Liked'];}else{echo "<span style='color: red;'>-</span>";}  ?>
                                        </div>
                                    </div>
                                    <div class="book-table-row">
                                        <div class="book-table-cell">Nombre des lectures</div>
                                        <div class="book-table-cell">
                                            <span style="font-weight: bold;"><?php if($req['Readed']!=''){echo $req['Readed'].' fois';}else{echo "<span style='color: red;'>-</span>";}  ?></span>
                                        </div>
                                    </div>

                                    <div class="book-table-row">
                                        <div class="book-table-cell">Lien de lecture</div>
                                        <div class="book-table-cell"><a href="read_course?course=<?php echo $req['cours_slug'] ?>"
                                            >https://kivupedia.net/read_course?course=<?php echo $req['cours_slug'] ?></a>
                                        </div>
                                    </div>

                                </div>
                                <div class="gap-small"></div>
                                <a class="btn btn-primary" href="read_course?course=<?php echo $req['cours_slug'] ?>"><i class="fa fa-book"></i> Lire</a>


                                <div class="gap-small"></div>
                                <h2>Partager ce cours</h2>
                                <div class="sharethis-inline-share-buttons"></div>
                                <div class="gap-small"></div>
                                <h2>Commentaires</h2>
                                <!-- Facebook Comment Main Code (got from facebook website) -->
                                <div class="fb-comments"
                                     data-href="https://phpscriptpoint.com/cc/ebook/book/wanderlust-a-modern-yogi-s-guide-to-discovering-your-best-self"
                                     data-numposts="5"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">


                <div style="background-color: #ddd;">
                    <nav aria-label="breadcrumb" style="text-align: center">
                        Publicités
                    </nav>
                    <div class="sidebar-adv" style="padding: 11px 3px 3px 3px;">
                        <a href="#"><img src="image/cp.png" alt="advertisement"></a>

                    </div>
                    <div class="sidebar-adv" style="padding: 3px;">
                        <img src="image/isig.jpg" alt="advertisement">

                    </div>
                </div>



            </div>
        </div>
    </div>
</div>