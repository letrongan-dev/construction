@extends('layout.frontend.default')
@section('content')
<main>
<!-- slider Area Start-->
<div class="slider-area ">
    <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{asset('public/frontend/assets/img/hero/about.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-8">
                    <div class="hero-cap hero-cap2 pt-120">
                        <h2>{{$serviceDetail->title}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->
<!-- Services Details Start -->
<div class="services-details-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="single-services section-padding2">
                    <div class="details-img mb-40">
                        <img src='{{asset("public/frontend/assets/img/gallery/services_details.png")}}' alt="">
                    </div>
                    <div class="details-caption">
                        <p>{!!$serviceDetail->description!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Details End -->
</main>
@endsection