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
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
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

<body>
	<!-- HEADER -->
	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Type to search">
						<div class="dropdown">
							<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
								<i class="icon-copy fa fa-arrow-right" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</form>
			</div>
		</div>

		<div class="header-right">
			<!-- USER -->
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="{{ asset('uploads/adminPic/' . $data->profilePic) }}" alt="">
						</span>
						<span class="user-name">{{$data->fname}} {{$data->mname}} {{$data->lname}}</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="/Admin_Profile"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="#"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item" href="/toLogOutAdmin"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>

			<!-- USER NOTIFICATION -->
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="notifications.php" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a href="#">
										<img src="assets/images/user-sample.png" alt="">
										<h3>Anna Cruz</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="assets//images/user-sample.png" alt="">
										<h3>Lea Frith</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="assets/images/user-sample.png" alt="">
										<h3>Erick Richards</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="assets/images/user-sample.png" alt="">
										<h3>Renee I. Hansen</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="assets/images/user-sample.png" alt="">
										<h3>Vicki M. Coleman</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<div class="text-center">
									<a href="notifications.php" class="dark-link">Load more...</a>
								</div>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<!-- SETTINGS ICON -->
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
		</div>
	</div>

	<!-- SETTINGS -->
	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>

	<!-- SIDEBAR -->
	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="/Dashboard">
				<img src="assets/images/logo-light.png" alt="" class="dark-logo">
				<img src="assets/images/logo-dark.png" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>

		<!-- SIDEBAR CONTENTS -->
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li>
						<a href="/Dashboard" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Dashboard</span>
						</a>
					</li>

					<li>
						<a href="calendar.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">Calendar</span>
						</a>
					</li>

					<li>
						<a href="chat.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-chat3"></span><span class="mtext">Messages</span>
						</a>
					</li>

					<li>
						<a href="notifications.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-notification"></span><span class="mtext">Notifications</span>
						</a>
					</li>

					<li>
						<div class="dropdown-divider"></div>
					</li>

					<li>
						<div class="sidebar-small-cap">Manage</div>
					</li>

					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-user-1"></span><span class="mtext">Users</span>
						</a>
						<ul class="submenu">
							<li><a href="/userClients">Clients</a></li>
							<li><a href="/patients">Patients</a></li>
							<li><a href="user-veterinarians.php">Veterinarians</a></li>
						</ul>
					</li>

					<li>
						<a href="appointment-calendar.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-meeting"></span><span class="mtext">Appointments</span>
						</a>
					</li>

					<li>
						<a href="#" class="dropdown-toggle no-arrow">
							<span class="micon ion-medkit"></span><span class="mtext">Requests</span>
						</a>
					</li>

					<li>
						<a href="/Admin_services" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-settings1"></span><span class="mtext">Services</span>
						</a>
					</li>

					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit-2"></span><span class="mtext">Posts</span>
						</a>
						<ul class="submenu">
							<li><a href="post-announcement.php">Announcements</a></li>
							<li><a href="tips.php">Tips</a></li>
							<li><a href="gallery.php">Gallery</a></li>
						</ul>
					</li>

					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<div class="sidebar-small-cap">Generate</div>
					</li>
					<li>
						<a href="#" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-analytics-21"></span><span class="mtext">Reports</span>
						</a>
					</li>
					<li>
						<a href="#" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-invoice-1"></span><span class="mtext">Medical Records</span>
						</a>
					</li>
					<li>
						<a href="#" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-file1"></span><span class="mtext">Archives</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- CONTENTS -->
	<div class="mobile-menu-overlay"></div>
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>ACCOUNT MANAGEMENT</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="/Dashboard">Dashboard</a></li>
									<li class="breadcrumb-item active" aria-current="page">Patients</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

				<!-- Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4 class="text-blue h4">Patients</h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-12 text-right">
								<a class="btn btn btn-outline-primary" href="/AddPatients" role="button">
									<i class="icon-copy fa fa-plus" aria-hidden="true"></i> Add Patient
								</a>
							</div>
						</div>
					</div>
					<div class="pb-20">
						<table class="data-table-export table stripe hover  nowrap" id="patientsTable">
							<thead>
								<tr>
									<th class="table-plus">ClientID</th>
									<th>PetID</th>
									<th>Disease</th>
									<th>Date of Visit</th>
									<th>Medication</th>
									<th>Test Performed</th>
									<th>Test Results</th>
									<th data-orderable="false" class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
				</div>
				<!-- End -->
			</div>

			<!-- EDIT MODAL -->
			<div class="modal fade customscroll" id="edit-record" tabindex="-1" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Edit Record</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Close Modal">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body pd-0">
							<div class="task-list-form">
								<ul>
									<li>
										<form id="editPatientForm">
											<input type="hidden" name="patientID" id="patientID">
											<div class="form-group row">
												<label class="col-md-4">Disease</label>
												<div class="col-md-8">
													<input type="text" name="disease" id="disease" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-4">Medication</label>
												<div class="col-md-8">
													<input type="text" name="medication" id="medication" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-4">Test Performed</label>
												<div class="col-md-8">
													<input type="text" name="testP" id="testP" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-4">Test Result</label>
												<div class="col-md-8">
													<select class="form-control" name="testR" id="testR" title="Select">
														<option value="Treated">Treated</option>
														<option value="Ongoing Medication">Ongoing Medication</option>
													</select>
												</div>
											</div>
									</li>
									<div class="modal-footer">
										<button type="submit" id="submitBtn" class="btn btn-primary">Save and Update</button>
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									</div>
									</form>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End -->

			<!-- FOOTER -->
			<div class="footer-wrap pd-20 mb-20 card-box">
				Pet Solution 2021 | All Rights Reserved
			</div>
		</div>
	</div>

	<!-- js -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="assets/scripts/core.js"></script>
	<script src="assets/scripts/script.min.js"></script>
	<script src="assets/scripts/process.js"></script>
	<script src="assets/scripts/layout-settings.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="assets/scripts/datatable-setting.js"></script>
	<script type="text/javascript">
		$(function() {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			//DISPLAY TABLE
			var table = $("#patientsTable").DataTable({
				serverSide: true,
				processing: true,
				info: true,
				destroy: true,
				ajax: "/fetch-patientsTable",
				columns: [{
						data: 'client_id',
						name: 'client_id'
					},
					{
						data: 'pet_id',
						name: 'pet_id'
					},
					{
						data: 'diagnosis',
						name: 'diagnosis'
					},
					{
						data: 'dateOfvisit',
						name: 'dateOfvisit'
					},
					{
						data: 'medication',
						name: 'medication'
					},
					{
						data: 'testPerformed',
						name: 'testPerformed'
					},
					{
						data: 'testResult',
						name: 'testResult'
					},
					{
						data: 'action',
						name: 'action'
					}
				]
			});

			//TO GET PATIENT INFO
			$('body').on('click', '#editPatient', function(data) {
				var patient_id = $(this).data('id');
				// alert(patient_id);
				$.get("/getPatient/" + patient_id, function(data) {
					$('#patientID').val(patient_id);
					$('#disease').val(data.diagnosis);
					$('#medication').val(data.medication);
					$('#testP').val(data.testPerformed);
					$('#testR').val(data.testResult);
				})
			});

			//TO EDIT CLIENT RECORD
			$('#submitBtn').click(function(e) {
				e.preventDefault();

				$.ajax({
					data: $('#editPatientForm').serialize(),
					url: "/editPatient",
					type: "POST",
					success: function(response) {
						console.log(response)
						alert('Successfully Updated!');
						table.draw();
						$('#edit-record').modal('hide');
					},
					error: function(error) {
						console.log(error)
						alert("Data not Save");
					}
				});
			});


			// TO DELETE
			$('body').on('click', '#deletePatient', function() {
				var patient_id = $(this).data("id");

				if (confirm("Are you sure you want to delete this data?")) {
					$.ajax({
						type: "DELETE",
						url: "/deletePatient/" + patient_id,
						success: function(data) {
							table.draw();
						},
						error: function(data) {
							console.log('Error:', data);
						}
					});
				}
			});

		});
	</script>
</body>

</html>