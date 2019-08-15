@extends('layouts.main-admin')
@section('content')

@php
$title = $product->id==null ? "Add product" : "Update product";

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
														$action = $product->id==null ? "Add product" : "Update product";
														echo $action;
													@endphp
												</h3>
											</div>
										</div>
									</div>

									<!--begin::Form-->
									<form enctype="multipart/form-data" action="{{ route('save_product')}}" method="post" class="m-form m-form--fit m-form--label-align-right" >
                                        @csrf <!-- bắt buộc có, đây là mã độc để bảo vệ ứng dụng khỏi tấn công giả mạo-->
                                        <div class="m-portlet__body">
                                            <input type="hidden" name="id" value="{{$product->id}}">
                                            <div class="form-group m-form__group">
												<label >Name</label>
												<input type="text" name="name" class="form-control m-input" id="exampleInputName"  placeholder="name" value="{{old('name',$product->name)}}" >
                                                @if($errors)
                                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group m-form__group">
												<label >Giá</label>
												<input type="number" name="price" class="form-control m-input" id="exampleInputName"  placeholder="price" value="{{old('price',$product->price)}}" >
                                                @if($errors)
                                                    <span class="text-danger">{{$errors->first('price')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group m-form__group">
												<label for="exampleTextarea">Description</label>
												<textarea class="form-control m-input" name="description" id="exampleTextarea" rows="2">{{old('description',$product->description)}}</textarea>
                                                @if($errors)
                                                    <span class="text-danger">{{$errors->first('description')}}</span>
                                                @endif
											</div>
                                            <div class="form-group m-form__group">
												<label for="exampleTextarea">Detail</label>
												<textarea class="form-control m-input" name="detail" id="exampleTextarea" rows="5">{{old('detail',$product->detail)}}</textarea>
                                                @if($errors)
                                                    <span class="text-danger">{{$errors->first('detail')}}</span>
                                                @endif
											</div>
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
                                            
											
											
										</div>
										<div class="m-portlet__foot m-portlet__foot--fit">
											<div class="m-form__actions">
												<button type="submit" class="btn btn-primary">Submit</button>
                                                <a href="{{ route('list_product') }}" class="btn btn-secondary">Cancel</a>
												
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