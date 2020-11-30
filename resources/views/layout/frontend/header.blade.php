<!-- Header Start -->
<div class="header-area header-transparent">
    <div class="main-header ">
        <div class="header-top d-none d-lg-block">
           <div class="container-fluid">
               <div class="col-xl-12">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="header-info-left">
                            <ul>     
                                <li>+(123) 1234-567-8901</li>
                                <li>info@domain.com</li>
                                <li>Mon - Sat 8:00 - 17:30, Sunday - CLOSED</li>
                            </ul>
                        </div>
                        <div class="header-info-right">
                            <ul class="header-social">    
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                               <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
               </div>
           </div>
        </div>
       <div class="header-bottom  header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo">
                            <!-- logo-1 -->
                            <a href="index.html" class="big-logo"><img src="{{asset('public/frontend/assets/img/logo/logo.png')}}" alt=""></a>
                            <!-- logo-2 -->
                            <a href="index.html" class="small-logo"><img src="{{asset('public/frontend/assets/img/logo/loder-logo.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8">
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav> 
                                <ul id="navigation">                                                                                                                   
                                    <li><a href="{{URL::to('/')}}">Home</a></li>
                                    <li><a href="{{URL::to('/about')}}">About</a></li>
                                    <li><a href="{{URL::to('/project')}}">Projects</a></li>
                                    <li><a href="{{URL::to('/service')}}">Services</a></li>
                                    <li><a href="{{URL::to('/blog')}}">Blog</a>
                                    </li>
                                    <!--<li><a href="#">Pages</a>
                                        <ul class="submenu">
                                            <li><a href="elements.html">Element</a></li>
                                            <li><a href="project_details.html">Projects Details</a></li>
                                            <li><a href="services_details.html">Services Details</a></li>
                                        </ul>
                                    </li>-->
                                    <li><a href="{{URL::to('/contact')}}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>             
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <div class="header-right-btn f-right d-none d-lg-block">
                            <a href="{{URL::to('/contact')}}" class="btn">Contact Now</a>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
       </div>
    </div>
</div>
<!-- Header End -->
