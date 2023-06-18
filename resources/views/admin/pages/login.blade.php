<html lang="en"><head>
    <meta charset="UTF-8">


      <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">

      <meta name="apple-mobile-web-app-title" content="CodePen">

      <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">

      <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111">




    <title>CodePen - Login form Bootstrap 4</title>
      <link rel="canonical" href="https://codepen.io/Ihor_Sukhorada/pen/LBwRvv">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">

  <style>
  html,body {
      height: 100%;
  }

  .global-container{
      height:100%;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #f5f5f5;
  }

  form{
      padding-top: 10px;
      font-size: 14px;
      margin-top: 30px;
  }

  .card-title{ font-weight:300; }

  .btn{
      font-size: 14px;
      margin-top:20px;
  }


  .login-form{
      width:330px;
      margin:20px;
  }

  .sign-up{
      text-align:center;
      padding:20px 0 0;
  }

  .alert{
      margin-bottom:-30px;
      font-size: 13px;
      margin-top:20px;
  }
  </style>

    <script>
    window.console = window.console || function(t) {};
  </script>



  </head>

  <body translate="no" data-new-gr-c-s-check-loaded="14.1112.0" data-gr-ext-installed="">
    <div class="global-container">
      <div class="card login-form">
      <div class="card-body">
          <h3 class="card-title text-center">Log in to Codepen</h3>
          <div class="card-text">
            <form method="POST">
                @csrf
                  <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control form-control-sm" id="exampleInputPassword1">
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">Sign in</button>
            </form>
          </div>
      </div>
  </div>
  </div>
  </body></html>
