@extends('dashboard.master')
@section('body')
<section>
    <div class="container">
        <div class="row">
            @if (auth()->user()->shortlinks->count()<1)
                <div class="col-12 vh-100 d-flex align-items-center justify-content-center flex-column">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <h1 id="text-loading" class="py-3">Wait Our AI Bot is creating links for you</h1>
                </div>
            @else
                <div class="col-12 p-5">
                    <h1 class="pb-3">My Products & links</h1>
                    <table class="table">
                        <tr>
                            <th>Product Name</th>
                            <th>Url/Links</th>
                            <th>Clicks</th>
                        </tr>
                        <tr>
                            @foreach (auth()->user()->shortlinks as $collection)
                                <tr>
                                    <th>{{ $collection->product->name }}</th>
                                    <th>
                                        <a href="{{ url('/shortlinks/'.$collection->id) }}" target="blank">{{ url('/shortlinks/'.$collection->id) }}</a>
                                    </th>
                                    <th>{{ $collection->clicks }}</th>
                                </tr>
                            @endforeach
                        </tr>
                    </table>
                </div>
            @endif
        </div>
    </div>
</section>
<div class="py-5"></div>
@endsection
@section('footer')
    @if (auth()->user()->shortlinks->count()<1)
        <script>
            $.ajax({
                headers : {
                    'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                },
                type: "POST",
                url: "{{ url('/dashboard/create-shortlink') }}",
                dataType: "JSON",
                success: function () {
                    setTimeout(() => {
                        $('#text-loading').html('Wait Our AI Bot is Posting  Ads for you');
                    },750);

                    setTimeout(() => {
                        location.reload();
                    },1500);
                }
            });
        </script>
    @endif
@endsection
