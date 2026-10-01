@php
    $tel = '+'.preg_replace('/\D+/', '', explode(',', $site->phone ?? '')[0] ?? '');
@endphp

<header class="flex flex-col gap-4 bg-white px-6 py-5 sm:flex-row sm:items-center sm:px-8 lg:h-[88px] lg:px-10">
    <x-logo />
    <div class="hidden h-px flex-1 bg-neutral-200 sm:block"></div>
    <div class="flex flex-wrap items-center gap-6 sm:gap-8">
        <a href="tel:{{ $tel }}" class="flex items-center gap-3">
            <span class="flex h-10 w-10 items-center justify-center rounded-full text-teal">
                <svg viewBox="0 0 24 24" class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="1.4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 3.5h3.2l1.2 3.2-2 1.2a12.5 12.5 0 0 0 6.2 6.2l1.2-2 3.2 1.2V16.5A2 2 0 0 1 18 18.5 14.5 14.5 0 0 1 3.5 4a2 2 0 0 1 2-2.5z"/>
                    <path stroke-linecap="round" d="M15.5 5.5a3 3 0 0 1 3 3"/>
                </svg>
            </span>
            <span>
                <span class="block text-[12px] text-ink/80">{{ $site->phone_label }}</span>
                <span class="block text-[15px] font-semibold text-navy">{{ $site->phone }}</span>
            </span>
        </a>
        <a href="mailto:{{ $site->email }}" class="flex items-center gap-3">
            <span class="flex h-10 w-10 items-center justify-center text-teal">
                <svg viewBox="0 0 24 24" class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="1.4">
                    <rect x="3" y="5" width="18" height="14" rx="2"/>
                    <path d="m4 7 8 6 8-6"/>
                </svg>
            </span>
            <span>
                <span class="block text-[12px] text-ink/80">{{ $site->email_label }}</span>
                <span class="block text-[15px] font-semibold text-navy">{{ $site->email }}</span>
            </span>
        </a>
    </div>
</header>
