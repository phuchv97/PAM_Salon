@extends('layouts.main-home')
@section('title', 'Sản phẩm')
@section('content')
<div class="hero-wrap" style="background-image: url({{asset('salon/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
	      <div class="overlay"></div>
	      <div class="container">
	        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-6 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	          	<h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Sản phẩm</h1>
	            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('home')}}">Trang chủ</a></span> <span>Sản phẩm</span></p>
	          </div>
	        </div>
	      </div>
	    </div>

	    <section class="ftco-section">
	      <div class="container">
	        <div class="row d-flex">
				@foreach($products as $p)
					<div class="col-md-4 d-flex ftco-animate">
						<div class="blog-entry align-self-stretch">
						<a href="{{route('product_detail',['id'=>$p->id])}}" class="block-20" style="background-image: url({{ asset($p->image) }});">
						</a>
						<div class="text py-4 d-block">
							<div class="name-price">
								<h3 class="heading mt-2"><a href="{{route('product_detail',['id'=>$p->id])}}">{{$p->name}}</a></h3>
								<h3 class="price mt-2 text-warning">{{$p->price}}đ</h3>
							</div>
							<p>{{$p->description}}</p>
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