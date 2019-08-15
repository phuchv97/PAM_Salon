@extends('layouts.main-home')
@section('title', 'Bài viết')
@section('content')
<div class="hero-wrap" style="background-image: url({{asset('salon/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
	      <div class="overlay"></div>
	      <div class="container">
	        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-6 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	          	<h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Bài viết</h1>
	            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('home')}}">Trang chủ</a></span> <span>Bài viết</span></p>
	          </div>
	        </div>
	      </div>
	    </div>

	    <section class="ftco-section">
	      <div class="container">
	      	<h3>Giới thiệu sản phẩm </h3><br/>
	        <div class="row d-flex">
			@foreach($postsCate1 as $p1)
	          <div class="col-md-4 d-flex ftco-animate">
	          	<div class="blog-entry align-self-stretch">
	              <a href="{{route('blog_detail',['id' => $p1->id])}}" class="block-20" style="background-image: url({{ asset($p1->image) }});">
	              </a>
	              <div class="text py-4 d-block">
	              	<div class="meta">
	                  <div><a >{{$p1->updated_at }}</a></div>
	                  <div><a >{{$p1->user->name }}</a></div>
	                </div>  
	                <h3 class="heading mt-2"><a href="{{route('blog_detail',['id' => $p1->id])}}">{{$p1->title}}</a></h3>
	                <p>{{$p1-> description}}</p>
	              </div>
	            </div>
	          </div>
	        @endforeach
			  
	        </div>
	        <h3>Bài viết giải trí </h3><br/>
	        <div class="row d-flex">
			@foreach($postsCate2 as $p2)
	          <div class="col-md-4 d-flex ftco-animate">
	          	<div class="blog-entry align-self-stretch">
	              <a href="{{route('blog_detail',['id' => $p2->id])}}" class="block-20" style="background-image: url({{ asset($p2->image) }});">
	              </a>
	              <div class="text py-4 d-block">
	              	<div class="meta">
	                  <div><a >{{$p2->updated_at }}</a></div>
	                  <div><a >{{$p2->user->name }}</a></div>
	                </div>  
	                <h3 class="heading mt-2"><a href="{{route('blog_detail',['id' => $p2->id])}}">{{$p2->title}}</a></h3>
	                <p>{{$p2-> description}}</p>
	              </div>
	            </div>
	          </div>
	        @endforeach
			  
	        </div>
	        <h3>Tư vấn chăm sóc tóc </h3><br/>
	        <div class="row d-flex">
			@foreach($postsCate3 as $p3)
	          <div class="col-md-4 d-flex ftco-animate">
	          	<div class="blog-entry align-self-stretch">
	              <a href="{{route('blog_detail',['id' => $p3->id])}}" class="block-20" style="background-image: url({{ asset($p3->image) }});">
	              </a>
	              <div class="text py-4 d-block">
	              	<div class="meta">
	                  <div><a >{{$p3->updated_at }}</a></div>
	                  <div><a >{{$p3->user->name }}</a></div>
	                </div>  
	                <h3 class="heading mt-2"><a href="{{route('blog_detail',['id' => $p3->id])}}">{{$p3->title}}</a></h3>
	                <p>{{$p3-> description}}</p>
	              </div>
	            </div>
	          </div>
	        @endforeach
			  
	        </div>
	        
	      </div>
	    </section>
@endsection