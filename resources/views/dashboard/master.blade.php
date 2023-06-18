<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link rel="stylesheet" href="{{ asset('/dashboards/css/bootstrap.min.css') }}">
 <link rel="stylesheet" href="{{ asset('/dashboards/css/style.css') }}">
</head>
<body>
 <div id="sidebar">
  <a href="/" class="d-flex align-items-center justify-content-start p-3 py-1 text-decoration-none">
   <img src="{{ asset('/dashboards/img/account.png') }}" height="60" width="60" alt="">
   <h6 class="text-white m-0 py-0 px-2">{{ auth()->user()->name }}</h6>
  </a>
  <div class="card w-96 bg-base-100 shadow-xl image-full m-3" style="background-image: url({{ asset('assets/img/card-bg.jpg') }});background-size:cover;background-repeat:no-repeat;border-radius: 5px;">
    <div class="card-body" style="width: 100%;background: #00000063;color: #ffffff;border-radius: 5px;">
        <h4 class="card-title">VISA GOLD</h4>
        <p>4000 1234 5678 4010</p>
        <p>12/23</p>
        <p>{{ auth()->user()->name }}</p>
        <div class="card-actions justify-end">
        <button class="btn btn-primary">VIRTUAL CARD</button>
        </div>
    </div>
</div>
  <span style="height: 1px;background-color: #ffffff;width: 100%; display: block;"></span>
  <ul id="sidemenu">
   <li>
    <a href="{{ url('/dashboard') }}">My Products & Links<svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.4 12L0 10.6L4.6 6L0 1.4L1.4 0L7.4 6L1.4 12Z" fill="white"/>
</svg>
</a>
   </li>
   {{-- <li>
    <a href="{{ url('/dashboard/analytics') }}">My Analytics<svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.4 12L0 10.6L4.6 6L0 1.4L1.4 0L7.4 6L1.4 12Z" fill="white"/>
</svg>
</a>
   </li> --}}
   <li>
    <a href="{{ url('/dashboard/commissions') }}">Sales & Comissions<svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.4 12L0 10.6L4.6 6L0 1.4L1.4 0L7.4 6L1.4 12Z" fill="white"/>
</svg>
</a>
   </li>
   <li>
    <a href="{{ url('/dashboard/payout') }}">Pyaout<svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.4 12L0 10.6L4.6 6L0 1.4L1.4 0L7.4 6L1.4 12Z" fill="white"/>
</svg>
</a>
   </li>
   <li>
    <a href="{{ url('/dashboard/support') }}">Support<svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.4 12L0 10.6L4.6 6L0 1.4L1.4 0L7.4 6L1.4 12Z" fill="white"/>
</svg>
</a>
   </li>
   <li>
    <a href="{{ url('/logout') }}">Logout<svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1.4 12L0 10.6L4.6 6L0 1.4L1.4 0L7.4 6L1.4 12Z" fill="white"/>
        </svg>
        </a>
   </li>
  </ul>
 </div>
 <div id="main">
    <div class="py-3" style="background-color: #ffffff;display: flex;align-items: center;justify-content:end;">
        <img src="{{ asset('assets/img/logo.png') }}" height="40px" alt="">
    </div>
    @yield('body')
 </div>
 <script src="{{ asset('/dashboards/js/jquery.min.js') }}"></script>
 <script src="{{ asset('/dashboards/js/script.js') }}"></script>
 @yield('footer')
</body>
</html>
