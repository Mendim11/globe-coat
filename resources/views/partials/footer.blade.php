@php
    $tel = '+'.preg_replace('/\D+/', '', explode(',', $site->phone ?? '')[0] ?? '');
@endphp

<footer>
    <section id="contact" class="bg-footer px-6 py-16 text-white sm:px-10 lg:px-16 lg:py-20">
        <div class="grid gap-14 lg:grid-cols-2 lg:gap-20">
            <div>
                <p class="flex items-center gap-2 text-[12px] font-semibold uppercase tracking-[0.16em] text-white/80">
                    <span class="text-teal">▸</span> {{ $site->footer_kicker }}
                </p>
                <h2 class="mt-4 text-[36px] font-bold leading-tight text-white lg:text-[42px]">{{ $site->footer_heading }}</h2>
                <p class="mt-4 max-w-md text-[15px] leading-relaxed text-white/70">{{ $site->footer_intro }}</p>
                <div class="mt-8 flex flex-wrap items-center gap-6 text-[16px] font-semibold">
                    <a href="tel:{{ $tel }}" class="hover:text-teal">{{ $site->phone }}</a>
                    <a href="#contact-form" class="inline-flex items-center gap-2 hover:text-teal">
                        <span class="h-2 w-2 rounded-full bg-teal"></span>
                        {{ $site->chat_label }}
                    </a>
                </div>
                <div class="mt-8 flex gap-3">
                    @foreach([
                        'facebook_url' => 'Facebook',
                        'instagram_url' => 'Instagram',
                        'x_url' => 'X',
                        'youtube_url' => 'YouTube',
                    ] as $key => $label)
                        @if(filled($site->{$key}))
                            <a href="{{ $site->{$key} }}" aria-label="{{ $label }}" class="flex h-9 w-9 items-center justify-center rounded-full border border-white/25 text-[11px] font-semibold uppercase text-white/80 hover:border-teal hover:text-teal" target="_blank" rel="noreferrer">
                                {{ $label === 'Instagram' ? 'Ig' : ($label === 'YouTube' ? 'Yt' : substr($label, 0, 1)) }}
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>

            <form id="contact-form" action="{{ route('inquiries.store') }}" method="POST" class="lg:pt-8">
                @csrf
                <input type="hidden" name="type" value="contact">
                <div class="hidden" aria-hidden="true">
                    <input type="text" name="company_website" tabindex="-1" autocomplete="off">
                </div>

                @if(session('status') && old('type', 'contact') !== 'sample')
                    <p class="mb-6 border border-teal/40 bg-teal/10 px-4 py-3 text-sm text-teal">{{ session('status') }}</p>
                @endif

                <div class="grid gap-x-10 sm:grid-cols-2">
                    <label class="flex items-center gap-3 border-b border-white/20 py-4">
                        <svg viewBox="0 0 24 24" class="h-4 w-4 shrink-0 text-white/50" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="8" r="3"/><path d="M5 19c1.5-3 4-4.5 7-4.5S17.5 16 19 19"/></svg>
                        <input name="first_name" value="{{ old('type') === 'contact' ? old('first_name') : '' }}" placeholder="First Name" class="w-full bg-transparent text-sm text-white placeholder:text-white/45 focus:outline-none" required>
                    </label>
                    <label class="flex items-center gap-3 border-b border-white/20 py-4">
                        <svg viewBox="0 0 24 24" class="h-4 w-4 shrink-0 text-white/50" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m4 7 8 6 8-6"/></svg>
                        <input type="email" name="email" value="{{ old('type') === 'contact' ? old('email') : '' }}" placeholder="Email" class="w-full bg-transparent text-sm text-white placeholder:text-white/45 focus:outline-none" required>
                    </label>
                    <label class="flex items-center gap-3 border-b border-white/20 py-4">
                        <svg viewBox="0 0 24 24" class="h-4 w-4 shrink-0 text-white/50" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M7 3.5h3l1 3-2 1a11 11 0 0 0 5.5 5.5l1-2 3 1V17a2 2 0 0 1-2 2A13 13 0 0 1 4 6a2 2 0 0 1 2-2.5z"/></svg>
                        <input name="phone" value="{{ old('type') === 'contact' ? old('phone') : '' }}" placeholder="Phone No" class="w-full bg-transparent text-sm text-white placeholder:text-white/45 focus:outline-none">
                    </label>
                    <label class="flex items-center gap-3 border-b border-white/20 py-4">
                        <svg viewBox="0 0 24 24" class="h-4 w-4 shrink-0 text-white/50" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M5 5h14v10H8l-3 3V5z"/></svg>
                        <input name="subject" value="{{ old('type') === 'contact' ? old('subject') : '' }}" placeholder="Subject" class="w-full bg-transparent text-sm text-white placeholder:text-white/45 focus:outline-none">
                    </label>
                </div>
                <label class="mt-2 flex items-start gap-3 border-b border-white/20 py-4">
                    <svg viewBox="0 0 24 24" class="mt-0.5 h-4 w-4 shrink-0 text-white/50" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M5 6h14M5 12h9M5 18h6"/></svg>
                    <textarea name="message" rows="2" placeholder="Write comments" class="w-full resize-none bg-transparent text-sm text-white placeholder:text-white/45 focus:outline-none">{{ old('type') === 'contact' ? old('message') : '' }}</textarea>
                </label>
                @if($errors->any() && old('type') === 'contact')
                    <p class="mt-3 text-sm text-red-300">{{ $errors->first() }}</p>
                @endif
                <button type="submit" class="mt-8 inline-flex items-center gap-2 bg-teal px-6 py-3 text-[12px] font-semibold uppercase tracking-[0.14em] text-white transition hover:bg-white hover:text-navy">
                    <span aria-hidden="true">➜</span> Submit now
                </button>
            </form>
        </div>
    </section>

    <section class="bg-white px-6 py-10 sm:px-10 lg:px-16">
        <div class="grid items-center gap-8 border-b border-neutral-200 pb-10 md:grid-cols-[auto_1fr_1fr]">
            <x-logo />
            <div class="md:border-l md:border-neutral-200 md:pl-8">
                <p class="text-[11px] font-semibold uppercase tracking-[0.16em] text-ink/60">Email us here</p>
                <a href="mailto:{{ $site->email }}" class="mt-1 block text-[15px] font-semibold text-navy">{{ $site->email }}</a>
            </div>
            <div class="md:border-l md:border-neutral-200 md:pl-8">
                <p class="text-[11px] font-semibold uppercase tracking-[0.16em] text-ink/60">Office address</p>
                <p class="mt-1 text-[15px] font-semibold text-navy">Mail Us: {{ $site->email }}</p>
            </div>
        </div>

        <div class="grid gap-10 bg-[radial-gradient(circle,rgba(8,28,58,0.06)_16px,transparent_17px)] bg-[length:76px_76px] py-14 md:grid-cols-3">
            <div>
                <h3 class="max-w-[220px] text-[28px] font-bold leading-tight text-neutral-900">{{ $site->together_heading }}</h3>
                <a href="#contact" class="mt-4 inline-block text-[15px] text-ink underline-offset-4 hover:text-teal hover:underline">{{ $site->together_link_label }}</a>
            </div>
            <div>
                <h3 class="text-[28px] font-bold text-neutral-900">Office Address</h3>
                <p class="mt-4 max-w-xs text-[15px] leading-relaxed text-ink">{{ $site->address }}</p>
            </div>
            <div>
                <h3 class="text-[28px] font-bold text-neutral-900">Our Services</h3>
                <ul class="mt-4 space-y-2 text-[15px] text-ink">
                    @foreach($services as $service)
                        <li>
                            @if(filled($service->url))
                                <a href="{{ $service->url }}" class="hover:text-teal">{{ $service->name }}</a>
                            @else
                                {{ $service->name }}
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
</footer>
