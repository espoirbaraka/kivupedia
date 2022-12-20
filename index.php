<?php
include("includes/head.php");

include("includes/header.php");
?>

<!-- Header End -->

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
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 prop-4-col">
                <div class="single-room">
                    <div class="photo-col3" style="background-image:url(assets/uploads/book-12.jpg);"></div>
                    <div class="single-room-text">
                        <h2><a href="book/collaboration-and-co-teaching-strategies-for-english-learners.html">Collaboration
                                and Co-Teaching: Strategies for English Learners</a></h2>
                        <p>Author: Andrea Honigsfeld</p>
                        <p class="detail"><a
                                    href="book/collaboration-and-co-teaching-strategies-for-english-learners.html">See
                                Details</a></p>
                        <p class="detail"><a href="https://goo.gl/nXC3ie" target="_blank">Buy Now</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pagination"><span class="disabled">&#171; previous</span><span class="current">1</span><a
                            href="index/2.html">2</a><a href="index/2.html">next &#187;</a></div>
            </div>
        </div>
    </div>
</div>

<!-- Footer Start -->
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="item">
                    <ul>
                        <li><a href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="http://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="http://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="http://www.flickr.com/"><i class="fa fa-flickr"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 address">
                <p>
                    Address: ABC Steet, NewYork.<br>
                    Email: info@yourdomain.com<br>
                    Phone: 123-456-7878<br>
                    Fax: 123-456-7890<br>
                </p>
            </div>
            <div class="col-md-12 copyright">
                <p>
                    Copyright © 2020. All Rights Reserved. </p>
            </div>
        </div>
    </div>
</section>
<!-- Footer End -->

<a href="#" class="scrollup">
    <i class="fa fa-angle-up"></i>
</a>

</div>


<!-- Scripts -->
<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-datepicker.min.js"></script>
<script src="assets/js/hoverIntent.js"></script>
<script src="assets/js/superfish.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/owl.animate.js"></script>
<script src="assets/js/jquery.bxslider.min.js"></script>
<script src="assets/js/jquery.mixitup.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/custom.js"></script>

<script type="text/javascript">
    getresult("getresult.html");

    function getresult(url) {
        $.ajax({
            url: url,
            type: "GET",
            data: {rowcount: $("#rowcount").val(), "pagination_setting": $("#pagination-setting").val()},
            beforeSend: function () {
                $("#overlay").show();
            },
            success: function (data) {
                $("#pagination-result").html(data);
                setInterval(function () {
                    $("#overlay").hide();
                }, 500);
            },
            error: function () {
            }
        });
    }
</script>


<script>
    window.cookieconsent.initialise({
        "palette": {
            "popup": {
                "background": "#eb6c44",
                "text": "#ffffff"
            },
            "button": {
                "background": "#f5d948"
            }
        },
        "showLink": false,
        "content": {
            "dismiss": "Accept"
        }
    });
</script>

</body>

<!-- Mirrored from phpscriptpoint.com/cc/ebook/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Aug 2022 09:28:56 GMT -->
</html>