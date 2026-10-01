@props(['href' => '#', 'variant' => 'navy'])

@php
    $classes = $variant === 'light'
        ? 'border-white text-white hover:bg-white hover:text-navy'
        : 'border-navy text-navy hover:bg-navy hover:text-white';
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => "inline-flex items-center justify-center border px-5 py-3 text-[12px] font-semibold uppercase tracking-[0.12em] transition {$classes}"]) }}>
    {{ $slot }}
</a>
