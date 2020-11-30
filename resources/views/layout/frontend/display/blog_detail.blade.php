@extends('layout.frontend.default')
@section('content')
<div class="slider-area ">
<div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{asset('public/frontend/assets/img/hero/about.jpg')}}">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="hero-cap pt-100">
					<h2>{{$blogDetail->titles}}</h2>
					<nav aria-label="breadcrumb ">
						<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{URL::to('/blog')}}">Blog</a></li>
						<li class="breadcrumb-item"><a href="#">{{$blogDetail->titles}}</a></li> 
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<section class="blog_area single-post-area section-padding">
  <div class="container">
     <div class="row">
        <div class="col-lg-8 posts-list">
           <div class="single-post">
              <div class="feature-img">
                 <img class="img-fluid" src="{{asset('public/frontend/img/banner/banner.jpg')}}" alt="">
              </div>
              <div class="blog_details">
                 <h2>{{$blogDetail->titles}}</>
                 </h2>
                 <p class="excert">
                    {{$blogDetail->description}}
                 </p>
                 <p>
                    {!!$blogDetail->content!!}
                 </p>
              </div>
           </div>
           
        </div>
        <div class="col-lg-4">
           <div class="blog_right_sidebar">
              <aside class="single_sidebar_widget popular_post_widget">
                 <h3 class="widget_title">Recent Post</h3>
                 @foreach($blogs as $blog)
                 <div class="media post_item">
                    <img src="{{asset('public/frontend/img/blog/'.$blog->img_blog)}}" style="width:50%;height:50%;">
                    <div class="media-body">
                       <a href="{{URL::to('/blog/details/'.$blog->slug)}}">
                          <h3>{{$blog->description}}...</h3>
                       </a>
                       <p>{!! htmlspecialchars_decode(date('j<\s\up>S</\s\up> F Y', strtotime($blog->date_blog))) !!}</p>
                    </div>
                 </div>
                @endforeach
              </aside>
           </div>
        </div>
     </div>
  </div>
</section>
@endsection