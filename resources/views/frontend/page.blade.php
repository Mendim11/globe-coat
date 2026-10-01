@extends('frontend.layouts.master')

@section('content')
<main>
    <div class="container-fluid mt-5">
        <!-- Section 1 (Services) -->
        @if($page->section_one_title || $page->section_one_service_1_title || $page->section_one_service_2_title || $page->section_one_service_3_title)
            <section class="services-area pt-120 pb-90 p-relative fix">
                <div class="animations-01"><img src="frontend/img/bg/ani-img01.png" alt="an-img-01"></div>
                <div class="container">
                    <div class="row mt-0 align-items-center">
                        @if($page->section_one_title)
                            <div class="col-lg-4 col-md-12">
                                <div class="section-title mb-50 text-left">
                                    <h5><i class="fa-regular fa-angle-right"></i> EXPLORE THE Services</h5>
                                    <h2>{{ $page->section_one_title }}</h2>
                                </div>
                            </div>
                        @endif

                        <!-- Service 1 -->
                        @if($page->section_one_service_1_title)
                            <div class="col-lg-4 col-md-6">
                                <div class="services-item">
                                    <div class="services-thumb">
                                        <img src="frontend/img/icon/sr-icon01.png" alt="img">
                                    </div>
                                    <div class="services-content">
                                        <span>service #01</span>
                                        <h3>{{ $page->section_one_service_1_title }}</h3>
                                        <p>{{ $page->section_one_service_1_content }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <!-- Service 2 -->
                        @if($page->section_one_service_2_title)
                            <div class="col-lg-4 col-md-6">
                                <div class="services-item">
                                    <div class="services-thumb">
                                        <img src="frontend/img/icon/sr-icon02.png" alt="img">
                                    </div>
                                    <div class="services-content">
                                        <span>service #02</span>
                                        <h3>{{ $page->section_one_service_2_title }}</h3>
                                        <p>{{ $page->section_one_service_2_content }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <!-- Service 3 -->
                        @if($page->section_one_service_3_title)
                            <div class="col-lg-4 col-md-6">
                                <div class="services-item">
                                    <div class="services-thumb">
                                        <img src="frontend/img/icon/sr-icon03.png" alt="img">
                                    </div>
                                    <div class="services-content">
                                        <span>service #03</span>
                                        <h3>{{ $page->section_one_service_3_title }}</h3>
                                        <p>{{ $page->section_one_service_3_content }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </section>
        @endif

        <!-- Section 2 (How it works) -->
        @if($page->how_it_works_title || $page->how_it_works_content)
            <section class="how-it-work-area pt-120 pb-120 p-relative fix" style="background: #F5F5F5;">
                <div class="container">
                    <div class="row mt-0 align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="section-title mb-80 text-left">
                                <h5><i class="fa-regular fa-angle-right"></i> how it works</h5>
                                <h2>{{ $page->how_it_works_title }}</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="section-title mb-80 text-left">
                                <p>{{ $page->how_it_works_content }}</p>
                                <a href="#"><i class="fa-regular fa-angle-right"></i> READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    </div>
</main>
@endsection
