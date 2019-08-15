<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Đăng ký</title>
    @include('assets.home.asset-css')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <style type="text/css" media="screen">
    .login-form{
      height: 600px;
    }
    .login-form h3{
      margin-top: -10px;
    }
    .login-form p {
      margin-top: -62px;
    } 
    .txtb input{    
      height: 30px;
    }
    .txtb {
     margin: 20px 0 10px 0;
    }
    .logbtn{
    margin-top: 40px;
    }
    </style>
  </head>
  <body>
    <div id="login">
      <form autocomplete="off" method="POST" action="{{ route('signup_guest') }}" class="login-form" onsubmit="return ">
      @csrf
        <p><a class="navbar-brand" href="{{ route('home') }}"><img src="{{asset('logo/logo-PAM.png')}}" style="height:70px"></a></p>

        <h3>Đăng ký</h3>

        <div class="txtb">
          <input autocomplete="off" name="role_id" type="hidden" value="4" />
          <input type="text" name="name" id="name" value="{{old('name')}}" />
          <span data-placeholder=" Họ Tên"></span> 
        </div>
        @if($errors)
            <span class="text-danger">{{$errors->first('name')}}</span>
        @endif

        <div class="txtb">
          <input type="email" name="email" id="email" value="{{old('email')}}" />
          <span data-placeholder="Email đăng nhập"></span> 
        </div>
        @if($errors)
            <span class="text-danger">{{$errors->first('email')}}</span>
        @endif
        

        <div class="txtb">
          <input autocomplete="off" name="phone_number" type="number" id="phone" value="{{old('phone_number')}}" />
          <span data-placeholder="Số điện thoại"></span> 
        </div>
        @if($errors)
            <span class="text-danger">{{$errors->first('phone_number')}}</span>
        @endif
        

        <div class="txtb">

          <input type="password" name="password" id="password" value="{{old('password')}}" />
          <span data-placeholder="Mật khẩu"></span>
           
        </div>
        @if($errors)
            <span class="text-danger">{{$errors->first('password')}}</span>
        @endif

        <button type="submit" id="btn-signup" class="logbtn">Đăng ký</button>

      </form>

    </div>
      
      <script type="text/javascript">
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });
      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });
           
      </script>
       @include('assets.home.asset-js');


  </body>
</html>