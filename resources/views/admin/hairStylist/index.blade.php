@extends('layouts.main-admin')
@section('content')
@section('title','Hair Stylist')
@php 
    use App\Model\FeedbackHairStylist;
@endphp
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="m-portlet">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                Hair Stylist
                                </h3>
                            </div>

                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="container">
                            <div class="row searchFilter" >
                                <div class="col-sm-12" >
                                    <form class="form-inline" action="{{route('list_hair_stylist')}}" method="get">
                                        @csrf
                                        <input class="form-control mr-sm-2" type="text" value="{{$name}}" name="name" placeholder="Hair stylist name">
                                        
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
                                                    <th>Product name</th>
                                                    <th class="text-center">Gender</th>
                                                    <th class="text-center">Avatar</th>
                                                    <th class="text-center">Feedback</th>
                                                    <th class="text-center"><a class="btn btn-outline-primary" href="{{route('add_hair_stylist')}}" role="button">Add product</a></th>
                                                </tr>
                                            </thead>
                                            <tbody >
                                            @foreach ($hairStylist as $stylist)
                                            @php 
                                                $feedbackStylist = FeedbackHairStylist::where('hair_stylist_id', '=', "$stylist->id")->get();
                                                $arrFeedback = [];
                                                foreach($feedbackStylist as $feedbackStylistSmall){
                                                $feedbackSmall = $feedbackStylistSmall->feedback;
                                                array_push($arrFeedback,$feedbackSmall);

                                            }
                                            $totalFeedback = array_sum($arrFeedback);
                                            $countFeedback = count($arrFeedback);
                                            $averageFeedback = $totalFeedback/$countFeedback;

                                            @endphp
                                                <tr>
                                                    <td>{{$stylist->id}}</td>
                                                    <td>{{$stylist->name}}</td>
                                                    <td class="text-center">{{$stylist->gender}}</td>
                                                    <td class="text-center">
                                                        <img src="{{asset($stylist->avatar)}}" width="100">
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="wrapper">
                                                          <div class="rating-holder">
                                                            <div class="c-rating c-rating--small" data-rating-value="{{$averageFeedback}}">
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
                                                        <a data-toggle="m-tooltip" data-placement="left" title data-original-title="Update" href="{{route('edit_hair_stylist',['id'=>$stylist->id])}}" class="text-success btn btn-outline-accent m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air">
                                                            <i class="flaticon-edit-1"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" linkurl="{{route('delete_hair_stylist',['id'=>$stylist->id])}}" data-toggle="m-tooltip" data-placement="left" title data-original-title="remove" class="text-danger btn-remove btn btn-outline-danger m-btn m-btn--icon btn-lg m-btn--icon-only m-btn--pill m-btn--air delete_user_Model">
                                                                            <i class="flaticon-delete-1"></i>
                                                                        </a>
                                                        
                                                    </td>

                                                </tr>
                                                
                                            @endforeach
                                                
                                                <tr >
                                                    <td colspan="6" >
                                                        {{$hairStylist->links()}}
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