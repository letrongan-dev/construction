@extends('layout.frontend.default')
@section('content')
<!-- slider Area Start-->
<div class="slider-area ">
    <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{asset('public/frontend/assets/img/hero/about.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap pt-100">
                        <h2> Blog</h2>
                        <nav aria-label="breadcrumb ">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#"> Blog</a></li> 
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->
<!--================Blog Area =================-->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                	@foreach($blogs as $b)
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src="{{asset('public/frontend/img/blog/'.$b->img_blog)}}" style="height: 70%; width:70%" alt="">
                            <a href="#" class="blog_item_date">
                                <h3>{!! htmlspecialchars_decode(date('j<\s\up>S</\s\up>', strtotime($b->date_blog))) !!}</h3>
                                <p>{!! htmlspecialchars_decode(date('F Y', strtotime($b->date_blog))) !!}</p>
                            </a>
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="{{URL::to('/blog/details/'.$b->slug)}}">
                                <h2>{{$b->titles}}</h2>
                            </a>
                            <p>{{$b->description}}</p>
                        </div>
                    </article>
                    @endforeach
                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            {!!$blogs->render()!!}
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    @foreach($blogNew as $b)
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Recent Post</h3>
                        <div class="media post_item">
                            <img src="{{asset('public/frontend/img/blog/'.$b->img_blog)}}" style="height: 50%; width: 50%;" alt="post">
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>{{$b->titles}}</h3>
                                </a>
                                <p>{!! htmlspecialchars_decode(date('j<\s\up>S</\s\up> F Y', strtotime($b->date_blog))) !!}</p>
                            </div>
                        </div>
                    </aside>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->
@endsection