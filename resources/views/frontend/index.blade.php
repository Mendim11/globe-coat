{{-- @include('includes.head')

<body>

    @include('includes.navbar')


    <main>

        <section class="slider-area p-relative">
            <div class="slider-active" style="background: #101010;">
                @php
                $sliderContent = \App\Models\EditableContent::where('page_name', 'index')->where('section_name',
                'slider-content')->first();
                $sliderBg = \App\Models\EditableContent::where('page_name', 'index')->where('section_name',
                'slider-bg')->first();
                @endphp
                <div class="single-slider slider-bg d-flex align-items-center"
                    style="background-image: url('{{ $sliderBg->content ?? asset('frontend/img/slider/slider_bg.jpg') }}'); background-size: cover;">
                    <div class="container">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-7 col-md-8">
                                <div class="slider-content s-slider-content">
                                    <h5 data-animation="fadeInUp" data-delay=".4s" style="color: #fff;">
                                        <i class="fa-regular fa-angle-right"></i>
                                        {{ $sliderContent->content ?? 'Content not found 1' }}
                                    </h5>
                                    <h2 data-animation="fadeInUp" data-delay=".4s" style="color: #fff;">
                                        {{ $sliderContent->content ?? 'Content not found 2' }}
                                    </h2>
                                    <div class="slider-btn mt-30 mb-105">
                                        @php
                                        $sliderButtonLink = \App\Models\EditableContent::where('page_name',
                                        'index')->where('section_name', 'slider-button-link')->first();
                                        @endphp
                                        <a href="{{ $sliderButtonLink->content ?? '#' }}"
                                            class="btn ss-btn active mr-15" data-animation="fadeInLeft"
                                            data-delay=".4s">
                                            <i class="fal fa-long-arrow-right"></i> Read more
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4 p-relative"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-area about-p pt-120 pb-120 p-relative fix">
            <div class="container">
                <div class="about-accordion" id="accordionExample">
                    <div class="about-accordion-item">
                        <h2 class="about-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            {{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name',
                            'since-title')->first()->content ?? 'Content not found 3' }}
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-lg-7 col-md-12 col-sm-12">
                                        <div class="s-about-img p-relative">
                                            <img src="{{ asset('frontend/img/features/about_img_01.jpg') }}" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-12 col-sm-12">
                                        <div class="about-content s-about-content">
                                            <div class="about-title second-title pb-25">
                                                <h4>{{ \App\Models\EditableContent::where('page_name',
                                                    'index')->where('section_name',
                                                    'since-description')->first()->content ?? 'Content not found 4' }}
                                                </h4>
                                            </div>
                                            <p>{{ \App\Models\EditableContent::where('page_name',
                                                'index')->where('section_name', 'since-paragraph')->first()->content ??
                                                'Content not found 5' }}
                                            </p>
                                            <a href="{{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name', 'since-button-link')->first()->content ?? '#' }}"
                                                class="btn mt-35" data-animation="fadeInLeft" data-delay=".4s">
                                                <i class="fal fa-long-arrow-right"></i> Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services-area pt-120 pb-90 p-relative fix" style="background: #F5F5F5;">
            <div class="animations-01"><img src="frontend/img/bg/ani-img01.png" alt="an-img-01"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="section-title mb-50 text-left">
                            <h5 style="color: #55c4cf"><i class="fa-regular fa-angle-right"></i> EXPLORE THE Services</h5>
                            <h2>{{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name',
                                'services-title')->first()->content ?? 'Content not found 6' }}
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item active">
                            <div class="services-thumb">
                                <img src="{{ asset('frontend/img/icon/sr-icon01.png') }}" alt="img">
                            </div>
                            <div class="services-content">
                                <span>{{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name',
                                    'service-1-title')->first()->content ?? 'Content not found 7' }}</span>
                                <h3><a
                                        href="{{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name', 'service-1-link')->first()->content ?? '#' }}">Lorem,
                                        ipsum.</a></h3>
                                <p>{{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name',
                                    'service-1-description')->first()->content ?? 'Content not found 8' }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item active">
                            <div class="services-thumb">
                                <img src="{{ asset('frontend/img/icon/sr-icon01.png') }}" alt="img">
                            </div>
                            <div class="services-content">
                                <span>{{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name',
                                    'service-1-title')->first()->content ?? 'Content not found 7' }}</span>
                                <h3><a
                                        href="{{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name', 'service-1-link')->first()->content ?? '#' }}">Lorem,
                                        ipsum.</a></h3>
                                <p>{{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name',
                                    'service-1-description')->first()->content ?? 'Content not found 8' }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item active">
                            <div class="services-thumb">
                                <img src="{{ asset('frontend/img/icon/sr-icon01.png') }}" alt="img">
                            </div>
                            <div class="services-content">
                                <span>{{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name',
                                    'service-1-title')->first()->content ?? 'Content not found 7' }}</span>
                                <h3><a
                                        href="{{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name', 'service-1-link')->first()->content ?? '#' }}">Lorem,
                                        ipsum.</a></h3>
                                <p>{{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name',
                                    'service-1-description')->first()->content ?? 'Content not found 8' }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item active">
                            <div class="services-thumb">
                                <img src="{{ asset('frontend/img/icon/sr-icon01.png') }}" alt="img">
                            </div>
                            <div class="services-content">
                                <span>{{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name',
                                    'service-1-title')->first()->content ?? 'Content not found 7' }}</span>
                                <h3><a
                                        href="{{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name', 'service-1-link')->first()->content ?? '#' }}">Lorem,
                                        ipsum.</a></h3>
                                <p>{{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name',
                                    'service-1-description')->first()->content ?? 'Content not found 8' }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item active">
                            <div class="services-thumb">
                                <img src="{{ asset('frontend/img/icon/sr-icon01.png') }}" alt="img">
                            </div>
                            <div class="services-content">
                                <span>{{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name',
                                    'service-1-title')->first()->content ?? 'Content not found 7' }}</span>
                                <h3><a
                                        href="{{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name', 'service-1-link')->first()->content ?? '#' }}">Lorem,
                                        ipsum.</a></h3>
                                <p>{{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name',
                                    'service-1-description')->first()->content ?? 'Content not found 8' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="why-choose pt-120 pb-120 p-relative fix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="why-choose-img p-relative">
                            <img src="{{ asset('frontend/img/features/why-choose-img.jpg') }}" alt="img">
                            <div class="badge"> <img src="frontend/img/bg/badge.png" alt="feature"> </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="why-choose-text pl-60 p-relative">
                            <div class="section-title mb-50 text-left">
                                <h5 style="color: #55c4cf"><i class="fa-regular fa-angle-right"></i> About Us</h5>
                                <h2>About Us</h2>
                            </div>
                            <p>Globecoat Is A Dubai-Based Company Specialized In High-End Interior Finishes with branches in Cairo, Jeddah, Mumbai, Muscat, and Riyadh.
Starting in 1995, we have established ourselves as a leading name in the industry, with a strong reputation for delivering quality workmanship and exceptional customer service.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
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
        </section>
        <section class="project-area after-none contact-bg p-relative fix" style="background: #F5F5F5;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class='project-box p-relative'>
                            <span>{{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name',
                                'project-1-title')->first()->content ?? 'Content not found 11' }}</span>
                            <h3><a
                                    href="{{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name', 'project-1-link')->first()->content ?? '#' }}">
                                    {{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name',
                                    'project-1-title')->first()->content ?? 'Content not found 12' }}</a>
                            </h3>
                            <div class="layer img-hover" data-depth="0.10">
                                <img src="{{ asset('frontend/img/gallery/project-logo.png') }}" alt="img">
                            </div>
                        </div>
                        <!-- Repeat for other project boxes -->
                    </div>
                </div>
            </div>
        </section>
        <div class="counter-area p-relative pt-120 fix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="section-title mb-50 text-left">
                            <h5 style="color: #55c4cf"><i class="fa-regular fa-angle-right"></i> fun facts</h5>
                            <h2>{{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name',
                                'counter-title')->first()->content ?? 'Content not found 13' }}
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="single-counter mb-50">
                                    <div class="counter p-relative">
                                        <div class="count-text">
                                            <span class="count">37</span> <span>K</span><small>+</small>
                                        </div>
                                        <p>{{ \App\Models\EditableContent::where('page_name',
                                            'index')->where('section_name', 'counter-1-description')->first()->content
                                            ?? 'Content not found 14' }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="testimonial-area pt-120 pb-115 p-relative fix" style="background:#F5F5F5;">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-7">
                        <div class="section-title text-center mb-80">
                            <h5 style="color: #55c4cf"><i class="fa-regular fa-angle-right"></i>
                                {{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name',
                                'testimonial-title')->first()->content ?? 'Content not found 15' }}
                            </h5>
                            <h2>{{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name',
                                'testimonial-heading')->first()->content ?? 'Content not found 16' }}
                            </h2>
                        </div>

                    </div>

                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial-active">
                            <div class="single-testimonial">
                                <div class="qt-img">
                                    <img src="{{ asset('frontend/img/testimonial/qt-icon.png') }}" alt="img">
                                </div>
                                <div class="testi-author">
                                    <img src="{{ asset('frontend/img/testimonial/testi_avatar_02.png') }}" alt="img">
                                    <div class="ta-info">
                                        <div class="star">
                                            <img src="{{ asset('frontend/img/testimonial/testimoninal-star.png') }}"
                                                alt="img">
                                        </div>
                                        <p>{{ \App\Models\EditableContent::where('page_name',
                                            'index')->where('section_name',
                                            'testimonial-1-description')->first()->content ?? 'Content not found 17' }}
                                        </p>
                                        <h6>{{ \App\Models\EditableContent::where('page_name',
                                            'index')->where('section_name', 'testimonial-1-author')->first()->content ??
                                            'Content not found 18' }}
                                        </h6>
                                        <span>{{ \App\Models\EditableContent::where('page_name',
                                            'index')->where('section_name', 'testimonial-1-role')->first()->content ??
                                            'Content not found 19' }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="qt-img">
                                    <img src="{{ asset('frontend/img/testimonial/qt-icon.png') }}" alt="img">
                                </div>
                                <div class="testi-author">
                                    <img src="{{ asset('frontend/img/testimonial/testi_avatar_02.png') }}" alt="img">
                                    <div class="ta-info">
                                        <div class="star">
                                            <img src="{{ asset('frontend/img/testimonial/testimoninal-star.png') }}"
                                                alt="img">
                                        </div>
                                        <p>{{ \App\Models\EditableContent::where('page_name',
                                            'index')->where('section_name',
                                            'testimonial-1-description')->first()->content ?? 'Content not found 17' }}
                                        </p>
                                        <h6>{{ \App\Models\EditableContent::where('page_name',
                                            'index')->where('section_name', 'testimonial-1-author')->first()->content ??
                                            'Content not found 18' }}
                                        </h6>
                                        <span>{{ \App\Models\EditableContent::where('page_name',
                                            'index')->where('section_name', 'testimonial-1-role')->first()->content ??
                                            'Content not found 19' }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="qt-img">
                                    <img src="{{ asset('frontend/img/testimonial/qt-icon.png') }}" alt="img">
                                </div>
                                <div class="testi-author">
                                    <img src="{{ asset('frontend/img/testimonial/testi_avatar_02.png') }}" alt="img">
                                    <div class="ta-info">
                                        <div class="star">
                                            <img src="{{ asset('frontend/img/testimonial/testimoninal-star.png') }}"
                                                alt="img">
                                        </div>
                                        <p>{{ \App\Models\EditableContent::where('page_name',
                                            'index')->where('section_name',
                                            'testimonial-1-description')->first()->content ?? 'Content not found 17' }}
                                        </p>
                                        <h6>{{ \App\Models\EditableContent::where('page_name',
                                            'index')->where('section_name', 'testimonial-1-author')->first()->content ??
                                            'Content not found 18' }}
                                        </h6>
                                        <span>{{ \App\Models\EditableContent::where('page_name',
                                            'index')->where('section_name', 'testimonial-1-role')->first()->content ??
                                            'Content not found 19' }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="qt-img">
                                    <img src="{{ asset('frontend/img/testimonial/qt-icon.png') }}" alt="img">
                                </div>
                                <div class="testi-author">
                                    <img src="{{ asset('frontend/img/testimonial/testi_avatar_02.png') }}" alt="img">
                                    <div class="ta-info">
                                        <div class="star">
                                            <img src="{{ asset('frontend/img/testimonial/testimoninal-star.png') }}"
                                                alt="img">
                                        </div>
                                        <p>{{ \App\Models\EditableContent::where('page_name',
                                            'index')->where('section_name',
                                            'testimonial-1-description')->first()->content ?? 'Content not found 17' }}
                                        </p>
                                        <h6>{{ \App\Models\EditableContent::where('page_name',
                                            'index')->where('section_name', 'testimonial-1-author')->first()->content ??
                                            'Content not found 18' }}
                                        </h6>
                                        <span>{{ \App\Models\EditableContent::where('page_name',
                                            'index')->where('section_name', 'testimonial-1-role')->first()->content ??
                                            'Content not found 19' }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-home-area pt-120 pb-120 p-relative fix" style="background-color: #222;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-xl-6">
                        <div class="section-title section-title3 center-align pr-80">
                            <h5 style="color: #55c4cf"><i class="fa-regular fa-angle-right"></i>
                                {{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name',
                                'contact-title')->first()->content ?? 'Content not found 20' }}
                            </h5>
                            <h2>{{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name',
                                'contact-heading')->first()->content ?? 'Content not found 21' }}
                            </h2>
                            <p class="mt-25">
                                {{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name',
                                'contact-description')->first()->content ?? 'Content not found 22' }}
                            </p>
                            <div class="blog-call">
                                <span class="nm pr-15">{{ \App\Models\EditableContent::where('page_name',
                                    'index')->where('section_name', 'contact-phone')->first()->content ?? 'Content not
                                    found 23' }}</span>
                                Or <span class="nm pl-15">{{ \App\Models\EditableContent::where('page_name',
                                    'index')->where('section_name', 'contact-chat')->first()->content ?? 'Chat Now'
                                    }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="contact-bg02">
                            <form action="mail.php" method="post" class="contact-form mt-30">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="contact-field p-relative c-name mb-20">
                                            <i class="fa-light fa-user"></i>
                                            <input type="text" id="firstn" name="firstn"
                                                placeholder="{{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name', 'contact-first-name')->first()->content ?? 'First Name' }}"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-field p-relative c-subject mb-20">
                                            <i class="fa-light fa-envelope"></i>
                                            <input type="text" id="email" name="email"
                                                placeholder="{{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name', 'contact-email')->first()->content ?? 'Email' }}"
                                                required>
                                        </div>
                                    </div>
                                    <!-- Repeat for other form fields -->
                                    <div class="col-lg-12">
                                        <div class="slider-btn">
                                            <button type="submit" class="btn mt-25"><i
                                                    class="fal fa-long-arrow-right"></i> Submit Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="blog" class="blog-area p-relative fix pt-120 pb-90">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-7">
                        <div class="section-title text-center mb-80">
                            <h5 style="color: #55c4cf"><i class="fa-regular fa-angle-right"></i>
                                {{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name',
                                'blog-title')->first()->content ?? 'Content not found 24' }}
                            </h5>
                            <h2>{{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name',
                                'blog-heading')->first()->content ?? 'Content not found 25' }}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row sbox">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-post2 hover-zoomin mb-30">
                            <div class="blog-content2">
                                <div class="catg">
                                    {{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name',
                                    'blog-1-category')->first()->content ?? 'Content not found 26' }}
                                </div>
                                <h4><a
                                        href="{{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name', 'blog-1-link')->first()->content ?? '#' }}">{{
                                        \App\Models\EditableContent::where('page_name', 'index')->where('section_name',
                                        'blog-1-title')->first()->content ?? 'Content not found 27' }}</a>
                                </h4>
                                <p>{{ \App\Models\EditableContent::where('page_name', 'index')->where('section_name',
                                    'blog-1-description')->first()->content ?? 'Content not found 28' }}
                                </p>
                                <div class="b-meta">
                                    <div class="meta-info">
                                        <ul>
                                            <li>{{ \App\Models\EditableContent::where('page_name',
                                                'index')->where('section_name', 'blog-1-author')->first()->content ??
                                                'Author not found' }}
                                            </li>
                                            <li>
                                                <hr>
                                            </li>
                                            <li>{{ \App\Models\EditableContent::where('page_name',
                                                'index')->where('section_name', 'blog-1-date')->first()->content ??
                                                'Date not found' }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Repeat for other blog posts -->
                </div>
            </div>
        </section>
    </main>

    <!-- footer -->
    @include('includes.footer')
    <!-- footer-end -->

</body>

</html> --}}

@include('includes.head')

<body>

    @include('includes.navbar')


    <main>
        <!-- slider-area -->
        <section class="slider-area p-relative">
            <div class="slider-active" style="background: #101010;">
                <div class="single-slider slider-bg d-flex align-items-center"
                    style="background-image: url(frontend/img/slider/slider_bg.jpg); background-size: cover;">
                    <div class="container">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-7 col-md-8">
                                <div class="slider-content s-slider-content" >
                                    <h5 data-animation="fadeInUp" data-delay=".4s" style="color: #fff;"><i
                                            class="fa-regular fa-angle-right"></i> Welcome to Globe Coat</h5>
                                    <h2 data-animation="fadeInUp" data-delay=".4s" style="color: #fff;">Exclusive decorative surface finishes
                                        <strong>acoustic</strong>
                                        <span>and Hygienic cladding</span>
                                    </h2>
                                    <div class="slider-btn mt-30 mb-105">
                                        <a href="contact.html" class="btn ss-btn active mr-15"
                                            data-animation="fadeInLeft" data-delay=".4s"><i
                                                class="fal fa-long-arrow-right"></i> Read more</a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4 p-relative">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="single-slider slider-bg d-flex align-items-center"
                    style="background-image: url(frontend/img/slider/slider_bg.jpg); background-size: cover;">
                    <div class="container">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-7 col-md-8">
                                <div class="slider-content s-slider-content">
                                    <h5 data-animation="fadeInUp" data-delay=".4s" style="color: #fff;"><i
                                            class="fa-regular fa-angle-right"></i> Welcome to Globe Coat</h5>
                                    <h2 data-animation="fadeInUp" data-delay=".4s" style="color: #fff;">Exclusive interior &
                                        <strong>Exterior</strong>
                                        <span>design</span>
                                    </h2>
                                    <p>
                                    A threshold, a passage into wonder, where nature and professionalism blend harmoniously, refined; textures wrap around you like a soft embrace, and every detail, from floor to ceiling, speaks of exclusivity—this is not merely design; it is an experience.
                                    </p>
                                    <div class="slider-btn mt-30 mb-105">
                                        <a href="about" class="btn ss-btn active mr-15"
                                            data-animation="fadeInLeft" data-delay=".4s"><i
                                                class="fal fa-long-arrow-right"></i> Read more</a>
                                  
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4 p-relative">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider-area-end -->
        <!-- about-area -->
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
                                                <h4>Since 1995, Globecoat  has been a trusted name in high-end interior finishes, known for delivering exceptional craftsmanship and dependable service. With branches in the UAE, Saudi Arabia (Riyadh & Jeddah), India, Egypt, and Oman, we bring our expertise to clients across the region.
                                                </h4>
                                            </div>
                                            <p>Specializing in luxurious surface finishes for both residential and commercial projects, our large team of skilled applicators is equipped to manage projects of any scale with precision and speed. Our ability to mobilize quickly and deliver on time has made us the go-to partner for developers and contractors seeking quality and efficiency.</p>
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
                                            <p>With a rich legacy spanning, we take pride in crafting unique and lasting environments for our clients.
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
                                            <p>Our products have been carefully formulated to have low VOC emissions,  by minimizing the release of harmful chemicals into the air, our products help create healthier indoor environments. Our products also have certificates such as: Civil defence fire rating, HACCP,EHEDG, Indoor Air Quality.

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

Each project is managed with precision and care, ensuring that timelines and budgets are adhered to without compromising on excellence. Our team’s ability to work seamlessly across multiple locations—whether locally or internationally—has earned us a reputation for reliability and excellence. Our portfolio includes a wide range of bespoke finishes, from custom paintwork and wall treatments to high-end decorative coatings and hygienic claddings, which bring a unique sense of sophistication and character to any environment.
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
        <!-- about-area-end -->
        <!-- services-three-area -->
        <section class="services-area pt-120 pb-90 p-relative fix" style="background: #F5F5F5;">
            <div class="animations-01"><img src="frontend/img/bg/ani-img01.png" alt="an-img-01"></div>
            <div class="container">
                <div class="row  mt-0 align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="section-title mb-50 text-left">
                            <h5 style="color: #55c4cf"><i class="fa-regular fa-angle-right"></i> EXPLORE THE PRODUCTS</h5>
                            <h2>
                                Products
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item active">
                            <div class="services-thumb">
                                <img src="frontend/img/icon/sr-icon01.png" alt="img">
                            </div>
                            <div class="services-content">
                                <span>Product</span>
                                <h3><a href="#">Decorative Finishes</a></h3>
                                <p><a href="#">
                                    Polished Plaster
                                    </a>
                                    <a href="#">
                                    Clay Finishes and Rammed Earth
                                    </a>
                                <a href="#">
                                    Decorative Paints
                                    </a>
                                    <a href="#">
                                    Metaillic and Rust Paints
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <div class="services-thumb">
                                <img src="frontend/img/icon/sr-icon02.png" alt="img">
                            </div>
                            <div class="services-content">
                                <span>Product</span>
                                <h3><a href="#">FRP</a></h3>
                                <p>FRP AS A LIGHT, ROBUST AND VERSATILE MATERIAL
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <div class="services-thumb">
                                <img src="frontend/img/icon/sr-icon03.png" alt="img">
                            </div>
                            <div class="services-content">
                                <span>Product</span>
                                <h3><a href="#">Decorative Seamless flooring products</a></h3>
                                <p>Globefloor P Series, Globefloor R Series, Globefloor WP Series
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <div class="services-thumb">
                                <img src="frontend/img/icon/sr-icon04.png" alt="img">
                            </div>
                            <div class="services-content">
                                <span>Product</span>
                                <h3><a href="#">Wall Clading</a></h3>
                                <a href="#">Eco and Acoustic cladding</a>
                                <a href="#">Flexi Stone</a>
                                <a href="#">Decorative Sculptural</a>
                                </p></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="services-item">
                            <div class="services-thumb">
                                <img src="frontend/img/icon/sr-icon05.png" alt="img">
                            </div>
                            <div class="services-content">
                                <span>Product</span>
                                <h3><a href="#">Armourcoat Acoustic® Plaster System</a></h3>
                                <p>The Armourcoat Acoustic® Plaster System Is Designed To Optimise The Acoustics Of Interior Spaces.</p>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </section>
        <!-- services-three-area -->

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
                                <h5 style="color: #55c4cf"><i class="fa-regular fa-angle-right"></i> About Us</h5>
                                <h2>
                                    About Us
                                </h2>
                            </div>
                            <p>Globecoat Is A Dubai-Based Company Specialized In High-End Interior Finishes with branches in Cairo, Jeddah, Mumbai, Muscat, and Riyadh.

Starting in 1995, we have established ourselves as a leading name in the industry, with a strong reputation for delivering quality workmanship and exceptional customer service.

</p>
<p>At Globecoat, we take pride in our ability to provide tailored solutions that meet the unique needs of our clients. Our team of experts works closely with clients to understand their vision and create bespoke finishes that reflect their personal style and taste. We are committed to using only the highest quality materials and techniques to ensure that the finished product is not only beautiful but also durable and long-lasting.

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
        <!-- service-details2-area-end -->
        <!-- project-area -->
        <section class="project-area after-none contact-bg p-relative fix" style="background: #F5F5F5;">
            <div class="container">

                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class='project-box p-relative'>
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-12">
                                    <span>Decorative Finishes</span>
                                    <h3><a href="projects-detail.html">Decorative Finishes.</a> </h3>
                                </div>
                            </div>
                     
                        </div>
                        <div class='project-box p-relative'>
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-12">
                                    <span>Acoustic</span>
                                    <h3><a href="projects-detail.html">Acoustic solutions, seamless acoustic panels and noise reduction floorings..</a> </h3>
                                </div>
                            </div>
                            
                        </div>
                        <div class='project-box p-relative'>
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-12">
                                    <span>Flooring</span>
                                    <h3><a href="projects-detail.html">Flooring.</a> </h3>
                                </div>
                            </div>
                            
                        </div>
                        <div class='project-box p-relative'>
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-12">
                                    <span>Lamilux FRP</span>
                                    <h3><a href="projects-detail.html">Lamilux FRP</a> </h3>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="project-img"><img src="frontend/img/gallery/project-img.jpg" alt="contact-bg-an-01">
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <!-- project-area-end -->
        <!-- counter-area -->
        <div class="counter-area p-relative pt-120 fix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="section-title mb-50 text-left">
                            <h5 style="color: #55c4cf"><i class="fa-regular fa-angle-right"></i> fun facts</h5>
                            <h2>
                                Stats of our work
                            </h2>
                        </div>
                    
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="row p-relative">
                          
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="single-counter mb-50 wow fadeInUp animated"
                                    data-animation="fadeInDown animated" data-delay=".2s">
                                    <div class="counter p-relative">
                                        <div class="count-text">
                                            <span class="count">30</span> <small>+</small>
                                        </div>
                                        <p>Years of Experience</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="single-counter mb-50 wow fadeInUp animated"
                                    data-animation="fadeInDown animated" data-delay=".2s">
                                    <div class="counter p-relative">
                                        <div class="count-text">
                                            <span class="count">4</span> <small>+</small>
                                        </div>
                                        <p>Regional Offices</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="single-counter mb-50 wow fadeInUp animated"
                                    data-animation="fadeInDown animated" data-delay=".2s">
                                    <div class="counter p-relative">
                                        <div class="count-text">
                                            <span class="count">500</span> <small>+</small>
                                        </div>
                                        <p>Team Members</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="single-counter mb-50 wow fadeInUp animated"
                                    data-animation="fadeInDown animated" data-delay=".2s">
                                    <div class="counter p-relative">
                                        <div class="count-text">
                                            <span class="count">10</span> <span>K</span><small>+</small>
                                        </div>
                                        <p>Users Review</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- counter-area-end -->
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
        <!-- pricing-area -->
       <!-- <section id="pricing" class="pricing-area pb-60 fix p-relative">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-7">
                        <div class="section-title text-center mb-80 wow fadeInDown animated" data-animation="fadeInDown"
                            data-delay=".4s">
                            <h5 style="color: #55c4cf"><i class="fa-regular fa-angle-right"></i> Pricing</h5>
                            <h2>
                                Pricing of our products
                            </h2>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center align-items-center pricing-box">
                    <div class="col-lg-3 col-sm-6">
                        <img src="frontend/img/bg/price-img-01.png" alt="circle_right">
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pricing-head">
                            <h3>Decorative Finishes </h3>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pricing-body text-left">
                            <ul>

                                <li>Renovation</li>
                                <li>New product</li>
                                <li>Lorem, ipsum.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pricing-btn mb-30">
                            <a href="contact.html" class="btn"><i class="fal fa-long-arrow-right"></i> See more </a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center pricing-box">
                    <div class="col-lg-3 col-sm-6">
                        <img src="frontend/img/bg/price-img-02.jpg" alt="circle_right">
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pricing-head">
                            <h3>FRP. </h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pricing-body text-left">
                            <ul>

                                <li>Renovation</li>
                                <li>New product</li>
                                <li>Lorem, ipsum.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pricing-btn mb-30">
                            <a href="contact.html" class="btn"><i class="fal fa-long-arrow-right"></i> See more </a>

                        </div>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center pricing-box">
                    <div class="col-lg-3 col-sm-6">
                        <img src="frontend/img/bg/price-img-03.jpg" alt="circle_right">
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pricing-head">
                            <h3>Flooring.</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pricing-body text-left">
                            <ul>

                                <li>Renovation</li>
                                <li>New product</li>
                                <li>Lorem, ipsum.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pricing-btn mb-30">
                            <a href="contact.html" class="btn"><i class="fal fa-long-arrow-right"></i> See more </a>
                        </div>
                    </div>
                </div>
                 <div class="row justify-content-center align-items-center pricing-box">
                    <div class="col-lg-3 col-sm-6">
                        <img src="frontend/img/bg/price-img-03.jpg" alt="circle_right">
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pricing-head">
                            <h3>Wall clading.</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pricing-body text-left">
                            <ul>

                                <li>Renovation</li>
                                <li>New product</li>
                                <li>Lorem, ipsum.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pricing-btn mb-30">
                            <a href="contact.html" class="btn"><i class="fal fa-long-arrow-right"></i> See more </a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center pricing-box">
                    <div class="col-lg-3 col-sm-6">
                        <img src="frontend/img/bg/price-img-03.jpg" alt="circle_right">
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pricing-head">
                            <h3>Acoustic Plaster.</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pricing-body text-left">
                            <ul>

                                <li>Renovation</li>
                                <li>New product</li>
                                <li>Lorem, ipsum.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="pricing-btn mb-30">
                            <a href="contact.html" class="btn"><i class="fal fa-long-arrow-right"></i> See more </a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- pricing-area-end -->
        <!-- how-it-works-area -->
        <section class="how-it-work-area pt-120 pb-120 p-relative fix" style="background: #F5F5F5;">
            <div class="container">
                <div class="row  mt-0 align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="section-title mb-80 text-left">
                            <h5 style="color: #55c4cf"><i class="fa-regular fa-angle-right"></i> how it works</h5>
                            <h2 >
                                    How it works
                                </h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12"></div>
                    <div class="col-lg-6 col-md-12">
                        <div class="section-title mb-80 text-left">
                            <p>Our process is simple and designed to make your experience smooth and hassle-free. Just follow these four easy steps!</p>
                            <a href="#"><i class="fa-regular fa-angle-right"></i> READ MORE</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="services-item text-center">
                            <div class="services-thumb">
                                <img src="frontend/img/icon/hw-img-01.png" alt="img">
                            </div>
                            <div class="services-content">
                                <h3><a href="#">Get in Touch</a></h3>
                                <a href="#" class="icon-link"><i
                                        class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="services-item text-center active">
                            <div class="services-thumb">
                                <img src="frontend/img/icon/hw-img-02.png" alt="img">
                            </div>
                            <div class="services-content">
                                <h3><a href="#">Share Your Needs</a></h3>
                                <a href="#" class="icon-link"><i
                                        class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="services-item text-center">
                            <div class="services-thumb">
                                <img src="frontend/img/icon/hw-img-03.png" alt="img">
                            </div>
                            <div class="services-content">
                                <h3><a href="#">We Work on It</a></h3>
                                <a href="#" class="icon-link"><i
                                        class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="services-item text-center">
                            <div class="services-thumb">
                                <img src="frontend/img/icon/hw-img-04.png" alt="img">
                            </div>
                            <div class="services-content">
                                <h3><a href="#">
Get Results
</a></h3>
                                <a href="#" class="icon-link"><i
                                        class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </section>
        <!-- how-it-works-area-end -->
        <!-- faq-area -->
        <section id="blog" class="blog-area p-relative fix pt-120 pb-90">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-7">
                        <div class="section-title text-center mb-80 wow fadeInDown animated" data-animation="fadeInDown"
                            data-delay=".4s">
                            <h5 style="color: #55c4cf"><i class="fa-regular fa-angle-right"></i> insights</h5>
                            <h2>Our Projects.</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row sbox">
                    @foreach($latestBlogs as $project)
                        <div class="col-lg-4 col-md-6">
                            <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation="fadeInUp"
                                data-delay=".4s">
                                <div class="blog-content2">
                                    <!-- Project Category -->
                                    <div class="catg">{{ $project->category_id }}</div>

                                    <!-- Project Title -->
                                    <h4>
                                        <a href="{{ route('blogs.show', $project->slug) }}">
                                            {{ $project->title }}
                                        </a>
                                    </h4>

                                    <!-- Project Description -->
                                    <p>{{ Str::limit($project->content, 20) }}</p>

                                    <!-- Project Meta Information -->
                                    <div class="b-meta">
                                        <div class="meta-info">
                                            <ul>
                                                <li>{{ $project->author }}</li>
                                                <li>
                                                    <hr>
                                                </li>
                                                <li>{{ $project->created_at->format('M d, Y') }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>



        <!-- faq-area -->
     
        <!-- contact-area -->
        <section class="contact-home-area pt-120 pb-120 p-relative fix" style="background-color: #222;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-xl-6">
                        <div class="section-title section-title3 center-align  wow fadeInDown animated pr-80"
                            data-animation="fadeInDown" data-delay=".4s">
                            <h5 style="color: #55c4cf"><i class="fa-regular fa-angle-right"></i> let’s talk</h5>
                            <h2>
                                Catch us here easily
                            </h2>
                            <p class="mt-25">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem ut atque nam?
                                Voluptatibus molestias error iste nobis dolorem? Maiores, natus sit!.</p>
                            <div class="blog-call">
                                <span class="nm pr-15">+971 4 2858603, 2855889</span> Or <span class="nm pl-15">Chat
                                    Now.</span>
                            </div>
                            <div class="contact-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="contact-bg02">
                            <form action="mail.php" method="post" class="contact-form mt-30 wow fadeInUp animated"
                                data-animation="fadeInUp" data-delay=".4s">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="contact-field p-relative c-name mb-20">
                                            <i class="fa-light fa-user"></i>
                                            <input type="text" id="firstn" name="firstn" placeholder="First Name"
                                                required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="contact-field p-relative c-subject mb-20">
                                            <i class="fa-light fa-envelope"></i>
                                            <input type="text" id="email" name="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-field p-relative c-subject mb-20">
                                            <i class="fa-light fa-phone"></i>
                                            <input type="text" id="phone" name="phone" placeholder="Phone No." required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-field p-relative c-name mb-20">
                                            <i class="fa-sharp fa-light fa-money-check-pen"></i>
                                            <input type="text" id="subject" name="subject" placeholder="Subject"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-field p-relative c-message mb-30">
                                            <i class="fa-light fa-pencil"></i>
                                            <textarea name="message" id="message" cols="30" rows="10"
                                                placeholder="Write comments"></textarea>
                                        </div>
                                        <div class="slider-btn">
                                            <button href="contact.html" class="btn mt-25" data-animation="fadeInLeft"
                                                data-delay=".4s"><i class="fal fa-long-arrow-right"></i> Submit
                                                Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

        <!-- blog-area -->

        <!-- blog-area-end -->

    </main>

    <!-- footer -->
    @include('includes.footer')
    <!-- footer-end -->

</body>

</html>