@extends('frontend.layouts.master')

@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex align-items-center" style="background-image:url({{ asset('frontend/img/bg/bdrc-bg.jpg') }})">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <h2>Shop Details</h2>
                            <div class="breadcrumb-wrap">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Shop Detailsa</li>
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

    <!-- shop-banner-area start -->
    <section class="shop-banner-area pt-120 pb-90" data-animation="fadeInUp animated" data-delay=".2s">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="shop-thumb-tab mb-30">
                        <ul class="nav" id="myTab2" role="tablist">
                            @foreach(($product->product_images ?? []) as $index => $image)
                                <li class="nav-item">
                                    <a class="nav-link @if($index == 0) active @endif" id="image-tab-{{ $index }}" data-bs-toggle="tab" href="#image-{{ $index }}" aria-selected="true">
                                        <img src="{{ asset('storage/' . ltrim($image, '/')) }}" alt="Product Image">

                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="product-details-img mb-30">
                        <div class="tab-content" id="myTabContent2">
                            @foreach(($product->product_images ?? []) as $index => $image)
                                <div class="tab-pane fade @if($index == 0) show active @endif" id="image-{{ $index }}" role="tabpanel">
                                    <div class="product-large-img">
                                        <img src="{{ asset('storage/' . ltrim($image, '/')) }}" alt="Product Image">

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="product-details mb-30">
                        <div class="product-details-title">
                            <h1>{{ $product->title }}</h1>
                        </div>
                        <p>{!! $product->description !!}</p>
                        <div class="product-cat mt-30 mb-30">
                            <span>Category: </span>
                            <a href="#">{{ $product->category->name }}</a>
                        </div>
                        <div class="product-social mt-45">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-x-twitter"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop-banner-area end -->

    <!-- product-desc-area start -->
    <section class="product-desc-area pb-55">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bakix-details-tab">
                        <ul class="nav text-center justify-content-center pb-30 mb-50" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="desc-tab" data-bs-toggle="tab" href="#id-desc" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="id-add-in" data-bs-toggle="tab" href="#id-add" aria-selected="false">Additional Information</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="id-desc" role="tabpanel" aria-labelledby="desc-tab">
                            <div class="event-text mb-40">
                                <p>{!! $product->description !!}</p> <!-- Allows proper rendering of HTML -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="id-add" role="tabpanel" aria-labelledby="id-add-in">
                            <div class="additional-info">
                                <div class="table-responsive">
                                    <h4>Additional Information</h4>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Additional Information</th>
                                                <td>{{ $product->additional_information }}</td>
                                            </tr>
                                            <!-- Add more information fields here if needed -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-desc-area end -->
@endsection
