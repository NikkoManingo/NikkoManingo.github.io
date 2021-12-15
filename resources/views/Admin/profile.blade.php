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
   <link rel="stylesheet" type="text/css" href="src/plugins/cropperjs/dist/cropper.css">
   <link rel="stylesheet" type="text/css" href="assets/styles/style.css">
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
                     <li><a href="#">Veterinarians</a></li>
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
                  <div class="col-md-12 col-sm-12">
                     <div class="title">
                        <h4>GENERAL ACCOUNT SETTINGS</h4>
                     </div>
                     <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="/Dashboard">Dashboard</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                     </nav>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                  <div class="pd-20 card-box height-100-p">
                     <div class="profile-photo">
                        <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                        <img src="{{ asset('uploads/adminPic/' . $data->profilePic) }}" alt="" class="avatar-photo">
                        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                 <div class="modal-body pd-5">
                                    <div class="img-container">
                                       <img id="image" src="assets/images/user-sample.png" alt="Picture">
                                    </div>
                                 </div>
                                 <div class="modal-footer">
                                    <input type="submit" value="Update" class="btn btn-primary">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <h5 class="text-center h5 mb-0">{{$data->fname}} {{$data->mname}} {{$data->lname}}</h5>
                     <p class="text-center text-muted font-14">Admin</p>
                     <div class="profile-info">
                        <h5 class="mb-20 h5 text-blue">Contact Information</h5>
                        <ul>
                           <li>
                              <span>Email Address :</span>
                              {{$data->email}}
                           </li>
                           <li>
                              <span>Phone Number :</span>
                              {{$data->contact_num}}
                           </li>
                           <li>
                              <span>Address :</span>
                              {{$data->address}}
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                  <div class="card-box height-100-p overflow-hidden">
                     <div class="profile-tab height-100-p">
                        <div class="tab height-100-p">
                           <ul class="nav nav-tabs customtab" role="tablist">
                              <li class="nav-item">
                                 <a class="nav-link active" data-toggle="tab" href="#setting" role="tab">Profile Settings</a>
                              </li>
                           </ul>
                           <div class="tab-content">
                              <div class="tab-pane fade show active" id="setting" role="tabpanel">
                                 <div class="profile-setting">
                                    <form action="/toUpdateAdmin_Profile" method="post">
                                       @csrf
                                       <input type="hidden" name="admin_id" value="{{$data->admin_id}}">
                                       <ul class="profile-edit-list row">
                                          <li class="weight-500 col-md-12">
                                             @if(Session::has('status'))
                                             <div class="alert alert-success">{{Session::get('status')}}</div>
                                             @endif
                                             @if(Session::has('fail'))
                                             <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                             @endif
                                             <h4 class="text-blue h5 mb-20">Edit your Personal Settings</h4>
                                             <label>Email Address :</label>
                                             <div class="input-group">
                                                <input class="form-control form-control-lg" type="email" name="email" value="{{$data->email}}" readonly>
                                                <input class="btn btn-primary" name="Edit" type="button" value="Edit">
                                             </div>
                                             <label>Username :</label>
                                             <div class="input-group">
                                                <input type="text" class="form-control" name="username" value="{{$data->username}}" readonly>
                                                <input class="btn btn-primary" name="Edit" type="button" value="Edit">
                                             </div>
                                             <label>Password :</label>
                                             <div class="input-group">
                                                <input type="password" class="form-control" name="password" placeholder="********" readonly>
                                                <input class="btn btn-primary" name="Edit" type="button" value="Edit">
                                             </div>
                                             <label>First Name :</label>
                                             <div class="input-group">
                                                <input type="text" class="form-control" name="fname" value="{{$data->fname}}" readonly>
                                                <input class="btn btn-primary" name="Edit" type="button" value="Edit">
                                             </div>
                                             <label>Middle Name(Optional) :</label>
                                             <div class="input-group">
                                                <input type="text" class="form-control" name="mname" value="{{$data->mname}}" readonly>
                                                <input class="btn btn-primary" name="Edit" type="button" value="Edit">
                                             </div>
                                             <label>Last Name :</label>
                                             <div class="input-group">
                                                <input type="text" class="form-control" name="lname" value="{{$data->lname}}" readonly>
                                                <input class="btn btn-primary" name="Edit" type="button" value="Edit">
                                             </div>
                                             <label>Date of birth :</label>
                                             <div class="input-group">
                                                <input class="form-control form-control-lg date-picker" name="datepicker" value="{{$data->bdate}}" type="text" readonly>
                                                <input class="btn btn-primary" name="Edit" type="button" value="Edit">
                                             </div>
                                             <label>Age :</label>
                                             <div class="input-group">
                                                <input type="number" class="form-control" name="age" value="{{$data->age}}" readonly>
                                                <input class="btn btn-primary" name="Edit" type="button" value="Edit">
                                             </div>
                                             <label>Sex :</label>
                                             <div class="input-group">
                                                <input type="text" class="form-control" name="sex" value="{{$data->gender}}" readonly>
                                                <input class="btn btn-primary" name="Edit" type="button" value="Edit">
                                             </div>
                                             <label>Contact Number :</label>
                                             <div class="input-group">
                                                <input type="number" class="form-control" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="11" name="contact" value="{{$data->contact_num}}" readonly>
                                                <input class="btn btn-primary" name="Edit" type="button" value="Edit">
                                             </div>
                                             <label>Address :</label>
                                             <div class="input-group">
                                                <input type="text" class="form-control" name="address" value="{{$data->address}}" readonly>
                                                <input class="btn btn-primary" name="Edit" type="button" value="Edit">
                                             </div>
                                             <div class="form-group mb-0">
                                                <input type="submit" class="btn btn-primary col-md-12" value="Save & Update">
                                             </div>
                                          </li>
                                       </ul>
                                    </form>
                                 </div>
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
   <script src="assets/scripts/core.js"></script>
   <script src="assets/scripts/script.min.js"></script>
   <script src="assets/scripts/process.js"></script>
   <script src="assets/scripts/layout-settings.js"></script>
   <script src="src/plugins/cropperjs/dist/cropper.js"></script>
   <script>
      // IMAGE CROPPER
      window.addEventListener('DOMContentLoaded', function() {
         var image = document.getElementById('image');
         var cropBoxData;
         var canvasData;
         var cropper;

         $('#modal').on('shown.bs.modal', function() {
            cropper = new Cropper(image, {
               autoCropArea: 0.5,
               dragMode: 'move',
               aspectRatio: 3 / 3,
               restore: false,
               guides: false,
               center: false,
               highlight: false,
               cropBoxMovable: false,
               cropBoxResizable: false,
               toggleDragModeOnDblclick: false,
               ready: function() {
                  cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
               }
            });
         }).on('hidden.bs.modal', function() {
            cropBoxData = cropper.getCropBoxData();
            canvasData = cropper.getCanvasData();
            cropper.destroy();
         });
      });

      // EDIT/SAVE BUTTON
      $('[name="Edit"]').on('click', function() {
         var prev = $(this).prev('input'),
            ro = prev.prop('readonly');
         prev.prop('readonly', !ro).focus();
         $(this).val(ro ? 'Save' : 'Edit');
      });
   </script>
</body>

</html>