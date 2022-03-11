<!-- <nav class="navbar navbar-expand-lg bg-white fixed-top scrolling-navbar"> -->
<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      <span class="lni-menu"></span>
      <span class="lni-menu"></span>
      <span class="lni-menu"></span>
      </button>
      <a href="index-2.html" class="navbar-brand"><img src="{{url('assets/img/logo.png')}}" alt=""></a>
    </div>
    <div class="collapse navbar-collapse" id="main-navbar">
      <ul class="navbar-nav mr-auto w-100 justify-content-center">
        <li class="nav-item {{(Route::currentRouteName()=='home')?'active':''}}">
          <a class="nav-link" href="{{url('/')}}">
          Home
          </a>    
        </li>
        <li class="nav-item {{(Route::currentRouteName()=='category')?'active':''}}">
          <a class="nav-link" href="{{url('category')}}">
          Listings
          </a>
        </li>
        <li class="nav-item {{(Route::currentRouteName()=='contact')?'active':''}}">
          <a class="nav-link" href="{{url('contact')}}">
          Contact
          </a>
        </li>
        @auth
        <li class="nav-item  dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{auth()->user()->username}}
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('logout.perform') }}">Logout</a>
          </div>          
          <!-- <a href="{{ route('logout.perform') }}" class="header-top-button nav-link"><i class="lni-lock"></i>Logout</a> -->
        </li>
        @endauth
        @guest
        <li class="nav-item">
            <a href="{{url('login')}}" class="header-top-button nav-link"><i class="lni-lock"></i> Log In</a>
        </li>
        <li class="nav-item">
            <a href="{{url('register')}}" class="header-top-button nav-link"><i class="lni-pencil"></i> Register</a>
        </li>
        @endguest
      </ul>
      <div class="post-btn">
        <a class="btn btn-common" href="{{route('post-ads.show')}}"><i class="lni-pencil-alt"></i> Post an Ad</a>
      </div>
    </div>
  </div>
  <ul class="mobile-menu">
    <li>
      <a class="active" href="{{url('/')}}">
      Home
      </a>
    </li>
    <li>
      <a href="{{url('category')}}">Listings</a>
    </li>
    <li>
      <a href="{{url('contact')}}">Contact Us</a>
    </li>
  </ul>
</nav>