@extends('layouts.main-admin')
@section('content')

@php
$title = "Add Image for Gallery";

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
													Add Image for Gallery
												</h3>
											</div>
										</div>
									</div>

									<!--begin::Form-->
									<form enctype="multipart/form-data" action="{{ route('save_gallery')}}" method="post" class="m-form m-form--fit m-form--label-align-right" >
                                        @csrf <!-- bắt buộc có, đây là mã độc để bảo vệ ứng dụng khỏi tấn công giả mạo-->
                                        <div class="m-portlet__body">
                                            
											<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                            <div class="form-group m-form__group">
												<label for="exampleInputEmail1">Image</label>
												<div>
                                                
												<br>
                                                </div>
												<div class="custom-file col-md-4">
													<input type="file" name="image" class="custom-file-input" >
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
												<br>
                                                @if($errors)
                                                <span class="text-danger">{{$errors->first('image')}}</span>
                                                @endif
											</div>
                                            <div class="form-group m-form__group">
												<label for="exampleTextarea">Description</label>
												<textarea class="form-control m-input" name="description" id="exampleTextarea" rows="2">{{old('description')}}</textarea>
                                                @if($errors)
                                                    <span class="text-danger">{{$errors->first('description')}}</span>
                                                @endif
											</div>
                                            
											
										</div>
										<div class="m-portlet__foot m-portlet__foot--fit">
											<div class="m-form__actions">
												<button type="submit" class="btn btn-primary">Submit</button>
                                                <a href="{{ route('list_gallery') }}" class="btn btn-secondary">Cancel</a>
												
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