<?php
// session_start();	
// require_once "conn.php";

// if(isset($_SESSION['userID'])) {
//     echo "<script type='text/javascript'>
//     window.location.href = 'home.php'; 
//     </script>";
// }

// $conn->close();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Account Recovered</title>
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
		  	      <nav style="background-color: #f7f7f7;">
       <div class="logo"><a href="#" style=" color: black;"><img src="img/logo.png" alt='Official logo' width='30px' height='28px'>&nbsp;PET SOLUTION</a></div>
        <input type="checkbox" id="click" class="check">
     </nav>
	<div class="container" style="background-color: #f7f7f7;">
		<div class="img">
			<img src="img/35f323bc5b41dc4269001529e3ff1278.gif">
		</div>
		
		<div class="forgotpass-content">
			<form action="#">
				<h2 class="title">ACCOUNT RECOVERED</h2>
				<p style="color:black;">You have recovered your account successfully.</p>
                <span><i class="fas fa-arrow-alt-circle-left"></i>&nbsp;&nbsp;<a href="/login">Back to Login</a></span>
            </form>
        </div>
    </div>
    
</body>
</html>
