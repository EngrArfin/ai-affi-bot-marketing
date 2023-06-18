<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
 <link rel="stylesheet" href="{{ asset('css/style.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/icons/menu.css') }}" />
 <link rel="stylesheet" href="{{ asset('assets/icons/close.css') }}">
 <title>Document</title>
 @yield('head')
</head>
<body>
 <header id="header">
  <div class="inner container py-3">
   <div class="logo">
    <a href="/">
     <img width="200px" src="{{ asset('assets/img/logo.png') }}" alt="logo">
    </a>
   </div>
   <div class="d-flex">
    <div class="nav d-none d-md-block me-3">
        @guest
     <ul>
        <li>
            <a href="{{ url('/') }}#">Home</a>
        </li>
        <li>
            <a href="{{ url('/') }}#about">About us</a>
        </li>
        <li>
            <a href="{{ url('/') }}#contact-us">Contact us</a>
        </li>
        <li>
        <a href="{{ url('signin') }}">Sign in</a>
        </li>
        <li class="active">
        <a href="{{ url('signup') }}">Sign up</a>
        </li>
     </ul>
     @endguest
    </div>
    @auth
        <div id="open-dropdown" class="p-1 d-none align-items-center justify-content-center d-md-flex" style="cursor: pointer;">
        <span class="material-symbols-outlined" style="font-size: 35px;font-weight: 600;">
        account_circle
        </span>
        <span class="material-symbols-outlined" style="margin-left: -4px;font-weight: bold;">
        expand_more
        </span>
        <ul class="dropdown-menu" style="position: absolute;transform: translate(-20px, 60px);">
        <li><a href="{{ url('dashboard') }}" class="dropdown-item">Dashboard</a></li>
        <li><a href="{{ url('logout') }}" class="dropdown-item">Logout</a></li>
        </ul>
        </div>
    @endauth
   </div>
   <div id="menu-toggle" class="p-1 d-flex align-items-center justify-content-center d-md-none" style="cursor: pointer;">
    <span class="material-symbols-outlined" style="font-size: 35px;">
     menu
    </span>
   </div>
  </div>
  <div id="mobile-nav" class="container pb-3 d-none">
   <div class="row">
    <div class="col-12">
     <nav>
      <ul>
       <li>
        <a href="{{ url('signin') }}">Sign in</a>
       </li>
       <li class="active">
        <a href="{{ url('signup') }}">Sign up</a>
       </li>
      </ul>
     </nav>
    </div>
   </div>
  </div>
 </header>
 @yield('body')
 <footer id="footer">
  <div class="py-4 d-flex align-items-center justify-content-center">
   <b style="color: #ffffff;">Copyright @2023 by Ai Affi Bot</b>
  </div>
 </footer>
 <script src="{{ asset('js/jquery.min.js') }}"></script>
 <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
