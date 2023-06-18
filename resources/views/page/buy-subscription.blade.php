@extends('dashboard.master')
@section('body')
<div class="py-2"></div>
@if (request()->route('id') == '1')
<section  style="height: 100vh;display:flex;align-items:center;justify-content:center;">
    <div class="container-fluid py-5">
     <div class="row">
       <div class="col-12 d-flex flex-column align-items-center justify-content-center">
           <h4 class="pb-4">Starter Pack</h4>
           <h5>Total= 200BDT</h5>
           <div style="border-radius: 10px;display: flex; width: 500px">
               <div style="background: #D9D9D9;padding:12px 8px;border-radius: 10px 0px 0px 10px;">
                   <select style="background: transparent;border:none;outline:none;">
                       <option selected value="Bkash">Bkash</option>
                       <option value="Nagad">Nagad</option>
                       <option value="Rocket">Rocket</option>
                   </select>
               </div>
               <input type="text" placeholder="Type Your Number. Ex: +88018976234" style="border-radius: 0px 10px 10px 0px;outline:none;border:1px solid;width: 320px;">
           </div>
           <form action="{{ url('/subscribe/1') }}" method="post">
            @csrf
               <button type="submit" class="btn primary-theme-button mt-3 px-5 py-2">Checkout</button>
           </form>
       </div>
     </div>
    </div>
   </section>
@endif
@if (request()->route('id') == '2')
<section  style="height: 100vh;display:flex;align-items:center;justify-content:center;">
    <div class="container-fluid py-5">
     <div class="row">
       <div class="col-12 d-flex flex-column align-items-center justify-content-center">
           <h4 class="pb-4">Booster</h4>
           <h5>Total= 400BDT</h5>
           <div style="border-radius: 10px;display: flex; width: 500px">
               <div style="background: #D9D9D9;padding:12px 8px;border-radius: 10px 0px 0px 10px;">
                   <select style="background: transparent;border:none;outline:none;">
                       <option selected value="Bkash">Bkash</option>
                       <option value="Nagad">Nagad</option>
                       <option value="Rocket">Rocket</option>
                   </select>
               </div>
               <input type="text" placeholder="Type Your Number. Ex: +88018976234" style="border-radius: 0px 10px 10px 0px;outline:none;border:1px solid;width: 320px;">
           </div>
           <form action="{{ url('/subscribe/2') }}" method="post">
            @csrf
               <button type="submit" class="btn primary-theme-button mt-3 px-5 py-2">Checkout</button>
           </form>
       </div>
     </div>
    </div>
   </section>
@endif
@if (request()->route('id') == '3')
<section  style="height: 100vh;display:flex;align-items:center;justify-content:center;">
    <div class="container-fluid py-5">
     <div class="row">
       <div class="col-12 d-flex flex-column align-items-center justify-content-center">
           <h4 class="pb-4">Sky Rocket</h4>
           <h5>Total= 600BDT</h5>
           <div style="border-radius: 10px;display: flex; width: 500px">
               <div style="background: #D9D9D9;padding:12px 8px;border-radius: 10px 0px 0px 10px;">
                   <select style="background: transparent;border:none;outline:none;">
                       <option selected value="Bkash">Bkash</option>
                       <option value="Nagad">Nagad</option>
                       <option value="Rocket">Rocket</option>
                   </select>
               </div>
               <input type="text" placeholder="Type Your Number. Ex: +88018976234" style="border-radius: 0px 10px 10px 0px;outline:none;border:1px solid;width: 320px;">
           </div>
           <form action="{{ url('/subscribe/3') }}" method="post">
            @csrf
               <button type="submit" class="btn primary-theme-button mt-3 px-5 py-2">Checkout</button>
           </form>
       </div>
     </div>
    </div>
   </section>
@endif
<div class="py-2"></div>
@endsection
