@extends('admin.master')
@section('body')
<h1 class="p-2">All Users</h1>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Sadhin Mahmud</td>
                        <td>shadinimp@gmail.com</td>
                        <td>Active</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Arifin Mia</td>
                        <td>arifinmia12984@gmail.com</td>
                        <td>Active</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</section>
<div class="py-5"></div>
@endsection
