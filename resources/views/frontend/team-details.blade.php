@include('includes.head')

<body>

    <!--  Preloader  -->

    <!--  Preloader end  -->

    <!-- header -->

    @include('includes.navbar')

    <!-- offcanvas-end -->
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
                                <h2>Team Details</h2>
                                <div class="breadcrumb-wrap">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                {{ $teamMember->first_name }} {{ $teamMember->last_name }}
                                            </li>
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

        <!-- Team Member Detail Section -->
        <section class="team-area-content">
            <div class="container">
                <div class="lower-content">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="team-img-box">
                                <!-- Display team member image -->
                                <img src="{{ $teamMember->image ? asset('storage/' . $teamMember->image) : asset('frontend/img/team/default-image.jpg') }}"
                                    alt="{{ $teamMember->first_name }} {{ $teamMember->last_name }}">
                            </div>
                            <div class="per-info">
                                <h4>Personal Info</h4>
                                <ul>
                                    <li>
                                        <div class="icon"><i class="fal fa-envelope"></i> <strong>Email</strong></div>
                                        <div class="text">{{ $teamMember->email }}</div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fal fa-phone"></i> <strong>Phone</strong></div>
                                        <div class="text">{{ $teamMember->phone_number ?? 'No data' }}</div>
                                    </li>
                                    @if($teamMember->website)
                                        <li>
                                            <div class="icon"><i class="fal fa-globe"></i><strong>Website</strong></div>
                                            <div class="text">{{ $teamMember->website }}</div>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>

                        <div class="text-column col-lg-8 col-md-12 col-sm-12">
                            <div class="s-about-content pl-30 wow fadeInRight" data-animation="fadeInRight"
                                data-delay=".2s">
                                <h2>Professional Skills</h2>
                                <h3>Personal Details</h3>
                                <p>{{ $teamMember->personal_details ?? 'No data' }}</p>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="skills-content s-about-content mt-20">
                                            <div class="skills">
                                                <div class="skill mb-30">
                                                    <div class="skill-name">Business Consulting</div>
                                                    <div class="skill-bar">
                                                        <div class="skill-per"
                                                            style="width: {{ $teamMember->business_consulting }}%;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="skill mb-30">
                                                    <div class="skill-name">Money Management</div>
                                                    <div class="skill-bar">
                                                        <div class="skill-per"
                                                            style="width: {{ $teamMember->money_management }}%;"></div>
                                                    </div>
                                                </div>
                                                <div class="skill mb-30">
                                                    <div class="skill-name">Business Growth</div>
                                                    <div class="skill-bar">
                                                        <div class="skill-per"
                                                            style="width: {{ $teamMember->business_growth }}%;"></div>
                                                    </div>
                                                </div>
                                                <div class="skill mb-30">
                                                    <div class="skill-name">Team Work</div>
                                                    <div class="skill-bar">
                                                        <div class="skill-per"
                                                            style="width: {{ $teamMember->team_work }}%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Personal Details Section -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Team Member Detail Section -->
    </main>

    <!-- main-area-end -->

    <!-- footer -->
    @include('includes.footer')

</body>

</html>