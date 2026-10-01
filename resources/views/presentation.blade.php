<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Presentation — Globe Coat</title>
    <meta name="description" content="Globe Coat architectural surfaces presentation">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/fontawesome-pro/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/dripicons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=cairo:400,600,700&display=swap" rel="stylesheet">
    <style>
        .presentation-page {
            --gc-navy: #081c3a;
            --gc-teal: #45bac5;
            --gc-ink: #414846;
            --gc-mist: #f9f9f9;
            font-family: 'Cairo', sans-serif;
            color: var(--gc-ink);
            background: #fff;
        }

        .presentation-page *,
        .presentation-page *::before,
        .presentation-page *::after {
            box-sizing: border-box;
        }

        .presentation-page img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        .presentation-page h1,
        .presentation-page h2,
        .presentation-page h3,
        .presentation-page p,
        .presentation-page a,
        .presentation-page dt,
        .presentation-page dd,
        .presentation-page button {
            font-family: 'Cairo', sans-serif;
        }

        .gc-shell {
            width: 100%;
            max-width: 1280px;
            margin-inline: auto;
            padding-inline: 40px;
        }

        @media (max-width: 767px) {
            .gc-shell {
                padding-inline: 20px;
            }
        }

        /* Hero — full bleed */
        .gc-hero {
            position: relative;
            height: min(72vw, 640px);
            min-height: 420px;
            overflow: hidden;
            background: var(--gc-navy);
        }

        .gc-hero__media {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .gc-hero__veil {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.15);
        }

        .gc-hero__content {
            position: relative;
            z-index: 1;
            display: flex;
            height: 100%;
            align-items: center;
            justify-content: center;
            padding: 24px;
            text-align: center;
            color: #fff;
        }

        .gc-hero__title {
            margin: 0;
            max-width: 900px;
            color: #fff !important;
            font-size: clamp(42px, 5vw, 65px);
            font-weight: 700;
            line-height: 1.05;
            white-space: pre-line;
        }

        .gc-hero__subtitle {
            margin: 20px auto 0;
            max-width: 640px;
            color: rgba(255, 255, 255, 0.9) !important;
            font-size: clamp(16px, 1.4vw, 18px);
        }

        /* Crafting Atmosphere */
        .gc-atmosphere {
            position: relative;
            overflow: hidden;
            padding: 100px 0 90px;
        }

        .gc-atmosphere__mark {
            position: absolute;
            left: 0;
            top: 40px;
            width: min(28vw, 320px);
            height: min(42vw, 420px);
            pointer-events: none;
        }

        .gc-atmosphere__copy {
            position: relative;
            z-index: 1;
            max-width: 720px;
            margin: 0 auto;
            text-align: center;
        }

        .gc-atmosphere__copy h2 {
            margin: 0;
            color: var(--gc-navy) !important;
            font-size: 30px;
            font-weight: 700;
        }

        .gc-atmosphere__copy p {
            margin: 22px 0 0;
            color: var(--gc-ink) !important;
            font-size: 18px;
            line-height: 1.7;
            white-space: pre-line;
        }

        @media (max-width: 991px) {
            .gc-atmosphere__mark {
                opacity: 0.18;
                width: 200px;
                height: 260px;
                top: 20px;
            }
        }

        /* Finish rows — avoid class name "grid" (site Isotope) */
        .gc-finishes {
            padding-bottom: 40px;
        }

        .gc-finish {
            display: flex;
            align-items: center;
            gap: 64px;
            padding: 48px 0;
        }

        .gc-finish--flip {
            flex-direction: row-reverse;
        }

        .gc-finish__media,
        .gc-finish__copy {
            flex: 1 1 0;
            min-width: 0;
        }

        .gc-finish__media {
            position: relative;
        }

        .gc-finish__dot {
            position: absolute;
            left: -24px;
            top: -32px;
            width: 64px;
            height: 64px;
            border-radius: 999px;
            background: var(--gc-teal);
        }

        .gc-finish__media img {
            width: 100%;
            aspect-ratio: 4 / 3;
            object-fit: cover;
        }

        .gc-finish__copy h2 {
            margin: 0;
            padding-bottom: 12px;
            border-bottom: 1px solid #e5e5e5;
            color: var(--gc-navy) !important;
            font-size: clamp(36px, 3.5vw, 45px);
            font-weight: 700;
        }

        .gc-finish__copy > p {
            margin: 18px 0 0;
            max-width: 420px;
            color: var(--gc-ink) !important;
            font-size: 18px;
            line-height: 1.65;
        }

        .gc-specs {
            margin: 28px 0 0;
        }

        .gc-specs__row {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 24px;
            padding: 16px 0;
            border-bottom: 1px solid #e5e5e5;
        }

        .gc-specs__row dt {
            margin: 0;
            color: #000;
            font-size: 18px;
            font-weight: 600;
        }

        .gc-specs__row dd {
            margin: 0;
            max-width: 190px;
            text-align: right;
            color: var(--gc-ink);
            font-size: 14px;
            line-height: 1.4;
        }

        .gc-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-top: 32px;
            padding: 14px 22px;
            border: 1px solid var(--gc-navy);
            color: var(--gc-navy) !important;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            text-decoration: none !important;
            transition: background-color .2s ease, color .2s ease;
        }

        .gc-btn:hover {
            background: var(--gc-navy);
            color: #fff !important;
        }

        .gc-btn--light {
            border-color: #fff;
            color: #fff !important;
        }

        .gc-btn--light:hover {
            background: #fff;
            color: var(--gc-navy) !important;
        }

        .gc-banner {
            background: var(--gc-mist);
            padding: 56px 48px;
            margin: 24px 0 48px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 32px;
        }

        .gc-banner h2 {
            margin: 0;
            color: var(--gc-navy) !important;
            font-size: clamp(36px, 3.5vw, 45px);
            font-weight: 700;
        }

        .gc-banner p {
            margin: 16px 0 0;
            max-width: 720px;
            color: var(--gc-ink) !important;
            font-size: 18px;
            line-height: 1.65;
        }

        .gc-banner .gc-btn {
            margin-top: 0;
            flex-shrink: 0;
        }

        @media (max-width: 991px) {
            .gc-finish,
            .gc-finish--flip {
                flex-direction: column;
                gap: 28px;
                padding: 36px 0;
            }

            .gc-finish__dot {
                display: none;
            }

            .gc-banner {
                flex-direction: column;
                align-items: flex-start;
                padding: 36px 24px;
            }
        }

        /* Gallery — staggered brick rows matching XD */
        .gc-gallery {
            padding: 64px 0 80px;
            overflow: hidden;
        }

        .gc-gallery__title {
            margin: 0;
            text-align: center;
            color: var(--gc-navy) !important;
            font-size: clamp(36px, 3.5vw, 45px);
            font-weight: 700;
        }

        .gc-gallery__rule {
            width: 96px;
            height: 1px;
            margin: 14px auto 0;
            background: #e5e5e5;
        }

        .gc-gallery__rows {
            --gc-gap: 14px;
            /* half-tile stagger so row 2 starts under the center of row 1's first image */
            --gc-shift: calc((100% - (3 * var(--gc-gap))) / 9);
            margin-top: 48px;
            display: flex;
            flex-direction: column;
            gap: var(--gc-gap);
        }

        .gc-gallery__row {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: var(--gc-gap);
            width: calc(100% - var(--gc-shift));
            max-width: 100%;
        }

        .gc-gallery__row--offset-end {
            margin-left: 0;
            margin-right: auto;
        }

        .gc-gallery__row--offset-start {
            margin-left: var(--gc-shift);
            margin-right: 0;
        }

        .gc-gallery__row img {
            width: 100%;
            height: auto;
            aspect-ratio: 1 / 1;
            object-fit: cover;
            display: block;
        }

        @media (max-width: 767px) {
            .gc-gallery__rows {
                --gc-gap: 10px;
                --gc-shift: 0px;
            }

            .gc-gallery__row {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                width: 100%;
            }

            .gc-gallery__row--offset-end,
            .gc-gallery__row--offset-start {
                margin: 0;
            }
        }

        /* CTA */
        .gc-cta {
            position: relative;
            overflow: hidden;
            background: var(--gc-navy);
            padding: 96px 24px;
            text-align: center;
            color: #fff;
        }

        .gc-cta__mark {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 280px;
            pointer-events: none;
        }

        .gc-cta__copy {
            position: relative;
            z-index: 1;
            max-width: 640px;
            margin: 0 auto;
        }

        .gc-cta__copy h2 {
            margin: 0;
            color: var(--gc-teal) !important;
            font-size: clamp(28px, 3vw, 40px);
            font-weight: 700;
            line-height: 1.25;
        }

        .gc-cta__copy p {
            margin: 18px 0 0;
            color: #fff !important;
            font-size: 18px;
            line-height: 1.65;
        }

        @media (max-width: 991px) {
            .gc-cta__mark {
                display: none;
            }
        }
    </style>
</head>
<body>
    @include('includes.navbar')

    <main class="presentation-page">
        <section class="gc-hero">
            @if($hero = \App\Support\Media::url($site->hero_image))
                <img src="{{ $hero }}" alt="" class="gc-hero__media">
            @endif
            <div class="gc-hero__veil"></div>
            <div class="gc-hero__content">
                <div>
                    <h1 class="gc-hero__title">{{ $site->hero_title }}</h1>
                    <p class="gc-hero__subtitle">{{ $site->hero_subtitle }}</p>
                </div>
            </div>
        </section>

        <section class="gc-atmosphere">
            <div class="gc-shell" style="position: relative;">
                <div class="gc-atmosphere__mark" aria-hidden="true">
                    <svg viewBox="0 0 320 420" width="100%" height="100%" preserveAspectRatio="xMinYMid meet">
                        <path fill="#081C3A" d="M0 10c110 8 210 90 230 210 12 90-30 160-105 192H0V10z"/>
                        <circle cx="96" cy="318" r="96" fill="#45BAC5"/>
                    </svg>
                </div>
                <div class="gc-atmosphere__copy">
                    <h2>{{ $site->atmosphere_title }}</h2>
                    <p>{{ $site->atmosphere_body }}</p>
                </div>
            </div>
        </section>

        <div class="gc-finishes">
            <div class="gc-shell">
                @foreach($finishes as $finish)
                    @if($finish->layout === 'banner')
                        <section class="gc-banner">
                            <div>
                                <h2>{{ $finish->name }}</h2>
                                <p>{{ $finish->excerpt }}</p>
                            </div>
                            <a href="{{ route('finishes.show', $finish) }}" class="gc-btn">{{ $finish->button_label }}</a>
                        </section>
                    @else
                        <section class="gc-finish {{ $finish->layout === 'image-right' ? 'gc-finish--flip' : '' }}">
                            <div class="gc-finish__media">
                                @if($finish->layout === 'image-left')
                                    <span class="gc-finish__dot" aria-hidden="true"></span>
                                @endif
                                @if($image = \App\Support\Media::url($finish->image))
                                    <img src="{{ $image }}" alt="{{ $finish->name }}">
                                @endif
                            </div>
                            <div class="gc-finish__copy">
                                <h2>{{ $finish->name }}</h2>
                                <p>{{ $finish->excerpt }}</p>
                                <dl class="gc-specs">
                                    @foreach(is_array($finish->specs) ? $finish->specs : [] as $spec)
                                        <div class="gc-specs__row">
                                            <dt>{{ $spec['label'] ?? '' }}</dt>
                                            <dd>{{ $spec['value'] ?? '' }}</dd>
                                        </div>
                                    @endforeach
                                </dl>
                                <a href="{{ route('finishes.show', $finish) }}" class="gc-btn">{{ $finish->button_label }}</a>
                            </div>
                        </section>
                    @endif
                @endforeach
            </div>
        </div>

        <section class="gc-gallery">
            <div class="gc-shell">
                <h2 class="gc-gallery__title">{{ $site->gallery_title }}</h2>
                <div class="gc-gallery__rule"></div>
                <div class="gc-gallery__rows">
                    @php
                        $rowOne = $gallery->get(1, collect());
                        $rowTwo = $gallery->get(2, collect());
                        // Fall back to a mirrored row if row 2 is empty.
                        if ($rowTwo->isEmpty() && $rowOne->isNotEmpty()) {
                            $rowTwo = $rowOne->reverse()->values();
                        }
                    @endphp
                    <div class="gc-gallery__row gc-gallery__row--offset-end">
                        @foreach($rowOne as $image)
                            <img src="{{ \App\Support\Media::url($image->image) }}" alt="{{ $image->alt }}">
                        @endforeach
                    </div>
                    <div class="gc-gallery__row gc-gallery__row--offset-start">
                        @foreach($rowTwo as $image)
                            <img src="{{ \App\Support\Media::url($image->image) }}" alt="{{ $image->alt }}">
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="gc-cta">
            <div class="gc-cta__mark" aria-hidden="true">
                <svg viewBox="0 0 280 360" width="100%" height="100%" preserveAspectRatio="xMinYMid slice">
                    <path fill="#ffffff" d="M0 0h120c40 40 70 90 70 150v40H0V0z"/>
                    <path fill="#45BAC5" d="M0 170c70 0 120 50 120 120v70H0V170z"/>
                    <path fill="#ffffff" d="M0 280h150v80H0z"/>
                </svg>
            </div>
            <div class="gc-cta__copy">
                <h2>{{ $site->cta_title }}</h2>
                <p>{{ $site->cta_body }}</p>
                <a href="{{ route('sample.create') }}" class="gc-btn gc-btn--light">{{ $site->cta_button_label }}</a>
            </div>
        </section>

        <!-- contact-area -->
        <section class="contact-home-area pt-120 pb-120 p-relative fix" style="background-color: #222;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-xl-6">
                        <div class="section-title section-title3 center-align wow fadeInDown animated pr-80"
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
    </main>

    @include('includes.footer')
</body>
</html>
