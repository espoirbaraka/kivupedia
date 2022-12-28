<div class="home-search">
    <div class="container">
        <div class="row">
            <div class="col-md-6 left">

                <div class="seach">
                    <form action="" method="post">
                        <input type="text" autocomplete="off" name="search_string" class="form-control"
                               placeholder="Recherchez un ouvrage">
                    </form>
                </div>

            </div>
            <div class="col-md-6 right">
                <form action="#" method="post">
                    <select name="category_slug" class="form-control" onchange="this.form.submit()">
                        <option value="">Recherchez par domaine</option>
                        <option value="health-and-fitness">Health and Fitness</option>
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
            $sql = "SELECT * FROM t_livre LEFT JOIN t_domaine
                                    ON t_livre.CodeDomaine=t_domaine.CodeDomaine
                                    LEFT JOIN t_langue
                                    ON t_livre.CodeLangue=t_langue.CodeLangue";
            $req = $app->fetchPrepared($sql);
            foreach ($req as $row){
                ?>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 prop-4-col">
                    <div class="single-room">
                        <div class="photo-col3" style="background-image:url(superadmin/thumbmnail/<?php echo $row['Image']; ?>);"></div>
                        <div class="single-room-text">
                            <h2><a href="../book/collaboration-and-co-teaching-strategies-for-english-learners.html"><?php echo $row['Titre']; ?></a></h2>
                            <p>Author: <?php echo $row['AuteurPrincipal']; ?></p>
                            <p class="detail"><a href="../book/collaboration-and-co-teaching-strategies-for-english-learners.html">Voir plus</a></p>
                            <p class="detail"><a href="https://goo.gl/nXC3ie" target="_blank">Buy Now</a></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pagination"><span class="disabled">&#171; previous</span><span class="current">1</span><a
                        href="index/2.html">2</a><a href="index/2.html">next &#187;</a></div>
            </div>
        </div>
    </div>
</div>