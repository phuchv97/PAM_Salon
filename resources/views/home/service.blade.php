@extends('layouts.main-home')
@section('title', 'Dịch vụ')
@section('content')
   <div class="hero-wrap" style="background-image: url({{asset('salon/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
              <div class="col-md-6 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Dịch vụ &amp; Giá cả</h1>
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Dịch vụ &amp; Giá cả</span></p>
              </div>
            </div>
          </div>
        </div>

        <section class="ftco-section ftco-bg-dark">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Dịch vụ của chúng tôi</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Dàn Skinner khéo léo, nhẹ nhàng đồng thời sở hữu ngoại hình xinh đẹp, ưa nhìn giúp xua tan những bộn bề công việc hàng ngày của khách hành nam giới.</p>
          </div>
        </div>
            <div class="row">
          <div class="col-md-3 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
                <span class="flaticon-scissor-and-comb"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Cắt tóc &amp; Tạo kiểu</h3>
                <p>Dàn Skinner khéo léo, nhẹ nhàng đồng thời sở hữu ngoại hình xinh đẹp, ưa nhìn giúp xua tan những bộn bề công việc hàng ngày của khách hành nam giới.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
                <span class="flaticon-male-head-hair-and-beard"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Điều trị râu</h3>
                <p>Dàn Skinner khéo léo, nhẹ nhàng đồng thời sở hữu ngoại hình xinh đẹp, ưa nhìn giúp xua tan những bộn bề công việc hàng ngày của khách hành nam giới.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-4"><span class="flaticon-heads-hairs-and-scissors"></span></div>
              <div class="media-body">
                <h3 class="heading">Dịch vụ tô màu</h3>
                <p>Dàn Skinner khéo léo, nhẹ nhàng đồng thời sở hữu ngoại hình xinh đẹp, ưa nhìn giúp xua tan những bộn bề công việc hàng ngày của khách hành nam giới.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-4"><span class="flaticon-young-male-short-irregular-hair-on-head-and-a-small-beard"></span></div>
              <div class="media-body">
                <h3 class="heading">Tẩy lông</h3>
                <p>Dàn Skinner khéo léo, nhẹ nhàng đồng thời sở hữu ngoại hình xinh đẹp, ưa nhìn giúp xua tan những bộn bề công việc hàng ngày của khách hành nam giới.</p>
              </div>
            </div>    
          </div>
        </div>
        </div>
    </section>


        <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Chúng ta làm gì</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Dàn Skinner khéo léo, nhẹ nhàng đồng thời sở hữu ngoại hình xinh đẹp, ưa nhìn giúp xua tan những bộn bề công việc hàng ngày của khách hành nam giới.</p>
          </div>
        </div>
        </div>
        <div class="container-wrap">
            <div class="row no-gutters d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url({{ asset('salon/images/work-1.jpg') }});"></a>
                        <div class="text p-4">
                            <h3>Kiểu tóc </h3>
                            <p>Dàn Skinner khéo léo, nhẹ nhàng đồng thời sở hữu ngoại hình xinh đẹp, ưa nhìn giúp xua tan những bộn bề công việc hàng ngày của khách hành nam giới. </p>
                            <span><a href="#">Đọc thêm</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url({{ asset('salon/images/work-2.jpg') }});"></a>
                        <div class="text p-4">
                            <h3>Cắt tỉa</h3>
                            <p>Dàn Skinner khéo léo, nhẹ nhàng đồng thời sở hữu ngoại hình xinh đẹp, ưa nhìn giúp xua tan những bộn bề công việc hàng ngày của khách hành nam giới.</p>
                            <span><a href="#">Đọc thêm</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url({{ asset('salon/images/work-3.jpg') }});"></a>
                        <div class="text p-4">
                            <h3>Cắt tóc truyền thống </h3>
                            <p>Dàn Skinner khéo léo, nhẹ nhàng đồng thời sở hữu ngoại hình xinh đẹp, ưa nhìn giúp xua tan những bộn bề công việc hàng ngày của khách hành nam giới.</p>
                            <span><a href="#">Đọc thêm</a></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img order-md-last" style="background-image: url({{ asset('salon/images/work-4.jpg') }});"></a>
                        <div class="text p-4">
                            <h3>Kiểu tóc cho nữ</h3>
                            <p>Dàn Skinner khéo léo, nhẹ nhàng đồng thời sở hữu ngoại hình xinh đẹp, ưa nhìn giúp xua tan những bộn bề công việc hàng ngày của khách hành nam giới. </p>
                            <span><a href="#">Đọc thêm</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img order-md-last" style="background-image: url({{ asset('salon/images/work-5.jpg') }});"></a>
                        <div class="text p-4">
                            <h3>Cắt tỉa </h3>
                            <p>Dàn Skinner khéo léo, nhẹ nhàng đồng thời sở hữu ngoại hình xinh đẹp, ưa nhìn giúp xua tan những bộn bề công việc hàng ngày của khách hành nam giới.</p>
                            <span><a href="#">Đọc thêm</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img order-md-last" style="background-image: url({{ asset('salon/images/work-6.jpg') }});"></a>
                        <div class="text p-4">
                            <h3>Traditional Haircuts Mens </h3>
                            <p>Dàn Skinner khéo léo, nhẹ nhàng đồng thời sở hữu ngoại hình xinh đẹp, ưa nhìn giúp xua tan những bộn bề công việc hàng ngày của khách hành nam giới.</p>
                            <span><a href="#">Đọc thêm</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


            <div class="container">
            <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Kế hoạch &amp;Giá cả</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Dàn Skinner khéo léo, nhẹ nhàng đồng thời sở hữu ngoại hình xinh đẹp, ưa nhìn giúp xua tan những bộn bề công việc hàng ngày của khách hành nam giới., there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="pricing-entry ftco-animate">
                    <div class="d-flex text align-items-center">
                        <h3><span>Cắt tóc nam</span></h3>
                        <span class="price">100.000đ</span>
                    </div>
                    <div class="d-block">
                        <p>Không chỉ cung cấp dịch vụ, Salon PAM còn là nơi tư vấn và phân phối mỹ phẩm nam giới hàng đầu tại Việt Nam</p>
                    </div>
                </div>
                <div class="pricing-entry ftco-animate">
                    <div class="d-flex text align-items-center">
                        <h3><span>Cắt tóc trẻ em</span></h3>
                        <span class="price">50.000đ</span>
                    </div>
                    <div class="d-block">
                        <p>Không chỉ cung cấp dịch vụ, Salon PAM còn là nơi tư vấn và phân phối mỹ phẩm nam giới hàng đầu tại Việt Nam</p>
                    </div>
                </div>
                <div class="pricing-entry ftco-animate">
                    <div class="d-flex text align-items-center">
                        <h3><span>Cạo râu</span></h3>
                        <span class="price">30.000đ</span>
                    </div>
                    <div class="d-block">
                        <p>Không chỉ cung cấp dịch vụ, Salon PAM còn là nơi tư vấn và phân phối mỹ phẩm nam giới hàng đầu tại Việt Nam</p>
                    </div>
                </div>
                <div class="pricing-entry ftco-animate">
                    <div class="d-flex text align-items-center">
                        <h3><span>Cắt tóc nam</span></h3>
                        <span class="price">$20.00</span>
                    </div>
                    <div class="d-block">
                        <p>Không chỉ cung cấp dịch vụ, Salon PAM còn là nơi tư vấn và phân phối mỹ phẩm nam giới hàng đầu tại Việt Nam</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="pricing-entry ftco-animate">
                    <div class="d-flex text align-items-center">
                        <h3><span>Cắt tóc nữ</span></h3>
                        <span class="price">200.000đ</span>
                    </div>
                    <div class="d-block">
                        <p>Không chỉ cung cấp dịch vụ, Salon PAM còn là nơi tư vấn và phân phối mỹ phẩm nam giới hàng đầu tại Việt Nam</p>
                    </div>
                </div>
                <div class="pricing-entry ftco-animate">
                    <div class="d-flex text align-items-center">
                        <h3><span>Cắt tóc nam</span></h3>
                        <span class="price">100.000đ</span>
                    </div>
                    <div class="d-block">
                        <p>Không chỉ cung cấp dịch vụ, Salon PAM còn là nơi tư vấn và phân phối mỹ phẩm nam giới hàng đầu tại Việt Nam</p>
                    </div>
                </div>
                <div class="pricing-entry ftco-animate">
                    <div class="d-flex text align-items-center">
                        <h3><span>Cắt tóc nam</span></h3>
                        <span class="price">100.000đ</span>
                    </div>
                    <div class="d-block">
                        <p>Không chỉ cung cấp dịch vụ, Salon PAM còn là nơi tư vấn và phân phối mỹ phẩm nam giới hàng đầu tại Việt Nam</p>
                    </div>
                </div>
                <div class="pricing-entry ftco-animate">
                    <div class="d-flex text align-items-center">
                        <h3><span>Cắt tóc nam</span></h3>
                        <span class="price">100.000đ</span>
                    </div>
                    <div class="d-block">
                        <p>Không chỉ cung cấp dịch vụ, Salon PAM còn là nơi tư vấn và phân phối mỹ phẩm nam giới hàng đầu tại Việt Nam</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

