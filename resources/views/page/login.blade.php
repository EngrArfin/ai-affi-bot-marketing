@extends('master')
@section('body')
<section id="hero-signin">
    <div class="container">
     <div class="row">
        @if (session('verify-succes'))
            <div class="col-12">
                <div class="alert">
                    
                </div>
            </div>
        @endif
      <div class="col-12 col-md-7">
       <img width="100%" src="assets/img/hero-side.png" alt="">
      </div>
      <div class="col-12 col-md-5 d-flex flex-column justify-content-center">
       <div class="pt-5 pb-3">
        <h1>Signin/Login Here</h1>
       </div>
       <form method="POST" action="{{ url('/signin') }}">
        @csrf
        <div class="mb-3">
          <label for="exampleFormControlInput2" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput2" name="email" placeholder="name@example.com" />
          @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3" style="position: relative;">
          <label for="exampleFormControlTextarea3" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleFormControlTextarea3" autocomplete="new-password" name="password" placeholder="Password" />
          @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3 d-grid">
         <button class="btn primary-theme-button py-2" type="submit">Signin/Login Account</button>
        </div>
       </form>
      </div>
     </div>
    </div>
   </section>
@endsection
