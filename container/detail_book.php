<?php
$book = $_GET['book'];

$sql = "SELECT * FROM t_livre 
                    LEFT JOIN t_domaine
                    ON t_livre.CodeDomaine=t_domaine.CodeDomaine
                    LEFT JOIN t_sous_domaine
                    ON t_livre.CodeSousDomaine=t_sous_domaine.CodeSousDomaine
                    LEFT JOIN t_langue
                    ON t_livre.CodeLangue=t_langue.CodeLangue
                    WHERE book_slug = '$book'";
$req = $app->fetch($sql);
?>


<div class="single-channel">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="channel-text">
                            <div class="channel-video">
                                <img src="superadmin/thumbmnail/<?php echo $req['Image']; ?>" alt="" style="img-responsive; margin: 5px 5px 5px 0px;">
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="channel-text">
                            <div class="channel-text">
                                <div class="book-table">
                                    <div class="book-table-row">
                                        <div class="book-table-cell">Titre</div>
                                        <div class="book-table-cell"><?php echo $req['Titre'] ?>
                                        </div>
                                    </div>
                                    <div class="book-table-row">
                                        <div class="book-table-cell">Sous-titre</div>
                                        <div class="book-table-cell"><?php if($req['SousTitre']!=''){echo $req['SousTitre'];}else{echo "<span style='color: red;'>-</span>";}  ?>
                                        </div>
                                    </div>
                                    <div class="book-table-row">
                                        <div class="book-table-cell">Auteur(s)</div>
                                        <div class="book-table-cell"><?php if($req['AuteurPrincipal']!=''){echo $req['AuteurPrincipal'];}else{echo "<span style='color: red;'>-</span>";}  ?></div>
                                    </div>
                                    <div class="book-table-row">
                                        <div class="book-table-cell">Domaine</div>
                                        <div class="book-table-cell"><?php if($req['Domaine']!=''){echo $req['Domaine'];}else{echo "<span style='color: red;'>-</span>";}  ?></div>
                                    </div>
                                    <div class="book-table-row">
                                        <div class="book-table-cell">Sous-domaine</div>
                                        <div class="book-table-cell"><?php if($req['Sous_domaine']!=''){echo $req['Sous_domaine'];}else{echo "<span style='color: red;'>-</span>";}  ?></div>
                                    </div>
                                    <div class="book-table-row">
                                        <div class="book-table-cell">Langue</div>
                                        <div class="book-table-cell"><?php if($req['Langue']!=''){echo $req['Langue'];}else{echo "<span style='color: red;'>-</span>";}  ?></div>
                                    </div>
                                    <div class="book-table-row">
                                        <div class="book-table-cell">Nombre des pages</div>
                                        <div class="book-table-cell"><?php if($req['NombrePage']!=''){echo $req['NombrePage'];}else{echo "<span style='color: red;'>-</span>";}  ?></div>
                                    </div>
                                    <div class="book-table-row">
                                        <div class="book-table-cell">Editeur</div>
                                        <div class="book-table-cell"><?php if($req['NomEditeur']!=''){echo $req['NomEditeur'];}else{echo "<span style='color: red;'>-</span>";}  ?></div>
                                    </div>
                                    <div class="book-table-row">
                                        <div class="book-table-cell">Lieu d'édition</div>
                                        <div class="book-table-cell">
                                            <?php if($req['LieuEdition']!=''){echo $req['LieuEdition'];}else{echo "<span style='color: red;'>-</span>";}  ?>
                                        </div>
                                    </div>
                                    <div class="book-table-row">
                                        <div class="book-table-cell">ISBN</div>
                                        <div class="book-table-cell">
                                            <?php if($req['ISBN']!=''){echo $req['ISBN'];}else{echo "<span style='color: red;'>-</span>";}  ?>
                                        </div>
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
                                            <?php if($req['Readed']!=''){echo $req['Readed'];}else{echo "<span style='color: red;'>-</span>";}  ?>
                                        </div>
                                    </div>

                                    <div class="book-table-row">
                                        <div class="book-table-cell">Lien de lecture</div>
                                        <div class="book-table-cell"><a href="read?book=<?php echo $req['book_slug'] ?>"
                                                                        target="_blank">https://congopedia.net/read?book=<?php echo $req['book_slug'] ?></a>
                                        </div>
                                    </div>

                                </div>
                                <div class="gap-small"></div>
                                <a class="btn btn-primary" href="detail_book?id=<?php echo $row['CodeLivre'] ?>"><i class="fa fa-book"></i> Lire</a>


                                <div class="gap-small"></div>
                                <h2>Partager ce livre</h2>
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