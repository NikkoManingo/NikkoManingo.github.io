<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/login_v2.css" />
  <link rel="stylesheet" href="css/header.css" />
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <title>Login</title>
</head>

<body>
  <!--========== HEADER ==========-->
  <nav>
    <div class="logo"><a href="#"><img src="img/logo.png" alt='Official logo' width='30px' height='28px'>&nbsp;PET SOLUTION</a></div>
  </nav>

  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">

        <!--========== SIGN IN ==========-->
        <form action="/toLoginUser" method="post" class="sign-in-form">
          @if(Session::has('fail'))
          <div class="alert alert-danger">{{Session::get('fail')}}</div>
          @endif
          @csrf
          <h2 class="title">LOGIN</h2>
          <p>Please login to continue.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="loginEmail" required>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="loginPassword" required>
          </div>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me &nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span><a href="/forgotPassword">Forgot password?</a></span>
          </label>

          <button type="submit" value="Login" class="btn solid">LOGIN</button>
        </form>
      </div>
    </div>

    <!--========== PAGE INFO FOR SIGN IN AND UP ==========-->
    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here?</h3>
          <p>
            Improve the overall health of your companion animal. Be one of us. Join us today.
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="img/clinic.png" class="image" alt="" />
      </div>
    </div>
  </div>
  <script src="js/login.js"></script>
</body>

</html>