<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link rel="stylesheet" href="{{ asset('admins/css/bootstrap.min.css') }}">
 <link rel="stylesheet" href="{{ asset('admins/css/style.css') }}">
</head>
<body>
 <div id="sidebar">
  <a href="/" class="d-flex align-items-center justify-content-start p-3 py-3 text-decoration-none" style="background: #F2F2F2">
   <img width="100%" height="45px" src="{{ asset('assets/img/logo.png') }}" alt="">
  </a>
  <span style="height: 1px;background-color: #ffffff;width: 100%; display: block;"></span>
  <ul id="sidemenu">
   <li>
    <a href="{{ url('/admin') }}">All products<svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.4 12L0 10.6L4.6 6L0 1.4L1.4 0L7.4 6L1.4 12Z" fill="white"/>
</svg>
</a>
   </li>
   <li>
    <a href="{{ url('/admin/all-users') }}">All Users<svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.4 12L0 10.6L4.6 6L0 1.4L1.4 0L7.4 6L1.4 12Z" fill="white"/>
</svg>
</a>
   </li>
   <li>
    <a href="{{ url('/admin/ad-partners') }}">Ads Partners<svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.4 12L0 10.6L4.6 6L0 1.4L1.4 0L7.4 6L1.4 12Z" fill="white"/>
</svg>
</a>
   </li>
   <li>
    <a href="{{ url('/admin/ecom-partners') }}">E-commerce Partners<svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.4 12L0 10.6L4.6 6L0 1.4L1.4 0L7.4 6L1.4 12Z" fill="white"/>
</svg>
</a>
   </li>
   <li>
    <a href="{{ url('/admin/commissions') }}">Sales & Comissions<svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.4 12L0 10.6L4.6 6L0 1.4L1.4 0L7.4 6L1.4 12Z" fill="white"/>
</svg>
</a>
   </li>
   <li>
    <a href="{{ url('/admin/payout') }}">Pyaout<svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.4 12L0 10.6L4.6 6L0 1.4L1.4 0L7.4 6L1.4 12Z" fill="white"/>
</svg>
</a>
<li>
    <a href="{{ url('/admin/logout') }}">Logout<svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.4 12L0 10.6L4.6 6L0 1.4L1.4 0L7.4 6L1.4 12Z" fill="white"/>
</svg>
</a>
   </li>
  </ul>
 </div>
 <div id="main">
    <div class="py-3" style="background-color: #ffffff;display: flex;align-items: center;justify-content: end;">
        <img src="{{ asset('assets/img/logo.png') }}" height="45px" alt="">
    </div>
    @yield('body')
 </div>
 <script src="{{ asset('admins/js/jquery.min.js') }}"></script>
 <script src="{{ asset('admins/js/script.js') }}"></script>
 @yield('footer')
</body>
</html>
