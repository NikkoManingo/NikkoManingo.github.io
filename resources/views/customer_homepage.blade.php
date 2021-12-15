<!doctype html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Icons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style5.css">
    <link rel="stylesheet" href="css/homepage.css">

    <!-- Logo -->
    <link rel="icon" href="image/logo.PNG">
    <!-- Title -->
    <title>Pet Solution - Homepage</title>
    <style>
        body {
            background: url(image/fghb.gif) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="whole">
        
<div class="top_bar">
        <div class="hamburger">
            
            <i id="menu_icon" class='bx bx-menu'></i>
            
        </div>

        <div class="menu">
            <div class="logo">
                <img id="logo_pic" src="image/logo.PNG" alt="'Official logo"  width='30px' height='30px'>
                PET SOLUTION
            </div>
            <!--TOP NAV BAR -->
            <div class="right_content">
                    
                <ul>
                    <li>
                    <div class="dropdown">
                            <button class="dropbtn">Request</button>
                            <div class="dropdown-content">
                                <a class="dropdown_cont" href="customer_request_appointment.php">Appointment</a>
                                <a class="dropdown_cont" href="customer_request_prescription.php">Prescription</a>
                        </div>
                    </div>
                    </li>
                    <li>
                        <a href="customer_services.php" class="right_icon">    
                        <i class='bx bxs-cog' id="services_btn"></i>
                        <span class="right_title">Services</span>
                            </a>
                            
                        
                    </li>
                    
                    <li>
                        <a href="/Customer_appointment" class="right_icon">    
                        <i class='bx bxs-calendar-edit' id="appointment_btn"></i>
                        <span class="right_title">Appointment</span>
                            </a>
                        
                    </li>
                    <li>
                        <a href="/tips" class="right_icon">    
                        <i class='bx bxs-bulb' id="tips_btn"></i>
                        <span class="right_title">Tips</span>
                            </a>
                        
                    </li>
                    <li>
                        <a href="customer_aboutus.php" class="right_icon">    
                            <i class='bx bxs-error-circle'></i>
                            <span class="right_title">About Us</span>
                            </a>
                        
                    </li>
                </ul>
            </div>
            <i id="right_menu" class='bx bxs-down-arrow'></i>
            
            <!--End of Top Nav Bar-->
        </div>
    </div>
        <!--Content-->
        <div class="main_content">
            <!--Sidebar-->
            <div class="sidebar">
                <div class="sidebar_content">
                    <!--Profile -->
                    <div class="profile">
                        <div class="img">
                            <img src="{{ asset('uploads/adminPic/' . $data->profilePic) }}" alt="Profile Picture">
                        </div>
                        <div class="profile_info">
                            <p>Welcome</p>
                            <p class="profile_name">{{$data->fname}}</p>
                        </div>
                    </div>
                    <!-- Icons -->
                    <ul>
                        <li>
                            <a href="/Home" class="active">
                                <i class='bx bxs-home'></i>
                                <span class="title">Homepage</span>
                            </a>
                            <span class="side">Homepage</span>
                        </li>
                        <li>
                            <a href="/Profile">
                                <i class='bx bxs-user'></i>
                                <span class="title">Profile</span>
                            </a>
                            <span class="side">Profile</span>
                        </li>
                        <li>
                            <a href="/MyPets">
                                <i class="fas fa-paw"></i>
                                <span class="title">My Pets</span>
                            </a>
                            <span class="side">My Pets</span>
                        </li>
                        <li>
                            <a href="/Customer_notification">
                                <i class='bx bxs-bell'></i>
                                <span class="title">Notification</span>
                            </a>
                            <span class="side">Notification</span>
                        </li>
                        <li>
                            <a href="/chat">
                                <i class='bx bxs-message-dots'></i>
                                <span class="title">Messages</span>
                            </a>
                            <span class="side">Messages</span>
                        </li>
                        <li>
                            <a href="/toLogoutUser" class="logout_btn">
                                <i class='bx bx-log-out'></i>
                                <span class="title">Logout</span>
                            </a>
                        </li>
                    </ul>

                </div>

            </div>

            <!-- Content -->
            <div class="content">
                <div class="combi_home">
                    <div class="home">
                        <div class="home_page">
                            <div class="home_slide">
                                <div class="img-slider">
                                    <div class="slide active">
                                        <img src="image/homepage/dog1.png" alt="">
                                    </div>
                                    <div class="slide">
                                        <img src="image/homepage/vet2.png" alt="">
                                    </div>
                                    <div class="slide">
                                        <img src="image/homepage/vet3.png" alt="">
                                    </div>
                                    <div class="slide">
                                        <img src="image/homepage/vet4.png" alt="">
                                    </div>
                                    <div class="slide">
                                        <img src="image/homepage/vet5.png" alt="">
                                    </div>

                                    <div class="slide_navigation">
                                        <div class="slide_btn active"></div>
                                        <div class="slide_btn"></div>
                                        <div class="slide_btn"></div>
                                        <div class="slide_btn"></div>
                                        <div class="slide_btn"></div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="side_announcement">
                        <h4>
                            Announcement
                        </h4>
                    </div>
                </div>
                <div class="home_content">
                    <h4>
                        How do you protect you pet all season?
                    </h4>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga, ullam laborum eum eos eius incidunt! Soluta, nemo quo necessitatibus, doloribus expedita laboriosam commodi minima consequuntur eligendi ipsa ipsam aliquid vitae.
                    </p>
                </div>
                <link rel="stylesheet" href="CSS/homepages.css">

                <div class="galleries">
                    <div class="wrapper">
                        <div class="box">
                            <img class="image_gallery" src="image/2960144.jpg" alt="">
                        </div>
                        <div class="box">
                            <img class="image_gallery" src="image/2960144.jpg" alt="">
                        </div>
                        <div class="box">
                            <img class="image_gallery" src="image/2960144.jpg" alt="">
                        </div>
                        <div class="box">
                            <img class="image_gallery" src="image/2960144.jpg" alt="">
                        </div>
                        <div class="box">
                            <img class="image_gallery" src="image/2960144.jpg" alt="">
                        </div>
                        <div class="box">
                            <img class="image_gallery" src="image/2960144.jpg" alt="">
                        </div>

                        <div class="box">
                            <img class="image_gallery" src="image/2960144.jpg" alt="">
                        </div>
                        <div class="box">
                            <img class="image_gallery" src="image/2960144.jpg" alt="">
                        </div>
                        <div class="box">
                            <img class="image_gallery" src="image/2960144.jpg" alt="">
                        </div>
                        <div class="box">
                            <img class="image_gallery" src="image/2960144.jpg" alt="">
                        </div>
                        <div class="box">
                            <img class="image_gallery" src="image/2960144.jpg" alt="">
                        </div>
                        <div class="box">
                            <img class="image_gallery" src="image/2960144.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!--End of content-->
        </div>
    </div>
</html>
<script src="js/jsFile1.js"> </script>
<script src="js/imageslider.js"> </script>