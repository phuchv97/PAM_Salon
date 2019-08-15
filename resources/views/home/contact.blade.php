@extends('layouts.main-home')
@section('title', 'Liên Hệ')
@section('content')
<div class="hero-wrap" style="background-image: url({{asset('salon/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
	      <div class="overlay"></div>
	      <div class="container">
	        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-6 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	          	@php if(isset($notification)){
	          	@endphp
	          
	          	<h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{$notification}}</h1>
	          	@php }else{ @endphp
	          	<h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Liên Hệ</h1>
	          	@php } @endphp
	            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('home')}}">Trang Chủ</a></span> <span>Liên Hệ</span></p>
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
              <form action="{{route('save_contact')}}" method="post" class="contact-form">
              	@csrf
              	<div class="row">
              		<div class="col-md-6">
		                <div class="form-group">
		                  <input type="text" class="form-control" name="name" placeholder="Họ Tên" value="{{old('name')}}">

		                </div>
		                @if($errors)
				            <span class="text-danger">{{$errors->first('name')}}</span>
				        @endif
	                </div>
	                <div class="col-md-6">
		                <div class="form-group">
		                  <input type="text" class="form-control" name="email" placeholder="Email của bạn" value="{{old('email')}}">
		                </div>
		                @if($errors)
				            <span class="text-danger">{{$errors->first('email')}}</span>
				        @endif
		            </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="titles" placeholder="Tiêu đề" value="{{old('titles')}}">
                </div>
                @if($errors)
		            <span class="text-danger">{{$errors->first('titles')}}</span>
		        @endif
                <div class="form-group">
                  <textarea id="" cols="30" rows="7" name="message" class="form-control" placeholder="Góp Ý">{{old('message')}}</textarea>
                </div>
                @if($errors)
		            <span class="text-danger">{{$errors->first('message')}}</span>
		        @endif
                <div class="form-group">
                  <input type="submit" value="Gửi Góp ý" class="btn btn-primary py-3 px-5">
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <div id="map"></div>
@endsection