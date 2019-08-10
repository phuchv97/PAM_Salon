@extends('layouts.main-admin')
@section('content')
@section('title','Post list')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="m-portlet">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Post list
                                </h3>
                            </div>

                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="container">
                            <div class="row searchFilter" >
                                <div class="col-sm-12" >
                                    <form class="form-inline" action="{{route('list_post')}}" method="get">
                                        @csrf
                                        <input class="form-control mr-sm-2" type="text" value="{{$title}}" name="title" placeholder="Post title">
                                        
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
                                                    <th>Title</th>
                                                    <th class="text-center">category</th>
                                                    <th class="text-center">image</th>

                                                    <th class="text-center"><a class="btn btn-outline-primary" href="{{route('add_post')}}" role="button">Add post</a></th>
                                                </tr>
                                            </thead>
                                            <tbody >
                                            @foreach ($posts as $p)
                                                <tr>
                                                    <td>{{$p->id}}</td>
                                                    <td>{{$p->title}}</td>
                                                    <td class="text-center">{{$p->category->name}}</td>
                                                    <td class="text-center">
                                                        <img src="{{asset($p->image)}}" width="100">
                                                    </td>
                                                    <td class="text-center">
                                                        <a data-toggle="m-tooltip" data-placement="left" title data-original-title="Update" href="{{route('edit_post',['id'=>$p->id])}}" class="text-success btn btn-outline-accent m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air">
                                                            <i class="flaticon-edit-1"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" linkurl="{{route('delete_post',['id'=>$p->id])}}" data-toggle="m-tooltip" data-placement="left" title data-original-title="remove" class="text-danger btn-remove btn btn-outline-danger m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air delete_user_Model">
                                                                            <i class="flaticon-delete-1"></i>
                                                                        </a>
                                                        
                                                    </td>

                                                </tr>
                                                
                                            @endforeach
                                                
                                                <tr >
                                                    <td colspan="6" >
                                                        {{$posts->links()}}
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