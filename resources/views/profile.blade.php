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
	<link rel="stylesheet" href="css/profile.css">

	<!-- Logo -->
	<link rel="icon" href="image/logo.PNG">
	<!-- Title -->
	<title>Pet Solution - Profile</title>
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
					<div class="profile">
						<div class="container">
							<div class="content-box-profile">
								<br>
								<div class="row" id="profilename">
									<!--DISPLAY & UPDATE PROFILE PICTURE------------------------------------------->
									<div class="col-md-4">
										<div class="div-img-profile">
											<img id="profilephoto" src="{{ asset('uploads/adminPic/' . $data->profilePic) }}" class="img-profile">
											<div class="updateimage">
												<i class="fas fa-camera"></i>
											</div>
										</div>
										<br>
									</div>
									<div class="col-md-4">
										<!--DISPLAY ACCOUNT NAME------------------------------------------->
										<div class="profilename">

											<h1 id="display_name">{{$data->fname}} {{$data->mname}} {{$data->lname}}</h1>
										</div>
									</div>
									<br><br>
								</div>
								<br><br>

								<div class="row">
									<div class="col-md-12">
										<!--DISPLAY OTHER INFO------------------------------------------->
										<div class="otherinfo" id="otherinfo">
											<div class="row" style="justify-content: center;">
												<div class="col-md-10">
													<h2>Email address</h2>
													<p id="display_email">{{$data->email}}</p>
													<hr>
												</div>
											</div>
											<div class="row" style="justify-content: center;">
												<div class="col-md-5">
													<h2>Contact Number</h2>
													<p id="display_number">{{$data->contact_number}}</p>
													<hr>
												</div>
												<div class="col-md-5">
													<h2>Branch</h2>
													<p id="display_branch">{{$branch->branch_address}}</p>
													<hr>
												</div>
											</div>
											<div class="row" style="justify-content: center;">
												<div class="col-md-10">
													<h2>Address</h2>
													<p id="display_address">{{$data->address}}</p>
													<hr>
												</div>
											</div>
											<div class="row" style="justify-content: center;">
												<div class="col-md-5">
													<h2>Gender</h2>
													<p id="display_gender">{{$data->gender}}</p>
													<hr>
												</div>
												<div class="col-md-5">
													<h2>Date of birth</h2>
													<p id="display_bday">{{$data->bdate}}</p>
													<hr>
												</div>
											</div>
										</div>
										<!--UPDATE OTHER INFO------------------------------------------->
										<form action="/toEditProfile" id="updateform" method="post" enctype="multipart/form-data" class="profileform hideform">
											@csrf
											<input type="hidden" name="id" value="{{$data->client_id}}">
											<input type="hidden" name="branch_id" value="{{$branch->branch_id}}">
											<div class="row">
												<div class="col-md-12">
													<input type="file" name="photo" class="custom-file-input" onchange="loadFile(event)">
													<div class="div-img-addprofile">
														<img id="addprofilephoto" src="image/dp.jpg" class="img-profile">
													</div>
													<br><br>
													<hr><br>
												</div>
											</div>
											<!--UPDATE ACCOUNT NAME------------------------------------------->
											<div class="row" style="justify-content: center;">
												<div class="col-md-10">
													<h2>Name</h2>
												</div>
												<div class="col-md-3">
													<div class="input-field-profile">
														<input type="text" id="update_fname" name="fname" placeholder="First Name" value="{{$data->fname}}">
													</div>
												</div>
												<div class="col-md-4">
													<div class="input-field-profile">
														<input type="text" id="update_mname" name="mname" placeholder="Middle Name (Optional)" value="{{$data->mname}}">
													</div>
												</div>
												<div class="col-md-3">
													<div class="input-field-profile">
														<input type="text" id="update_lname" name="lname" placeholder="Surname" value="{{$data->lname}}">
													</div>
												</div>

											</div>

											<div class="row" style="justify-content: center;">
												<div class="col-md-10">
													<h2>Email address</h2>
													<div class="input-field-profile">
														<input type="email" id="update_email" name="email" placeholder="useraccount@email.com" value="{{$data->email}}">
													</div>
												</div>
											</div>
											<div class="row" style="justify-content: center;">
												<div class="col-md-5">
													<h2>Contact Number</h2>
													<div class="input-field-profile">
														<input type="text" id="update_number" name="contact" placeholder="XXXX-XXXX-XXX" value="{{$data->contact_number}}">
													</div>
												</div>
												<div class="col-md-5">
													<h2>Branch</h2>
													<div class="input-field-profile">
														<input list="branches" name="branches" placeholder="Branch" value="{{$branch->branch_address}}">
														<datalist id="branches">
															<option value="Malolos">
															<option value="Baliuag">
															<option value="Plaridel">
														</datalist>
													</div>
												</div>
											</div>
											<div class="row" style="justify-content: center;">
												<div class="col-md-10">
													<h2>Address</h2>
													<div class="input-field-profile">
														<input type="text" id="update_address" name="address" placeholder="Address" value="{{$data->address}}">
													</div>
												</div>
											</div>
											<div class="row" style="justify-content: center;">
												<div class="col-md-5">
													<h2>Gender</h2>
													<div class="input-field-profile">
														<input type="text" id="update_gender" name="gender" value="{{$data->gender}}">
													</div>
												</div>
												<div class="col-md-5">
													<h2>Date of birth</h2>
													<div class="input-field-profile">
														<input placeholder="00/00/000" type="text" name="bdate" onfocus="(this.type='date')" onblur="(this.type='text')" id="update_bdate" value="{{$data->bdate}}">
													</div>
												</div>
											</div>
											<br>
											<div class="col-md-12" style="text-align: right;">
												<button type="button" class="btnupdate" style="background-color:gray;" onclick="cancelprofile();">CANCEL</button>
												<button type="submit" class="btnupdate" id="saveBtn">SAVE</button>
											</div>
										</form>
									</div>
								</div>
								<br>
								<div class="col-md-12" style="text-align: right" id="editbtn">

									<button type="button" class="btnedit" onclick="updateprofile();"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;EDIT PROFILE</button>
								</div>
								<br><br>

								<div class="col-md-4" style="text-align: center;">
									<a href="/ChangePassPage"><i class="fas fa-key"></i>&nbsp;&nbsp;Change password</a>
								</div>
								<br>
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
<script src="js/profile.js"> </script>

<!-- <script type="text/javascript">
	$(function() {

		$('#saveBtn').click(function(e) {
			e.preventDefault();

			$.ajax({
				data: $('#updateform').serialize(),
				url: "/toEditProfile",
				type: "POST",
				success: function(response) {
					console.log(response);
					alert("Your changes have been successfully saved!");
					top.location.href = '/Profile';
				},
				error: function(error) {
					console.log(error)
					alert("Data not Save");
					// top.location.href = '/login';
				}
			});
		});
	});
</script> -->
