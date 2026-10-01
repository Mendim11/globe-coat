<div id="custom-preloader">
    <div class="loader">
        <img src="{{ asset('frontend/img/bg/badge.svg') }}" alt="Loading...">
    </div>
</div>

<header class="header-area header-two">
    <div id="header-sticky" class="menu-area">
        <div class="container-fluid pl-80 pr-80">
            <div class="second-menu">
                <div class="row align-items-center">
                    <!-- Logo Section -->
                    <div class="col-xl-2 col-lg-3">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('frontend/img/logo/logo.png') }}" alt="logo">
                            </a>
                        </div>
                    </div>

                    <!-- Main Navigation Section -->
                    <div class="col-xl-6 col-lg-9">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About</a></li>
                                    <li><a href="/projects">Work</a></li>
                                    <li><a href="/presentation">Presentation</a></li>
                                    <li><a href="/roadmap">Fun Fact</a></li>
                                    <li><a href="/shop">Products</a></li>
                                    <!--<li><a href="/news">News</a></li> -->


                                    <!-- Dynamically generated pages from the "pages" table -->
                                    <!--<li class="has-sub">
                                        <a href="#">Other Pages</a>
                                        <ul>
                                            @foreach($pages as $page)
                                                <li><a href="{{ url('/' . $page->slug) }}">{{ $page->title }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li> -->
                                </ul>
                            </nav>
                        </div>
                    </div>


                    <!-- Call and Contact Information Section -->
                    <div class="col-xl-4 col-lg-4 text-right d-none d-xl-block mt-20 mb-20">
                        <div class="login">
                            <ul>
                                <li>
                                    <div class="call-box">
                                        <div class="icon">
                                            <img src="{{ asset('frontend/img/icon/menu-telephone.png') }}"
                                                alt="Telephone">
                                        </div>
                                        <div class="text">
                                            <span>Call Us Now!</span>
                                            <strong>+971 4 2858603, 2855889</strong>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="call-box">
                                        <div class="icon">
                                            <img src="{{ asset('frontend/img/icon/menu-email.png') }}" alt="Email">
                                        </div>
                                        <div class="text">
                                            <span>Talk to us</span>
                                            <strong>info@globecoat.ae</strong>
                                        </div>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>

                    <!-- Mobile Menu Icon -->
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Offcanvas Menu -->
<div class="offcanvas-menu">
    <span class="menu-close"><i class="fas fa-times"></i></span>
    <form role="search" method="get" id="searchform" class="searchform" action="#">
        <input type="text" name="s" id="search" placeholder="Search" />
        <button><i class="fa fa-search"></i></button>
    </form>

    <div id="cssmenu2" class="menu-one-page-menu-container">
        <ul id="menu-one-page-menu-12" class="menu">
            <li class="menu-item"><a href="#"><span>+8 12 3456897</span></a></li>
            <li class="menu-item"><a href="#"><span>info@globecoat.ae</span></a></li>
        </ul>
    </div>
</div>
<div class="offcanvas-overly"></div>