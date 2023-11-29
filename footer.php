<!--====== Start Footer ======-->
<footer class="footer-area">
    <div class="container">

        <div class="footer-copyright">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright-text">
                        <p>&copy; <?= date('Y') ?>. All rights reserved. Powered by Vesen Computing</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-nav float-lg-right">
                        <ul>

                            <li class="ListFooter"><a href="index">Home</a></li>
                            <li><a href="<?= $page == 'home' ? '' : 'index' ?>#about">About</a></li>
                            <li><a href="<?= $page == 'home' ? '' : 'index' ?>#objectives">Objectives</a></li>
                            <li><a href="<?= $page == 'home' ? '' : 'index' ?>#donate">Donate</a></li>
                            <li><a href="<?= $page == 'home' ? '' : 'index' ?>#contact">Contact Us</a></li>
                            <li><a href="https://samidoh.org/shop/shop/">Store</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!--====== End Footer ======-->
<!--====== back-to-top ======-->
<a href="#" class="back-to-top"><i class="far fa-angle-up"></i></a>
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

<script>
    console.log("Script executed!");
    document.addEventListener('DOMContentLoaded', function() {
        const images = [
            "assets/images/sam/sami6.jpeg",
            "assets/images/sam/sam2.jpg",
            "assets/images/sam/sami2.jpeg",
            // Add more image paths as needed
        ];

        const imgElement = document.querySelector('#heroImg');
        let currentIndex = 0;

        function fadeIn() {
            imgElement.style.opacity = parseFloat(imgElement.style.opacity) + 0.01;

            if (parseFloat(imgElement.style.opacity) < 1) {
                requestAnimationFrame(fadeIn);
            } else {
                setTimeout(showNextImage, 5000); // Change the delay (in milliseconds) as needed
            }
        }

        function showNextImage() {
            imgElement.style.opacity = 0;

            setTimeout(function() {
                imgElement.src = images[currentIndex];
                fadeIn();

                currentIndex = (currentIndex + 1) % images.length;
            }, 1000); // Adjust the delay to match the fadeIn duration
        }

        showNextImage();
    });
</script>


<script>
  let curIndex = 0;
  const totalItems = document.querySelectorAll('.carousel-item').length;
  const carouselInner = document.querySelector('.carousel-inner');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  const interval = 3000; // Set the interval time in milliseconds (e.g., 3000 for 3 seconds)

  // Add event listeners to navigation buttons
  nextBtn.addEventListener('click', showNext);
  prevBtn.addEventListener('click', showPrev);

  // Set up automatic sliding
  setInterval(() => {
    showNext();
  }, interval);

  // Function to show the next slide
  function showNext() {
    if (curIndex < totalItems - 1) {
      curIndex++;
    } else {
      curIndex = 0;
    }
    updateCarousel();
  }

  // Function to show the previous slide
  function showPrev() {
    if (curIndex > 0) {
      curIndex--;
    } else {
      curIndex = totalItems - 1;
    }
    updateCarousel();
  }

  // Function to update the carousel position
  function updateCarousel() {
    const newTransformValue = -curIndex * 100 + '%';
    carouselInner.style.transform = 'translateX(' + newTransformValue + ')';
  }
</script>


<style>
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
        height: 25em;
    }

    .KidsImg {
        height: 300px;
        width: 600px;
        object-fit: cover;
    }

    .SamImg {
        display: none;
    }

    .ListFooter {
        font-size: 14px;
    }

    @media screen and (max-width:600px) {
        .service-item {
            height: auto;
        }

        .SamImg {
            display: block;
            height: 10em;
            border-radius: 2em;
            width: 100%;
            object-fit: cover;
        }

    }

</style>


</body>

</html>