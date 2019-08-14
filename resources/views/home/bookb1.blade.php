@extends('layouts.main-home')
@section('title', 'Đặt lịch')
@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url({{ asset('salon/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
      
      <div class="col-md-12 appointment ftco-animate">
        <form autocomplete="off" action="{{route('formdatlich')}}" class="appointment-form" onsubmit="return validate_phonenumber()">
          <div >
            <div class="form-group col-md-12">
              <input type="number" name="phone_number" id="phone_number" class="form-control" placeholder="Số điện thoại">
            </div>
            <span id="err_phone" class="col-md-12"></span>
          </div>  
          <div class="d-md-flex">
            <div class="form-group col-md-6">
              <div class="input-wrap">
                <div class="icon"><span class="ion-md-calendar"></span></div>
                <input type="text" name="reservation_date" id="appointment_date" class="form-control" placeholder="Ngày">
              </div>
              <span id="err_date"></span>
            </div>
            <div class="form-group col-md-6 form-stylist">
             <label for="exampleFormControlSelect2"  class="stylist">Hair Stylist</label>
             <select class="form-control" name="hair_stylist" id="exampleFormControlSelect2">
              @foreach($stylist as $stylists)
              <option value="{{$stylists->id}}">{{$stylists->name}}
              </option>
              @endforeach
            </select>
            </div>
          </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary py-3 px-4 mt-3">Qua bước 2</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
@endsection

