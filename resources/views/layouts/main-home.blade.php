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
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <input id="set-time" value="8:00" style="color: white">  
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
      $( "#set-time" ).click(function() {
         var settime = $(this).val();
         var timepicker = $(this).val();
         timepicker = $('#time-picker').val(settime);
          $('#myModal').modal('hide');
       });
      
      
    </script>
  </body>
</html>