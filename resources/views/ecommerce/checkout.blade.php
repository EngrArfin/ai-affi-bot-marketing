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
 <section>
    <form id="canada">
        <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <div class="col-12 py-3">
            <h5>Fill The Order Form with your information.</h5>
            </div>
            <div class="col-12 py-3">
            <div class="py-1">
            <input type="text" placeholder="Your Name" style="width: 65%;padding: 8px;outline: none;" required>
            </div>
            <div class="py-1">
            <input type="text" placeholder="Your Email" style="width: 65%;padding: 8px;outline: none;" required>
            </div>
            <div class="py-1">
            <input type="text" placeholder="Your Phone" style="width: 65%;padding: 8px;outline: none;" required>
            </div>
            <div class="py-1">
            <input type="text" placeholder="Your Adress (Post, Area, district)" style="width: 65%;padding: 8px;outline: none;" required>
            </div>
            <div class="py-1">
            <textarea placeholder="Order Notes:" rows="5" style="width: 65%;padding: 8px;outline: none;" required></textarea>
            </div>
            </div>
            </div>
            <div class="col-6" style="background: #81907A;">
            <div class="pt-5" >
                <div class="img-box"></div>
                <h3 class="py-4">Men Casual T-shirt (Black)</h3>
                <h3 class="py-3">Total=300BDT</h3>
                <h3 class="pt-3" style="width: fit-content;border-bottom: 2px solid #000000;">Select a payment getaway</h3>
                <div class="pt-3" style="display: flex;align-items:center;justify-content:center;width:fit-content">
                    <select class="payment me-3" name="" id="pay-mm" style="background-color: #D9D9D9;outline: none;" required>
                        <option value="Bkash">Bkash</option>
                        <option value="Nagad">Nagad</option>
                        <option value="Rocket">Rocket</option>
                    </select>
                    <img id="pa-lo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzg0AHcgdB8_ReHOdGDZcGRyCww8EeZoSss-Nwmvjf_w&s" height="35px" alt="">
                </div>
            </div>
            <div class="pt-5 pb-0">
            <input id="pay-m-n" type="number" placeholder="Your Bkash Number (ex:018922**)" style="width: 65%;padding: 8px;" required>
            </div>
            <div class="py-5">
                <button type="submit" class="btn text-white " style="background-color: #3A5A2B;padding: 6px 36px;font-size: 20px;">Buy Now</button>
                <div id="america" class="alert alert-success my-3" style="display: none">
                    Order succesfully completed
                </div>
            </div>
            </div>
        </div>
        </div>
    </form>
 </section>
 <script src="{{ asset('js/jquery.min.js') }}"></script>
 <script src="{{ asset('js/script.js') }}"></script>
 <script>
  $('#pay-mm').change(function (e) {
    e.preventDefault();
    $("#pay-m-n").attr('placeholder',`Your ${e.target.value} Number (ex:018922**)`);
    if(e.target.value=='Bkash'){
        $("#pa-lo").attr('src','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzg0AHcgdB8_ReHOdGDZcGRyCww8EeZoSss-Nwmvjf_w&s');
    }
    if(e.target.value=='Nagad'){
        $("#pa-lo").attr('src','https://play-lh.googleusercontent.com/Iks014Ul-atatMhWs8rLbtG7cIZLPfpeMDdkLtmq5o7D5_MlFNu5mmIqRHAY45aOhapp');
    }
    if(e.target.value=='Rocket'){
        $("#pa-lo").attr('src','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhHmWQ7hWuAmSzd1V0l0pA9e24Gqd9UhH1lEsI7fQ8IQ&s');
    }
  });
  $("#canada").submit(function (e) {
    e.preventDefault();
    $.ajax({
        headers : {
            'X-CSRF-TOKEN' : '{{ csrf_token() }}'
        },
        type: "POST",
        url: "{{ url('/checkout') }}",
        dataType: "JSON",
        success: function () {
            $("#america").show();
        }
    });
  });
 </script>
</body>
</html>
