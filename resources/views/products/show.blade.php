@extends('layouts.main')

@section('content')
@if($product->additional_photos)
    <div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($product->additional_photos as $photo)
                    <div class="swiper-slide">
                        <a href="{{ $photo->url }}" class="grid image-link">
                            <img src="{{ $photo->url }}" class="img-fluid" alt="#">
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination swiper-pagination-white"></div>
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
    </div>
@endif
<section class="reserve-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>{{ $product->name }}</h5>
            </div>
            <div class="col-md-6">
                <div class="reserve-seat-block">
                    <div class="reserve-rating">
                        <span>{{ $product->getPrice() }}</span>
                    </div>
                    @if($product->created_by)
                        <div class="reserve-btn">
                            <div class="featured-btn-wrap">
                                <a href="{{ route('products.index', ['subdomain' => $product->created_by->subdomain]) }}" class="btn btn-danger">GO TO SHOP</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<section class="light-bg booking-details_wrap">
    <div class="container">
        <div class="row">
            <div class="col responsive-wrap">
                <div class="booking-checkbox_wrap">
                    <div class="booking-checkbox">
                        <p>{{ $product->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
@endsection

@section('scripts')
<script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>  
<script src="{{ asset('js/swiper.min.js') }}"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
<script>
    if ($('.image-link').length) {
        $('.image-link').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    }
    if ($('.image-link2').length) {
        $('.image-link2').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    }
</script>
@endsection