<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  @include('assets.home.asset-css')
</head>
<body>

  @include('__share.home.header')

  @yield('content')



<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>
  @include('__share.home.footer')


  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>



  @include('assets.home.asset-js')
  

  <script type="text/javascript">
    $(".box-datepicker").click(function(){
     var settime = $(this).text().trim();
     var timepicker = $(this).val();
     timepicker = $('#time-picker').val(settime);
     
     
    $('#myModal5').modal('hide'); 
    $('#myModal').modal('hide'); 
    });


    $('#appointment_date').click(function(){
      $('#time-picker').val("");
      debugger;
      var curentnumber=$(this).data("number");
      $(this).data('number',curentnumber);
    });
         $("label").click(function(){
           var rating=$(this).data("number");
           console.log(rating);
         });


 </script>

</body>
</html>