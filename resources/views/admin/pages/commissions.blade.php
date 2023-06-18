@extends('admin.master')
@section('body')
<h1 class="p-2">Ad Partners</h1>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Site</th>
                        <th scope="col">App ID</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>azkerdeal.com</td>
                        <td>28929</td>
                        <td>Active</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>prothomalo.com</td>
                        <td>89262</td>
                        <td>Active</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>earki.com</td>
                        <td>57239</td>
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
