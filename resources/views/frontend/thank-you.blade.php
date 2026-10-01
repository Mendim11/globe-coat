<?php include ('includes\head.php'); ?>

<body>
    <!--  Preloader  -->
    <div id="preloader">
        <div id="loading"> </div>
    </div>
    <!--  Preloader end  -->
    <!-- header -->
    <?php include ('includes\navbar.php'); ?>

    <!-- main-area -->
    <main>

        <!-- search-popup -->
        <div class="modal fade bs-example-modal-lg search-bg popup1" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content search-popup">
                    <div class="text-center">
                        <a href="#" class="close2" data-dismiss="modal" aria-label="Close">× close</a>
                    </div>
                    <div class="row search-outer">
                        <div class="col-md-11"><input type="text" placeholder="Search for products..." /></div>
                        <div class="col-md-1 text-right"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /search-popup -->
        <!-- breadcrumb-area -->
        <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(img/bg/bdrc-bg.jpg)">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-left">
                            <div class="breadcrumb-title">
                                <h2>Thank You</h2>
                                <div class="breadcrumb-wrap">

                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Thank You</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- contact-area -->
        <section id="contact" class="contact-area after-none contact-bg pt-60 pb-120 p-relative fix">
            <div class="container">

                <div class="row">

                    <div class="col-lg-12 text-center">
                        <p><img src="img/bg/contact-img.png" alt="map"></p>
                        <div class="slider-btn">
                            <a href="contact.html" class="btn ss-btn" data-animation="fadeInRight"
                                data-delay=".8s">Contact Us</a>
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <!-- contact-area-end -->

    </main>
    <!-- main-area-end -->
    <!-- footer -->
    <?php include ('includes\footer.php'); ?>

</body>

</html>