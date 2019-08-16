@extends('layouts.main-home')
@section('title', 'Đặt lịch thành công')
@section('content')

<div class="hero-wrap js-fullheight" style="background-image: url({{ asset('salon/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">

			<div class="col-md-12 appointment ftco-animate text-center">
                 <h1>Đặt lịch thành công</h1>
                 <h3>Hẹn gặp lại bạn vào lúc <span class="text-warning">{{$model->timeReservation->time_reservation}}</span> ngày <span class="text-warning">{{$model->reservation_date}}</span> do stylist <span class="text-warning">{{$model->hairStylist->name}}</span> phụ trách. Cảm ơn đã sử dụng tính năng đặt lịch của chúng tôi!</h3>
                 <a href="{{route('home')}}">Trang chủ</a>
			</div>

		</div>

	</div>
</div>


@endsection