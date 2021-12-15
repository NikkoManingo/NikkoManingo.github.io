<?php
// session_start();	
// require_once "conn.php";

// if(isset($_SESSION['userID'])) {
//     echo "<script type='text/javascript'>
//     window.location.href = 'home.php'; 
//     </script>";
// }

// if(isset($_SESSION["email_forgot_password"])){
//     $emailAdd = $_SESSION["email_forgot_password"];
// }

// $errormsg['email']="";
// $errormsg['pswrd']="";

// if(isset($_GET['recoverPasswords'])){

//     $pswrd = $_GET['pswrd'];
//     $cpswrd = $_GET['cpswrd'];

//     $errormsg_ = "";
//     $errormsg['email'] = "";
//     $errormsg['pswrd'] = "";

//     if(empty($pswrd) || empty($cpswrd)){
//         $errormsg_= "Please fill up all the required fields.";

//         if(empty($pswrd)){
//             $errormsg['pswrd'] = "Required field!";
//         }
//         if(empty($cpswrd)){
//             $errormsg['cpswrd'] = "Required field!";
//         }

//     }else if($pswrd !== $cpswrd){
//         $errormsg['cpswrd'] = "Password don't match.";
//     }else{
//         $sql = "UPDATE users SET Password = '$pswrd' WHERE Email= '$emailAdd'";
//         $conn->query($sql) or die($conn->error);
//         $_GET = array();
//         header("Location: forgot4.php");
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
    <nav style="background-color: transparent;">
        <div class="logo"><a href="#" style=" color: black;"><img src="img/logo.png" alt='Official logo' width='30px' height='28px'>&nbsp;PET SOLUTION</a></div>
        <input type="checkbox" id="click" class="check">
    </nav>
    <div class="container">
        <div class="img">
            <img src="img/e6f474ca98f50aec9335b7aba126f489.gif">
        </div>

        <!- NEW PASSWORD FORM ---------------------------------------------------->
            <div class="forgotpass-content">
                <form action="/toUpdatePassword" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->client_id}}">
                    <h2 class="title">CREATE NEW PASSWORD</h2>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="pswrd" id="pswrd" placeholder="New password" maxlength="35" value="">
                        
                    </div>

                    <!- CONFIRM PASSWORD ---------------------------------------------------->
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="cpswrd" id="cpswrd" placeholder="Confirm new password" maxlength="35" value="">
                            
                        </div>
                        <input type="submit" class="btn" name="recoverPasswords" value="RESET">
                        <span><i class="fas fa-arrow-alt-circle-left"></i>&nbsp;&nbsp;<a href="/login">Back to Login</a></span>
                </form>
            </div>
    </div>

</body>

</html>