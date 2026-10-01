@include('includes.head')

<body>
    <!-- Preloader end -->
    <!-- header -->
    @include('includes.navbar')

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
                        <div class="col-md-11">
                            <input type="text" placeholder="Search for news..." />
                        </div>
                        <div class="col-md-1 text-right">
                            <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /search-popup -->

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area d-flex align-items-center"
            style="background-image:url({{ asset('frontend/img/bg/bdrc-bg.jpg') }});">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-left">
                            <div class="breadcrumb-title">
                                <h2>{{ $news->title }}</h2> <!-- News Title -->
                                <div class="breadcrumb-wrap">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">News Details</li>
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

        <!-- inner-news -->
        <section class="inner-blog b-details-p pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-details-wrap">
                            <div class="details__content pb-30">
                                <h2>{{ $news->title }}</h2> <!-- News Title -->
                                <div class="meta-info">
                                    <ul>
                                        <li><i class="fal fa-eye"></i> {{ $news->views ?? 0 }} Views </li>
                                        <li><i class="fal fa-calendar-alt"></i>
                                            {{ $news->created_at->format('d M, Y') }}</li>
                                    </ul>
                                </div>

                                <p>{{ $news->content }}</p> <!-- News Content -->

                                <!-- Display News Thumbnail Image -->
                                @if($news->thumbnail_image)
                                    <div class="details__content-img">
                                        <img src="{{ asset('storage/' . $news->thumbnail_image) }}"
                                            alt="{{ $news->title }}">
                                    </div>
                                @endif

                                <!-- Additional News Content if available -->
                                @if($news->additional_content)
                                    <p>{{ $news->additional_content }}</p>
                                @endif

                                <!-- Blockquote Example -->
                                <blockquote>
                                    <footer>By {{ $news->author }}</footer>
                                    <h3>{{ $news->title }}</h3>
                                </blockquote>

                                <!-- Project Images (if there are additional images) -->
                                @if($news->project_images)
                                    <div class="row">
                                        @foreach($news->project_images as $image)
                                            <div class="col-md-4">
                                                <img src="{{ asset('storage/' . $image) }}" class="img-fluid"
                                                    alt="{{ $news->title }}">
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>

                            <!-- Related News (if any logic for related news) -->
                            <div class="related__post mt-45 mb-85">
                                <div class="post-title">
                                    <h4>Related News</h4>
                                </div>
                                <div class="row">
                                    <!-- Loop through the related news -->
                                    @foreach($relatedNews as $related)
                                        <div class="col-md-6">
                                            <div class="related-post-wrap mb-30">
                                                <div class="post-thumb">
                                                    <img src="{{ asset('storage/' . $related->thumbnail_image) }}"
                                                        alt="{{ $related->title }}">
                                                </div>
                                                <div class="rp__content">
                                                    <h3><a
                                                            href="{{ route('news.show', $related->slug) }}">{{ $related->title }}</a>
                                                    </h3>
                                                    <p>{{ Str::limit($related->content, 100) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Comments Section -->
                            <div id="comments" class="comments-area mt-45">
                                <!-- Comments can be added here -->
                            </div>

                        </div>
                    </div>

                    <!-- Sidebar Section -->
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <aside class="sidebar-widget">
                            <section id="search-3" class="widget widget_search">
                                <h2 class="widget-title">Search</h2>
                                <form role="search" method="get" class="search-form" action="#">
                                    <label>
                                        <input type="search" class="search-field" placeholder="Search &hellip;" value=""
                                            name="s" />
                                    </label>
                                    <input type="submit" class="search-submit" value="Search" />
                                </form>
                            </section>

                            <!-- Categories Widget -->
                            <section id="categories-1" class="widget widget_categories">
                                <h2 class="widget-title">Categories</h2>
                                <ul>
                                    @foreach($categories as $category)
                                        <li class="cat-item">
                                            <a href="{{ route('news.category', $category->id) }}">{{ $category->name }}</a>
                                            ({{ $category->news_count }})
                                        </li>
                                    @endforeach
                                </ul>
                            </section>

                            <!-- Recent News Widget -->
                            <section id="recent-posts-4" class="widget widget_recent_entries">
                                <h2 class="widget-title">Recent News</h2>
                                <ul>
                                    @foreach($recentNews as $recent)
                                        <li>
                                            <a href="{{ route('news.show', $recent->slug) }}">{{ $recent->title }}</a>
                                            <span class="post-date">{{ $recent->created_at->format('d M, Y') }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </section>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- inner-news-end -->
    </main>
    <!-- main-area-end -->

    <!-- footer -->
    @include('includes.footer')

</body>

</html>