<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Đăng ký</title>
    @include('assets.home.asset-css')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>
    <div id="login">
      <form action="index.html" class="login-form">
        <p><a class="navbar-brand" href="{{ route('/') }}">PAM</a></p>

        <h3>Đăng ký</h3>

        <div class="txtb">
          <input type="text" required />
          <span data-placeholder="Tên đăng nhập"></span>
        </div>

        <div class="txtb">
          <input type="password" required />
          <span data-placeholder="Mật khẩu"></span>
        </div>

        <input type="submit" class="logbtn" value="Đăng ký">

        <div class="bottom-text">
           <a href="#">Đăng nhập</a>
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
