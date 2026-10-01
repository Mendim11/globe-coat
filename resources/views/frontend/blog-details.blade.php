@include('includes.head')

<body>
    <!-- Preloader end -->
    <!-- header -->
    @include('includes.navbar')

    <!-- main-area -->
    <main>
        <!-- breadcrumb-area -->
        <section class="breadcrumb-area d-flex align-items-center"
            style="background-image:url({{ asset('frontend/img/bg/bdrc-bg.jpg') }});">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-left">
                            <div class="breadcrumb-title">
                                <h2>{{ $blog->title }}</h2> <!-- Dynamic project/blog title here -->
                                <div class="breadcrumb-wrap">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Homse</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Project Details</li>
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

        <!-- Project Detail -->
        <section class="project-detail pt-145 pb-90">
            <div class="container">
                <!-- Lower Content -->
                <div class="lower-content">
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Upper Content -->
                            <div class="upper-box">
                                <div class="single-item-carousel owl-carousel owl-theme">
                                    @if($blog->image)
                                        <figure class="image">
                                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                                        </figure>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="info-column col-lg-4 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <h3>Project info</h3>
                                <p>{{ $blog->description ?? 'No description available.' }}</p>
                                <ul class="project-info clearfix">
                                    <li>
                                        <h5>Client</h5> <span>{{ $blog->author }}</span>
                                    </li>
                                    <li>
                                        <h5>Project</h5> <span>{{ $blog->title }}</span>
                                    </li>
                                    <li>
                                        <h5>Category</h5> <span>
                                            @foreach($blog->categories as $category)
                                                {{ $category->name }}@if (!$loop->last), @endif
                                            @endforeach
                                        </span>
                                    </li>
                                    <li>
                                        <h5>Date</h5><span>{{ $blog->created_at->format('F d, Y') }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-column col-lg-12 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <h2>Project Description</h2>
                                <p>{{ $blog->content }}</p>

                                <!-- Two Column -->
                                <div class="two-column">
                                    <div class="row">
                                        <div class="text-column col-xl-6 col-lg-6 col-md-6">
                                            <h4>How can I set up the solar panels?</h4>
                                            <p>A car is not a privilege anymore, it’s your right to commute comfortably.
                                                Add in those weekends of family trips, long-drives with friends and
                                                you’ve got the perfect recipe for happiness.</p>
                                            <ul class="list-style-one">
                                                <li>Engine oil level should be regularly checked.</li>
                                                <li>Electrolyte level is correct. Never remove the radiator when the
                                                    engine is hot.</li>
                                                <li>Ensure that your vehicle's brake fluid is full.</li>
                                            </ul>
                                            <p>More detailed project-specific content can go here. Edit this part
                                                accordingly.</p>
                                        </div>

                                        <div class="image-column col-xl-6 col-lg-12 col-md-12">
                                            @if($blog->additional_image)
                                                <figure class="image">
                                                    <img src="{{ asset('uploads/' . $blog->additional_image) }}"
                                                        alt="Additional Image">
                                                </figure>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <p>Feel free to expand this section with more detailed descriptions about the project or
                                    blog content. Customize as needed.</p>
                            </div>
                        </div>
                        <div class="project-images">
                            <h3>Project Images</h3>
                            <div class="row">
                                @if($blog->project_images)
                                    @foreach($blog->project_images as $image)
                                        <div class="col-md-4">
                                            <img src="{{ asset('storage/' . $image) }}" class="img-fluid"
                                                alt="{{ $blog->title }}">
                                        </div>
                                    @endforeach
                                @else
                                    <p>No images available.</p>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--End Project Detail -->
    </main>
    <!-- main-area-end -->

    <!-- footer -->
    @include('includes.footer')

</body>

</html>