@extends('layouts.main-admin')
@section('content')

@php
$title = $user->id==null ? "Add User" : "Update User";

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
														$action = $user->id == null ? "Add User" : "Update User";
														echo $action;
													@endphp
												</h3>
											</div>
										</div>
									</div>

									<!--begin::Form-->
									<form enctype="multipart/form-data" action="{{ route('save_user') }}" method="post" class="m-form m-form--fit m-form--label-align-right" >
                                        @csrf <!-- bắt buộc có, đây là mã độc để bảo vệ ứng dụng khỏi tấn công giả mạo-->
                                        <div class="m-portlet__body">
                                            <input type="hidden" name="id" value="{{$user->id}}">
											
                                            <div class="form-group m-form__group">
												<label >user name</label>
												<input type="text" name="name" class="form-control m-input" id="exampleInputName"  placeholder="User name" value="{{old('name',$user->name)}}" >
                                                @if($errors)
                                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group m-form__group">
												<label >user email</label>
												<input type="email" name="email" class="form-control m-input" id="exampleInputName"  placeholder="User email" value="{{old('email',$user->email)}}" >
                                                @if($errors)
                                                    <span class="text-danger">{{$errors->first('email')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group m-form__group">
												<label >Password</label>
												<input type="password" name="password" class="form-control m-input" id="exampleInputName"  placeholder="Password" value="{{old('password',$user->password)}}" >
                                                @if($errors)
                                                    <span class="text-danger">{{$errors->first('password')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group m-form__group">
												<label >Phone Number</label>
												<input type="number" name="phone_number" class="form-control m-input" id="exampleInputName"  placeholder="Phone Number" value="{{old('phone_number',$user->phone_number)}}" >
                                                @if($errors)
                                                    <span class="text-danger">{{$errors->first('phone_number')}}</span>
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
												<label >Address</label>
												<input type="text" name="address" class="form-control m-input" id="exampleInputName"  placeholder="Address" value="{{old('address',$user->address)}}" >
                                                @if($errors)
                                                    <span class="text-danger">{{$errors->first('address')}}</span>
                                                @endif
                                            </div>
                                            <div class="form-group m-form__group">
												<label for="exampleSelect1">Gender</label>
												<select name="gender" class="form-control m-input" id="exampleSelect1">
													<option value="Nam">Nam</option>
													<option value="Nữ">Nữ</option>
												</select>
                                                @if($errors)
                                                    <span class="text-danger">{{$errors->first('gender')}}</span>
                                                @endif
											</div>
											<div class="form-group m-form__group">
												<label for="exampleSelect1">Role</label>
												<select name="role_id" class="form-control m-input" id="exampleSelect1">
                                                @foreach($roles as $role)
                                                    @php
                                                        if(isset($user)){
                                                            $role_id = $user->role_id;
                                                        }
                                                        
                                                        $id = $role->id;
                                                        

                                                        if($role_id==$id){
                                                    @endphp
                                                        <option selected=""  value="{{$role->id}}">{{$role->name}}</option>
                                                    @php
                                                    }else{
                                                    @endphp
                                                        <option  value="{{$role->id}}">{{$role->name}}</option>
                                                    @php
                                                         }
                                                    @endphp
													
                                                @endforeach
												</select>
                                                @if($errors)
                                                    <span class="text-danger">{{$errors->first('role_id')}}</span>
                                                @endif
											</div>
											
										</div>
										<div class="m-portlet__foot m-portlet__foot--fit">
											<div class="m-form__actions">
												<button type="submit" class="btn btn-primary">Submit</button>
                                                <a href="{{ route('list_user') }}" class="btn btn-secondary">Cancel</a>
												
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