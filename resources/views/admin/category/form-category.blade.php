@extends('layouts.main-admin')
@section('content')

@php
$title = $category->id==null ? "Add Category" : "Update Category";

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
														$action = $category->id==null ? "Add Category" : "Update Category";
														echo $action;
													@endphp
												</h3>
											</div>
										</div>
									</div>

									<!--begin::Form-->
									<form enctype="multipart/form-data" action="{{ route('save_category')}}" method="post" class="m-form m-form--fit m-form--label-align-right" >
                                        @csrf <!-- bắt buộc có, đây là mã độc để bảo vệ ứng dụng khỏi tấn công giả mạo-->
                                        <div class="m-portlet__body">
                                            <input type="hidden" name="id" value="{{$category->id}}">
											<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                            <div class="form-group m-form__group">
												<label >Name</label>
												<input type="text" name="name" class="form-control m-input" id="exampleInputName"  placeholder="name" value="{{old('name',$category->name)}}" >
                                                @if($errors)
                                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group m-form__group">
												<label >Slug</label>
												<input type="text" name="slug" class="form-control m-input" id="exampleInputName"  placeholder="slug" value="{{old('slug',$category->slug)}}" >
                                                @if($errors)
                                                    <span class="text-danger">{{$errors->first('slug')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group m-form__group">
												<label for="exampleTextarea">Description</label>
												<textarea class="form-control m-input" name="description" id="exampleTextarea" rows="2">{{old('description',$category->description)}}</textarea>
                                                @if($errors)
                                                    <span class="text-danger">{{$errors->first('description')}}</span>
                                                @endif
											</div>
										</div>
										<div class="m-portlet__foot m-portlet__foot--fit">
											<div class="m-form__actions">
												<button type="submit" class="btn btn-primary">Submit</button>
                                                <a href="{{ route('list_category') }}" class="btn btn-secondary">Cancel</a>
												
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