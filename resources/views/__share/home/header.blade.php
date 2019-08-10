
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('logo/logo-PAM-admin.png')}}" style="height:80px"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
            @foreach($menus as $menu )
              <li class="nav-item"><a href="{{route($menu->slug)}}" class="nav-link">{{$menu -> name}}</a></li>
            @endforeach
              @php if(Auth::check()){
              @endphp
              <li class="nav-item"><a href="{{route('logout_guest')}}" class="nav-link">Đăng xuất</a></li>
              @php 

              }else{
              @endphp
              
              <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Đăng nhập</a></li>
              @php 
                }
              @endphp
            </ul>
          </div>
        </div>
      </nav>
