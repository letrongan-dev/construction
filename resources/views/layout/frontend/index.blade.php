@extends('layout.frontend.default')
@section('content')
<!-- slider Area Start-->
<main>
<div class="slider-area ">
    <div class="slider-active">
        <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="{{asset('public/frontend/assets/img/hero/h1_hero.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-11">
                        <div class="hero__caption">
                            <div class="hero-text1">
                                <span data-animation="fadeInUp" data-delay=".3s">hand car wash and detailing service</span>
                            </div>
                            <h1 data-animation="fadeInUp" data-delay=".5s">advanced</h1>
                            <div class="stock-text" data-animation="fadeInUp" data-delay=".8s">
                                <h2>Construction</h2>
                                <h2>Construction</h2>
                            </div>
                            <div class="hero-text2 mt-110" data-animation="fadeInUp" data-delay=".9s">
                               <span><a href="services.html">Our Services</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="{{asset('public/frontend/assets/img/hero/h1_hero.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-11">
                        <div class="hero__caption">
                            <div class="hero-text1">
                                <span data-animation="fadeInUp" data-delay=".3s">hand car wash and detailing service</span>
                            </div>
                            <h1 data-animation="fadeInUp" data-delay=".5s">advanced</h1>
                            <div class="stock-text" data-animation="fadeInUp" data-delay=".8s">
                                <h2>Construction</h2>
                                <h2>Construction</h2>
                            </div>
                            <div class="hero-text2 mt-110" data-animation="fadeInUp" data-delay=".9s">
                                <span><a href="services.html">Our Services</a></span>
                            </div>
                        </div>
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
                        <img src="{{asset('public/frontend/img/service/'.$ser->banner)}}" alt="">
                    </div>
                    <div class="service-cap">
                        <h4><a href="services_details.html">{{$ser->title}}</a></h4>
                        <a href="{{URL::to('/services/details/'.$ser->slug)}}" class="more-btn">Read More <i class="ti-plus"></i></a>
                    </div>
                    <div class="service-icon">
                        <img src="{{asset('public/frontend/assets/img/icon/services_icon1.png')}}" alt="">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Services Area End -->
<!-- About Area Start -->
<section class="support-company-area fix pt-10">
    <div class="support-wrapper align-items-end">
        @foreach($infos as $info)
        <div class="left-content">
            <!-- section tittle -->
            <div class="section-tittle section-tittle2 mb-55">
                <div class="front-text">
                    <h2 class="">Who we are</h2>
                </div>
                <span class="back-text">About us</span>
            </div>
            <div class="support-caption">
                <p class="pera-top">Tổng Công ty Xây dựng Hà Nội CTCP (HANCORP) là; một trong những doanh nghiệp đầu ngành trong lĩnh vực thi công xây lắp đầu tư về hạ tầng....</p>
                <a class="btn red-btn2" data-toggle="modal" data-target="#mediumModal">read more</a>
            </div>
        </div>
        <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mediumModalLabel">Giới thiệu công ty</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            {!!$info->about_description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="right-content">
            <!-- img -->
            <div class="right-img">
                <img src="{{ asset('public/frontend/assets/img/gallery/safe_in.png')}}" alt="">
            </div>
            <div class="support-img-cap text-center">
                <span>1994</span>
                <p>Since</p>
            </div>
        </div>
    </div>
</section>
<!-- About Area End -->
<!-- Project Area Start -->
<section class="project-area  section-padding30">
    <div class="container">
       <div class="project-heading mb-35">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle3">
                        <div class="front-text">
                            <h2 class="">Our Projects</h2>
                        </div>
                        <span class="back-text">Gellary</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="properties__button">
                        <!--Nav Button  -->                                            
                        <nav> 
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false"> Show  all </a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> Intorior</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Recent</a>
                                <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Big building</a>
                                <a class="nav-item nav-link" id="nav-technology" data-toggle="tab" href="#nav-techno" role="tab" aria-controls="nav-contact" aria-selected="false">Park</a>
                            </div>
                        </nav>
                        <!--End Nav Button  -->
                    </div>
                </div>
            </div>
       </div>
        <div class="row">
            <div class="col-12">
                <!-- Nav Card -->
                <div class="tab-content active" id="nav-tabContent">
                    <!-- card ONE -->
                    <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">           
                        <div class="project-caption">
                            <div class="row">
                                @foreach($projects as $pro)
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src="{{ asset('public/frontend/img/project/'.$pro->banner)}}" alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="{{URL::to('/project/details/'.$pro->slug)}}" class="plus-btn"><i class="ti-plus"></i></a>
                                            <h4><a href="{{URL::to('/project/details/'.$pro->slug)}}">{{$pro->name_project}}</a></h4>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Card TWO -->
                    <!-- <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="project-caption">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src="{{asset('public/frontend/assets/img/gallery/project5.png')}}" alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src="{{asset('public/frontend/assets/img/gallery/project6.png')}}" alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src="{{asset('public/frontend/assets/img/gallery/project1.png')}}" alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src="{{asset('public/frontend/assets/img/gallery/project2.png')}}" alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src="{{asset('public/frontend/assets/img/gallery/project3.png')}}" alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src="{{asset('public/frontend/assets/img/gallery/project4.png')}}" alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="project-caption">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src="{{asset('public/frontend/assets/img/gallery/project3.png')}}" alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src="{{asset('public/frontend/assets/img/gallery/project4.png')}}" alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src="{{asset('public/frontend/assets/img/gallery/project1.png')}}" alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src="{{asset('public/frontend/assets/img/gallery/project2.png')}}" alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src="{{asset('public/frontend/assets/img/gallery/project5.png')}}" alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src="{{asset('public/frontend/assets/img/gallery/project6.png')}}" alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                        <div class="project-caption">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src="{{asset('public/frontend/assets/img/gallery/project1.png')}}" alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src="{{asset('public/frontend/assets/img/gallery/project2.png')}}" alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src="{{asset('public/frontend/assets/img/gallery/project3.png')}}" alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src="{{asset('public/frontend/assets/img/gallery/project4.png')}}" alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src="{{asset('public/frontend/assets/img/gallery/project5.png')}}" alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src="{{asset('public/frontend/assets/img/gallery/project6.png')}}" alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="nav-techno" role="tabpanel" aria-labelledby="nav-technology">
                        <div class="project-caption">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src="{{asset('public/frontend/assets/img/gallery/project1.png')}}" alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src="{{asset('public/frontend/assets/img/gallery/project2.png')}}" alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src="{{asset('public/frontend/assets/img/gallery/project3.png')}}" alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src="{{asset('public/frontend/assets/img/gallery/project4.png')}}" alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src="{{asset('public/frontend/assets/img/gallery/project5.png')}}" alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-project mb-30">
                                        <div class="project-img">
                                            <img src="{{asset('public/frontend/assets/img/gallery/project6.png')}}" alt="">
                                        </div>
                                        <div class="project-cap">
                                            <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                           <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                            <h4><a href="project_details.html">Factory</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            <!-- End Nav Card -->
            </div>
        </div>
    </div>
</section>
<!-- Project Area End -->
<!-- contact with us Start -->
<section class="contact-with-area" data-background="{{asset('public/frontend/assets/img/gallery/section-bg2.jpg')}}">
</section>
<!-- contact with us End-->
<!-- CountDown Area Start -->
<div class="count-area">
    <div class="container">
        <div class="count-wrapper count-bg" data-background="assets/img/gallery/section-bg3.jpg">
            <div class="row justify-content-center" >
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="count-clients">
                        <div class="single-counter">
                            <div class="count-number">
                                <span class="counter">34</span>
                            </div>
                            <div class="count-text">
                                <p>Machinery</p>
                                <h5>Tools</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="count-clients">
                        <div class="single-counter">
                            <div class="count-number">
                                <span class="counter">76</span>
                            </div>
                            <div class="count-text">
                                <p>Team</p>
                                <h5>Person</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="count-clients">
                        <div class="single-counter">
                            <div class="count-number">
                                <span class="counter">20</span>
                            </div>
                            <div class="count-text">
                                <p>Project</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CountDown Area End -->
<!-- Team Start -->
<div class="team-area section-padding30">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <!-- Section Tittle -->
                <div class="section-tittle section-tittle5 mb-50">
                    <div class="front-text">
                        <h2 class="">Our team</h2>
                    </div>
                    <span class="back-text">exparts</span>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- single Tem -->
            @foreach($teams as $u)
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                <div class="single-team mb-30">
                    <div class="team-img">
                        <img src="{{asset('public/frontend/img/user/'.$u->avatar_user)}}" alt="">
                    </div>
                    <div class="team-caption">
                        @foreach($role as $r)
                        @if($u->role_id == $r->id_role)
                        <span>{{$r->description_role}}</span>
                        @endif
                        @endforeach
                        <h3>{{$u->name_user}}</h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team End -->
<!-- Testimonial Start -->
<div class="testimonial-area t-bg testimonial-padding">
    <div class="container ">
        <div class="row">
            <div class="col-xl-12">
                <!-- Section Tittle -->
                <div class="section-tittle section-tittle6 mb-50">
                    <div class="front-text">
                        <h2 class="">Testimonial</h2>
                    </div>
                    <span class="back-text">Feedback</span>
                </div>
            </div>
        </div>
       <div class="row">
            <div class="col-xl-10 col-lg-11 col-md-10 offset-xl-1">
                <div class="h1-testimonial-active">
                    @foreach($feedbacks as $feedback)
                    <!-- Single Testimonial -->
                    <div class="single-testimonial">
                         <!-- Testimonial Content -->
                        <div class="testimonial-caption ">
                            <div class="testimonial-top-cap">
                                <!-- SVG icon -->
                                <svg xmlns="http://www.w3.org/2000/svg"xmlns:xlink="http://www.w3.org/1999/xlink"width="86px" height="63px">
                                <path fill-rule="evenodd"  stroke-width="1px" stroke="rgb(255, 95, 19)" fill-opacity="0" fill="rgb(0, 0, 0)"
                                d="M82.623,59.861 L48.661,59.861 L48.661,25.988 L59.982,3.406 L76.963,3.406 L65.642,25.988 L82.623,25.988 L82.623,59.861 ZM3.377,25.988 L14.698,3.406 L31.679,3.406 L20.358,25.988 L37.340,25.988 L37.340,59.861 L3.377,59.861 L3.377,25.988 Z"/>
                                </svg>
                                <p>{{$feedback->content}}</p>
                            </div>
                            <!-- founder -->
                            <div class="testimonial-founder d-flex align-items-center">
                               <div class="founder-text">
                                    <span>{{$feedback->name}}</span>
                               </div>
                            </div>
                        </div>
                    </div>
                    @endforeach                   
                </div>
            </div>
       </div>
    </div>
</div>
<!-- Testimonial End -->
<!--latest Nnews Area start -->
<div class="latest-news-area section-padding30">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <!-- Section Tittle -->
                <div class="section-tittle section-tittle7 mb-50">
                    <div class="front-text">
                        <h2 class="">latest news</h2>
                    </div>
                    <span class="back-text">Our Blog</span>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($blogNew as $b)
            <div class="col-xl-6 col-lg-6 col-md-6">
                <!-- single-news -->
                <div class="single-news mb-30">
                    <div class="news-img">
                        <img src="{{asset('public/frontend/img/blog/'.$b->img_blog)}}" alt="">
                        <div class="news-date text-center">
                            <span>{!! htmlspecialchars_decode(date('j<\s\up>S</\s\up>', strtotime($b->date_blog))) !!}</span>
                            <p>{!! htmlspecialchars_decode(date('F', strtotime($b->date_blog))) !!}</p>
                        </div>
                    </div>
                    <div class="news-caption">
                        <h2><a href="{{URL::to('/blog/details/'.$b->slug)}}">{{$b->titles}}</a></h2>
                        <a href="{{URL::to('/blog/details/'.$b->slug)}}" class="d-btn">Read more »</a>
                    </div>
                </div>
            </div>
            @endforeach
       </div>
    </div>
</div>
</main>
<!--latest News Area End -->

@endsection
