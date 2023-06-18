<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
 <link rel="stylesheet" href="{{ asset('ekom/style.css') }}">
 <title>Document</title>
</head>
<body>
 <header>
  <a href="">
   <img src="{{ asset('ekom/logo.jpg') }}" alt="">
  </a>
 </header>
 <section class="py-5">
  <div class="container">
   <div class="row">
    <div class="col-6">
     <img src="{{ asset('ekom/him 1.png') }}" class="w-100 px-3" alt="">
    </div>
    <div class="col-6">
     <div class="col-12 d-flex align-items-center justify-content-start">
      <img src="star.png" height="34px" alt="">
      <img src="star.png" height="34px" alt="">
      <img src="star.png" height="34px" alt="">
      <img src="star.png" height="34px" alt="">
      <img src="star.png" height="34px" alt="">
      <h4 class="my-0 ml-2">(13 reviews)</h4>
     </div>
     <div class="col-12">
      <h1>Men casual Black T-shirts.</h1>
      <h6 class="mt-3">Availability (In Stock)</h6>
     </div>
     <div class="col-12 pt-4">
      <h1 style="color: #3A5A2B;">300BDT</h1>
     </div>
     <div class="col-12">
      <h5 style="border-bottom: 2px solid #000000;width: fit-content;">Product details</h5>
      <p class="pt-3" style="font-weight: 600;">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and.</p>
     </div>
     <div class="col-12 pt-4">
      <a class="btn text-white" style="background-color: #3A5A2B;padding: 6px 36px;font-size: 20px;" href="{{ url('/checkout') }}/{{ app('request')->input('id') }}">Buy Now</a>
     </div>
    </div>
   </div>
  </div>
 </section>
 <script src="{{ asset('js/jquery.min.js') }}"></script>
 <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
