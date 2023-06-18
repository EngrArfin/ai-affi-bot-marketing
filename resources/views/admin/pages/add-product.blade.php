@extends('admin.master')
@section('body')
<h1 class="p-2">Add Product</h1>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" name="name" required>
                      </div>
                      <div class="mb-3">
                        <label for="formGroupExampleInput4" class="form-label">Product URL</label>
                        <input type="url" class="form-control" id="formGroupExampleInput4" required name="image" placeholder="Product URL">
                      </div>
                      <button class="btn btn-primary" type="submit">Add Product</button>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="py-5"></div>
@endsection
