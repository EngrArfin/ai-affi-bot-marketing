@extends('admin.master')
@section('body')
<section>
    <div class="container">
        <div class="row">
                <div class="col-4 my-3">
                    <div class="d-flex align-items-center justify-content-center bg-primary br-2 text-white"  style="border-radius: 8px !important">
                        <h4 class="py-3 m-0">Total Profit : {{ $profit }}</h4>
                    </div>
                </div>
                <div class="col-4 my-3">
                    <div class="d-flex align-items-center justify-content-center bg-primary br-2 text-white"  style="border-radius: 8px !important">
                        <h4 class="py-3 m-0">Total Balance : {{ $balance }}</h4>
                    </div>
                </div>
                <div class="col-4 my-3">
                    <div class="d-flex align-items-center justify-content-center bg-primary br-2 text-white"  style="border-radius: 8px !important">
                        <h4 class="py-3 m-0">Total Clicks : {{ 4 }}</h4>
                    </div>
                </div>
            <div class="col-12">
                <table class="table">
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Commission Percentage</th>
                        <th>Commission Ammount</th>
                        <th>Reffered By</th>
                    </tr>
                    <tr>
                        @foreach ($orders as $collection)
                            <tr>
                                <th>{{ $collection['name'] }}</th>
                                <th>{{ ($collection['price']) }}</th>
                                <th>{{ ($collection['percentage']) }}</th>
                                <th>{{ ($collection['ammount']) }}</th>
                                <th>{{ $collection['refer']->name }}</th>
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
