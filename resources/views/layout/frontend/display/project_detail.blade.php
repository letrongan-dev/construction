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
                        <h2>{{$projectDetail->name_project}}</h2>
                        <nav aria-label="breadcrumb ">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">{{$projectDetail->name_project}}</a></li> 
                            </ol>
                        </nav>
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
                        <img src='{{asset("public/frontend/assets/img/gallery/project_details.jpg")}}' alt="">
                    </div>
                    <div class="details-caption">
                        <p>{!!$projectDetail->description!!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Details End -->
</main>
@endsection