<?php
$book = $_GET['book'];

$sql = "SELECT * FROM t_livre LEFT JOIN t_domaine
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
                                        <div class="book-table-cell">Author</div>
                                        <div class="book-table-cell">Jeff Krasno, Sarah Herrington, Nicole
                                            Lindstrom
                                        </div>
                                    </div>
                                    <div class="book-table-row">
                                        <div class="book-table-cell">Publisher</div>
                                        <div class="book-table-cell">Publisher 3</div>
                                    </div>
                                    <div class="book-table-row">
                                        <div class="book-table-cell">Publication Year</div>
                                        <div class="book-table-cell"></div>
                                    </div>
                                    <div class="book-table-row">
                                        <div class="book-table-cell">ISBN</div>
                                        <div class="book-table-cell"></div>
                                    </div>
                                    <div class="book-table-row">
                                        <div class="book-table-cell">Number of Pages</div>
                                        <div class="book-table-cell">0</div>
                                    </div>
                                    <div class="book-table-row">
                                        <div class="book-table-cell">Price</div>
                                        <div class="book-table-cell"></div>
                                    </div>
                                    <div class="book-table-row">
                                        <div class="book-table-cell">Description</div>
                                        <div class="book-table-cell">
                                            <div class="error">No Description is Found.</div>
                                        </div>
                                    </div>
                                    <div class="book-table-row">
                                        <div class="book-table-cell">PDF</div>
                                        <div class="book-table-cell">
                                            No PDF Found.
                                        </div>
                                    </div>
                                    <div class="book-table-row">
                                        <div class="book-table-cell">Buy URL</div>
                                        <div class="book-table-cell"><a href="https://goo.gl/MdBEnm"
                                                                        target="_blank">https://goo.gl/MdBEnm</a>
                                        </div>
                                    </div>
                                    <div class="book-table-row">
                                        <div class="book-table-cell">Category</div>
                                        <div class="book-table-cell">Health and Fitness</div>
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