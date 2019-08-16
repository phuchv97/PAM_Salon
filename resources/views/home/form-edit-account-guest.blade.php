@extends('layouts.main-home')
@section('title', 'Sửa tài khoản')
@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url({{ asset('salon/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
      
      <div class="col-md-12 appointment ftco-animate">
        <form enctype="multipart/form-data" autocomplete="off" action="{{route('save_account_guest')}}" class="appointment-form" method="post" >
          @csrf
          <input type="hidden" name="id" value="{{$guest->id}}" >
          <div class="form-group m-form__group">
            <input type="text" name="name" class="form-control m-input" id="exampleInputName"  placeholder="Họ Tên" value="{{old('name', $guest->name)}}" >
              @if($errors)
                  <span class="text-danger">{{$errors->first('name')}}</span>
              @endif
          </div>
          <div class="form-group m-form__group">
            <input type="text" name="address" class="form-control m-input" id="exampleInputName"  placeholder="Địa chỉ" value="{{old('address', $guest->address)}}" >
              @if($errors)
                  <span class="text-danger">{{$errors->first('address')}}</span>
              @endif
          </div>
          <div class="form-group m-form__group">
            <label for="exampleInputEmail1">Ảnh đại diện</label>
            <div>
                                    
            <br>
            </div>
            <div class="custom-file col-md-4">
              <input type="file" name="image" class="custom-file-input" >
              <label class="custom-file-label" for="customFile">chọn ảnh</label>
            </div>
            <br>                 
          </div>
          
          <div class="form-group m-form__group">
            <label for="exampleSelect1">Giới tính</label>
            <select name="gender" class="form-control m-input" id="exampleSelect1">
              <option value="Nam">Nam</option>
              <option value="Nữ">Nữ</option>
            </select>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary py-3 px-4">Save</button>
          </div>
        </form>
      </div>

    </div>

  </div>

</div>
 


@endsection