<body>

<div id="fb-root"></div>

<div class="page-wrapper">

    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 logo">
                    <a href="index"><img style="min-height: 60px; object-fit: cover;" src="image/cp2.png" alt=""></a>
                </div>
                <div class="col-md-9 col-sm-9 nav-wrapper">

                    <nav>


                                <ul class="sf-menu" id="menu">
                                    <li><a href="index" class="navv">Acceuil</a></li>
                                    <li><a href="article" class="navv">TFC/Memoire</a></li>
                                    <li><a href="courses" class="navv">Cours</a></li>
                                    <li><a href="item" class="navv">ITEM</a></li>
                                    <li><a href="offre" class="navv">Offre d'emploi</a></li>
                                    <li><a href="quiz" class="navv">Quiz</a></li>
                                    <li><a href="about-us" class="navv">A propos</a></li>
                                    <li><a href="login" style="float: right; border: 2px solid #ffc200; color: #ffc200;"><?php if (isset($_SESSION['visitor']) AND $_SESSION['visitor']!=''){
                                        echo $_SESSION['namevisitor'];
                                            }else{
                                            echo "Se connecter";
                                            } ?></a></li>
                                </ul>





                    </nav>

                </div>
            </div>
        </div>
    </header>