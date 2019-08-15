<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Đăng nhập</title>
    @include('assets.home.asset-css')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>
    <div id="login">
    <form autocomplete="off" action="{{route('login_guest')}}" method="POST" class="login-form" onsubmit="return validate_form()">
        @csrf
        <p><a class="navbar-brand" href="{{ route('home') }}"><img src="{{asset('logo/logo-PAM.png')}}" style="height:80px"></a></p>

        <h3>Đăng nhập</h3>
        @if(isset($notification))
        <br>
        <span class="text-center font-weight-bold text-success">{{$notification}}</span>
        @endif
        <div class="txtb">
          <input type="text" id="name" name="email" />
          <span data-placeholder="Email đăng nhập"></span>
          
        </div>
        <span id="error_name"></span>

        <div class="txtb">
          <input type="password" id="password" name="password" />
          <span data-placeholder="Mật khẩu"></span> 
        </div>
        <span id="error_password"></span>

        <button type="submit" class="logbtn">Đăng nhập</button>

        <div class="bottom-text">
          Bạn chưa có tài khoản? <a href="{{ route('signup') }}">Đăng ký</a>
        </div>

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