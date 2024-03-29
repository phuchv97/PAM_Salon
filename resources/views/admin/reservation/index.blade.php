@extends('layouts.main-admin')
@section('content')
@section('title','Payment management')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="m-portlet">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Manage reservations
                                </h3>
                            </div>

                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="container">
                            <div class="row searchFilter" >
                                <div class="col-sm-12" >
                                    <form class="form-inline" action="{{route('list_reservation')}}" method="get">
                                        @csrf
                                        <input class="form-control mr-sm-2" type="text" value="{{$name}}" name="name" placeholder="phone number">
                                        
                                        <button class="btn btn-primary" type="submit">Search</button>
                                    </form>



                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="m-section">
                                <div class="m-section__content">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th class="text-center">Phone Number</th>
                                                    <th class="text-center">Reservation Date</th>
                                                    <th class="text-center">Reservation Time</th>
                                                    <th class="text-center">Hair Stylist</th>
                                                    <th class="text-center">Status</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody >
                                            @foreach ($reservation as $r)
                                                <tr>
                                                    <td>{{$r->id}}</td>
                                                    <td>{{$r->name}}</td>
                                                    <td class="text-center">{{$r->phone_number}}</td>
                                                    <td class="text-center">
                                                        {{$r->reservation_date}}
                                                    </td>
                                                    <td class="text-center">{{$r->timeReservation->time_reservation}}</td>
                                                    <td class="text-center">{{$r->hairStylist->name}}</td>
                                                    <td class="text-center">
                                                        {{$r->status}}
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);" linkurl="{{route('delete_reservation',['id'=>$r->id])}}" data-toggle="m-tooltip" data-placement="left" title data-original-title="remove" class="text-danger btn-remove btn btn-outline-danger m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air delete_user_Model">
                                                                            <i class="flaticon-delete-1"></i>
                                                                        </a>
                                                    </td>

                                                </tr>
                                                
                                            @endforeach
                                                
                                                <tr >
                                                    <td colspan="6" >
                                                        {{$reservation->links()}}
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