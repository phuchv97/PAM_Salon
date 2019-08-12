@extends('layouts.main-home')
@section('title', 'Profile')
@section('content')
<div class="hero-wrap">
	<section class="ftco-section contact-section">
		<div class="container mt-5">
			<div class="row block-9">
				<div class="col-md-4 contact-info ftco-animate">
					<div class="row">
						<div class="col-md-12 mb-4">
							<h2 class="h4">Thông tin của bạn</h2>
						</div>
						<div class="col-md-12 mb-3">
							<p><span>Tên:</span> {{$user->name}}</p>
						</div>
						<div class="col-md-12 mb-3">
							<p><span>Số Điện thoại:</span> {{$user->phone_number}}</p>
						</div>
						<div class="col-md-12 mb-3">
							<p><span>Email:</span> {{$user->email}}</p>
						</div>
					</div>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-6 ftco-animate">
					<div class="row no-gutters">
					<!-- @php if($gallery != null){
					@endphp -->
						@foreach($gallery as $g)
							<div class="col-md-6 ftco-animate">
								<a href="{{ asset($g->image) }}" class="gallery img image-popup d-flex align-items-center" style="background-image: url({{ asset($g->image)}});">
									<div class="icon mb-4 d-flex align-items-center justify-content-center">
										<span class="icon-search"></span>
									</div>
								</a>
							</div>
						@endforeach
					<!-- @php
					}
					@endphp -->
						
	        	</div>
				</div>
			</div>
		</div>
	</section>

	@endsection