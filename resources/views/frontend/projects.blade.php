@include('includes.head')

<body>

    <!-- Preloader -->

    <!-- header -->
    @include('includes.navbar')

    <!-- main-area -->
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area d-flex align-items-center"
            style="background-image:url(frontend/img/bg/bdrc-bg.jpg)">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-left">
                            <div class="breadcrumb-title">
                                <h2>Our Projects</h2>
                                <div class="breadcrumb-wrap">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Projects</li>
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
<section class="category-filters">
    <div class="container"> 
        <div class="filter-buttons" style="display: flex;flex-direction: row;align-items: center;justify-content: space-evenly;">
            <a href="{{ route('projects') }}" 
               class="btn btn-primary filter-btn {{ request()->routeIs('projects') ? 'active' : '' }}">
                All
            </a>

            @foreach($categories as $category)
                <a href="{{ route('projects.filter', $category->id) }}" 
                   class="btn btn-primary filter-btn {{ request()->segment(3) == $category->id ? 'active' : '' }}">
                    {{ $category->name }}
                </a>
            @endforeach
        </div>
    </div>
</section>

<section class="gallery-area fix pt-120 pb-90">
    <div class="container">
        <div class="row" id="blog-container">
            @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-12 mb-30">
                    <a href="{{ route('blogs.show', $blog->slug) }}">
                        <figure class="gallery-image">
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                            <figcaption>
                                <div class="icon"><img src="frontend/img/gallery/g-btn.png" alt="img" class="img"> </div>
                                <div class="text">
                                    <span>{{ $blog->author }}</span>
                                    <h4>{{ $blog->title }}</h4>
                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>


<style>
.filter-btn {
    font-weight: bold;
    color: #000; /* Default state */
    background: none;
    border: none;
    padding: 5px 15px;
}

.filter-btn.active {
    background: none;
    color: #000;
    border-bottom: 2px solid #000;
}
a.btn.btn-primary.filter-btn.active{
    box-shadow: none;
}
.category-filters{
    height: 120px;
    align-items:center;
    display: flex;
}
</style>

        <!-- gallery-area-end -->
    </main>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const filterButtons = document.querySelectorAll('.filter-btn');

        filterButtons.forEach(button => {
            button.addEventListener('click', function () {
                // Remove active class from all buttons
                filterButtons.forEach(btn => {
                    btn.classList.remove('active');
                    btn.style.background = 'none';
                    btn.style.color = '#000';
                    btn.style.borderBottom = 'none';
                });

                // Add active class to the clicked button
                this.classList.add('active');
                this.style.background = 'none';
                this.style.color = '#000';
                this.style.borderBottom = '2px solid #000';
            });
        });

        // Highlight the correct button on page load based on URL
        const currentURL = window.location.href;
        filterButtons.forEach(button => {
            if (button.href === currentURL) {
                button.classList.add('active');
                button.style.background = 'none';
                button.style.color = '#000';
                button.style.borderBottom = '2px solid #000';
            }
        });
    });
</script>






    <!-- footer -->
    @include('includes.footer')

</body>

</html>