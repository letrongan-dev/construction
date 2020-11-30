@extends('layout.frontend.default')
@section('content')
<main>
<!-- slider Area Start-->
<div class="slider-area ">
    <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{asset('public/frontend/assets/img/hero/about.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap pt-100">
                        <h2>Services</h2>
                        <nav aria-label="breadcrumb ">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Services</a></li> 
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->
<!-- Services Area Start -->
<div class="services-area1 section-padding30">
    <div class="container">
        <!-- section tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle mb-55">
                    <div class="front-text">
                        <h2 class="">Our Services</h2>
                    </div>
                    <span class="back-text">Services</span>
                </div>
            </div>
        </div>
        <div class="row">
        	@foreach($services as $ser)
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-service-cap mb-30">
                    <div class="service-img">
                        <img src='{{asset("public/frontend/img/service/".$ser->banner)}}' alt="">
                    </div>
                    <div class="service-cap">
                        <h4><a href="{{URL::to('service/details/'.$ser->slug)}}">{{$ser->title}}</a></h4>
                        <a href="{{URL::to('service/details/'.$ser->slug)}}" class="more-btn">Read More <i class="ti-plus"></i></a>
                    </div>
                    <div class="service-icon">
                        <img src="assets/img/icon/services_icon1.png" alt="">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Services Area End -->
</main>
@endsection