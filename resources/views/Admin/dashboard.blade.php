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
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
    
<body>
    <!-- LOADING -->
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="assets/images/logo.png" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>

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
						<a class="dropdown-item" href="toLogOutAdmin"><i class="dw dw-logout"></i> Log Out</a>
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
						<a href="/Admin_chat" class="dropdown-toggle no-arrow">
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
		<div class="pd-ltr-20">
            
            <!-- OVERVIEW -->
            <div class="title pb-20">
				<h2 class="h3 mb-0">Veterinary Clinic Overview</h2>
			</div>

			<div class="row pb-10">
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark">0</div>
								<div class="font-14 text-secondary weight-500">Appointment</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#00eccf"><i class="icon-copy dw dw-calendar1"></i></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark">{{$count}}</div>
								<div class="font-14 text-secondary weight-500">Total Clients</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#ff5b5b"><span class="icon-copy ti-heart"></span></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark">0</div>
								<div class="font-14 text-secondary weight-500">Total Veterinarians</div>
							</div>
							<div class="widget-icon">
								<div class="icon"><i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
					<div class="card-box height-100-p widget-style3">
						<div class="d-flex flex-wrap">
							<div class="widget-data">
								<div class="weight-700 font-24 text-dark">0</div>
								<div class="font-14 text-secondary weight-500">Earnings</div>
							</div>
							<div class="widget-icon">
								<div class="icon" data-color="#09cc06"><i class="icon-copy fa fa-money" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>

            <!-- ADMIN WELCOME NOTES -->
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="assets/images/banner-img.png" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10">
							Welcome back, <div class="weight-600 font-30 text-blue">{{$data->fname}} {{$data->mname}} {{$data->lname}}</div>
						</h4>
						<p class="font-18 max-width-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde hic non repellendus debitis iure, doloremque assumenda. Autem modi, corrupti, nobis ea iure fugiat, veniam non quaerat mollitia animi error corporis.</p>
					</div>
				</div>
			</div>
            
            <!-- OVERVIEW OF ACTIVITIES -->
            <div class="row pb-10">
				<div class="col-md-8 mb-20">
					<div class="card-box height-100-p pd-20">
						<div class="d-flex flex-wrap justify-content-between align-items-center pb-0 pb-md-3">
							<div class="h5 mb-md-0">Activities</div>
							<div class="form-group mb-md-0">
								<select class="form-control form-control-sm selectpicker">
									<option value="">Last Week</option>
									<option value="">Last Month</option>
									<option value="">Last 6 Month</option>
									<option value="">Last 1 year</option>
								</select>
							</div>
						</div>
						<div id="activities-chart"></div>
					</div>
				</div>
                
				<div class="col-md-4 mb-20">
					<div class="card-box min-height-200px pd-20 mb-20" data-bgcolor="#455a64">
						<div class="d-flex justify-content-between pb-20 text-white">
							<div class="icon h1 text-white">
								<i class="fa fa-calendar" aria-hidden="true"></i>
							</div>
							<div class="font-14 text-right">
								<div><i class="icon-copy ion-arrow-up-c"></i> 2.69%</div>
								<div class="font-12">Since last month</div>
							</div>
						</div>
						<div class="d-flex justify-content-between align-items-end">
							<div class="text-white">
								<div class="font-14">Appointment</div>
								<div class="font-24 weight-500">50</div>
							</div>
							<div class="max-width-150">
								<div id="appointment-chart"></div>
							</div>
						</div>
					</div>
					<div class="card-box min-height-200px pd-20" data-bgcolor="#265ed7">
						<div class="d-flex justify-content-between pb-20 text-white">
							<div class="icon h1 text-white">
								<i class="fa fa-stethoscope" aria-hidden="true"></i>
							</div>
							<div class="font-14 text-right">
								<div><i class="icon-copy ion-arrow-down-c"></i> 3.69%</div>
								<div class="font-12">Since last month</div>
							</div>
						</div>
                        
						<div class="d-flex justify-content-between align-items-end">
							<div class="text-white">
								<div class="font-14">Surgery</div>
								<div class="font-24 weight-500">0</div>
							</div>
							<div class="max-width-150">
								<div id="surgery-chart"></div>
							</div>
						</div>
					</div>      
				</div>
			</div>
            
            
            <!-- SHORTCUTS -->
			<div class="title pb-20 pt-20">
				<h2 class="h3 mb-0">Quick Start</h2>
			</div>
            
            <div class="row">
				<div class="col-md-4 mb-20">
					<a href="services.php" class="card-box d-block mx-auto pd-20 text-secondary">
						<div class="img pb-30">
							<img src="assets/images/dashboard-services.svg" width="500" height="600" alt="">
						</div>
						<div class="content">
							<h3 class="h4">Services</h3>
							<p class="max-width-300 ">We provide superior health care in a compassionate manner.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 mb-20">
					<a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
							<img src="assets/images/vet4.png" width="500" height="650" alt="">
						<div class="content">
							<h3 class="h4">Medications</h3>
							<p class="max-width-300 ">Give pet's prescription and medical information.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 mb-20">
					<a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
							<img src="assets/images/dashboard-location.svg" width="500" height="600" alt="">
						<div class="content">
							<h3 class="h4">Locations</h3>
							<p class="max-width-300 ">Convenient locations when and where you need them.</p>
						</div>
					</a>
				</div>
			</div>

            <!-- FOOTER -->
			<div class="footer-wrap pd-20 mb-20 card-box">
				Pet Solution 2021 | All Rights Reserved
			</div>
		</div>
	</div>
    
	<!-- js -->
	<script src="assets/scripts/core.js"></script>
	<script src="assets/scripts/script.min.js"></script>
	<script src="assets/scripts/process.js"></script>
	<script src="assets/scripts/layout-settings.js"></script>
	<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <script src="assets/scripts/dashboard.js"></script>
</body>
</html>