@extends('layouts.main-home')
@section('title', 'Liên Hệ')
@section('content')
<div class="hero-wrap" style="background-image: url({{asset('salon/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
	      <div class="overlay"></div>
	      <div class="container">
	        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-6 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	          	<h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Liên Hệ</h1>
	            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Trang Chủ</a></span> <span>Liên Hệ</span></p>
	          </div>
	        </div>
	      </div>
	    </div>

	    <section class="ftco-section contact-section">
        <div class="container mt-5">
          <div class="row block-9">
						<div class="col-md-4 contact-info ftco-animate">
							<div class="row">
								<div class="col-md-12 mb-4">
		              <h2 class="h4">Thông tin liên lạc</h2>
		            </div>
		            <div class="col-md-12 mb-3">
		              <p><span>Địa chỉ:</span> 15 Quan Hoa, Cầu Giấy, Hà Nội</p>
		            </div>
		            <div class="col-md-12 mb-3">
		              <p><span>Điện thoại:</span> <a href="tel://01656502625">01656502625</a></p>
		            </div>
		            <div class="col-md-12 mb-3">
		              <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
		            </div>
		            <div class="col-md-12 mb-3">
		              <p><span>Website:</span> <a href="#">salonpam.com</a></p>
		            </div>
							</div>
						</div>
						<div class="col-md-1"></div>
            <div class="col-md-6 ftco-animate">
              <form action="#" class="contact-form">
              	<div class="row">
              		<div class="col-md-6">
		                <div class="form-group">
		                  <input type="text" class="form-control" placeholder="Your Name">
		                </div>
	                </div>
	                <div class="col-md-6">
		                <div class="form-group">
		                  <input type="text" class="form-control" placeholder="Your Email">
		                </div>
		                </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Subject">
                </div>
                <div class="form-group">
                  <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <div id="map"></div>
@endsection