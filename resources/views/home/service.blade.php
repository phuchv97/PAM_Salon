@extends('layouts.main-home')
@section('title', 'Dịch vụ')
@section('content')
   <div class="hero-wrap" style="background-image: url({{asset('salon/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
              <div class="col-md-6 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Dịch vụ &amp; Giá cả</h1>
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('home')}}">Trang chủ</a></span> <span>Dịch vụ &amp; Giá cả</span></p>
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
                @foreach($service as $s)
                    <div class="col-md-3 ftco-animate">
                        <div class="media d-block text-center block-6 services">
                            <div class="icon d-flex justify-content-center align-items-center mb-4">
                                <span class="flaticon-scissor-and-comb"></span>
                            </div>
                            <div class="media-body">
                                <h3 class="heading">{{$s->name}}</h3>
                                <p>{{$s->description}}</p>
                            </div>
                            
                        </div>      
                    </div>
                @endforeach
            </div>
        </div>
    </section>


        <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Kế hoạch &amp;Giá cả</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Dàn Skinner khéo léo, nhẹ nhàng đồng thời sở hữu ngoại hình xinh đẹp, ưa nhìn giúp xua tan những bộn bề công việc hàng ngày của khách hành nam giới., there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
            @foreach($service_detail as $s_detail )
                <div class="col-md-6">
                    <div class="pricing-entry ftco-animate">
                        <div class="d-flex text align-items-center">
                            <h3><span>{{$s_detail->name}}</span></h3>
                            <span class="price">{{number_format($s_detail->price).' đ'}}</span>
                        </div>
                        <div class="d-block">
                            <p>{{$s_detail->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
    </section>
@endsection

