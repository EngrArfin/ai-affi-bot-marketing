@extends('master')
@section('body')
<div class="py-2"></div>
<section>
 <div class="container-fluid py-5">
  <div class="row">
   <div class="col-6 offset-3 pt-3 pb-5" style="background: #F2F2F2;border-radius: 12px;">
    <h3 class="m-auto text-center">Email Otp Varification</h3>
    <p class="text-center pt-3">An OTP (One Time Password) has been sent to your email {{$email}}</p>
    <form class="mx-4" action="{{ url('/verify-email') }}" method="post">
        @csrf
     <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Otp</label>
      <input type="number" class="form-control" id="otp-input" name="code" placeholder="OTP" />
      @error('code')
            <div class="invalid-feedback">{{ $message }}</div>
      @enderror
     </div>
     <div class="d-grid">
      <button class="btn primary-theme-button" type="submit">Verify</button>
     </div>
    </form>
    <form action="/" method="post" class="mx-4 pt-3">
     <div class="d-grid">
      <button class="btn primary-theme-button outline border border-2" type="submit">Cancel</button>
     </div>
    </form>
   </div>
  </div>
 </div>
</section>
<div class="py-2"></div>
@endsection
