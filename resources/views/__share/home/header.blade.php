
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
                    <li class="nav-item">
                     <div class="nav-link"> 
                    <div class="dropdown-profile ">
                      <button class="btn btn-default dropdown-toggle btn-profile" type="button" data-toggle="dropdown"><img src="{{asset(Auth::user()->image)}}" alt=""></button>
                      <ul class="dropdown-menu">
                        <div class="arrow-up"></div>
                        <li><a href="{{route('profile')}}"><i class="fa fa-user"></i>Profile</a></li>
                        <li><a href="{{route('logout_guest')}}" >Đăng xuất</a></li>
                      </ul>
                    </div>
                    </div>
                  </li>
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
