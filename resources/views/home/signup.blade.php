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
    margin-top: 70px;
    }
    </style>
  </head>
  <body>
    <div id="login">
      <form autocomplete="off" action="{{ route('login') }}" class="login-form" onsubmit="return validate_signup()">
        <p><a class="navbar-brand" href="{{ route('home') }}"><img src="{{asset('logo/logo-PAM.png')}}" style="height:70px"></a></p>

        <h3>Đăng ký</h3>

        <div class="txtb">
          <input type="text" id="name" />
          <span data-placeholder="Tên đăng nhập"></span> 
        </div>
        <span id="error_name"></span>

        <div class="txtb">
          <input autocomplete="off" type="number" id="phone" />
          <span data-placeholder="Số điện thoại"></span> 
        </div>
        <span id="error_phone"></span>

        <div class="txtb">
          <input type="password" id="password" />
          <span data-placeholder="Mật khẩu"></span> 
        </div>
        <span id="error_password"></span>

        <div class="txtb">
          <input type="password" id="re-password" />
          <span data-placeholder="Xác nhận mật khẩu"></span> 
        </div>
        <span id="error_repassword"></span>

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