@extends('layouts.main-admin')
@section('content')

@php
$title = $service->id==null ? "Add Service" : "Update Service";

@endphp
@section('title',$title)
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="m-portlet ">
                    
                    <div class="m-portlet m-portlet--tab ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
												<h3 class="m-portlet__head-text">
													@php
														$action = $service->id == null ? "Add Service" : "Update Service";
														echo $action;
													@endphp
												</h3>
											</div>
										</div>
									</div>

									<!--begin::Form-->
									<form enctype="multipart/form-data" action="{{ route('service_save') }}" method="post" class="m-form m-form--fit m-form--label-align-right" >
                                        @csrf <!-- đây là mã độc để bảo vệ ứng dụng khỏi tấn công giả mạo-->
                                        <div class="m-portlet__body">
                                            <input type="hidden" name="id" value="{{$service->id}}">
											<input type="hidden" name="user_id" value="2">
                                            <div class="form-group m-form__group">
												<label >Service name</label>
												<input type="text" name="name" class="form-control m-input" id="exampleInputName"  placeholder="service name" value="{{old('name',$service->name)}}" >
                                                @if($errors)
                                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                                @endif
                                            </div>
											<div class="form-group m-form__group">
												<label for="exampleInputEmail1">Icon</label>
												<div>
                                                <!-- @if($service->id != null)
                                                    
                                                        <div class="col-md-6">
                                                            <img id="imageTarget" class="col-md-4" src="{{asset($service->icon)}}" class="img-responsive">
                                                        </div>
                                                    
                                                @endif -->
												<br>
                                                </div>
												<div class="custom-file col-md-4">
													<input type="file" name="icon" class="custom-file-input" >
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
												<br>
                                                @if($errors)
                                                <span class="text-danger">{{$errors->first('icon')}}</span>
                                                @endif
											</div>
                                            <div class="form-group m-form__group">
												<label for="exampleTextarea">Description</label>
												<textarea class="form-control m-input" name="description" id="exampleTextarea" rows="2">{{old('description',$service->description)}}</textarea>
                                                @if($errors)
                                                    <span class="text-danger">{{$errors->first('description')}}</span>
                                                @endif
											</div>
											<div class="form-group m-form__group">
												<label >Price</label>
												<input  type="number" name="price" class="form-control m-input" placeholder="price" value="{{old('price',$service->price)}}">
												<br>
                                                @if($errors)
                                                <span class="text-danger">{{$errors->first('price')}}</span>
                                                @endif
											</div>
											
										</div>
										<div class="m-portlet__foot m-portlet__foot--fit">
											<div class="m-form__actions">
												<button type="submit" class="btn btn-primary">Submit</button>
                                                <a href="{{ route('list_services') }}" class="btn btn-secondary">Cancel</a>
												
											</div>
										</div>
									</form>

									<!--end::Form-->
								</div>
                </div>
            </div>
        </div>
    </div>
@endsection