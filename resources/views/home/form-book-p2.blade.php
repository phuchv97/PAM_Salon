@extends('layouts.main-home')
@section('title', 'Đặt lịch')
@section('content')
@php 
use App\Model\Reservation;
@endphp

<div class="hero-wrap js-fullheight" style="background-image: url({{ asset('salon/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
      
      <div class="col-md-12 appointment ftco-animate">
        <form autocomplete="off" action="{{route('save_reservation')}}" class="appointment-form" method="post" onsubmit="return validate_datlich()">
          @csrf
          <div class="d-md-flex">
            <div class="form-group col-md-12">
              <input type="hidden" name="hair_stylist" class="form-control" value="{{$hair_stylist}}">
              <input type="hidden" name="reservation_date" class="form-control" value="{{$reservation_date}}">
              <input type="hidden" name="phone_number" class="form-control" value="{{$phone_number}}">
              
            </div>
          </div>
          <div class="d-md-flex">
            <div class="form-group col-md-12">
              <input type="text" id="fullname" name="name" class="form-control" placeholder="Họ tên">
            </div>
          </div>
          <span class="col-md-12" id="err_fullname"></span>
          <div class="d-md-flex">
            <div class="form-group col-md-6">
              <div class="input-wrap">
                <div class="icon"><span class="ion-ios-clock"></span></div>
                <input type="text" name="time_reservation" id="time-picker" class="form-control" placeholder="Giờ" data-toggle="modal" data-target="#myModal5">
              </div>
              <span id="err_time"></span>
            </div>


          <div class="form-group col-md-6 form-stylist">
           <label for="exampleFormControlSelect1" class="stylist">Dịch vụ</label>
           <select class="form-control" name="service" id="exampleFormControlSelect1">
            @foreach($services as $s)
              <option value="{{$s->id}}">{{$s->name}}</option>
            @endforeach  
           </select>
            </div>
            
            
          </div>
          
          
          <div class="form-group">
            <button type="submit" class="btn btn-primary py-3 px-4">Đặt lịch</button>
          </div>
        </form>
      </div>

    </div>

  </div>

</div>
  <div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Khung giờ</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            
            @foreach($reservation_time as $time)
            @php 
                 $seat = Reservation::where('hair_stylist_id','=', "$hair_stylist")->where('reservation_date','=',"$reservation_date")->where('reservation_time_id','=',"$time->id")->first();
                 if($seat==null){
               @endphp
              <div class="col-5 col-md-2 box-datepicker "  >
               <h5 class="set-time">{{$time->time_reservation}}</h5>
               <input type="text" class="number-seat" value="Còn chỗ" disabled />
             </div>
             @php }else{
             @endphp
             <div class="col-5 col-md-2 box-datepicker disabledbutton "  >
               <h5 class="set-time">{{$time->time_reservation}}</h5>
               <input type="text" class="number-seat"  value="Hết chỗ" disabled/>
             </div>
             @php } @endphp
            @endforeach

         </div>

       </div>
       <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


@endsection