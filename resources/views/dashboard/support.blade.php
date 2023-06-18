@extends('dashboard.master')
@section('body')
<h1 class="p-2">Support</h1>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Query</label>
                        <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Query" name="query" required>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Description</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="py-5"></div>
@endsection
