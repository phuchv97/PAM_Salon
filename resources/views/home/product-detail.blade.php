@extends('layouts.main-home')
@section('title', 'Chi tiết sản phẩm')
@section('content')
<div class="hero-wrap" style="background-image: url({{asset($product->image)}});height: 100px" data-stellar-background-ratio="0.5">
	      <div class="overlay"></div>
	      <div class="container">
	        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-6 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	          	<h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{$product->name}}</h1>
	            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('home')}}">Trang chủ</a></span> <span class="mr-2"><a href="{{route('product')}}">Sản phẩm</a></span> <span>Chi tiết sản phẩm</span></p>
	          </div>
	        </div>
	      </div>
	    </div>

	    <section class="ftco-section ftco-degree-bg">
	      <div class="container">
	        <div class="row">
	          <div class="col-md-8 ftco-animate">
	            <h2 class="mb-3">{{$product->name}}</h2>
	            <h3 class="price text-warning">Giá: {{number_format($product->price).' đ'}}</h3>
	            <p>{{$product->description}}</p>
	            <p>
	              <img src={{asset($product->image)}} alt="" class="img-fluid">
	            </p>
	            <p>{{$product->detail}}</p>
	           

	            <div class="pt-5 mt-5">
	              <!-- <h3 class="mb-5">6 Comments</h3>
	              <ul class="comment-list">
	                <li class="comment">
	                  <div class="vcard bio">
	                    <img src="{{ asset('salon/images/person_1.jpg') }}" alt="Image placeholder">
	                  </div>
	                  <div class="comment-body">
	                    <h3>John Doe</h3>
	                    <div class="meta">June 27, 2018 at 2:21pm</div>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
	                    <p><a href="#" class="reply">Reply</a></p>
	                  </div>
	                </li>

	                <li class="comment">
	                  <div class="vcard bio">
	                    <img src="{{ asset('salon/images/person_1.jpg') }}" alt="Image placeholder">
	                  </div>
	                  <div class="comment-body">
	                    <h3>John Doe</h3>
	                    <div class="meta">June 27, 2018 at 2:21pm</div>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
	                    <p><a href="#" class="reply">Reply</a></p>
	                  </div>

	                  <ul class="children">
	                    <li class="comment">
	                      <div class="vcard bio">
	                        <img src="{{ asset('salon/images/person_1.jpg') }}" alt="Image placeholder">
	                      </div>
	                      <div class="comment-body">
	                        <h3>John Doe</h3>
	                        <div class="meta">June 27, 2018 at 2:21pm</div>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
	                        <p><a href="#" class="reply">Reply</a></p>
	                      </div>


	                      <ul class="children">
	                        <li class="comment">
	                          <div class="vcard bio">
	                            <img src="{{ asset('salon/images/person_1.jpg') }}" alt="Image placeholder">
	                          </div>
	                          <div class="comment-body">
	                            <h3>John Doe</h3>
	                            <div class="meta">June 27, 2018 at 2:21pm</div>
	                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
	                            <p><a href="#" class="reply">Reply</a></p>
	                          </div>

	                            <ul class="children">
	                              <li class="comment">
	                                <div class="vcard bio">
	                                  <img src="{{ asset('salon/images/person_1.jpg') }}" alt="Image placeholder">
	                                </div>
	                                <div class="comment-body">
	                                  <h3>John Doe</h3>
	                                  <div class="meta">June 27, 2018 at 2:21pm</div>
	                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
	                                  <p><a href="#" class="reply">Reply</a></p>
	                                </div>
	                              </li>
	                            </ul>
	                        </li>
	                      </ul>
	                    </li>
	                  </ul>
	                </li>

	                <li class="comment">
	                  <div class="vcard bio">
	                    <img src="{{ asset('salon/images/person_1.jpg') }}" alt="Image placeholder">
	                  </div>
	                  <div class="comment-body">
	                    <h3>John Doe</h3>
	                    <div class="meta">June 27, 2018 at 2:21pm</div>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
	                    <p><a href="#" class="reply">Reply</a></p>
	                  </div>
	                </li>
	              </ul>
	              
	              <div class="comment-form-wrap pt-5">
	                <h3 class="mb-5">Bình luận</h3>
	                <form action="#">
	                  <div class="form-group">
	                    <label for="message">Nội dung</label>
	                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
	                  </div>
	                  <div class="form-group">
	                    <input type="submit" value="Đăng bình luận" class="btn py-3 px-4 btn-primary">
	                  </div>

	                </form>
	              </div> -->
	            </div>

	          </div> <!-- .col-md-8 -->
	          <div class="col-md-4 sidebar ftco-animate">

	            <div class="sidebar-box ftco-animate">
	              	<h3>Các sản phẩm mới</h3>
					@foreach($products as $p)
						<div class="block-21 mb-4 d-flex">
							<a class="blog-img mr-4" style="background-image: url({{asset($p->image)}});"></a>
							<div class="text">
							<h3 class="heading"><a href="{{route('product_detail',['id'=>$p->id])}}">{{$p->name}}</a></h3>
							</div>
						</div>
	              	@endforeach
	            </div>
	          </div>

	        </div>
	      </div>
	    </section> <!-- .section -->
@endsection