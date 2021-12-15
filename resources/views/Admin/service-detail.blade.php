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
    <link rel="stylesheet" type="text/css" href="assets/styles/style.css">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
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
						<a class="dropdown-item" href="#"><i class="dw dw-user1"></i> Profile</a>
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
							<li><a href="">Veterinarians</a></li>
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
								<h4>SERVICES</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="/Admin_services">Services</a></li>
									<li class="breadcrumb-item active" aria-current="page">Service details</li>
								</ol>
							</nav>
						</div>
                        <div class="col-md-6 col-sm-12 text-right">
								<a class="btn btn btn-outline-primary" href="/Admin_AddService" role="button">
									Add Service <i class="icon-copy fa fa-plus" aria-hidden="true"></i>
								</a>
						</div>
					</div>
				</div>
                
				<div class="product-wrap">
					<div class="product-detail-wrap mb-30">
						<div class="row">
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="product-slider slider-arrow">
									<div class="product-slide">
										<img src="{{ asset('uploads/adminPic/' . $service_data->service_image) }}" alt="">
									</div>
								</div>
							</div>
                            
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="product-detail-desc pd-20 card-box height-100-p">
									<h4 class="mb-20 pt-20">{{$service_data->service_name}}</h4>
                                    <label class="text-blue">Description:</label>
									<p>{{$service_data->service_description}}</p>
									
                                    <div class="price">
										Starting price: <ins>₱{{$service_data->service_price}}.00</ins>
									</div>
                                    
                                    <div class="row">
										<div class="col-md-6 col-6">
											<a href="/Admin_EditService" class="btn btn-primary btn-block"> <i class="icon-copy fi-page-edit"></i> Edit</a>
										</div>
                                        
										<div class="col-md-6 col-6">
                                            <button id="deleteBtn" data-id="{{$service_data->admin_service_id}}" class="btn btn-outline-danger btn-block"><i class="icon-copy fa fa-trash" aria-hidden="true"></i> Delete</button>
										</div>
									</div>
								</div>
							</div>		
						</div>
					</div>
				</div>
			</div>
            
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
    <!-- sweet alert js & css -->
	<script src="src/plugins/sweetalert2/sweetalert2.all.js"></script>
	<script src="src/plugins/sweetalert2/sweet-alert.init.js"></script>
	<script type="text/javascript">
		$(function(){
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			//TO DELETE SERVICE
			$('body').on('click', '#deleteBtn', function() {
				var service_id = $(this).data("id");

				if (confirm("Are you sure you want to delete this data?")) {
					$.ajax({
						type: "DELETE",
						url: "/Admin_toDeleteService/" + service_id,
						success: function(data) {
							console.log(data);
							alert('Service Deleted Successfully!');
							window.location.href = "/Admin_services";
						},
						error: function(data) {
							console.log('Error:', data);
							alert('FAILED');
						}
					});
				}
			});
		});
	</script>
</body>
</html>