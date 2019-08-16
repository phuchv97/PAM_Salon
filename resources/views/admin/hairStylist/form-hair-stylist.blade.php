@extends('layouts.main-admin')
@section('content')

@php
$title = $hairStylist->id==null ? "Add Hair Stylist" : "Update Hair Stylist";

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
														$action = $hairStylist->id == null ? "Add Hair Stylist" : "Update Hair Stylist";
														echo $action;
													@endphp
												</h3>
											</div>
										</div>
									</div>

									<!--begin::Form-->
									<form enctype="multipart/form-data" action="{{ route('save_hair_stylist') }}" method="post" class="m-form m-form--fit m-form--label-align-right" >
                                        @csrf <!-- đây là mã độc để bảo vệ ứng dụng khỏi tấn công giả mạo-->
                                        <div class="m-portlet__body">
                                            <input type="hidden" name="id" value="{{$hairStylist->id}}">
											
                                            <div class="form-group m-form__group">
												<label >Hair Stylist Name</label>
												<input type="text" name="name" class="form-control m-input" id="exampleInputName"  placeholder="Hair stylist name" value="{{old('name',$hairStylist->name)}}" >
                                                @if($errors)
                                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group m-form__group">
												<label >Address</label>
												<input type="text" name="address" class="form-control m-input" id="exampleInputName"  placeholder="address" value="{{old('address',$hairStylist->address)}}" >
                                                @if($errors)
                                                    <span class="text-danger">{{$errors->first('address')}}</span>
                                                @endif
                                            </div>
											<div class="form-group m-form__group">
												<label for="exampleInputEmail1">Avatar</label>
												<div>
												<br>
                                                </div>
												<div class="custom-file col-md-4">
													<input type="file" name="avatar" class="custom-file-input" >
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
												<br>
                                                @if($errors)
                                                <span class="text-danger">{{$errors->first('avatar')}}</span>
                                                @endif
											</div>
                                            <div class="form-group m-form__group">
												<label for="exampleTextarea">Description</label>
												<textarea class="form-control m-input" name="description" id="exampleTextarea" rows="2">{{old('description',$hairStylist->description)}}</textarea>
                                                @if($errors)
                                                    <span class="text-danger">{{$errors->first('description')}}</span>
                                                @endif
											</div>
											<div class="form-group m-form__group">
												<label for="exampleSelect1">Gender</label>
												<select name="gender" class="form-control m-input" id="exampleSelect1">
                                                	<option @if($hairStylist->gender=='nam') selected @endif   value="nam"> Nam </option>
                                                	<option @if($hairStylist->gender=='nu') selected @endif  value="nu"> Nữ </option>
                                                
												</select>
                                                @if($errors)
                                                    <span class="text-danger">{{$errors->first('gender')}}</span>
                                                @endif
											</div>
											
										</div>
										<div class="m-portlet__foot m-portlet__foot--fit">
											<div class="m-form__actions">
												<button type="submit" class="btn btn-primary">Submit</button>
                                                <a href="{{ route('list_hair_stylist') }}" class="btn btn-secondary">Cancel</a>
												
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