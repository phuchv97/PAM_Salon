@extends('layouts.main-admin')
@section('content')
@section('title','Revenue Management')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="m-portlet">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Revenue Management in month: <span class="text-danger">{{$month}}</span>
                                </h3>
                            </div>

                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="container">
                            <div class="row searchFilter" >
                                <div class="col-sm-12" >
                                    <form class="form-inline" action="{{route('revenue_management')}}" method="get">
                                        @csrf
                                        <div class="form-group">
                                            <label></label>
                                            <select name="month" class="text-center form-control" width="500">
                                                <option selected>Month</option>
                                              <option value="1">1-2019</option>
                                              <option value="2">2-2019</option>
                                              <option value="3">3-2019</option>
                                              <option value="4">4-2019</option>
                                              <option value="5">5-2019</option>
                                              <option value="6">6-2019</option>
                                              <option value="7">7-2019</option>
                                              <option value="8" >8-2019</option>
                                              <option value="9">9-2019</option>
                                              <option value="10">10-2019</option>
                                              <option value="11">11-2019</option>
                                              <option value="12">12-2019</option>
                                            </select>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Total Revenue</button>
                                    </form>
                                    <br>


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
                                                    <th></th>
                                                    <th class="text-center">Total Orders</th>
                                                    <th class="text-center">Total number of paid orders </th>
                                                    <th class="text-center">Total Revenue (VND)</th>
                                                    
                                                    
                                                </tr>
                                            </thead>
                                            <tbody >
                                                <tr>
                                                    <td class="text-center ">Month</td>
                                                    <td class="text-center text-info ">{{$totalOrdersInMonth}}</td>
                                                    <td class="text-center text-info">{{$TotalNumberOfPaidOrdersInMonth}}</td>
                                                    <td class="text-center text-danger">
                                                        {{$totalRevenueInMonth}}
                                                    </td>
                                                </tr>
                                                
                                            
                                                
                                                <tr >
                                                    <td class="text-center ">All</td>
                                                    <td class="text-center text-info">{{$totalOrders}}</td>
                                                    <td class="text-center text-info">{{$TotalNumberOfPaidOrders}}</td>
                                                    <td class="text-center text-danger">
                                                        {{$totalRevenue}}
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