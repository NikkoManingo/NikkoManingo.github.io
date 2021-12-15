<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/login_v2.css" />
  <link rel="stylesheet" href="css/error_message.css" />
  <link rel="stylesheet" href="css/header.css" />
  <link rel="icon" href="img/logo.png">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <title>Sign Up</title>
  <script type="text/jscript">
    EnableSubmit = function(val) {
      var sbmt = document.getElementById('signup');

      if (val.checked == true) {
        sbmt.disabled = false;
      } else {
        sbmt.disabled = true;
      }
    }
  </script>
</head>

<body>
  <!--========== HEADER ==========-->
  <nav>
    <div class="logo"><a href="#"><img src="img/logo.png" alt='Official logo' width='30px' height='28px'>&nbsp;PET SOLUTION</a></div>
  </nav>

  <div class="container sign-up-mode">
    <div class="forms-container">
      <div class="signin-signup">

        <!--========== SIGN UP ==========-->
        <form action="/security" method="post" enctype="multipart/form-data" class="sign-up-form">
          @csrf
          @if($errors->all())
          @foreach ($errors->all() as $err)
          <li>{{$err}}</li>
          @endforeach
          @endif
          <h2 class="title">SIGN UP</h2>
          <input type="file" name="photo" value="{{old('photo')}}" class="custom-file-input" onchange="loadFile(event)" required>
          <div class="div-img-signup">
            <img id="addprofilephoto" src="image/dp.jpg" class="img-profile">
          </div>
          <br>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" value="{{old('fname')}}" placeholder="First Name" name="fname" required>
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" value="{{old('mname')}}" placeholder="Middle Name (Optional)" name="mname" />
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" value="{{old('lname')}}" placeholder="Last Name" name="lname" required>
          </div>
          <div class="input-field">
            <i class="fas fa-calendar"></i>
            <input placeholder="Birthdate" value="{{old('bdate')}}" class="textbox-n" type="text" name="bdate" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" required>
          </div>
          <div class="input-field">
            <i class="fas fa-venus-mars"></i>
            <input list="gender" value="{{old('gender')}}" name="gender" placeholder="Gender">
            <datalist id="gender">
              <option value="Female">
              <option value="Male">
            </datalist>
          </div>
          <div class="input-field">
            <i class="fas fa-calendar"></i>
            <input type="number" value="{{old('age')}}" placeholder="Age" name="age" required>
          </div>
          <div class="input-field">
            <i class="fas fa-home"></i>
            <input type="text" value="{{old('address')}}" placeholder="Address" name="address" required>
          </div>
          <div class="input-field">
            <i class="fas fa-mobile-alt"></i>
            <input type="number" value="{{old('contact')}}" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="11" placeholder="Contact Number" name="contact" required>
            <!-- <span class="text-danger">@error('contact') {{$message}} @enderror</span> -->
          </div>
          <div class="input-field">
            <i class="fas fa-clinic-medical"></i>
            <input list="branches" placeholder="Branch" value="{{old('branches')}}" name="branches" required>
            <datalist id="branches">
              <option value="Malolos">
              <option value="Baliuag">
              <option value="Plaridel">
            </datalist>
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" value="{{old('email')}}" name="email" required>
            <!-- <span class="text-danger">@error('email') {{$message}} @enderror</span> -->
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" required>
            <!-- @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror -->
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Confirm Password" name="confirm_password" required>
          </div>
          <label class="signup_span">
            <input type="checkbox" onClick="EnableSubmit(this)" id="checkBox" />
            <span>Creating an account means you're okay with our <a href="#">Terms and Conditions</a> and our <a href="#">Privacy Policy</a>.
            </span>
          </label>
          <input type="submit" class="btn" value="Proceed" name="proceed" id="signup" disabled />
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
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us?</h3>
          <p>
            Maintain your scheduled vet visits by making an appointment and assisting your pet in living a long and happy life.
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="img/vet2.png" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="js/login.js"></script>
</body>

</html>