
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="#">PAM.</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{ route('/') }}" class="nav-link">Trang chủ</a></li>
	          <li class="nav-item"><a href="{{ route('service') }}" class="nav-link">Dịch vụ</a></li>
	          <li class="nav-item"><a href="{{ route('album') }}" class="nav-link">Album Ảnh</a></li>
	          <li class="nav-item"><a href="{{ route('product') }}" class="nav-link">Sản phẩm</a></li>
	          <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link">Bài viết</a></li>
	          <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Liên hệ</a></li>
              <li class="nav-item dropdown"><a href="{{ route('login') }}" class="nav-link">Đăng nhập</a>
                <div class="dropdown-content">
                   <a href="{{ route('signup') }}">Đăng ký</a>
               </div>
              </li>
	        </ul>
	      </div>
	    </div>
	  </nav>