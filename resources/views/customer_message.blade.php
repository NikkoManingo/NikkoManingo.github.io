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
	<link rel="stylesheet" href="css/customer_messages.css">

	<!-- Logo -->
	<link rel="icon" href="image/logo.PNG">
	<!-- Title -->
	<title>Pet Solution - Messages</title>
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
					<img id="logo_pic" src="image/logo.PNG" alt="'Official logo" width='30px' height='30px'>
					PET SOLUTION
				</div>
				<!--TOP NAV BAR -->
				<div class="right_content">

					<ul>
						<li>
							<div class="dropdown">
								<button class="dropbtn">Request</button>
								<div class="dropdown-content">
									<a class="dropdown_cont" href="/Customer_appointment">Appointment</a>
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
							<a href="/Home" class="">
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
							<a href="customer_message.php" class="active">
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
				<input type="hidden" name="client_id" value="{{$data->client_id}}">
				<div class="message_content">
					<div class="header_area">
						<h2><i class="bx bxs-message-rounded" style="color: red; font-size: 40px;"></i>&nbsp;Messaging</h2>
					</div>

					<div class="message-area" id="message-area">
						@foreach($conversationWithAdmin as $conversationWithAdmins)
						<div class="message-box">
							<div class="message {{ $conversationWithAdmins->sender_id == $data->client_id ? 'my-message' : 'other-message' }}">
								{{$conversationWithAdmins->body}}
							</div>
							<div class="separator"></div>
						</div>
						@endforeach
					</div>

					<form id="messageroom">
						@csrf
						<input type="hidden" name="clientID" value="{{$data->client_id}}">
						<div class="typing_area">
							<textarea name="typingBox" id="typing_box" class="typing_box"></textarea>
							<button class="send_btn" id="send" type="submit"><i class='bx bxs-send'></i></button>
						</div>
					</form>
				</div>
			</div>
			<!--End of content-->
		</div>
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="js/jsFile1.js"> </script>
<script src="js/customer_message.js"> </script>
<script type="text/javascript">
	$(function() {
		$('#send').click(function(e) {
			e.preventDefault();
			var scrollDown = $("#message-area");
			$.ajax({
				data: $('#messageroom').serialize(),
				url: "/toSendMessage",
				method: "POST",
				success: function(data) {
					$("#typing_box").val('');
					console.log(data)
					scrollDown.scrollTop(scrollDown.prop('scrollHeight'));
				},
				error: function(data) {
					console.log(data)
				}
			});
		});

		setInterval(ajaxCall, 1000);

		function ajaxCall() {
			$.ajax({
				method: 'get',
				url: "/client_get_chat",
				success: function(result) {
					console.log(result);
					$("#message-area").load(location.href + " #message-area>*", "");
					// scrollDown.scrollTop(scrollDown.prop('scrollHeight'));
				}
			});
		}
	});
</script>