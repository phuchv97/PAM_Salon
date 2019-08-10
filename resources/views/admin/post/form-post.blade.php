@extends('layouts.main-admin')
@section('content')

@php
$title = $post->id==null ? "Add Post" : "Update Post";

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
														$action = $post->id==null ? "Add Post" : "Update Post";
														echo $action;
													@endphp
												</h3>
											</div>
										</div>
									</div>

									<!--begin::Form-->
									<form enctype="multipart/form-data" action="{{ route('save_post')}}" method="post" class="m-form m-form--fit m-form--label-align-right" >
                                        @csrf <!-- bắt buộc có, đây là mã độc để bảo vệ ứng dụng khỏi tấn công giả mạo-->
                                        <div class="m-portlet__body">
                                            <input type="hidden" name="id" value="{{$post->id}}">
											<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                            <div class="form-group m-form__group">
												<label >Title</label>
												<input type="text" name="title" class="form-control m-input" id="exampleInputName"  placeholder="title" value="{{old('title',$post->title)}}" >
                                                @if($errors)
                                                    <span class="text-danger">{{$errors->first('title')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group m-form__group">
												<label for="exampleTextarea">Description</label>
												<textarea class="form-control m-input" name="description" id="exampleTextarea" rows="2">{{old('description',$post->description)}}</textarea>
                                                @if($errors)
                                                    <span class="text-danger">{{$errors->first('description')}}</span>
                                                @endif
											</div>
                                            <div class="form-group m-form__group">
												<label for="exampleTextarea">Detail</label>
												<textarea class="form-control m-input" name="detail" id="exampleTextarea" rows="5">{{old('detail',$post->detail)}}</textarea>
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
                                            
											<div class="form-group m-form__group">
												<label for="exampleSelect1">Category</label>
												<select name="category_id" class="form-control m-input" id="exampleSelect1">
                                                @foreach($categories as $category)
                                                    @php
                                                        if(isset($post)){
                                                            $category_id = $post->category_id;
                                                        }
                                                        
                                                        $id = $category->id;
                                                        

                                                        if($category_id==$id){
                                                    @endphp
                                                        <option selected=""  value="{{$category->id}}">{{$category->name}}</option>
                                                    @php
                                                    }else{
                                                    @endphp
                                                        <option  value="{{$category->id}}">{{$category->name}}</option>
                                                    @php
                                                         }
                                                    @endphp
													
                                                @endforeach
												</select>
                                                @if($errors)
                                                    <span class="text-danger">{{$errors->first('category_id')}}</span>
                                                @endif
											</div>
											
										</div>
										<div class="m-portlet__foot m-portlet__foot--fit">
											<div class="m-form__actions">
												<button type="submit" class="btn btn-primary">Submit</button>
                                                <a href="{{ route('list_post') }}" class="btn btn-secondary">Cancel</a>
												
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