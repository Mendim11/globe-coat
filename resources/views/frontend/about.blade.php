@include('includes.head')



<body>

    <!--  Preloader  -->



    @include('includes.navbar')

    <main>

        <!-- breadcrumb-area -->

        <section class="breadcrumb-area d-flex align-items-center"
            style="background-image:url(frontend/img/bg/bdrc-bg.jpg)">

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-xl-12 col-lg-12">

                        <div class="breadcrumb-wrap text-left">

                            <div class="breadcrumb-title">

                                <h2>About</h2>

                                <div class="breadcrumb-wrap">



                                    <nav aria-label="breadcrumb">

                                        <ol class="breadcrumb">

                                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                                            <li class="breadcrumb-item active" aria-current="page">About</li>

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

        <!-- about-area -->

    <!-- 
<section class="about-area about-p pt-120 pb-120 p-relative fix">
            <div class="container">
                <div class="about-accordion" id="accordionExample">
                    <div class="about-accordion-item">
                        <h2 class="about-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Since 1995
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-lg-7 col-md-12 col-sm-12">
                                        <div class="s-about-img p-relative">
                                            <img src="frontend/img/features/about_img_01.jpg" alt="img">
                                        </div>

                                    </div>

                                    <div class="col-lg-5 col-md-12 col-sm-12">
                                        <div class="about-content s-about-content">
                                            <div class="about-title second-title pb-25">
                                                <h4>Since 1995, we have established ourselves as a leading name in the industry, with a strong reputation for delivering quality workmanship and exceptional customer service.
                                                </h4>
                                            </div>
                                            <p>Our commitment to excellence has allowed us to build long-lasting relationships with clients across the region, consistently delivering results that not only meet but exceed expectations. We pride ourselves on our attention to detail, reliability, and ability to transform any space into a stunning reflection of our client's vision and style.</p>
                                            <a href="contact.html" class="btn mt-35" data-animation="fadeInLeft"
                                                data-delay=".4s"><i class="fal fa-long-arrow-right"></i> Read More </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-accordion-item">
                        <h2 class="about-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                            Our mission
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse "
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-lg-7 col-md-12 col-sm-12">
                                        <div class="s-about-img p-relative">
                                            <img src="frontend/img/features/about_img_01.jpg" alt="img">
                                        </div>

                                    </div>

                                     <div class="col-lg-5 col-md-12 col-sm-12">
                                        <div class="about-content s-about-content">
                                            <div class="about-title second-title pb-25">
                                                <h4>
At Globecoat, we are passionate about transforming spaces with exceptional interior finishes. </h4>
                                            </div>
                                            <p>With a rich legacy spanning over two decades, we take pride in crafting unique and lasting environments for our clients.
Our mission is to deliver outstanding high-end interior finishes that enhance spaces and reflect the unique vision of our clients. With over two decades of expertise, we are dedicated to offering customized solutions, using the finest materials and advanced techniques. Our focus on excellence, craftsmanship, and customer satisfaction drives us to create beautiful, durable, and enduring environments that surpass expectations.
</p>
                                            <a href="contact.html" class="btn mt-35" data-animation="fadeInLeft"
                                                data-delay=".4s"><i class="fal fa-long-arrow-right"></i> Read More </a>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-accordion-item">
                        <h2 class="about-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne" >
                            Our Responsibility
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-lg-7 col-md-12 col-sm-12">
                                        <div class="s-about-img p-relative">
                                            <img src="frontend/img/features/about_img_01.jpg" alt="img">
                                        </div>

                                    </div>

                                    <div class="col-lg-5 col-md-12 col-sm-12">
                                        <div class="about-content s-about-content">
                                            <div class="about-title second-title pb-25">
                                                <h4>By choosing our products, you can be confident that you are making a sustainable choice that aligns with your environmental values. Our EPD, LEED and ISO certifications serve as proof of our dedication to providing eco-friendly solutions without compromising on quality or performance.
</h4>
                                            </div>
                                            <p>Our products have been carefully formulated to have low VOC emissions, by minimizing the release of harmful chemicals into the air, our products help create healthier indoor environments

We believe that responsible business practices are essential for a better future, and we are committed to minimizing our environmental footprint while delivering exceptional products. With our EPD and ISO certifications, you can trust that you are partnering with a company that prioritizes sustainability, reliability, and customer satisfaction.

</p>
                                            <a href="contact.html" class="btn mt-35" data-animation="fadeInLeft"
                                                data-delay=".4s"><i class="fal fa-long-arrow-right"></i> Read More </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
               </div>
          </div>
</section>

                    <div class="about-accordion-item">
                        <h2 class="about-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
                            Our expertise
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-lg-7 col-md-12 col-sm-12">
                                        <div class="s-about-img p-relative">
                                            <img src="frontend/img/features/about_img_01.jpg" alt="img">
                                        </div>

                                    </div>

                                    <div class="col-lg-5 col-md-12 col-sm-12">
                                        <div class="about-content s-about-content">
                                            <div class="about-title second-title pb-25">
                                                <h4>Whether it's a private residence, a high-end commercial establishment, or a large-scale development, our team is skilled in providing tailored solutions that match the specific needs of each client. 
</h4>
                                            </div>
                                            <p>The process begins with an in-depth consultation, where we work closely with the client and designers to understand the vision for the space. From there, our team of highly trained applicators, artisans, and project managers collaborate to deliver flawless results. We utilize materials—sourced from trusted global suppliers—and employ advanced techniques to create finishes that are both visually stunning and durable.

Each project is managed with precision and care, ensuring that timelines and budgets are adhered to without compromising on excellence. Our team’s ability to work seamlessly across multiple locations—whether locally or internationally—has earned us a reputation for reliability and excellence. Our portfolio includes a wide range of bespoke finishes, from custom paintwork and wall treatments to high-end decorative coatings, which bring a unique sense of sophistication and character to any environment.
</p>
                                            <a href="contact.html" class="btn mt-35" data-animation="fadeInLeft"
                                                data-delay=".4s"><i class="fal fa-long-arrow-right"></i> Read More </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </section>
-->
        <!-- about-area-end -->

        <!-- team-area -->

        <section class="team-area fix p-relative pt-120 pb-90" style="background: #f5f5f5;">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="section-title text-center mb-80 wow fadeInDown animated" data-animation="fadeInDown"
                            data-delay=".4s">
                            <h5> <img src="frontend/img/bg/team-number.png" alt="img"> </h5>
                            <h2>Awesome team member in <span>Globe Coat</span></h2>
                        </div>
                    </div>
                </div>

                <div class="row team-active">
                    @foreach($teamMembers as $member)
                        <div class="col-xl-3 col-lg-3">
                            <div class="single-team mb-30">
                                <div class="team-thumb">
                                    <div class="brd">
                                        <!-- Display the team member's image or a default image if not available -->
                                        <img src="{{ $member->image ? asset('storage/' . $member->image) : asset('frontend/img/team/default-image.jpg') }}"
                                            alt="{{ $member->first_name }} {{ $member->last_name }}">
                                        <div class="team-social">
                                            <a href="#" class="share-alt"><i class="fal fa-share-alt"></i></a>
                                            <ul>
                                                <!-- Display social media links if available -->
                                                @if($member->facebook)
                                                    <li><a href="{{ $member->facebook }}" target="_blank"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                @endif
                                                @if($member->instagram)
                                                    <li><a href="{{ $member->instagram }}" target="_blank"><i
                                                                class="fab fa-instagram"></i></a></li>
                                                @endif
                                                @if($member->twitter)
                                                    <li><a href="{{ $member->twitter }}" target="_blank"><i
                                                                class="fab fa-twitter"></i></a></li>
                                                @endif
                                                @if($member->linkedin)
                                                    <li><a href="{{ $member->linkedin }}" target="_blank"><i
                                                                class="fab fa-linkedin"></i></a></li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="team-info">
                                        <p>{{ $member->position }}</p>
                                        <!-- Link to the team member's detail page dynamically -->
                                        <h4><a href="{{ route('team.show', $member->id) }}">{{ $member->first_name }}
                                                {{ $member->last_name }}</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- team-area-end -->

        <!-- why-choose-area -->

        <section class="why-choose pt-120 pb-120 p-relative fix">

            <div class="container">

                <div class="row">

                    <div class="col-lg-6 col-md-12 col-sm-12">

                        <div class="why-choose-img p-relative">

                            <img src="frontend/img/features/why-choose-img.jpg" alt="img">

                            <div class="badge"> <img src="frontend/img/bg/badge.png" alt="feature"> </div>

                        </div>



                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12">

                        <div class="why-choose-text pl-60 p-relative">

                            <div class="section-title mb-50 text-left">

                                <h5 style="color: #55c4cf"><i class="fa-regular fa-angle-right"></i> VISION</h5>

                                <h2>

                                    Our Vision

                                </h2>

                            </div>

                            <p> Each project is an enduring masterpiece, carefully crafted to enhance the beauty and legacy of your space. We strive to create a lasting impact by offering solutions that are as timeless as they are elegant.
we push the boundaries of design and craftsmanship. Our vision is to be at the forefront of innovation in interior finishes, reimagining the way luxury is expressed in living and working spaces. By blending cutting-edge techniques with expert artistry, we continually redefine the standards of excellence in the world of interior design.
</p>

                           

                        </div>

                    </div>

                </div>

            </div>

            <div class="scrollbox2">

                <div class="scrollbox scrollbox--secondary scrollbox--reverse">

                    <div class="scrollbox__item">

                        <div class="section-t">

                            <h2><img src="frontend/img/bg/our-works-text.png" alt="img"> </h2>

                        </div>

                    </div>

                    <div class="scrollbox__item">

                        <div class="section-t">

                            <h2><img src="frontend/img/bg/our-works-text.png" alt="img"> </h2>

                        </div>

                    </div>

                    <div class="scrollbox__item">

                        <div class="section-t">

                            <h2><img src="frontend/img/bg/our-works-text.png" alt="img"> </h2>

                        </div>

                    </div>

                </div>

            </div>



        </section>

        <!-- why-choose-area-end -->

        <!-- testimonial-area -->

      

        <!-- testimonial-area-end -->

        <!-- user-area -->

        <section class="user-area pb-90 p-relative fix">

            <div class="container">

                <div class="row justify-content-center align-items-center">

                    <div class="col-lg-4 col-md-6">

                        <div class="user-boxs text-center mb-30 wow fadeInDown animated" data-animation="fadeInDown"
                            data-delay=".4s">

                            <div class="logo">

                                <h5><img src="frontend/img/icon/user-logo-01.png" alt="img" style="    width: 110px;">
                                </h5>

                            </div>

                            <div class="text">

                                <p>Renovation - <span>275%</span> <strong>Growth</strong> </p>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6">

                        <div class="user-boxs text-center mb-30 wow fadeInDown animated" data-animation="fadeInDown"
                            data-delay=".4s">

                            <div class="logo">

                                <h5><img src="frontend/img/icon/user-logo-02.jpg" alt="img" style="    width: 110px;">
                                </h5>

                            </div>

                            <div class="text">

                                <p>Management - <span>300%</span> <strong>Growth</strong></p>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6">

                        <div class="user-boxs text-center mb-30 wow fadeInDown animated" data-animation="fadeInDown"
                            data-delay=".4s">

                            <div class="logo">

                                <h5><img src="frontend/img/icon/user-logo-03.png" alt="img" style="    width: 110px;">
                                </h5>

                            </div>

                            <div class="text">

                                <p>Re-build - <span>420%</span> <strong>Growth</strong></p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- user-area-end -->

        <!-- brand-area -->

        <div class="brand-area pb-120">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12 col-md-12">

                        <div class="section-title center-align mb-80 text-center wow fadeInDown animated"
                            data-animation="fadeInDown" data-delay=".4s">

                       

                            <h2>

                                Some of our clients

                            </h2>



                        </div>



                    </div>

                </div>

                <div class="row">

                    <div class="col-xl-12 text-center">

                        <ul class="mb-50">

                            <li><img src="frontend/img/brand/client-log-01.png" style="width: 200px;" alt="img"></li>

                            <li><img src="frontend/img/brand/client-log-02.png" style="width: 200px;" alt="img"></li>

                            <li><img src="frontend/img/brand/client-log-03.png" style="width: 200px;" alt="img"></li>

                            <li><img src="frontend/img/brand/client-log-04.png" style="width: 200px;" alt="img"></li>

                            <li><img src="frontend/img/brand/client-log-05.png" style="width: 200px;" alt="img"></li>

                            <li><img src="frontend/img/brand/client-log-06.png" style="width: 200px;" alt="img"></li>

                            <li><img src="frontend/img/brand/client-log-07.png" style="width: 200px;" alt="img"></li>


                        </ul>

                        <strong>Become our next client. <a href="/contact">Let’s Talk!</a></strong>

                    </div>



                </div>

            </div>

        </div>

        <!-- brand-area-end -->



    </main>

    <!-- main-area-end -->



    <!-- footer -->



    @include('includes.footer')



</body>



</html>