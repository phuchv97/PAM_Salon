@extends('layouts.main-admin')
@section('content')
@section('title','Feedback')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="m-portlet">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Feedback Hair Stylist
                                </h3>
                            </div>

                        </div>
                    </div>
                    <div class="m-portlet__body">
                        
                        <div class="col-md-12">
                            <div class="m-section">
                                <div class="m-section__content">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th class="text-center">reservation date</th>
                                                    <th class="text-center">Hair Stylist</th>
                                                    <th class="text-center">Feedback</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody >
                                            @foreach ($feedbackHairStylist as $feedback)
                                                <tr>
                                                    <td height="100">{{$feedback->id}}</td>
                                                    
                                                    <td class="text-center" height="100">{{$feedback->reservation->reservation_date}}</td>
                                                    <td class="text-center" height="100">
                                                        {{$feedback->hairStylist->name}}
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="wrapper">
                                                          <div class="rating-holder">
                                                            <div class="c-rating c-rating--small" data-rating-value="{{$feedback->feedback}}">
                                                              <button>1</button>
                                                              <button>2</button>
                                                              <button>3</button>
                                                              <button>4</button>
                                                              <button>5</button>
                                                            </div>
                                                          </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);" linkurl="{{route('delete_feedback',['id'=>$feedback->id])}}" data-toggle="m-tooltip" data-placement="left" title data-original-title="remove" class="text-danger btn-remove btn btn-outline-danger m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air delete_user_Model">
                                                                            <i class="flaticon-delete-1"></i>
                                                                        </a>
                                                        
                                                    </td>

                                                </tr>
                                                
                                            @endforeach
                                                
                                                <tr >
                                                    <td colspan="6" >
                                                        {{$feedbackHairStylist->links()}}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--begin::Section-->
                        
                    </div>

                </div>
            </div>
        </div>
    </div>




@endsection
@section('js')
  <script type="text/javascript">
  $(document).ready(function(){
      $('.btn-remove').on('click', function(){
        var conf = confirm('Do you want to delete this service ?');
        if(conf){
          window.location.href = $(this).attr('linkurl');
        }
      });    
  });
    
  </script>
  @endsection