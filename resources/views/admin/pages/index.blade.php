@extends('admin.master')
@section('body')
<div class="p-3">
    <a class="btn btn-primary" href="{{ url('/admin/add-product') }}">Add Product</a>
</div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-primary">
                    <ul class="m-0" style="list-style-type: none">
                        @foreach ($products as $item)
                            <li class="py-1">
                                <a href="{{ $item->product_url }}">{{ $item->product_url }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="py-5"></div>
@endsection
