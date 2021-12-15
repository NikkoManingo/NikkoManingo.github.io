<!DOCTYPE html>
<html>

<head>
    <title>Pet Solution</title>
    <link rel="icon" href="img/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="css/cover.header.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body style="background-image: url(img/image_processing20190818-3541-y7q1f0.gif); background-size: contain; background-repeat: no-repeat;">
    <!--========== HEADER ==========-->
    <nav>
        <div class="logo"><a href="index.php"><img src="img/logo.png" alt='Official logo' width='30px' height='28px'>&nbsp;PET SOLUTION</a></div>
        <input type="checkbox" id="click" class="check">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li><a href="/services">Services</a></li>
            <li><a href="/about_us">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="index-content"></div>
        <div class="index-content">
            <center>
                <br>
                <h2 class="title">HOW DO YOU PROTECT YOUR PET ALL SEASON?</h2>
                <p>With our changing weather, it's best to always be prepared to prevent common outcomes that can harm your pet's health.<br></p>
                <br>
                <input type="button" class="btn" onclick="myFunction()" value="GET STARTED">
            </center>
        </div>
    </div>
    <script>
        function myFunction() {
            window.location.href = '/login';
        }
    </script>
</body>
</html>