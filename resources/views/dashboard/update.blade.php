@extends('dashboard.master')
@section('body')
<div class="py-5"></div>
<section>
    <div class="container">
        <div class="row">
            @if (auth()->user()->subscription==1)
            <div class="col-6">
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
                    <a class="btn primary-theme-button" href="{{ url('subscribe/2') }}">Subscribe For 2000BDT/Mo</a>
                </div>
            </div>
            <div class="col-6">
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
                    <a class="btn primary-theme-button" href="{{ url('subscribe/3') }}">Subscribe For 5000BDT/Mo</a>
                </div>
            </div>
            @endif
            @if (auth()->user()->subscription==2)
                <div class="col-12">
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
                        <a class="btn primary-theme-button" href="{{ url('subscribe/3') }}">Subscribe For 5000BDT/Mo</a>
                    </div>
                </div>
            @endif
            @if (auth()->user()->subscription==3)
            <div class="col-12">
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
                    <a class="btn primary-theme-button" href="{{ url('subscribe/3') }}">Subscribed</a>
                </div>
            </div>
        @endif
        </div>
    </div>
</section>
<div class="py-5"></div>
@endsection
