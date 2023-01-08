<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="item">
                    <ul>
                        <li><a href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="http://www.twitter.com/"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 address">
                <p>
                    Email: <a href="mailto:hortancekitobi11@gmail.com"
                              class="__cf_email__">hortancekitobi11@gmail.com</a><br>
                    Téléphone: <a href="tel:+243 840 346 332">+243 840 346 332</a>
                </p>
            </div>
            <div class="col-md-12 copyright">
                <p>
                    Copyright © 2022. Tout droit reservé </p>
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

</html>