@extends('layouts.main-home')
@section('title', 'Chi tiết bài viết')
@section('content')
<div class="hero-wrap" style="background-image: url({{asset($post->image) }});" data-stellar-background-ratio="0.5">
	      <div class="overlay"></div>
	      <div class="container">
	        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-6 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	          	<h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{$post -> title}}</h1>
	            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('home')}}">Trang chủ</a></span> <span class="mr-2"><a href="{{route('blog')}}">Bài viết</a></span> <span>Chi tiết bài viết</span></p>
	          </div>
	        </div>
	      </div>
	    </div>

	    <section class="ftco-section ftco-degree-bg">
	      <div class="container">
	        <div class="row">
	          <div class="col-md-8 ftco-animate">
	            <h2 class="mb-3">{{$post -> title}}</h2>
	            <p>{{$post -> description}}</p>
	            <p>
	              <img src="{{asset($post->image) }}" alt="" class="img-fluid">
	            </p>
	            <p>{{$post->detail}}</p>
                <h5 style="text-align: right">{{$post->user->name}}</h5>


	            <div class="pt-5 mt-5">
	              <h3 class="mb-5">6 Comments</h3>
	              <ul class="comment-list">
				  	@foreach($comment as $c)
	                <li class="comment">
	                  <div class="vcard bio">
	                    <img src="{{ asset($c->user->image) }}" alt="Image placeholder">
	                  </div>
	                  <div class="comment-body">
	                    <h3>{{$c->user->name}}</h3>
	                    <!-- <div class="meta">June 27, 2018 at 2:21pm</div> -->
	                    <p>{{$c->comment}}</p>
	                    
	                  </div>
	                </li>
					@endforeach
	              <!-- END comment-list -->
	              
	              <div class="comment-form-wrap pt-5">
	                <h3 class="mb-5">Bình luận</h3>
					@php
						if(Auth::check()){
					@endphp		
							<form action="{{route('save_comment')}}" method="post">
							@csrf
							<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
					@php	
						}else{
					@endphp
					<form action="{{route('login')}}"  >
					@php		
						}
					@endphp
						<input type="hidden" name="post_id" value="{{$post->id}}">
						
	                  <div class="form-group">
	                    <label for="message">Nội dung</label>
	                    <textarea name="comment" id="message" cols="30" rows="10" class="form-control"></textarea>
	                  </div>
	                  <div class="form-group">
	                    <input type="submit" value="Đăng bình luận" class="btn py-3 px-4 btn-primary">
	                  </div>

	                </form>
	              </div>
	            </div>

	          </div> <!-- .col-md-8 -->
	          <div class="col-md-4 sidebar ftco-animate">

	            <div class="sidebar-box ftco-animate">
	              <h3>Bài viết gần đây</h3>
				  @foreach($post_new as $p_new)
	              <div class="block-21 mb-4 d-flex">
	                <a class="blog-img mr-4" style="background-image: url({{ asset($p_new->image) }});"></a>
	                <div class="text">
	                  <h3 class="heading"><a href="{{route('blog_detail',['id'=>$p_new->id])}}">{{$p_new->title}}</a></h3>
	                  <div class="meta">
	                    <div><a href="#"><span class="icon-calendar"></span>{{$p_new->created_at}} </a></div>
	                    
	                  </div>
	                </div>
	              </div>
	              @endforeach
	            </div>
	          </div>

	        </div>
	      </div>
	    </section> <!-- .section -->
@endsection