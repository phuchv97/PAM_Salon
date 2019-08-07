@extends('layouts.main-home')
@section('title', 'Bài viết')
@section('content')
<div class="hero-wrap" style="background-image: url({{asset('salon/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
	      <div class="overlay"></div>
	      <div class="container">
	        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-6 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	          	<h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Blog</h1>
	            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
	          </div>
	        </div>
	      </div>
	    </div>

	    <section class="ftco-section">
	      <div class="container">
	        <div class="row d-flex">
			@foreach($posts as $p)
	          <div class="col-md-4 d-flex ftco-animate">
	          	<div class="blog-entry align-self-stretch">
	              <a href="{{route('blog_detail',['id' => $p->id])}}" class="block-20" style="background-image: url({{ asset($p->image) }});">
	              </a>
	              <div class="text py-4 d-block">
	              	<!-- <div class="meta">
	                  <div><a href="#">Sept 10, 2018</a></div>
	                  <div><a href="#">Admin</a></div>
	                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
	                </div> -->
	                <h3 class="heading mt-2"><a href="{{route('blog_detail',['id' => $p->id])}}">{{$p->title}}</a></h3>
	                <p>{{$p-> description}}</p>
	              </div>
	            </div>
	          </div>
	        @endforeach
			  
	        </div>
	        <div class="row mt-5">
	          <div class="col text-center">
	            <div class="block-27">
	              <ul>
	                <li><a href="#">&lt;</a></li>
	                <li class="active"><span>1</span></li>
	                <li><a href="#">2</a></li>
	                <li><a href="#">3</a></li>
	                <li><a href="#">4</a></li>
	                <li><a href="#">5</a></li>
	                <li><a href="#">&gt;</a></li>
	              </ul>
	            </div>
	          </div>
	        </div>
	      </div>
	    </section>
@endsection