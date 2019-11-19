@extends('layouts.main')

@section('content')
<!-- SLIDER -->
<section class="slider d-flex align-items-center">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="slider-title_box">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-content_wrap">
                                <h1>{{ $shop->name }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-block light-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="styled-heading">
                    <h3>Products</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($shop->products as $product)
                <div class="col-md-4 featured-responsive">
                    <div class="featured-place-wrap">
                        <a href="detail.html">
                            <img src="{{ $product->main_photo ? $product->main_photo->getUrl() : asset('images/no-image.jpg') }}" class="img-fluid" alt="#">
                            <div class="featured-title-box">
                                <h6>{{ $product->name }}</h6>
                                <p class="mt-3">{{ Str::limit($product->description, 100) }}</p>
                                <div class="bottom-icons">
                                    <div class="price">{{ $product->getPrice() }}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection