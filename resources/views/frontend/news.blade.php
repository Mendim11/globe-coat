@include('includes.head')

<body>

    <!--  Preloader  -->

    <!--  Preloader end  -->

    <!-- header -->
    @include('includes.navbar')

    <main>
        <!-- search-popup -->
        <div class="modal fade bs-example-modal-lg search-bg popup1" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content search-popup">
                    <div class="text-center">
                        <a href="#" class="close2" data-dismiss="modal" aria-label="Close">× close</a>
                    </div>
                    <div class="row search-outer">
                        <div class="col-md-11"><input type="text" placeholder="Search for news..." /></div>
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
                                <h2>News</h2>
                                <div class="breadcrumb-wrap">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">News</li>
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
        <section class="inner-news pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <!-- Main content section -->
                    <div class="col-lg-8">
                        @foreach($news as $singleNews)
                            <div class="bsingle__post mb-50">
                                <div class="bsingle__post-thumb">
                                    @if($singleNews->thumbnail_image)
                                        <img src="{{ asset('storage/' . $singleNews->thumbnail_image) }}"
                                            alt="{{ $singleNews->title }}">
                                    @else
                                        <img src="{{ asset('img/default-thumbnail.jpg') }}" alt="Default Image">
                                    @endif
                                </div>

                                <div class="bsingle__content">
                                    <div class="meta-info">
                                        <ul>
                                            <li><i class="fal fa-user"></i> By {{ $singleNews->author }}</li>
                                            <li><i class="fal fa-calendar-alt"></i>
                                                {{ $singleNews->created_at->format('d M Y') }}</li>
                                        </ul>
                                    </div>
                                    <h2><a href="{{ route('news.show', $singleNews->slug) }}">{{ $singleNews->title }}</a></h2>
                                    <p>{{ Str::limit($singleNews->content, 150) }}</p>
                                    <div class="blog__btn">
                                        <a href="{{ route('news.show', $singleNews->slug) }}" class="btn">
                                            <i class="fal fa-long-arrow-right"></i> Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <!-- Pagination (optional) -->
                        <div class="pagination-wrap mb-50">
                            {{ $news->links() }} <!-- For pagination -->
                        </div>
                    </div>

                    <!-- Sidebar section -->
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <aside class="sidebar-widget">
                            <section id="search-3" class="widget widget_search">
                                <h2 class="widget-title">Search</h2>
                                <form role="search" method="get" class="search-form">
                                    <label>
                                        <span class="screen-reader-text">Search for:</span>
                                        <input type="search" class="search-field" placeholder="Search &hellip;" value=""
                                            name="s" />
                                    </label>
                                    <input type="submit" class="search-submit" value="Search" />
                                </form>
                            </section>

                            <!-- Other sidebar widgets -->
                            <section id="categories-1" class="widget widget_categories">
                                <h2 class="widget-title">Categories</h2>
                                <ul>
                                    @foreach($categories as $category)
                                        <li class="cat-item"><a href="{{ route('news.category', $category->id) }}">{{ $category->name }}</a>
                                            ({{ $category->news_count }})</li>
                                    @endforeach
                                </ul>
                            </section>

                            <!-- Recent Posts -->
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

    @include('includes.footer')

</body>

</html>
