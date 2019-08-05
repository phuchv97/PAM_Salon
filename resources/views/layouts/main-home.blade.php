<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  @include('assets.home.asset-css')
</head>
<body>

  @include('__share.home.header')

  @yield('content')




  @include('__share.home.footer')

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Khung giờ</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-5 col-md-2 box-datepicker">
             <h5 class="set-time">8:00</h5>
             <input type="text" class="number" value="so cho trong" disabled/>
           </div>
           <div class=" col-5 col-md-2 box-datepicker">
             <h5 class="set-time">8:30</h5>
             <input type="text" class="number" value="so cho trong" disabled/>
           </div>
           <div class=" col-5 col-md-2 box-datepicker">
             <h5 class="set-time">9:00</h5>
           </div>
           <div class=" col-5 col-md-2 box-datepicker">
             <h5 class="set-time">8:30</h5>
           </div>
           <div class=" col-5 col-md-2 box-datepicker">
             <h5 class="set-time">8:30</h5>
           </div>
           <div class=" col-5 col-md-2 box-datepicker">
             <h5 class="set-time">8:30</h5>
           </div>
           <div class=" col-5 col-md-2 box-datepicker">
             <h5 class="set-time">8:30</h5>
           </div>

         </div>

       </div>
       <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  @include('assets.home.asset-js')
  
  <script type="text/javascript">
    $( ".box-datepicker" ).click(function() {
        var settime = $(this).text().trim();
        var timepicker = $(this).val();
        timepicker = $('#time-picker').val(settime);
     $('#myModal').modal('hide');
   });


 </script>
</body>
</html>