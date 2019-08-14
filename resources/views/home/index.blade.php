@extends('layouts.main-home')
@section('title', 'Trang chủ')
@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url({{ asset('salon/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
      
      <div class="col-md-8 appointment ftco-animate">
        <form autocomplete="off" action="{{route('formdatlich')}}" class="appointment-form" onsubmit="return validate_phonenumber()">
          <div >
            <div class="form-group col-md-12">
              <input type="number" name="phone_number" id="phone_number" class="form-control" placeholder="Số điện thoại">
            </div>
            <span id="err_phone" class="col-md-12"></span>
          </div>  
          <div class="d-md-flex">
            <div class="form-group col-md-6">
              <div class="input-wrap">
                <div class="icon"><span class="ion-md-calendar"></span></div>
                <input type="text" name="reservation_date" id="appointment_date" class="form-control" placeholder="Ngày">
              </div>
              <span id="err_date"></span>
            </div>
            <div class="form-group col-md-6 form-stylist">
             <label for="exampleFormControlSelect2"  class="stylist">Hair Stylist</label>
             <select class="form-control" name="hair_stylist" id="exampleFormControlSelect2">
              @foreach($stylist as $stylists)
              <option value="{{$stylists->id}}">{{$stylists->name}}</option>
              @endforeach
            </select>
            </div>
          </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary py-3 px-4 mt-3">Qua bước 2</button>
        </div>
      </form>
    </div>
      <div class="col-md-4 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
        <p class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Salon PAM</p>
        <h2 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Tút lại vẻ đẹp trai để tỏa sáng</h2>
      </div>

    </div>

  </div>

</div>

<section class="ftco-intro">
  <div class="container-wrap">
    <div class="wrap d-md-flex align-items-end">
      <div class="info">
        <div class="row no-gutters">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="icon"><span class="icon-phone"></span></div>
            <div class="text">
              <h3>01656502625</h3>
              <p></p>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="icon"><span class="icon-my_location"></span></div>
            <div class="text">
              <h3>15 Đông Quan</h3>
              <p>Cầu Giấy, Hà Nội</p>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="icon"><span class="icon-clock-o"></span></div>
            <div class="text">
              <h3>Mở thứ Hai đến thứ Sáu</h3>
              <p>8:00am - 9:00pm</p>
            </div>
          </div>
        </div>
      </div>
      <div class="social pl-md-5 p-4">
        <ul class="social-icon">
          <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
          <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
          <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-4">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Chào mừng bạn đã đến với <span>PAM Salon</span> </h2>
        <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8 text-center ftco-animate">
        <p>Trải nghiệm cắt tóc dành cho phái mạnh hiện đại không chỉ là "cắt cho ngắn" mà còn tận hưởng dịch vụ tổng thể cho diện mạo đẹp trai tỏa sáng cùng tinh thần sảng khoái. Salon PAM thấu hiểu và mang đến những sản phẩm, dịch vụ chăm sóc tóc, da mặt chuyên nghiệp - tạo kiểu tóc thời trang - chăm sóc sức khỏe dành riêng cho nam giới gói gọn trong quy trình khoa học 30 phút với giá thành hợp lý nhất</p>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-bg-dark">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Dịch vụ của chúng tôi</h2>
        <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
        <p class="mt-5">Salon PAM tin tưởng và nỗ lực mỗi ngày để kết nối bàn tay tài hoa của người thợ Việt cùng công nghệ khoa học trong 30 phút nhằm đem đến cho phái mạnh toàn cầu kiểu tóc đẹp trai, làn da khỏe mạnh cuốn hút phái đẹp.</p>
      </div>
    </div>
    <div class="row">
      @foreach($services as $service)
      <div class="col-md-3 ftco-animate">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex justify-content-center align-items-center mb-4">
            <span class="flaticon-scissor-and-comb"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">{{$service->name}}</h3>
            <p>{{$service -> description}}</p>
          </div>
        </div>      
      </div>
      @endforeach
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3 ">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2 class="mb-4">Giá cả Dịch vụ</h2>
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
            <span class="price">{{$s_detail->price}}Đ</span>
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

<section class="ftco-section ftco-discount img" style="background-image: url({{ asset('salon/images/bg_4.jpg') }})" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center" data-scrollax-parent="true">
      <div class="col-md-7 text-center discount ftco-animate" data-scrollax=" properties: { translateY: '-30%'}">
        <h3>Tiết kiệm tới 25%</h3>
        <h2 class="mb-4">TẤT CẢ CÁC DỊCH VỤ GIẢM GIÁ</h2>
        <p class="mb-4">Không chỉ cung cấp dịch vụ, Salon PAM còn là nơi tư vấn và phân phối mỹ phẩm nam giới hàng đầu tại Việt Nam</p>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Nhà tạo mẫu tóc của chúng tôi</h2>
        <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
        <p class="mt-5">Dàn Skinner khéo léo, nhẹ nhàng đồng thời sở hữu ngoại hình xinh đẹp, ưa nhìn giúp xua tan những bộn bề công việc hàng ngày của khách hành nam giới., there live the blind texts.</p>
      </div>
    </div>
    <div class="row">
      @foreach($hairStylist as $stylist)
      <div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        <div class="staff">
          <div class="img mb-4" style="background-image: url({{ asset($stylist->avatar) }});"></div>
          <div class="info text-center">
            <h3><a href="teacher-single.html">{{$stylist -> name}}</a></h3>
            <!-- <span class="position">Hair Specialist</span> -->
            <div class="text">
              <p>{{$stylist -> description}}</p>
            </div>
            <div class="wrapper">
              <div class="rating-holder">
                <div class="c-rating c-rating--small" data-rating-value="2">
                  <button>1</button>
                  <button>2</button>
                  <button>3</button>
                  <button>4</button>
                  <button>5</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach    
    </div>
  </div>
</section>


<section class="ftco-gallery">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Bộ sưu tập</h2>
        <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
        <p class="mt-5">Dàn Skinner khéo léo, nhẹ nhàng đồng thời sở hữu ngoại hình xinh đẹp, ưa nhìn giúp xua tan những bộn bề công việc hàng ngày của khách hành nam giới., there live the blind texts.</p>
      </div>
    </div>
  </div>
  <div class="container-wrap">
    <div class="row no-gutters">
      @foreach($gallery as $g)
      <div class="col-md-3 ftco-animate">
        <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url({{ asset($g->image) }});">
          <div class="icon mb-4 d-flex align-items-center justify-content-center">
            <span class="icon-search"></span>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</section>


<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url({{ asset('salon/images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <div class="icon"><span class="flaticon-scissor-and-comb"></span></div>
                <strong class="number" data-number="705">0</strong>
                <span>Creative Makeup</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <div class="icon"><span class="flaticon-scissor-and-comb"></span></div>
                <strong class="number" data-number="1000">0</strong>
                <span>Number of Awards</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <div class="icon"><span class="flaticon-scissor-and-comb"></span></div>
                <strong class="number" data-number="3000">0</strong>
                <span>Happy Clients</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <div class="icon"><span class="flaticon-scissor-and-comb"></span></div>
                <strong class="number" data-number="900">0</strong>
                <span>Piercing Done</span>
              </div>
            </div>
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
        <h2 class="mb-4">Bài viết gần đây</h2>
        <p>Dàn Skinner khéo léo, nhẹ nhàng đồng thời sở hữu ngoại hình xinh đẹp, ưa nhìn giúp xua tan những bộn bề công việc hàng ngày của khách hành nam giới.</p>
      </div>
    </div>
    <div class="row d-flex">
      @foreach($posts as $post)
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="{{route('blog_detail',['id' => $post->id])}}" class="block-20" style="background-image: url({{ asset($post -> image) }});">
          </a>
          <div class="text py-4 d-block">
            <div class="meta">
                  <!-- <div><a href="#">Sept 10, 2018</a></div>
                    <div><a href="#">Admin</a></div> -->
                    <!-- <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> -->
                  </div>
                  <h3 class="heading mt-2"><a href="{{route('blog_detail',['id'=> $post->id])}}">{{$post -> title}}</a></h3>
                  <p>{{$post -> description}}</p>
                </div>
              </div>
            </div>
            @endforeach  
          </div>
        </div>
      </section>

      @endsection

