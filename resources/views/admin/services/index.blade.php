@extends('layouts.main-admin')
@section('content')
@section('title','Service list')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="m-portlet">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Service list
                                </h3>
                            </div>

                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="container">
                            <div class="row searchFilter" >
                                <div class="col-sm-12" >
                                    <form class="form-inline" action="{{route('list-services')}}" method="get">
                                        @csrf
                                        <input class="form-control mr-sm-2" type="text" value="{{$name}}" name="name" placeholder="Service name">
                                        
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
                                                    <th>Service name</th>
                                                    <th>Description</th>
                                                    <th class="text-center">Price</th>
                                                    <th class="text-center">icon</th>

                                                    <th class="text-center"><a class="btn btn-outline-primary" href="#" role="button">Add service</a></th>
                                                </tr>
                                            </thead>
                                            <tbody >
                                            @foreach ($services as $s)
                                                <tr>
                                                    <td>{{$s->id}}</td>
                                                    <td>{{$s->name}}</td>
                                                    <td>...</td>
                                                    <td class="text-center">{{$s->price}}</td>
                                                    <td class="text-center">
                                                        <img src="{{asset($s->icon)}}" width="100">
                                                    </td>
                                                    <td class="text-center">
                                                        <a data-toggle="m-tooltip" data-placement="left" title data-original-title="Update" href="#" class="text-success btn btn-outline-accent m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air">
                                                            <i class="flaticon-edit-1"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" linkurl="" data-toggle="m-tooltip" data-placement="left" title data-original-title="remove" class="text-danger btn-remove btn btn-outline-danger m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air delete_user_Model">
                                                                            <i class="flaticon-delete-1"></i>
                                                                        </a>
                                                        
                                                    </td>

                                                </tr>
                                                
                                            @endforeach
                                                
                                                <tr >
                                                    <td colspan="6" >
                                                        {{$services->links()}}
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