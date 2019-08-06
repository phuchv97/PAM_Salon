@extends('layouts.main-home')
@section('title', 'Sản phẩm')
@section('content')
<div class="hero-wrap" style="background-image: url({{asset('salon/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
	      <div class="overlay"></div>
	      <div class="container">
	        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-6 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	          	<h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Sản phẩm</h1>
	            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Sản phẩm</span></p>
	          </div>
	        </div>
	      </div>
	    </div>

	    <section class="ftco-section">
	      <div class="container">
	        <div class="row d-flex">
	          <div class="col-md-4 d-flex ftco-animate">
	          	<div class="blog-entry align-self-stretch">
	              <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('salon/images/image_1.jpg') }});">
	              </a>
	              <div class="text py-4 d-block">
	              	<div class="name-price">
	              		<h3 class="heading mt-2"><a href="{{route('product_detail')}}">Keo 502</a></h3>
	              		<h3 class="price mt-2">100.000đ</h3>
	              	</div>
	                <p>Không chỉ cung cấp dịch vụ, Salon PAM còn là nơi tư vấn và phân phối mỹ phẩm nam giới hàng đầu tại Việt Nam</p>
	              </div>
	            </div>
	          </div>
	          <div class="col-md-4 d-flex ftco-animate">
	          	<div class="blog-entry align-self-stretch">
	              <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('salon/images/image_2.jpg') }});">
	              </a>
	              <div class="text py-4 d-block">
	                <div class="name-price">
	              		<h3 class="heading mt-2"><a href="#">Keo 502</a></h3>
	              		<h3 class="price mt-2">100.000đ</h3>
	              	</div>
	                <p>Không chỉ cung cấp dịch vụ, Salon PAM còn là nơi tư vấn và phân phối mỹ phẩm nam giới hàng đầu tại Việt Nam</p>
	              </div>
	            </div>
	          </div>
	          <div class="col-md-4 d-flex ftco-animate">
	          	<div class="blog-entry align-self-stretch">
	              <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('salon/images/image_3.jpg') }});">
	              </a>
	              <div class="text py-4 d-block">
	                <div class="name-price">
	              		<h3 class="heading mt-2"><a href="#">Keo 502</a></h3>
	              		<h3 class="price mt-2">100.000đ</h3>
	              	</div>
	                <p>Không chỉ cung cấp dịch vụ, Salon PAM còn là nơi tư vấn và phân phối mỹ phẩm nam giới hàng đầu tại Việt Nam</p>
	              </div>
	            </div>
	          </div>
	          <div class="col-md-4 d-flex ftco-animate">
	          	<div class="blog-entry align-self-stretch">
	              <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('salon/images/image_4.jpg') }});">
	              </a>
	              <div class="text py-4 d-block">
	                <div class="name-price">
	              		<h3 class="heading mt-2"><a href="#">Keo 502</a></h3>
	              		<h3 class="price mt-2">100.000đ</h3>
	              	</div>
	                <p>Không chỉ cung cấp dịch vụ, Salon PAM còn là nơi tư vấn và phân phối mỹ phẩm nam giới hàng đầu tại Việt Nam</p>
	              </div>
	            </div>
	          </div>
	          <div class="col-md-4 d-flex ftco-animate">
	          	<div class="blog-entry align-self-stretch">
	              <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('salon/images/image_5.jpg') }});">
	              </a>
	              <div class="text py-4 d-block">
	                <div class="name-price">
	              		<h3 class="heading mt-2"><a href="#">Keo 502</a></h3>
	              		<h3 class="price mt-2">100.000đ</h3>
	              	</div>
	                <p>Không chỉ cung cấp dịch vụ, Salon PAM còn là nơi tư vấn và phân phối mỹ phẩm nam giới hàng đầu tại Việt Nam</p>
	              </div>
	            </div>
	          </div>
	          <div class="col-md-4 d-flex ftco-animate">
	          	<div class="blog-entry align-self-stretch">
	              <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('salon/images/image_6.jpg') }});">
	              </a>
	              <div class="text py-4 d-block">
	                <div class="name-price">
	              		<h3 class="heading mt-2"><a href="#">Keo 502</a></h3>
	              		<h3 class="price mt-2">100.000đ</h3>
	              	</div>
	                <p>Không chỉ cung cấp dịch vụ, Salon PAM còn là nơi tư vấn và phân phối mỹ phẩm nam giới hàng đầu tại Việt Nam</p>
	              </div>
	            </div>
	          </div>
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