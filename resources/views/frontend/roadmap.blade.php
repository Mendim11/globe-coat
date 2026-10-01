@include('includes.head')

<body>
    @include('includes.navbar')

    <main>
        <section class="pt-120 pb-120 p-relative fix" style="overflow:hidden;">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-9">
                        <div class="section-title text-center mb-40 wow fadeInDown animated" data-animation="fadeInDown"
                            data-delay=".2s">
                            <h5 style="color:#7aa2ff;"><i class="fa-regular fa-angle-right"></i> Our Journey Through the
                                Years</h5>
                            <h2 style="color:#000000;">Globecoat Roadmap</h2>
                        </div>
                        <p class="lead" style="color:#000000;opacity:.9;">{!! $intro !!}</p>
                    </div>
                </div>
            </div>

            <div class="container pt-60">
                <div class="timeline">
                    @foreach($items as $i => $item)
                        <div class="timeline-item wow fadeInUp animated" data-animation="fadeInUp"
                            data-delay="{{ (0.05 * ($i + 1)) . 's' }}">
                            <div class="timeline-dot"></div>
                            <div class="timeline-card">
                                <div class="timeline-meta">
                                    <span class="year">{{ $item['year'] }}</span>
                                    @if(!empty($item['location']))
                                        <span class="location"><i class="fa-regular fa-location-dot"></i>
                                            {{ $item['location'] }}</span>
                                    @endif
                                </div>
                                <h3 class="title">{{ $item['title'] }}</h3>
                                @if(!empty($item['description']))
                                    <p class="desc">{{ $item['description'] }}</p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>

    @include('includes.footer')

    <style>
        .timeline {
            position: relative;
            padding-left: 22px;
            margin-left: 15px;
            --dot-size: 16px;
            --line-width: 2px
        }

        .timeline:before {
            content: "";
            position: absolute;
            left: calc(var(--dot-size) / 1 - var(--line-width) / 2 + 14px);
            top: 0;
            bottom: 0;
            width: var(--line-width);
            background: linear-gradient(180deg, #2a2f3a, #5b86e5)
        }

        .timeline-item {
            position: relative;
            margin: 0 0 28px 0
        }

        .timeline-dot {
            position: absolute;
            left: 0;
            top: 8px;
            width: var(--dot-size);
            height: var(--dot-size);
            border-radius: 50%;
            background: #5b86e5;
            box-shadow: 0 0 0 6px rgba(91, 134, 229, .15);
            animation: pulse 2.5s infinite
        }

        .timeline-card {
            margin-left: 32px;
            background: #151923;
            border: 1px solid rgba(255, 255, 255, .06);
            border-radius: 12px;
            padding: 18px 20px;
            transition: transform .25s ease, box-shadow .25s ease
        }

        .timeline-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, .35)
        }

        .timeline-meta {
            display: flex;
            gap: 12px;
            align-items: center;
            margin-bottom: 6px
        }

        .timeline-meta .year {
            font-weight: 700;
            color: #a5b4fc;
            letter-spacing: .4px
        }

        .timeline-meta .location {
            color: #94a3b8;
            font-size: .92rem
        }

        .timeline-card .title {
            color: #e5e7eb;
            font-size: 1.15rem;
            margin: 6px 0
        }

        .timeline-card .desc {
            color: #cbd5e1;
            margin: 0
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 6px rgba(91, 134, 229, .18)
            }

            50% {
                box-shadow: 0 0 0 10px rgba(91, 134, 229, .05)
            }

            100% {
                box-shadow: 0 0 0 6px rgba(91, 134, 229, .18)
            }
        }
    </style>

    <script>
        // subtle stagger animation on scroll for timeline cards
        (function () {
            const items = document.querySelectorAll('.timeline-item');
            const io = new IntersectionObserver((entries) => {
                entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); } });
            }, { threshold: .08 });
            items.forEach(i => io.observe(i));
        })();
    </script>
</body>