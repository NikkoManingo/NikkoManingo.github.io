<?php
// session_start();
// require_once "conn.php";

// if(isset($_SESSION['userID'])) {
//     echo "<script type='text/javascript'>
//     window.location.href = 'home.php'; 
//     </script>";
// }

// if(isset($_GET['recover'])){

//     $email = mysqli_real_escape_string($conn,$_GET['email']);
//     $emailValid = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";

//     $sqlEmail = "SELECT Email FROM users WHERE email = '$email' LIMIT 1";
//     $result = $conn->query($sqlEmail)or die($conn->error); 
//     $count_email = mysqli_num_rows($result);
//     $errormsg['email'] ="";



//     if(!$count_email > 0){
//         $errormsg['email'] = "Email does not exist.";
//     }
//     if(empty($email)){
//         $errormsg['email'] = "Required field!";
//     }else{
//         if(!preg_match($emailValid,strtolower($email))){
//             $errormsg['email'] = "Invalid email.";
//         }
//     }

//     if($errormsg['email']==""){
//         $resultEmail = $result->fetch_assoc();
//         header("Location: forgot2.php");
//         $_SESSION["email_forgot_password"] = $email ;
//         exit;
//     }
// }

// $conn->close();
?>


<!DOCTYPE html>
<html>

<head>
    <title>Forgot Password</title>
    <link rel="icon" href="img/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/forgot.css">
    <link rel="stylesheet" href="css/header.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <!--========== HEADER ==========-->
    <nav style="background-color:#51cce0;">
        <div class="logo"><a href="#"><img src="img/logo.png" alt='Official logo' width='30px' height='28px'>&nbsp;PET SOLUTION</a></div>
        <input type="checkbox" id="click" class="check">
    </nav>
    <div class="container" style="background-color:#51cce0;">
        <div class="img">
            <img src="img/Security-Checkup_F1xsrhr.gif">
        </div>

        <!--========== FORGOT PASSWORD ==========-->
        <div class="forgotpass-content">
            <form action="/isEmailExist" method="post">
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                @csrf
                <h2 class="title">FORGOT PASSWORD?</h2>
                <h4>Please enter your email address below and we will send you information to change your password.<br></h4>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" name="email" id="email" required maxlength="35" value="">

                </div>
                <input type="submit" class="btn" name="recover" value="RESET">
                <span><i class="fas fa-arrow-alt-circle-left"></i>&nbsp;&nbsp;<a href="/login">Back to Login</a></span>
            </form>
        </div>
    </div>

</body>

</html>