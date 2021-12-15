<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Pet Solution</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="assets/images/logo.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/images/logo.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/images/logo.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Poppins:wght@200&display=swap" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="assets/styles/core.css">
	<link rel="stylesheet" type="text/css" href="assets/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/jquery.steps.css">
	<link rel="stylesheet" type="text/css" href="assets/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>

<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="/AdminLogin">
					<img src="assets/images/logo-light.png" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="/AdminLogin">Login</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<img src="assets/images/register-page-img.png" alt="">
				</div>
				<div class="col-md-6">
					<div class="reg-box bg-white box-shadow border-radius-10">
						<div class="register-title">
							<h2 class="text-center text-primary">Register</h2>
							<br>
							@if($errors->all())
							@foreach ($errors->all() as $err)
							<li>{{$err}}</li>
							@endforeach
							<br>
							@endif
						</div>
						<form action="/toRegisterAdmin" method="post" enctype="multipart/form-data" id="addForm">
							@csrf
							<h6>Basic Account Credentials</h6>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Email Address :</label>
										<input type="email" name="email" value="{{old('email')}}" id="email" class="form-control" required>
										<!-- <small class="text-danger">{{ $errors->first('email') }}</small> -->
									</div>
									<div class="form-group">
										<label>Username :</label>
										<input type="text" name="username" value="{{old('username')}}" class="form-control" required>
									</div>
									<div class="form-group">
										<label>Profile Picture :</label>
										<input type="file" name="photo" value="{{old('photo')}}" class="form-control" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Password :</label>
										<input type="password" name="password" class="form-control" required>
									</div>
									<div class="form-group">
										<label>Confirm Password :</label>
										<input type="password" name="confirm_password" class="form-control" required>
									</div>
								</div>
							</div>
							<h6>Personal Information</h6>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>First Name :</label>
										<input type="text" name="fname" value="{{old('fname')}}" class="form-control" required>
									</div>
									<div class="form-group">
										<label>Middle Name :</label>
										<input type="text" placeholder="Optional" value="{{old('mname')}}" name="mname" class="form-control">
									</div>
									<div class="form-group">
										<label>Last Name :</label>
										<input type="text" name="lname" value="{{old('lname')}}" class="form-control" required>
									</div>
									<div class="form-group">
										<label>Date of Birth :</label>
										<input type="text" name="bdate" value="{{old('bdate')}}" class="form-control date-picker" placeholder="Select Date" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Age :</label>
										<input type="text" name="age" value="{{old('age')}}" class="form-control" required>
									</div>
									<div class="form-group">
										<label>Sex :</label>
										<select class="form-control selectpicker" name="gender" value="{{old('gender')}}" title="Select">
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
									</div>
									<div class="form-group">
										<label>Address :</label>
										<input type="text" name="address" value="{{old('address')}}" class="form-control" required>
									</div>
									<div class="form-group">
										<label>Contact Number :</label>
										<input type="number" name="contact" value="{{old('contact')}}" id="contact" class="form-control" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="11" required>
										<!-- <small class="text-danger">{{ $errors->first('contact') }}</small> -->
									</div>
								</div>
							</div>
							<h6>Location</h6>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Branch :</label>
										<select class="form-control selectpicker" name="branch" value="{{old('branch')}}" title="Select" required>
											<option value="Malolos">Malolos</option>
											<option value="Baliuag">Baliuag</option>
											<option value="Plaridel">Plaridel</option>
										</select>
									</div>
								</div>
								<div class="col-sm-6"></div>
								<div class="col-sm-6">
									<div class="form-group">
										<input class="btn btn-outline-primary btn-block" type="submit" id="submitBtn" value="Sign up">
									</div>
								</div>
							</div>
						</form>
						<!-- MODAL -->
						<!-- <div class="modal fade" id="successmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-body text-center font-18">
										<h3 class="mb-20">Registration Successful!</h3>
										<div class="mb-30 text-center"><img src="assets/images/success.png"></div>
										The employee has been registered and saved in the database.
									</div>
									<div class="modal-footer justify-content-center">
										<a href="/AdminLogin" class="btn btn-primary">Done</a>
									</div>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- js -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="assets/scripts/core.js"></script>
	<script src="assets/scripts/script.min.js"></script>
	<script src="assets/scripts/process.js"></script>
	<script src="assets/scripts/layout-settings.js"></script>
	<!-- <script type="text/javascript">
		$(function() {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			$('#submitBtn').click(function() {

				// var formData = new FormData($('#addForm')[0]);
				var formData = this;

				$.ajax({
					type: "POST",
					url: "/toRegisterAdmin",
					data: new FormData(formData),
					contentType: false,
					processData: false,
					success: function(response) {
						console.log(response);
						alert('The employee has been registered!');
						// window.location.href = '/AdminLogin';
						// $('#successmodal').modal('show');
					},
					error: function(error) {
						console.log(error)
						
						// alert("Data not Save");
					}
				});
			});

		});
	</script> -->
</body>

</html>