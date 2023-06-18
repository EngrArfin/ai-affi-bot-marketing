@extends('dashboard.master')
@section('body')
<div class="py-5"></div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="subcription-box">
                    <img src="{{ asset('assets/img/homeplus.png') }}" alt="">
                    <h5 class="text-center">Starter</h5>
                    <ul>
                        <li><img src="{{ asset('assets/img/tick.png') }}" alt=""> 10 products & 10 short links</li>
                        <li><img src="{{ asset('assets/img/tick.png') }}" alt=""> 5 partner ads site</li>
                        <li><img src="{{ asset('assets/img/tick.png') }}" alt=""> Quick Payout</li>
                        <li><img src="{{ asset('assets/img/tick.png') }}" alt=""> Analytics</li>
                    </ul>
                    <div style="height: 1px;width:100%;background:#000000;display:block;margin-bottom:30px"></div>
                    <a href="{{ url('/subscribe/1') }}" type="submit" class="btn primary-theme-button mt-3 px-5 py-2">Subscribe for 1000BDT/Mo</a>
                </div>
            </div>
            <div class="col-4">
                <div class="subcription-box">
                    <img src="{{ asset('assets/img/homeplus.png') }}" alt="">
                    <h5 class="text-center">Booster</h5>
                    <ul>
                        <li><img src="{{ asset('assets/img/tick.png') }}" alt=""> 20 products & 30 short links</li>
                        <li><img src="{{ asset('assets/img/tick.png') }}" alt=""> 15 partner ads site</li>
                        <li><img src="{{ asset('assets/img/tick.png') }}" alt=""> Quick Payout</li>
                        <li><img src="{{ asset('assets/img/tick.png') }}" alt=""> Analytics</li>
                    </ul>
                    <div style="height: 1px;width:100%;background:#000000;display:block;margin-bottom:30px"></div>
                    <a href="{{ url('/subscribe/2') }}" type="submit" class="btn primary-theme-button mt-3 px-5 py-2">Subscribe for 1500BDT/Mo</a>
                </div>
            </div>
            <div class="col-4">
                <div class="subcription-box">
                    <img src="{{ asset('assets/img/homeplus.png') }}" alt="">
                    <h5 class="text-center">Sky Rocket</h5>
                    <ul>
                        <li><img src="{{ asset('assets/img/tick.png') }}" alt=""> 100 products & 10 short links</li>
                        <li><img src="{{ asset('assets/img/tick.png') }}" alt=""> 35 partner ads site</li>
                        <li><img src="{{ asset('assets/img/tick.png') }}" alt=""> Quick Payout</li>
                        <li><img src="{{ asset('assets/img/tick.png') }}" alt=""> Analytics</li>
                    </ul>
                    <div style="height: 1px;width:100%;background:#000000;display:block;margin-bottom:30px"></div>
                    <a href="{{ url('/subscribe/3') }}" type="submit" class="btn primary-theme-button mt-3 px-5 py-2">Subscribe for 2000BDT/Mo</a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="py-5"></div>
@endsection
