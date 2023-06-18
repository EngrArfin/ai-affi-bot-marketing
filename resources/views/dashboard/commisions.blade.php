@extends('dashboard.master')
@section('body')
<section>
    <div class="container">
        <div class="row">
                <div class="col-4 my-3">
                    <div class="d-flex align-items-center justify-content-center bg-primary br-2 text-white"  style="border-radius: 8px !important">
                        <h4 class="py-3 m-0">Total Profit : {{ auth()->user()->comission }}</h4>
                    </div>
                </div>
                <div class="col-4 my-3">
                    <div class="d-flex align-items-center justify-content-center bg-primary br-2 text-white"  style="border-radius: 8px !important">
                        <h4 class="py-3 m-0">Total Balance : {{ auth()->user()->balance }}</h4>
                    </div>
                </div>
                <div class="col-4 my-3">
                    <div class="d-flex align-items-center justify-content-center bg-primary br-2 text-white"  style="border-radius: 8px !important">
                        <h4 class="py-3 m-0">Total Clicks : {{ auth()->user()->clicks }}</h4>
                    </div>
                </div>
            <div class="col-12">
                <table class="table">
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Commission Percentage</th>
                        <th>Commission Ammount</th>
                    </tr>
                    <tr>
                        @foreach (auth()->user()->orders as $collection)
                            <tr>
                                <th>{{ $collection->name }}</th>
                                <th>{{ ($collection->price) }}</th>
                                <th>7%</th>
                                <th>{{ 7/100*($collection->price) }}</th>
                            </tr>
                        @endforeach
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
<div class="py-5"></div>
@endsection
