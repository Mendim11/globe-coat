@extends('layouts.app')

@section('content')
    <section class="bg-navy px-6 py-20 text-center text-white">
        <h1 class="text-[40px] font-bold text-teal lg:text-[45px]">{{ $site->cta_title }}</h1>
        <p class="mx-auto mt-4 max-w-2xl text-[18px]">{{ $site->cta_body }}</p>
    </section>

    <section class="mx-auto max-w-xl px-6 py-16">
        @if(session('status'))
            <p class="mb-6 border border-teal/30 bg-teal/10 px-4 py-3 text-sm text-navy">{{ session('status') }}</p>
        @endif

        <form action="{{ route('inquiries.store') }}" method="POST" class="space-y-5">
            @csrf
            <input type="hidden" name="type" value="sample">
            <div class="hidden" aria-hidden="true">
                <input type="text" name="company_website" tabindex="-1" autocomplete="off">
            </div>

            <label class="block">
                <span class="text-[12px] font-semibold uppercase tracking-[0.12em] text-navy">Name</span>
                <input name="first_name" value="{{ old('type') === 'sample' ? old('first_name') : '' }}" required class="mt-2 w-full border-b border-neutral-300 bg-transparent py-3 text-navy focus:border-teal focus:outline-none">
            </label>
            <label class="block">
                <span class="text-[12px] font-semibold uppercase tracking-[0.12em] text-navy">Email</span>
                <input type="email" name="email" value="{{ old('type') === 'sample' ? old('email') : '' }}" required class="mt-2 w-full border-b border-neutral-300 bg-transparent py-3 text-navy focus:border-teal focus:outline-none">
            </label>
            <label class="block">
                <span class="text-[12px] font-semibold uppercase tracking-[0.12em] text-navy">Phone</span>
                <input name="phone" value="{{ old('type') === 'sample' ? old('phone') : '' }}" class="mt-2 w-full border-b border-neutral-300 bg-transparent py-3 text-navy focus:border-teal focus:outline-none">
            </label>
            <label class="block">
                <span class="text-[12px] font-semibold uppercase tracking-[0.12em] text-navy">Project notes</span>
                <textarea name="message" rows="4" class="mt-2 w-full border-b border-neutral-300 bg-transparent py-3 text-navy focus:border-teal focus:outline-none">{{ old('type') === 'sample' ? old('message') : '' }}</textarea>
            </label>
            @if($errors->any() && old('type') === 'sample')
                <p class="text-sm text-red-600">{{ $errors->first() }}</p>
            @endif
            <button type="submit" class="bg-teal px-6 py-3 text-[12px] font-semibold uppercase tracking-[0.14em] text-white hover:bg-navy">
                Request sample set
            </button>
        </form>
    </section>
@endsection
