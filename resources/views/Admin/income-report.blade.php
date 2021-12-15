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
							<img src="assets/images/user-sample.png" alt="">
						</span>
						<span class="user-name">Juan dela Cruz</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item" href="login.html"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
            
            <!-- USER NOTIFICATION -->
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
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
                                    <a href="notifications.html" class="dark-link">Load more...</a>
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
			<a href="dashboard.html">
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
						<a href="dashboard.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
                    
                    <li>
						<a href="calendar.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">Calendar</span>
						</a>
					</li>
                    
                    <li>
						<a href="chat.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-chat3"></span><span class="mtext">Messages</span>
						</a>
					</li>
                    
                    <li>
						<a href="notifications.html" class="dropdown-toggle no-arrow">
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
							<li><a href="user-clients.html">Clients</a></li>
							<li><a href="user-patients.html">Patients</a></li>
							<li><a href="user-veterinarians.html">Veterinarians</a></li>
						</ul>
					</li>
                    
                    <li>
						<a href="appointment-calendar.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-meeting"></span><span class="mtext">Appointments</span>
						</a>
					</li>
                    
                    <li>
						<a href="#" class="dropdown-toggle no-arrow">
							<span class="micon ion-medkit"></span><span class="mtext">Requests</span>
						</a>
					</li>
                    
                    <li>
						<a href="services.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-settings1"></span><span class="mtext">Services</span>
						</a>
					</li>
					
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit-2"></span><span class="mtext">Posts</span>
						</a>
						<ul class="submenu">
							<li><a href="post-announcement.html">Announcements</a></li>
							<li><a href="tips.html">Tips</a></li>
							<li><a href="gallery.html">Gallery</a></li>
						</ul>
					</li>
                    
                    <li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<div class="sidebar-small-cap">Generate</div>
					</li>
                    <li class="dropdown">
                       <a href="javascript:;" class="dropdown-toggle">
                       <span class="micon dw dw-analytics-21"></span><span class="mtext">Reports</span>
                       </a>
                       <ul class="submenu">
                          <li><a href="income-report.php">Income Report</a></li>
                          <li><a href="comparative-report.php">Comparative Report</a></li>
                       </ul>
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
                         <h4>GENERATE REPORTS</h4>
                      </div>
                      <nav aria-label="breadcrumb" role="navigation">
                         <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Reports</li>
                         </ol>
                      </nav>
                   </div>
                </div>
             </div>
              
             <!-- Datatable -->
             <div class="card-box mb-30">
                <div class="pd-20">
                   <div class="row">
                      <div class="col-md-6">
                         <div class="title">
                            <h4 class="text-blue h4">Report Generation</h4>
                         </div>
                      </div>
                      <div class="col-md-3 text-right">
                         <a href="add-record" data-toggle="modal" data-target="#add-record" class="bg-light-blue btn text-blue weight-500"><i class="ion-plus-round"></i> Add Record</a>
                      </div>
                      <div class="col-md-3 text-right">
                         <div class="form-group">
                            <select class="form-control selectpicker" title="Filter">
                               <option value="1">All</option>
                               <option value="2">Weekly</option>
                               <option value="3">Monthly</option>
                               <option value="4">Annual</option>
                            </select>
                         </div>
                      </div>

                      <!-- ADD MODAL -->
                      <div class="modal fade customscroll" id="add-record" tabindex="-1" role="dialog">
                         <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                               <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">Add Daily Record</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Close Modal">
                                  <span aria-hidden="true">&times;</span>
                                  </button>
                               </div>
                               <div class="modal-body pd-0">
                                  <div class="task-list-form">
                                     <ul>
                                        <li>
                                           <form>
                                              <div class="form-group row">
                                                 <label class="col-md-4">Date*</label>
                                                 <div class="col-md-8">
                                                    <input type="text" class="form-control date-picker">
                                                 </div>
                                              </div>
                                              <div class="form-group row">
                                                 <label class="col-md-4">Client Name*</label>
                                                 <div class="col-md-8">
                                                    <input type="text" class="form-control">
                                                 </div>
                                              </div>
                                              <div class="form-group row">
                                                 <label class="col-md-4">Pet Name*</label>
                                                 <div class="col-md-8">
                                                    <input type="text" class="form-control">
                                                 </div>
                                              </div>
                                              <div class="form-group row">
                                                 <label class="col-md-4">Service*</label>
                                                 <div class="col-md-8">
                                                    <input type="text" class="form-control">
                                                 </div>
                                              </div>
                                              <div class="form-group row">
                                                 <label class="col-md-4">Amount*</label>
                                                 <div class="col-md-8">
                                                    <input type="text" class="form-control">
                                                 </div>
                                              </div>
                                           </form>
                                        </li>
                                     </ul>
                                  </div>
                               </div>
                               <div class="modal-footer">
                                  <button type="button" class="btn btn-primary">Add</button>
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- End -->
                   </div>
                </div>

                <!-- TABLE --> 
                <div class="pb-20">
                   <table class="data-table-export table stripe hover  nowrap">
                      <thead>
                         <tr>
                            <th class="table-plus">Date</th>
                            <th>Client Name</th>
                            <th>Pet Name</th>
                            <th>Service</th>
                            <th>Amount</th>
                         </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td class="table-plus">12-03-2021</td>
                            <td>Ana Cruz</td>
                            <td>Max</td>
                            <td>Grooming</td>
                            <td>350.00</td>
                         </tr>
                      </tbody>
                   </table>
                </div>
                 
                <div class="pd-20">
                   <div class="row">
                      <div class="col-md-6">
                      </div>
                      <div class="col-md-6">
                         <div class="form-group row">
							<label class="col-md-6 col-form-label text-right">TOTAL PROFIT :</label>
							<div class="col-md-6">
								<input class="form-control" type="text" placeholder="350.00" readonly>
							</div>
						</div>
                      </div>
                   </div>
                </div>
             </div>
             <!-- End -->
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
    <script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <!-- Buttons for Export datatable -->
    <script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
    <script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="src/plugins/datatables/js/buttons.print.min.js"></script>
    <script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
    <script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
    <script src="src/plugins/datatables/js/pdfmake.min.js"></script>
    <script src="src/plugins/datatables/js/vfs_fonts.js"></script>
    <!-- Datatable Setting js -->
    <script src="assets/scripts/datatable-setting.js"></script>
</body>
</html>