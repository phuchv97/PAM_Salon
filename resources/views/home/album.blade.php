@extends('layouts.main-home')
@section('title', 'Album Ảnh')
@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url({{asset('salon/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
	      <div class="overlay"></div>
	      <div class="container">
	        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-6 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	          	<h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Album Ảnh</h1>
	            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('home')}}">Trang chủ</a></span> <span>Album ảnh</span></p>
	          </div>
	        </div>
	      </div>
	    </div>

	    <section class="ftco-gallery">
	    	<div class="container">
	    		<div class="row justify-content-center mb-5 pb-3">
	          <div class="col-md-7 heading-section ftco-animate text-center">
	            <h2 class="mb-4">Ảnh của chúng tôi</h2>
	            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
	            <p class="mt-5">Không chỉ cung cấp dịch vụ, Salon PAM còn là nơi tư vấn và phân phối mỹ phẩm nam giới hàng đầu tại Việt Nam</p>
	          </div>
	        </div>
	    	</div>
	    	<div class="container-wrap">
	    		<div class="row no-gutters">
					@foreach($gallery as $g)
						<div class="col-md-3 ftco-animate">
							<a href="{{ asset($g->image) }}" class="gallery img image-popup d-flex align-items-center" style="background-image: url({{ asset($g->image)}});">
								<div class="icon mb-4 d-flex align-items-center justify-content-center">
									<span class="icon-search"></span>
								</div>
							</a>
						</div>
					@endforeach	
	        	</div>
	    	</div>
	    </section>

@endsection