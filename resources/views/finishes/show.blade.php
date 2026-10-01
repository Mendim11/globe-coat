@extends('layouts.app')

@section('title', $finish->name.' — Globe Coat')

@section('content')

    <section class="border-b border-neutral-200 px-6 py-4 text-sm text-ink lg:px-20">
        <a href="{{ route('home') }}" class="hover:text-teal">Home</a>
        <span class="px-2 text-neutral-300">/</span>
        <span class="text-navy">{{ $finish->name }}</span>
    </section>

    @if($image = \App\Support\Media::url($finish->image))
        <img src="{{ $image }}" alt="{{ $finish->name }}" class="h-[420px] w-full object-cover">
    @endif

    <section class="mx-auto grid max-w-6xl gap-12 px-6 py-16 lg:grid-cols-[1.2fr_0.8fr] lg:px-10">
        <div>
            <h1 class="text-[45px] font-bold text-navy">{{ $finish->name }}</h1>
            <p class="mt-6 text-[18px] leading-relaxed text-ink">{{ $finish->body ?: $finish->excerpt }}</p>
            <x-outline-button :href="route('sample.create')" class="mt-10">Request Sample Set</x-outline-button>
        </div>
        <dl class="border-t border-neutral-200">
            @foreach($finish->specs ?? [] as $spec)
                <div class="flex items-start justify-between gap-6 border-b border-neutral-200 py-4">
                    <dt class="text-[18px] font-semibold text-black">{{ $spec['label'] ?? '' }}</dt>
                    <dd class="max-w-[200px] text-right text-[14px] text-ink">{{ $spec['value'] ?? '' }}</dd>
                </div>
            @endforeach
        </dl>
    </section>
@endsection
