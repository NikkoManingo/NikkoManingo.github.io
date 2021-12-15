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
    <link rel="stylesheet" href="css/change_password.css">

    <!-- Logo -->
    <link rel="icon" href="image/logo.PNG">
    <!-- Title -->
    <title>Pet Solution - Change Password</title>
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
                    <img src="image/logo.PNG" alt='Official logo' width='30px' height='30px'>
                    <a>PET SOLUTION</a>
                </div>
                <!--TOP NAV BAR -->
                <div class="right_content">

                    <ul>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn">Request</button>
                                <div class="dropdown-content">
                                    <a class="dropdown_cont" href="/Customer_appointment">Appointment</a>
                                    <a class="dropdown_cont" href="#">Prescription</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="right_icon">
                                <i class="fas fa-concierge-bell" id="services_btn"></i>
                                <span class="right_title">Services</span>
                            </a>


                        </li>

                        <li>
                            <a href="#" class="right_icon">
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
                            <a href="#" class="right_icon">
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
                    <!--change_password -->
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
                            <a href="/Home">
                                <i class='bx bxs-home'></i>
                                <span class="title">Homepage</span>
                            </a>
                            <span class="side">Homepage</span>
                        </li>
                        <li>
                            <a href="/Profile" class="active">
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
                                <i class="bx bx-log-out"></i>
                                <span class="title">Logout</span>
                            </a>
                        </li>
                    </ul>

                </div>

            </div>

            <!-- Content dito mageedit ng laman-->
            <div class="content">
                <div class="item">
                    <div class="change_password">
                        <div class="container">
                            <div class="content-box-change_password">
                                <br>
                                <div class="row">
                                    <!--DISPLAY & UPDATE change_password PICTURE------------------------------------------->
                                    <div class="col-md-5">
                                        <img src="image/pass.gif" class="img-change_password">
                                    </div>
                                    <div class="col-md-6">

                                        <h2 class="title">CHANGE PASSWORD</h2>
                                        <form action="/toChangePass" method="post">
                                            @if(Session::has('status'))
                                            <div class="alert alert-success">{{Session::get('status')}}</div>
                                            @endif
                                            @if(Session::has('fail'))
                                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                            @endif
                                            @csrf
                                            <input type="hidden" name="id" value="{{$data->client_id}}">
                                            <div class="input-field-change_password">
                                                <i class="fas fa-lock"></i>
                                                <input type="password" name="current_password" placeholder="Current password" required>
                                            </div>
                                            <div class="input-field-change_password">
                                                <i class="fas fa-lock"></i>
                                                <input type="password" name="new_1password" id="update_mname" placeholder="New Password" />
                                            </div>
                                            <div class="input-field-change_password">
                                                <i class="fas fa-lock"></i>
                                                <input type="password" name="new_2password" id="update_lname" placeholder="Retype new password" required>
                                            </div>
                                            <button type="submit" class="btn">SAVE</button>
                                            <button type="button" class="btn" style="background-color:gray; margin-top:0px;" onclick="cancelchange_password();">CANCEL</button>
                                        </form>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of content-->
            </div>
        </div>
    </div>
</body>

</html>
<script src="js/imageslider.js"> </script>
<script src="js/jsFile1.js"> </script>
<script src="js/change_password.js"> </script>