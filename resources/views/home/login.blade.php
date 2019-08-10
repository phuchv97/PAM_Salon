<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Đăng nhập | ADMIN</title>
    @include('assets.home.asset-css')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>
    <div id="login">
      <form action="{{route('login_guest')}}" method="POST" class="login-form">
        @csrf
        <p><a class="navbar-brand" href="{{ route('home') }}"><img src="{{asset('logo/logo-PAM.png')}}" style="height:70px"></a></p>

        <h3>Đăng nhập</h3>

        <div class="txtb">
          <input type="email" name="email" required />
          <span data-placeholder="Email đăng nhập"></span>
        </div>

        <div class="txtb">
          <input type="password" name="password" required />
          <span data-placeholder="Mật khẩu"></span>
        </div>

        <input type="submit" class="logbtn" value="Đăng nhập">
        <br>
        <div class="text-center btn-danger">
          <a class="text-white" href="{{route('home')}}">Cancel</a>
        </div>
        <div class="">
          Bạn chưa có tài khoản? <a href="">Đăng ký</a>
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


  </body>
</html>