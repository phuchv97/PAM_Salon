@extends('layouts.main-admin')
@section('title', 'Thống kê')
@section('content')
							<div class="bg-white">

								<!--begin: Search Form -->
								<div class="row m-row--col-separator-xl">
									<div class="rounded border border-secondary col-md-12 col-lg-6 col-xl-3">

										<!--begin::Total Profit-->
										<div class="m-widget24">
											<div class="m-widget24__item">
												<a href="{{route('list_post')}}" class="m-widget24__title text-info">
												<h4 class="">
													Post List
												</h4>
												</a>
												<br>
												<span class="m-widget24__desc">
													Amount
												</span>
												<span class="m-widget24__stats m--font-info">
													{{$posts}}
												</span>
												<div class="m--space-10"></div>
												
											</div>
										</div>

										<!--end::Total Profit-->
									</div>
									
									<div class="rounded border border-secondary col-md-12 col-lg-6 col-xl-3">

										<!--begin::New Feedbacks-->
										<div class="m-widget24">
											<div class="m-widget24__item">
												<a href="{{route('list_product')}}" class="m-widget24__title text-danger">
												<h4 class="">
													Product List
												</h4>
												</a>
												<br>
												<span class="m-widget24__desc">
													Amount
												</span>
												<span class="m-widget24__stats m--font-danger">
													{{$product}}
												</span>
												<div class="m--space-10"></div>
												
											</div>
										</div>

										<!--end::New Feedbacks-->
									</div>
									<div class="rounded border border-secondary col-md-12 col-lg-6 col-xl-3">

										<!--begin::New Orders-->
										<div class="m-widget24">
											<div class="m-widget24__item">
												<a href="{{route('list_services')}}" class="m-widget24__title text-info">
												<h4 class="">
													Service List
												</h4>
												</a>
												<br>
												<span class="m-widget24__desc">
													Amount
												</span>
												<span class="m-widget24__stats m--font-info">
													{{$services}}
												</span>
												<div class="m--space-10"></div>
												
											</div>
										</div>

										<!--end::New Orders-->
									</div>
									<div class="rounded border border-secondary col-md-12 col-lg-6 col-xl-3">

										<!--begin::New Users-->
										<div class="m-widget24">
											<div class="m-widget24__item">
												<a href="{{route('list_hair_stylist')}}" class="m-widget24__title text-danger">
												<h4 class="">
													Hair Stylist
												</h4>
												</a>
												<br>
												<span class="m-widget24__desc">
													Amount
												</span>
												<span class="m-widget24__stats m--font-danger">
													{{$hairStylist}}
												</span>
												<div class="m--space-10"></div>
												
											</div>
										</div>

										<!--end::New Users-->
									</div>
								</div>
								<div class="row m-row--col-separator-xl">
									<div class="rounded border border-secondary col-md-12 col-lg-6 col-xl-3">

										<!--begin::Total Profit-->
										<div class="m-widget24">
											<div class="m-widget24__item">
												<a href="{{route('list_gallery')}}" class="m-widget24__title text-danger">
												<h4 class="">
													Gallery Image
												</h4>
												</a>
												<br>
												<span class="m-widget24__desc">
													Amount
												</span>
												<span class="m-widget24__stats m--font-danger">
													{{$gallery}} 
												</span>
												<div class="m--space-10"></div>
												
											</div>
										</div>

										<!--end::Total Profit-->
									</div>
									
									<!-- <div class="rounded border border-secondary col-md-12 col-lg-6 col-xl-3">

										
										<div class="m-widget24">
											<div class="m-widget24__item">
												<a href="" class="m-widget24__title text-brand">
												<h4 class="">
													Total Frofit
												</h4>
												</a>
												<br>
												<span class="m-widget24__desc">
													All Customs Value
												</span>
												<span class="m-widget24__stats m--font-brand">
													$18M
												</span>
												<div class="m--space-10"></div>
												
											</div>
										</div>

										
									</div>
									<div class="rounded border border-secondary col-md-12 col-lg-6 col-xl-3">

										
										<div class="m-widget24">
											<div class="m-widget24__item">
												<a href="" class="m-widget24__title text-danger">
												<h4 class="">
													Total Frofit
												</h4>
												</a>
												<br>
												<span class="m-widget24__desc">
													All Customs Value
												</span>
												<span class="m-widget24__stats m--font-danger">
													$18M
												</span>
												<div class="m--space-10"></div>
												
											</div>
										</div>

										
									</div>
									<div class="rounded border border-secondary col-md-12 col-lg-6 col-xl-3">

										
										<div class="m-widget24">
											<div class="m-widget24__item">
												<a href="" class="m-widget24__title text-brand">
												<h4 class="">
													Total Frofit
												</h4>
												</a>
												<br>
												<span class="m-widget24__desc">
													All Customs Value
												</span>
												<span class="m-widget24__stats m--font-brand">
													$18M
												</span>
												<div class="m--space-10"></div>
												
											</div>
										</div>

										
									</div> -->
								</div>

								<!--end: Search Form -->

								
							</div>
@endsection('content')
