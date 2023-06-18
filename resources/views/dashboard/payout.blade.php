@extends('dashboard.master')
@section('body')
<h1 class="p-2">Payout > Balance = {{ auth()->user()->balance }}</h1>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if (session('insufficient_balance'))
                    <div class="alert alert-danger">
                        Insufficient Balance
                    </div>
                @endif
            </div>
            <div class="col-12">
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput1" class="form-label">Ammount</label>
                        <input type="number" class="form-control" id="formGroupExampleInput1" placeholder="Ammount" name="ammount" required>
                    </div>
                    <div class="mb-3">
                        <label for="pay-mm" class="form-label">Method</label>
                        <div style="display: flex;width:100%">
                            <select type="number" class="form-select" id="pay-mm" placeholder="Ammount" name="method" required>
                                <option selected value="Bkash">Bkash</option>
                                <option value="Nagad">Nagad</option>
                                <option value="Rocket">Rocket</option>
                            </select>
                            <img id="pa-lo" class="ms-2" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzg0AHcgdB8_ReHOdGDZcGRyCww8EeZoSss-Nwmvjf_w&s" height="35px" alt="">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput3" class="form-label">Phone No</label>
                        <input type="number" class="form-control" id="formGroupExampleInput3" placeholder="Your Bkash Number (ex:018922**)" name="number" required>
                    </div>
                    <button class="btn btn-primary" type="submit">Withdraw</button>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="py-5"></div>
@endsection
@section('footer')
<script>
    $('#pay-mm').change(function (e) {
    e.preventDefault();
    $("#formGroupExampleInput3").attr('placeholder',`Your ${e.target.value} Number (ex:018922**)`);
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
</script>
@endsection
