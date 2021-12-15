<?php
// session_start();	
// require_once "conn.php";

// if(isset($_SESSION['userID'])) {
//     echo "<script type='text/javascript'>
//     window.location.href = 'home.php'; 
//     </script>";
// }

// $emailAdd = "";
// if(isset($_SESSION["email_forgot_password"])){
//     $emailAdd = $_SESSION["email_forgot_password"];
// }

// $sqlSQ = "SELECT SQ_question, SQ_answer FROM users WHERE email = '$emailAdd' LIMIT 1";
// $resultSQLSQ = $conn->query($sqlSQ) or die($conn->error); 
// $userDatum = $resultSQLSQ ->fetch_array(MYSQLI_ASSOC);
// $errormsg['answer']="";

// if(isset($_GET['recoverSQ'])){

//     $userAnswer = $_GET['answer'];
//     if(empty($userAnswer)){
//         $errormsg['answer'] = "Please answer the security question.";
//     }else if(strtolower($userAnswer)==strtolower($userDatum['SQ_answer'])){
//         header("Location: forgot3.php");
//         exit;
//     }else{
//         $errormsg['answer'] = "Incorrect answer.";
//     }

// }
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
    <nav style="background-color: transparent;">
        <div class="logo"><a href="#" style=" color: black;"><img src="img/logo.png" alt='Official logo' width='30px' height='28px'>&nbsp;PET SOLUTION</a></div>
        <input type="checkbox" id="click" class="check">
    </nav>
    <div class="container">
        <div class="img">
            <img src="img/1_djaHD6vY-EpEwBSMT5OSmw.gif">
        </div>

        <!--========== FORGOT PASSWORD ==========-->
        <div class="forgotpass-content">
            <form action="/isAnswerExist" method="post">
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                @csrf
                <h2 class="title">SECURITY QUESTION</h2>
                <div class="errormsg_">
                    <strong>{{$data->SQ_question}}</strong>
                </div>
                <div class="input-field">
                    <i class="fas fa-key"></i>
                    <input autocomplete="off" type="text" name="answer" id="answer" placeholder="Enter your answer" maxlength="35" value="">

                </div>
                <input type="submit" class="btn" name="recoverSQ" value="RESET">
                <span><i class="fas fa-arrow-alt-circle-left"></i>&nbsp;&nbsp;<a href="/login">Back to Login</a></span>
            </form>
        </div>
    </div>

</body>

</html>