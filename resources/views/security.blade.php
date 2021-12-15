<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/login_v2.css" />
  <link rel="stylesheet" href="css/header.css" />
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <title>Security Question</title>
  <link rel="icon" href="img/logo.png">

</head>

<body>
  <nav>
    <div class="logo"><a href="#"><img src="img/logo.png" alt='Official logo' width='30px' height='28px'>&nbsp;PET SOLUTION</a></div>
    <input type="checkbox" id="click" class="check">
  </nav>

  <div class="container" style="min-height: 88vh;">
    <div class="forms-container">
      <div class="signin-signup">
        <form class="sign-in-form" enctype="multipart/form-data" id="addForm">
          
          <h2 class="title">SECURITY QUESTION</h2>
          <p>For account recovery purposes.</p>

          <!- SECURITY QUESTION ---------------------------------------------------->
            <div class="input-field">
              <i class="fas fa-key"></i>
              <input list="securityquestion" name="sqQuestion" placeholder="What breed of dog do you like the most?">
              <datalist id="securityquestion">
                <option value="What breed of dog do you like the most?">
                <option value="When is the birtdate of your pet?">
                <option value="What is the name of your favorite cartoon character?">
                <option value="What is the name of your favorite singer?">
              </datalist>
            </div>

            <!- SQ ANSWER ---------------------------------------------------->
              <div class="input-field">
                <i class="fas fa-key"></i>
                <input type="text" autocomplete="off" class="form-control" name="sqAnswer" id="sqAnswer" placeholder="Answer" maxlength="12" value="">
                <div class="errormsg">

                </div>
              </div>

              <button type="submit" name="signup" id="submit-btn" class="btn solid">SUBMIT</button>
        </form>

        <!- SUBMITTED ---------------------------------------------------->
          <form action="#" method="post" class="sign-up-form" style="overflow: auto;">

            <h2 class="title">ACCOUNT CREATED</h2>
            <p>You have successfully signed up.</p>
            <span><i class="fas fa-arrow-alt-circle-left"></i>&nbsp;&nbsp;<a href="/login">Back to Login</a></span>
          </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <button class="btnhide" id="sign-up-btn">
            Hidden
          </button>
        </div>
        <img src="img/rtyhg.png" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
        </div>
        <img src="img/eawreet.png" class="image" alt="" />
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="js/security.js"></script>

  <script type="text/javascript">
    $(function() {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $('#submit-btn').click(function(e){
        e.preventDefault();
        let formData = new FormData($('#addForm')[0]);

        $.ajax({
          data: formData,
          url: "/toRegisterUser",
          type: "POST",
          processData: false,
					contentType: false,
          success: function(response) {
            console.log(response);
          },
          error: function(error) {
            console.log(error)
            alert("Data not Save");
            // top.location.href = '/login';
          }
        });
      });

    });
  </script>

</body>

</html>