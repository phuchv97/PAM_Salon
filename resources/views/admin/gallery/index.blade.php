@extends('layouts.main-admin')
@section('content')
@section('title','Gallery list')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="m-portlet">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Gallery Image
                                </h3>
                            </div>

                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="container">
                            <div class="row searchFilter" >
                                <div class="col-sm-12" >
                                    <form class="form-inline" action="{{route('list_gallery')}}" method="get">
                                        @csrf
                                        <input class="form-control mr-sm-2" type="text" value="{{$description}}" name="description" placeholder="Gallery description">
                                        
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
                                                    <th>Image</th>
                                                    <th>Description</th>
                                                    <th class="text-center">User id</th>

                                                    <th class="text-center"><a class="btn btn-outline-primary" href="{{route('add_image_gallery')}}" role="button">Add Image</a></th>
                                                </tr>
                                            </thead>
                                            <tbody >
                                            @foreach ($gallery as $g)
                                                <tr>
                                                    <td>{{$g->id}}</td>
                                                    <td class="text-center">
                                                        <img src="{{asset($g->image)}}" width="100">
                                                    </td>
                                                    <td>{{$g->description}}</td>
                                                    <td class="text-center">{{$g->user_id}}</td>
                                                    
                                                    <td class="text-center">
                                                        <a href="javascript:void(0);" linkurl="{{route('delete_gallery',['id'=>$g->id])}}" data-toggle="m-tooltip" data-placement="left" title data-original-title="remove" class="text-danger btn-remove btn btn-outline-danger m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air delete_user_Model">
                                                                            <i class="flaticon-delete-1"></i>
                                                                        </a>
                                                        
                                                    </td>

                                                </tr>
                                                
                                            @endforeach
                                                
                                                <tr >
                                                    <td colspan="6" >
                                                        {{$gallery->links()}}
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