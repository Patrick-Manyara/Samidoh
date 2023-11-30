<!--====== Start Footer ======-->
<footer class="footer-area" style="background-color: #2ca4ac;">
    <div class="container">

        <div class="footer-copyright">
            <div class="row" style="padding: 40px 0px;">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <p style="color:white;text-align: center;">&copy; <?= date('Y') ?>. All rights reserved. Powered by Vesen Computing</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer><!--====== End Footer ======-->
<!--====== back-to-top ======-->
<a href="#" class="back-to-top"><i class="fa-solid fa-angle-up"></i></a>
<!--====== Jquery js ======-->
<script src="assets/vendor/jquery-3.6.0.min.js"></script>
<!--====== Bootstrap js ======-->
<script src="assets/vendor/popper/popper.min.js"></script>
<!--====== Bootstrap js ======-->
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--====== Slick js ======-->
<script src="assets/vendor/slick/slick.min.js"></script>
<!--====== Magnific js ======-->
<script src="assets/vendor/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<!--====== Isotope js ======-->
<script src="assets/vendor/isotope.min.js"></script>
<!--====== Imagesloaded js ======-->
<script src="assets/vendor/imagesloaded.min.js"></script>
<!--====== Counterup js ======-->
<script src="assets/vendor/jquery.counterup.min.js"></script>
<!--====== Waypoints js ======-->
<script src="assets/vendor/jquery.waypoints.js"></script>
<!--====== Nice-select js ======-->
<script src="assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>
<!--====== WOW js ======-->
<script src="assets/vendor/wow.min.js"></script>
<!--====== Parallax js ======-->
<script src="assets/vendor/parallax.min.js"></script>
<!--====== Main js ======-->
<script src="assets/js/theme.js"></script>





<style>
    .HeroImage {
        height: 100%;
        width: 100%;
        object-fit: cover;
        z-index: 1000000;
    }

    .HeroSpan {
        height: 750px;
        width: 621px;
    }

    .StoryDiv {
        padding: 10px;
    }

    .StoryDiv p {
        color: #000;
        margin-top: 10px;
    }

    .IconImg {
        width: 80px;
    }

    .service-item {
        height: 36em;
    }

    .KidsImg {
        height: 300px;
        width: 600px;
        object-fit: cover;
    }

    .SamImg,
    .HiddenOnDesktop {
        display: none;
    }

    .ListFooter li {
        color: white;
        font-size: 14px;
    }

    .MySpan {
        color: #ec4c34;
    }

    .MyTitle {
        color: #2ca4ac;
    }

    @media screen and (max-width:600px) {
        .service-item {
            height: auto;
        }

        .SamImg {
            display: block;
            height: 15em;
            border-radius: 2em;
            width: 100%;
            object-fit: cover;
        }

        .HiddenOnDesktop {
            display: block;
        }

        .MoveBelow{
            padding: 100px 0px;
        }

        .HiddenOnMob{
            display:none;
        }
    }
</style>





<style>
    /* The actual timeline (the vertical ruler) */
    .timeline {
        position: relative;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* The actual timeline (the vertical ruler) */
    .timeline::after {
        content: '';
        position: absolute;
        width: 6px;
        background-color: #2ca4ac;
        top: 0;
        bottom: 0;
        left: 50%;
        margin-left: -3px;
    }

    /* Container around content */
    .MyContainer {
        padding: 10px 40px;
        position: relative;
        background-color: inherit;
        width: 50%;
    }

    /* The circles on the timeline */
    .MyContainer::after {
        content: '';
        position: absolute;
        width: 25px;
        height: 25px;
        right: -13px;
        background-color: white;
        border: 4px solid #ec4c34;
        top: 15px;
        border-radius: 50%;
        z-index: 1;
    }

    /* Place the MyContainer to the left */
    .left {
        left: 0;
    }

    /* Place the MyContainer to the right */
    .right {
        left: 50%;
    }

    /* Add arrows to the left MyContainer (pointing right) */
    .left::before {
        content: " ";
        height: 0;
        position: absolute;
        top: 22px;
        width: 0;
        z-index: 1;
        right: 30px;
        border: medium solid white;
        border-width: 10px 0 10px 10px;
        border-color: transparent transparent transparent white;
    }

    /* Add arrows to the right MyContainer (pointing left) */
    .right::before {
        content: " ";
        height: 0;
        position: absolute;
        top: 22px;
        width: 0;
        z-index: 1;
        left: 30px;
        border: medium solid white;
        border-width: 10px 10px 10px 0;
        border-color: transparent white transparent transparent;
    }

    /* Fix the circle for MyContainers on the right side */
    .right::after {
        left: -16px;
    }

    /* The actual content */
    .content {
        padding: 20px 30px;
        background-color: white;
        position: relative;
        border-radius: 6px;
    }

    /* Media queries - Responsive timeline on screens less than 600px wide */
    @media screen and (max-width: 600px) {

        /* Place the timelime to the left */
        .timeline::after {
            left: 31px;
        }

        /* Full-width MyContainers */
        .MyContainer {
            width: 100%;
            padding-left: 70px;
            padding-right: 25px;
        }

        /* Make sure that all arrows are pointing leftwards */
        .MyContainer::before {
            left: 60px;
            border: medium solid white;
            border-width: 10px 10px 10px 0;
            border-color: transparent white transparent transparent;
        }

        /* Make sure all circles are at the same spot */
        .left::after,
        .right::after {
            left: 15px;
        }

        /* Make all right containers behave like the left ones */
        .right {
            left: 0%;
        }
    }
</style>


</body>

</html>