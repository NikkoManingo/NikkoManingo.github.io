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
    <link rel="stylesheet" href="css/mypet.css">


    <!-- Logo -->
    <link rel="icon" href="image/logo.PNG">
    <!-- Title -->
    <title>Pet Solution - My Pets</title>
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
                            <a href="/Home">
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
                            <a href="/MyPets" class="active">
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
                    <div class="mypets">
                        <div class="container">

                            <div class="mypets-box" style="width:80vw; height:13vh; margin-top:20px; transform: scale(1);" id="titleforemptypage">
                                <div class="row">
                                    <div class="col-md-12">
                                        <center>
                                            <div class="titlepage">
                                                <i class="fas fa-paw" style="color: red; font-size: 50px;"></i>
                                                <h2>&nbsp; MY PETS</h2>
                                            </div>
                                        </center>
                                    </div>
                                </div>
                            </div>

                            <!--IF LIST IS EMPTY-->
                            <!-- <div class="emptylist" id="emptypetlist">
                                <center>
                                    <button class="btnaddpet" style="width:80vw; height:59vh;" onClick="addpet()">
                                        <img src="image/pets.PNG" style="height:250px">
                                        <p>click to add your pet now</p>
                                    </button>
                                </center>
                            </div> -->

                            <!--IF LIST IS NOT EMPTY-->
                            <div class="petlist" id="mypetslist">
                                <div class="row">
                                    @foreach($pets as $mypets)
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                        <div class="mypets-box">
                                            <figure><img src="{{ asset('uploads/adminPic/' . $mypets->picture) }}" preserveAspectRatio="xMidYMid slice" /></figure>
                                            <div class="drop" id="drop_content" style="display: grid; text-align: left;">
                                                <div class="drop_data">
                                                    <h2>Name:</h2>
                                                    <p>{{$mypets->name}}</p>
                                                </div>
                                                <div class="drop_data">
                                                    <h2>Birthday:</h2>
                                                    <p>{{$mypets->bdate}}</p>
                                                </div>
                                                <div class="drop_data">
                                                    <h2>Breed:</h2>
                                                    <p>...</p>
                                                </div>
                                                <button class="btn" id="view" data-id="{{$mypets->pet_id}}">VIEW RECORD</button>
                                            </div>
                                            <!-- <a data-id="{{$mypets->pet_id}}" id="view"><i class="fas fa-paw"></i></a> -->
                                        </div>
                                    </div>
                                    @endforeach
                                    <button onclick="location.href = '/AddPet'" type="button" class="btn" id="addpetbutton"><i class="fas fa-plus"></i></button>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="js/imageslider.js"> </script>
<script src="js/jsFile1.js"> </script>
<script src="js/mypets.js"> </script>
<script type="text/javascript">
    $(function() {
        $('body').on('click', '#view', function() {

            var pet_id = $(this).data('id');
            // alert(pet_id);

            $.ajax({
                url: "/MyPets",
                data: {
                    mypet: pet_id
                },
                success: function() {
                    window.location.href = "/pet_records";
                }
            });

            // $('#drop_content').show('fast');
            // var x = document.getElementById("drop_content");

            // if (x.style.display === "none") {
            //     // for (let i = pet_id; i == pet_id; i++) {

            //     // }
            //     // x.style.display = "grid";


            // } else {
            //     x.style.display = "none";
            // }
        });
    });
</script>