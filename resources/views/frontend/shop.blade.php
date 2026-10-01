@extends('frontend.layouts.master')

@section('content')
<style>
p.text-sm.text-gray-700.leading-5.dark\:text-gray-400{
    margin-top: 10px;
}
.pagination-wrap svg {
    display: none !important;
}
.pagination-wrap nav {
    display: inline-block;
}
</style>
<main>
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex align-items-center" style="background-image:url({{ asset('frontend/img/bg/bdrc-bg.jpg') }})">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <h2>Shop</h2>
                            <div class="breadcrumb-wrap">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Shop</li>
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

    <!-- shop-area -->
    <section class="shop-area pt-120 pb-120 p-relative" data-animation="fadeInUp animated" data-delay=".2s">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <h6 class="mt-20 mb-30">Showing {{ $products->count() }} of {{ $totalProducts }} results</h6>
                </div>
                <div class="col-lg-6 col-sm-6 text-right">
                    <form method="GET" action="{{ route('shop') }}">
                        <select name="orderby" class="orderby" aria-label="Shop order" onchange="this.form.submit()">
                            <option value="menu_order" {{ $sortOption == 'menu_order' ? 'selected' : '' }}>Default sorting</option>
                            <option value="popularity" {{ $sortOption == 'popularity' ? 'selected' : '' }}>Sort by popularity</option>
                            <option value="rating" {{ $sortOption == 'rating' ? 'selected' : '' }}>Sort by average rating</option>
                            <option value="date" {{ $sortOption == 'date' ? 'selected' : '' }}>Sort by latest</option>
                            <option value="price" {{ $sortOption == 'price' ? 'selected' : '' }}>Sort by price: low to high</option>
                            <option value="price-desc" {{ $sortOption == 'price-desc' ? 'selected' : '' }}>Sort by price: high to low</option>
                        </select>
                    </form>
                </div>
            </div>
            <div class="row align-items-center">
                @foreach($products as $product)
                <div class="col-lg-4 col-md-6">
                    <div class="product mb-40">
                        <div class="product__img">
                            <a href="{{ route('shop.details', $product->slug) }}">
                                <img src="{{ asset('storage/' . $product->thumbnail_image) }}" alt="{{ $product->title }}">

                            </a>
                            <div class="product-action text-center">
                                <a href="{{ route('shop.details', $product->slug) }}">View Details</a>
                            </div>
                        </div>
                        <div class="product__content text-center pt-30">
                            <span class="pro-cat"><a href="#">{{ $product->category->name }}</a></span>
                            <h4 class="pro-title"><a href="{{ route('shop.details', $product->slug) }}">{{ $product->title }}</a></h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="pagination-wrap mt-50 text-center">
                        {{ $products->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop-area-end -->
</main>

@endsection
