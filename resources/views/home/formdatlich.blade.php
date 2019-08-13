@extends('layouts.main-home')
@section('title', 'Đặt lịch')
@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url({{ asset('salon/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
      
      <div class="col-md-12 appointment ftco-animate">
        <form autocomplete="off" action="#" class="appointment-form" onsubmit="return validate_datlich()">
          <div class="d-md-flex">
            <div class="form-group">
              <input type="text" id="fullname" class="form-control" placeholder="Họ tên">
            </div>
          </div>
          <span id="err_fullname"></span>
          <div class="d-md-flex">
            <div class="form-group">
              <div class="input-wrap">
                <div class="icon"><span class="ion-md-calendar"></span></div>
                <input type="text" id="appointment_date" class="form-control" placeholder="Ngày">
              </div>
              <span id="err_date"></span>
            </div>
            <div class="form-group ml-md-4">
              <div class="input-wrap">
                <div class="icon"><span class="ion-ios-clock"></span></div>
                <input type="text" id="time-picker" class="form-control" placeholder="Giờ" data-toggle="modal" data-target="#myModal">
              </div>
              <span id="err_time"></span>
            </div>
            
            <div class="form-group ml-md-4">
              <div class="input-wrap">
              <input type="number" id="phone_number" class="form-control" placeholder="Số điện thoại">
            </div>
            <span id="err_phone"></span>
            </div>
            
          </div>
          
          
          <div class="form-group">
            <button type="submit" class="btn btn-primary py-3 px-4">Đặt lịch giữ chỗ</button>
          </div>
        </form>
      </div>

    </div>

  </div>

</div>

@endsection