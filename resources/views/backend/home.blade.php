
<!DOCTYPE html>
<html lang="zxx">

<head>
   <!-- Page Title -->
   <title>Dashmin - Multipurpose Bootstrap Dashboard Template</title>

   <!-- Meta Data -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="keywords" content="">

   <!-- Favicon -->
   <link rel="shortcut icon" href="{{ asset('template/backend') }}/assets/img/favicon.png">

   <!-- Web Fonts -->
   <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet">
   
   <!-- ======= BEGIN GLOBAL MANDATORY STYLES ======= -->
   <link rel="stylesheet" href="{{ asset('template/backend') }}/assets/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="{{ asset('template/backend') }}/assets/fonts/icofont/icofont.min.css">
   <link rel="stylesheet" href="{{ asset('template/backend') }}/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.css">
   <!-- ======= END BEGIN GLOBAL MANDATORY STYLES ======= -->
   
   <!-- ======= BEGIN PAGE LEVEL PLUGINS STYLES ======= -->
   <link rel="stylesheet" href="{{ asset('template/backend') }}/assets/plugins/apex/apexcharts.css">
   <!-- ======= END BEGIN PAGE LEVEL PLUGINS STYLES ======= -->

   <!-- ======= MAIN STYLES ======= -->
   <link rel="stylesheet" href="{{ asset('template/backend') }}/assets/css/style.css">
   <!-- ======= END MAIN STYLES ======= -->

</head>

<body>

   <!-- Offcanval Overlay -->
   <div class="offcanvas-overlay"></div>
   <!-- Offcanval Overlay -->

   <!-- Wrapper -->
   <div class="wrapper">

      <!-- Header -->
      <header class="header fixed-top d-flex align-content-center flex-wrap">
         <!-- Logo -->
         <div class="logo">
            <a href="index.html" class="default-logo"><img src="{{ asset('template/backend') }}/assets/img/logo.png" alt=""></a>
            <a href="index.html" class="mobile-logo"><img src="{{ asset('template/backend') }}/assets/img/mobile-logo.png" alt=""></a>
         </div>
         <!-- End Logo -->

         <!-- Main Header -->
         <div class="main-header">
            <div class="container-fluid">
               <div class="row justify-content-between">
                  <div class="col-3 col-lg-1 col-xl-4">
                     <!-- Header Left -->
                     <div class="main-header-left h-100 d-flex align-items-center">
                        <!-- Main Header User -->
                        <div class="main-header-user">
                           <a href="#" class="d-flex align-items-center" data-toggle="dropdown">
                              <div class="menu-icon">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                              </div>

                              <div class="user-profile d-xl-flex align-items-center d-none">
                                 <!-- User Avatar -->
                                 <div class="user-avatar">
                                    <img src="{{ asset('template/backend') }}/assets/img/avatar/user.png" alt="">
                                 </div>
                                 <!-- End User Avatar -->

                                 <!-- User Info -->
                                 <div class="user-info">
                                    <h4 class="user-name">Abrilay Khatun</h4>
                                    <p class="user-email">abrilakh@gmail.com</p>
                                 </div>
                                 <!-- End User Info -->
                              </div>
                           </a>
                           <div class="dropdown-menu">
                              <a href="#">My Profile</a>
                              <a href="#">task</a>
                              <a href="#">Settings</a>
                              <a href="#">Log Out</a>
                           </div>
                        </div>
                        <!-- End Main Header User -->

                        <!-- Main Header Menu -->
                        <div class="main-header-menu d-block d-lg-none">
                           <div class="header-toogle-menu">
                              <!-- <i class="icofont-navigation-menu"></i> -->
                              <img src="{{ asset('template/backend') }}/assets/img/menu.png" alt="">
                           </div>
                        </div>
                        <!-- End Main Header Menu -->
                     </div>
                     <!-- End Header Left -->
                  </div>
                  <div class="col-9 col-lg-11 col-xl-8">
                     <!-- Header Right -->
                     <div class="main-header-right d-flex justify-content-end">
                        <ul class="nav">
                           <li class="ml-0">
                              <!-- Main Header Language -->
                              <div class="main-header-language">
                                 <a href="#" data-toggle="dropdown">
                                    <img src="{{ asset('template/backend') }}/assets/img/svg/globe-icon.svg" alt="">
                                 </a>
                                 <div class="dropdown-menu style--three">
                                    <a href="#">
                                       <span><img src="{{ asset('template/backend') }}/assets/img/usa.png" alt=""></span>
                                       USA
                                    </a>
                                    <a href="#">
                                       <span><img src="{{ asset('template/backend') }}/assets/img/china.png" alt=""></span>
                                       China
                                    </a>
                                    <a href="#">
                                       <span><img src="{{ asset('template/backend') }}/assets/img/russia.png" alt=""></span>
                                       Russia
                                    </a>
                                    <a href="#">
                                       <span><img src="{{ asset('template/backend') }}/assets/img/spain.png" alt=""></span>
                                       Spain
                                    </a>
                                    <a href="#">
                                       <span><img src="{{ asset('template/backend') }}/assets/img/brazil.png" alt=""></span>
                                       Brazil
                                    </a>
                                    <a href="#">
                                       <span><img src="{{ asset('template/backend') }}/assets/img/france.png" alt=""></span>
                                       France
                                    </a>
                                    <a href="#">
                                       <span><img src="{{ asset('template/backend') }}/assets/img/algeria.png" alt=""></span>
                                       Algeria
                                    </a>
                                 </div>
                              </div>
                              <!-- End Main Header Language -->
                           </li>
                           <li class="ml-0 d-none d-lg-flex">
                              <!-- Main Header Print -->
                              <div class="main-header-print">
                                 <a href="#">
                                    <img src="{{ asset('template/backend') }}/assets/img/svg/print-icon.svg" alt="">
                                 </a>
                              </div>
                              <!-- End Main Header Print -->
                           </li>
                           <li class="d-none d-lg-flex">
                              <!-- Main Header Time -->
                              <div class="main-header-date-time text-right">
                                 <h3 class="time">
                                    <span id="hours">21</span>
                                    <span id="point">:</span>
                                    <span id="min">06</span>
                                 </h3>
                                 <span class="date"><span id="date">Tue, 12 October 2019</span></span>
                              </div>
                              <!-- End Main Header Time -->
                           </li>
                           <li class="d-none d-lg-flex">
                              <!-- Main Header Button -->
                              <div class="main-header-btn ml-md-1">
                                 <a href="#" class="btn">Pending Tasks</a>
                              </div>
                              <!-- End Main Header Button -->
                           </li>
                           <li class="order-2 order-sm-0">
                              <!-- Main Header Search -->
                              <div class="main-header-search">
                                 <form action="#" class="search-form">
                                    <div class="theme-input-group header-search">
                                       <input type="text" class="theme-input-style" placeholder="Search Here">

                                       <button type="submit"><img src="{{ asset('template/backend') }}/assets/img/svg/search-icon.svg" alt=""
                                             class="svg"></button>
                                    </div>
                                 </form>
                              </div>
                              <!-- End Main Header Search -->
                           </li>
                           <li>
                              <!-- Main Header Messages -->
                              <div class="main-header-message">
                                 <a href="#" class="header-icon" data-toggle="dropdown">
                                    <img src="{{ asset('template/backend') }}/assets/img/svg/message-icon.svg" alt="" class="svg">
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-right">
                                    <!-- Dropdown Header -->
                                    <div class="dropdown-header d-flex align-items-center justify-content-between">
                                       <h5>3 Unread messages</h5>
                                       <a href="#" class="text-mute d-inline-block">Clear all</a>
                                    </div>
                                    <!-- End Dropdown Header -->

                                    <!-- Dropdown Body -->
                                    <div class="dropdown-body">
                                       <!-- Item Single -->
                                       <a href="#" class="item-single d-flex media align-items-center">
                                          <div class="figure">
                                             <img src="{{ asset('template/backend') }}/assets/img/avatar/m1.png" alt="">
                                             <span class="avatar-status bg-teal"></span>
                                          </div>
                                          <div class="content media-body">
                                             <div class="d-flex align-items-center mb-2">
                                                <h6 class="name">Sender Name</h6>
                                                <p class="time">2 min ago</p>
                                             </div>	
                                             <p class="main-text">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo.</p>
                                          </div>
                                       </a>
                                       <!-- End Item Single -->

                                       <!-- Item Single -->
                                       <a href="#" class="item-single d-flex media align-items-center">
                                          <div class="figure">
                                             <img src="{{ asset('template/backend') }}/assets/img/avatar/m2.png" alt="">
                                             <span class="avatar-status bg-teal"></span>
                                          </div>
                                          <div class="content media-body">
                                             <div class="d-flex align-items-center mb-2">
                                                <h6 class="name">Tonya Lee</h6>
                                                <p class="time">2 min ago</p>
                                             </div>	
                                             <p class="main-text">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo.</p>
                                          </div>
                                       </a>
                                       <!-- End Item Single -->

                                       <!-- Item Single -->
                                       <a href="#" class="item-single d-flex media align-items-center">
                                          <div class="figure">
                                             <img src="{{ asset('template/backend') }}/assets/img/avatar/m3.png" alt="">
                                             <span class="avatar-status bg-teal"></span>
                                          </div>
                                          <div class="content media-body">
                                             <div class="d-flex align-items-center mb-2">
                                                <h6 class="name">Cathy Nichols</h6>
                                                <p class="time">2 min ago</p>
                                             </div>	
                                             <p class="main-text">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo.</p>
                                          </div>
                                       </a>
                                       <!-- End Item Single -->

                                       <!-- Item Single -->
                                       <a href="#" class="item-single d-flex media align-items-center">
                                          <div class="figure">
                                             <img src="{{ asset('template/backend') }}/assets/img/avatar/m4.png" alt="">
                                             <span class="avatar-status bg-teal"></span>
                                          </div>
                                          <div class="content media-body">
                                             <div class="d-flex align-items-center mb-2">
                                                <h6 class="name">Hubert Griffith</h6>
                                                <p class="time">2 min ago</p>
                                             </div>	
                                             <p class="main-text">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo.</p>
                                          </div>
                                       </a>
                                       <!-- End Item Single -->
                                    </div>
                                    <!-- End Dropdown Body -->
                                 </div>
                              </div>
                              <!-- End Main Header Messages -->
                           </li>
                           <li>
                              <!-- Main Header Notification -->
                              <div class="main-header-notification">
                                 <a href="#" class="header-icon notification-icon" data-toggle="dropdown">
                                    <span class="count" data-bg-img="{{ asset('template/backend') }}/assets/img/count-bg.png">22</span>
                                    <img src="{{ asset('template/backend') }}/assets/img/svg/notification-icon.svg" alt="" class="svg">
                                 </a>
                                 <div class="dropdown-menu style--two dropdown-menu-right">
                                    <!-- Dropdown Header -->
                                    <div class="dropdown-header d-flex align-items-center justify-content-between">
                                       <h5>5 New notifications</h5>
                                       <a href="#" class="text-mute d-inline-block">Clear all</a>
                                    </div>
                                    <!-- End Dropdown Header -->

                                    <!-- Dropdown Body -->
                                    <div class="dropdown-body">
                                       <!-- Item Single -->
                                       <a href="#" class="item-single d-flex align-items-center">
                                          <div class="content">
                                             <div class="mb-2">
                                                <p class="time">2 min ago</p>
                                             </div>	
                                             <p class="main-text">Donec dapibus mauris id odio ornare tempus amet.</p>
                                          </div>
                                       </a>
                                       <!-- End Item Single -->

                                       <!-- Item Single -->
                                       <a href="#" class="item-single d-flex align-items-center">
                                          <div class="content">
                                             <div class="mb-2">
                                                <p class="time">2 min ago</p>
                                             </div>	
                                             <p class="main-text">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo.</p>
                                          </div>
                                       </a>
                                       <!-- End Item Single -->

                                       <!-- Item Single -->
                                       <a href="#" class="item-single d-flex align-items-center">
                                          <div class="content">
                                             <div class="mb-2">
                                                <p class="time">2 min ago</p>
                                             </div>	
                                             <p class="main-text">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo.</p>
                                          </div>
                                       </a>
                                       <!-- End Item Single -->

                                       <!-- Item Single -->
                                       <a href="#" class="item-single d-flex align-items-center">
                                          <div class="content">
                                             <div class="mb-2">
                                                <p class="time">2 min ago</p>
                                             </div>	
                                             <p class="main-text">Donec dapibus mauris id odio ornare tempus. Duis sit amet accumsan justo.</p>
                                          </div>
                                       </a>
                                       <!-- End Item Single -->
                                    </div>
                                    <!-- End Dropdown Body -->
                                 </div>
                              </div>
                              <!-- End Main Header Notification -->
                           </li>
                        </ul>
                     </div>
                     <!-- End Header Right -->
                  </div>
               </div>
            </div>
         </div>
         <!-- End Main Header -->
      </header>
      <!-- End Header -->

      <!-- Main Wrapper -->
      <div class="main-wrapper">
         <!-- Sidebar -->
         <nav class="sidebar" data-trigger="scrollbar">
            <!-- Sidebar Header -->
            <div class="sidebar-header d-none d-lg-block">
               <!-- Sidebar Toggle Pin Button -->
               <div class="sidebar-toogle-pin">
                  <i class="icofont-tack-pin"></i>
               </div>
               <!-- End Sidebar Toggle Pin Button -->
            </div>
            <!-- End Sidebar Header -->

            <!-- Sidebar Body -->
            <div class="sidebar-body">
               <!-- Nav -->
               <ul class="nav">
                  <li class="nav-category">Main</li>
                  <li class="active">
                     <a href="index.html">
                        <i class="icofont-pie-chart"></i>
                        <span class="link-title">Dashboard</span>
                     </a>
                  </li>
                  
                  <li class="nav-category">movie management</li>
                 
                  <li>
                     <a href="pages/apps/chat.html">
                        <i class="icofont-database"></i>
                        <span class="link-title">Movie List</span>
                     </a>
                  </li>
                  <li>
                    <a href="pages/apps/chat.html">
                       <i class="icofont-cubes"></i>
                       <span class="link-title">Category List</span>
                    </a>
                 </li>
                 <li>
                    <a href="pages/apps/chat.html">
                       <i class="icofont-dice-multiple"></i>
                       <span class="link-title">Sub Category List</span>
                    </a>
                 </li>

                 <li class="nav-category">settings</li>
                 
                  <li>
                     <a href="pages/apps/chat.html">
                        <i class="icofont-automation"></i>
                        <span class="link-title">General Setting</span>
                     </a>
                  </li>
                  <li class="nav-category">admins</li>
                 
                  <li>
                     <a href="pages/apps/chat.html">
                        <i class="icofont-contacts"></i>
                        <span class="link-title">Admin List</span>
                     </a>
                  </li>
                  {{-- <li>
                     <a href="#">
                        <i class="icofont-listing-box"></i>
                        <span class="link-title">To Do List</span>
                     </a>

                     <!-- Sub Menu -->
                     <ul class="nav sub-menu">
                        <li><a href="pages/apps/todolist/todolist.html">Tasks</a></li>
                        <li><a href="pages/apps/todolist/add-new.html">add new</a></li>
                        <li><a href="pages/apps/todolist/task-details.html">details</a></li>
                     </ul>
                     <!-- End Sub Menu -->
                  </li> --}}
                 

                  <li class="nav-category">Support</li>
               </ul>
               <!-- End Nav -->
            </div>
            <!-- End Sidebar Body -->
         </nav>
         <!-- End Sidebar -->

         <!-- Main Content -->
         <div class="main-content">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-4 col-md-8">
                     <!-- Card -->
                     <div class="card mb-30">
                        <div class="card-body">
                           <div class="d-flex align-items-center justify-content-between">
                              <div class="increase">
                                 <div class="card-title d-flex align-items-end mb-2">
                                    <h2>86<sup>%</sup></h2>
                                    <p class="font-14">Increased</p>
                                 </div>
                                 <h3 class="card-subtitle mb-2">Congratulation!</h3>
                                 <p class="font-16">You've finished all of your tasks for this week.</p>
                              </div>
                              <div class="congratulation-img">
                                 <img src="{{ asset('template/backend') }}/assets/img/media/congratulation-img.png" alt="">
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End Card -->
                  </div>

                  <div class="col-xl-2 col-md-4 col-sm-6">
                     <!-- Card -->
                     <div class="card area-chart-box mb-30">
                        <div class="card-body">
                           <div class="d-flex justify-content-between">
                              <div class="">
                                 <h4 class="mb-1">Income</h4>
                                 <p class="font-14 c3">Increase in Average</p>
                              </div>
                              <div class="">
                                 <h2>50<sup>%</sup></h2>
                              </div>
                           </div>
                        </div>
                        <div id="apex_area-chart" class="chart"></div>
                     </div>
                     <!-- End Card -->
                  </div>

                  <div class="col-xl-2 col-md-4 col-sm-6">
                     <!-- Card -->
                     <div class="card area-chart-box mb-30">
                        <div class="card-body">
                           <div class="d-flex justify-content-between">
                              <div class="">
                                 <h4 class="mb-1">Profit Report</h4>
                                 <p class="font-14 soft-pink">Decrease in Average</p>
                              </div>
                              <div class="">
                                 <h2>15<sup>%</sup></h2>
                              </div>
                           </div>
                        </div>
                        <div id="apex_area2-chart" class="chart"></div>
                     </div>
                     <!-- End Card -->
                  </div>
                     
                  <div class="col-xl-2 col-md-4 col-sm-6">
                     <!-- Card -->
                     <div class="card area-chart-box mb-30">
                        <div class="card-body">
                           <div class="">
                              <h4 class="mb-1">Impression</h4>
                              <p class="font-14 text_color">Hover to see detail</p>
                           </div>
                        </div>
                        <div id="apex_area3-chart" class="chart"></div>
                     </div>
                     <!-- End Card -->
                  </div>
                     
                  <div class="col-xl-2 col-md-4 col-sm-6">
                     <!-- Card -->
                     <div class="card area-chart-box mb-30">
                        <div class="card-body">
                           <div class="">
                              <h4 class="mb-1">Activity</h4>
                              <p class="font-14 text_color">Hover to see detail</p>
                           </div>
                        </div>
                        <div id="apex_area4-chart" class="chart"></div>
                     </div>
                     <!-- End Card -->
                  </div>
               </div>

               <div class="row">
                  <div class="col-xl-6 col-lg-12">
                     <div class="row">
                        <div class="col-12">
                           <!-- Card -->
                           <div class="card mb-30">
                              <div class="card-body d-flex justify-content-between mb-n72">
                                 <div class="position-relative index-9">
                                    <h4 class="mb-1">Website Analytics</h4>
                                    <p class="font-14">Check out each column for more details</p>
                                 </div>

                                 <!-- Dropdown Button -->
                                 <div class="dropdown-button">
                                    <a href="#" class="d-flex align-items-center" data-toggle="dropdown">
                                       <div class="menu-icon style--two mr-0">
                                          <span></span>
                                          <span></span>
                                          <span></span>
                                       </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                       <a href="#">Daily</a>
                                       <a href="#">Sort By</a>
                                       <a href="#">Monthly</a>
                                    </div>
                                 </div>
                                 <!-- End Dropdown Button -->

                              </div>
                              <div id="apex_column-chart" class="chart"></div>
                           </div>
                           <!-- End Card -->
                        </div>
                        <div class="col-md-4 col-sm-6">
                           <!-- Card -->
                           <div class="card mb-30 progress_1">
                              <div class="card-body">
                                 <h4 class="progress-title">Registrations</h4>
      
                                 <div class="ProgressBar-wrap position-relative mb-4">
                                    <div class="ProgressBar ProgressBar_1" data-progress="75">
                                       <svg class="ProgressBar-contentCircle" viewBox="0 0 200 200">
                                          <!-- on défini le l'angle et le centre de rotation du cercle -->
                                          <circle transform="rotate(135, 100, 100)" class="ProgressBar-background" cx="100" cy="100" r="8" />
                                          <circle transform="rotate(135, 100, 100)" class="ProgressBar-circle" cx="100" cy="100" r="85" />
                                       </svg>
                                       <span class="ProgressBar-percentage--text">
                                          Increase
                                       </span>
                                       <span class="ProgressBar-percentage ProgressBar-percentage--count"></span>
                                    </div>
                                 </div>
      
                                 <div class="d-flex flex-wrap mb-2 progress-info">
                                    <div>Users</div>
                                    <div><img src="{{ asset('template/backend') }}/assets/img/svg/caret-up.svg" alt="" class="svg"> 2.6k</div>
                                    <div><img src="{{ asset('template/backend') }}/assets/img/svg/caret-down.svg" alt="" class="svg">568</div>
                                 </div>
      
                                 
                                 <div class="d-flex flex-wrap progress-info">
                                    <div>Disabled</div>
                                    <div><img src="{{ asset('template/backend') }}/assets/img/svg/caret-up.svg" alt="" class="svg">1.26k</div>
                                    <div><img src="{{ asset('template/backend') }}/assets/img/svg/caret-down.svg" alt="" class="svg">25</div>
                                 </div>
                              </div>
                           </div>
                           <!-- End Card -->
                        </div>
      
                        <div class="col-md-4 col-sm-6">
                           <!-- Card -->
                           <div class="card mb-30 progress_2">
                              <div class="card-body">
                                 <h4 class="progress-title">Sales</h4>
      
                                 <div class="ProgressBar-wrap position-relative mb-4">
                                    <div class="ProgressBar ProgressBar_2" data-progress="35">
                                       <svg class="ProgressBar-contentCircle" viewBox="0 0 200 200">
                                          <!-- on défini le l'angle et le centre de rotation du cercle -->
                                          <circle transform="rotate(135, 100, 100)" class="ProgressBar-background" cx="100" cy="100" r="85" />
                                          <circle transform="rotate(135, 100, 100)" class="ProgressBar-circle" cx="100" cy="100" r="85" />
                                       </svg>
                                       <span class="ProgressBar-percentage--text">Increase</span>
                                       <span class="ProgressBar-percentage ProgressBar-percentage--count"></span>
                                    </div>
                                 </div>
      
                                 <div class="d-flex flex-wrap mb-2 progress-info">
                                    <div>Net Profit</div>
                                    <div><img src="{{ asset('template/backend') }}/assets/img/svg/caret-up.svg" alt="" class="svg"> 268k</div>
                                    <div><img src="{{ asset('template/backend') }}/assets/img/svg/caret-down.svg" alt="" class="svg">89k</div>
                                 </div>
      
                                 
                                 <div class="d-flex flex-wrap progress-info">
                                    <div>Expenses</div>
                                    <div><img src="{{ asset('template/backend') }}/assets/img/svg/caret-up.svg" alt="" class="svg">1.26k</div>
                                    <div><img src="{{ asset('template/backend') }}/assets/img/svg/caret-down.svg" alt="" class="svg">1.5k</div>
                                 </div>
                              </div>
                           </div>
                           <!-- End Card -->
                        </div>
      
                        <div class="col-md-4 col-sm-6">
                           <!-- Card -->
                           <div class="card mb-30 progress_3 mr-0">
                              <div class="card-body">
                                 <h4 class="progress-title">Company Growth</h4>
      
                                 <div class="ProgressBar-wrap position-relative mb-4">
                                    <div class="ProgressBar ProgressBar_3" data-progress="70">
                                       <svg class="ProgressBar-contentCircle" viewBox="0 0 200 200">
                                          <!-- on défini le l'angle et le centre de rotation du cercle -->
                                          <circle transform="rotate(135, 100, 100)" class="ProgressBar-background" cx="100" cy="100" r="85" stroke-width="20" />
                                          <circle transform="rotate(135, 100, 100)" class="ProgressBar-circle" cx="100" cy="100" r="85" stroke-width="20" />
                                       </svg>
                                       <span class="ProgressBar-percentage--text"> Increase </span>
                                       <span class="ProgressBar-percentage ProgressBar-percentage--count"></span>
                                    </div>
                                 </div>
      
                                 <div class="d-flex flex-wrap mb-2 progress-info">
                                    <div>Employee</div>
                                    <div><img src="{{ asset('template/backend') }}/assets/img/svg/caret-up.svg" alt="" class="svg">15</div>
                                    <div><img src="{{ asset('template/backend') }}/assets/img/svg/caret-down.svg" alt="" class="svg">3</div>
                                 </div>
      
                                 
                                 <div class="d-flex flex-wrap progress-info">
                                    <div>Production</div>
                                    <div><img src="{{ asset('template/backend') }}/assets/img/svg/caret-up.svg" alt="" class="svg">1.26k</div>
                                    <div><img src="{{ asset('template/backend') }}/assets/img/svg/caret-down.svg" alt="" class="svg">1.2k</div>
                                 </div>
                              </div>
                           </div>
                           <!-- End Card -->
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-12">
                     <div class="row">
                        <div class="col-sm-6">
                           <!-- Card -->
                           <div class="card mb-30">
                              <div class="card-body">
                                 <div id="apex_line-chart" class="chart"></div>
      
                                 <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div class="">
                                       <h4 class="mb-1">Website Analytics</h4>
                                       <p class="font-14">Check out each column for more details</p>
                                    </div>
      
                                    <div class="dropdown-button">
                                       <a href="#" class="d-flex align-items-center" data-toggle="dropdown">
                                          <div class="menu-icon justify-content-end pb-1 style--two mr-0">
                                             <span></span>
                                             <span></span>
                                             <span></span>
                                          </div>
                                       </a>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a href="#">Daily</a>
                                          <a href="#">Sort By</a>
                                          <a href="#">Monthly</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- End Card -->
                        </div>
      
                        <div class="col-sm-6">
                           <!-- Card -->
                           <div class="card mb-30">
                              <div class="card-body">
                                 <div id="apex_line2-chart" class="chart"></div>
      
                                 <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div class="">
                                       <h4 class="mb-1">Company Growth</h4>
                                       <p class="font-14">Company is growing 20% in average</p>
                                    </div>
      
                                    <div class="dropdown-button">
                                       <a href="#" class="d-flex align-items-center" data-toggle="dropdown">
                                          <div class="menu-icon justify-content-end pb-1 style--two mr-0">
                                             <span></span>
                                             <span></span>
                                             <span></span>
                                          </div>
                                       </a>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a href="#">Daily</a>
                                          <a href="#">Sort By</a>
                                          <a href="#">Monthly</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- End Card -->
                        </div>

                        <div class="col-12">
                           <!-- Card -->
                           <div class="card todo-list mb-30">
                              <div class="card-body p-0">
                                 <!-- Todo Single -->
                                 <div class="single-row border-bottom pt-3 pb-2">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                       <div class="">
                                          <h4 class="card-title">Today To Do List</h4>
                                          <p class="card-text font-14 bold">Saturday, <br />
                                             12 October 2019</p>
                                       </div>
      
                                       <div class="d-flex align-items-center">
                                          <a href="pages/apps/todolist/add-new.html" class="btn-circle">
                                             <img src="{{ asset('template/backend') }}/assets/img/svg/plus_white.svg" alt="" class="svg">
                                          </a>
      
                                          <div class="dropdown-button">
                                             <a href="#" class="d-flex align-items-center" data-toggle="dropdown">
                                                <div class="menu-icon style--two justify-content-center mr-0">
                                                   <span></span>
                                                   <span></span>
                                                   <span></span>
                                                </div>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#">Daily</a>
                                                <a href="#">Sort By</a>
                                                <a href="#">Monthly</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- End Todo Single -->
                                 
                                 <!-- Todo Single -->
                                 <div class="single-row border-bottom pt-3 pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                       <div class="d-flex position-relative">
                                          <!-- Custom Checkbox -->
                                          <label class="custom-checkbox">
                                             <input type="checkbox" checked>
                                             <span class="checkmark"></span>
                                          </label>
                                          <!-- End Custom Checkbox -->
      
                                          <!-- Todo Text -->
                                          <div class="todo-text line-through">
                                             <p class="card-text mb-1">For detracty charmed add talking age. Shy resolution instrument unreserved man few.</p>
                                             <p class="text-warning font-12 mb-0">Urgent Not Important</p>
                                          </div>
                                          <!-- End Todo Text -->
                                       </div>
         
                                       <div class="d-flex">
                                          <!-- Assign To -->
                                          <div class="assign_to">
                                             <img src="{{ asset('template/backend') }}/assets/img/svg/Info.svg" alt="" class="svg mr-2 mb-1">
                                             <div class="assign-content">
                                                <div class="font-12 text-warning">Back-End</div>
                                                <img src="{{ asset('template/backend') }}/assets/img/avatar/info-avatar.png" alt="" class="assign-avatar">
                                             </div>
                                          </div>
                                          <!-- End Assign To -->
      
                                          <!-- Drag Icon -->
                                          <img src="{{ asset('template/backend') }}/assets/img/svg/dragicon.svg" alt="" class="svg">
                                          <!-- End Drag Icon -->
         
                                          <!-- Dropdown Button -->
                                          <div class="dropdown-button">
                                             <a href="#" class="d-flex align-items-center" data-toggle="dropdown">
                                                <div class="menu-icon style--two w-14 mr-0">
                                                   <span></span>
                                                   <span></span>
                                                   <span></span>
                                                </div>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#">Daily</a>
                                                <a href="#">Sort By</a>
                                                <a href="#">Monthly</a>
                                             </div>
                                          </div>
                                          <!-- End Dropdown Button -->
                                       </div>
                                    </div>
                                 </div>
                                 <!-- End Todo Single -->
      
                                 <!-- Todo Single -->
                                 <div class="single-row border-bottom pt-3 pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                       <div class="d-flex position-relative">
                                          <!-- Custom Checkbox -->
                                          <label class="custom-checkbox">
                                             <input type="checkbox">
                                             <span class="checkmark"></span>
                                          </label>
                                          <!-- End Custom Checkbox -->
      
                                          <!-- Todo Text -->
                                          <div class="todo-text">
                                             <p class="card-text mb-1">Way sentiments two indulgence uncommonly own.</p>
                                             <p class="text-danger font-12 mb-0">Urgent And Important</p>
                                          </div>
                                          <!-- End Todo Text -->
                                       </div>
         
                                       <div class="d-flex">
                                          <!-- Assign To -->
                                          <div class="assign_to">
                                             <img src="{{ asset('template/backend') }}/assets/img/svg/Info.svg" alt="" class="svg mr-2 mb-1">
                                             <div class="assign-content">
                                                <div class="font-12 text-warning">Back-End</div>
                                                <img src="{{ asset('template/backend') }}/assets/img/avatar/info-avatar.png" alt="" class="assign-avatar">
                                             </div>
                                          </div>
                                          <!-- End Assign To -->
      
                                          <!-- Drag Icon -->
                                          <img src="{{ asset('template/backend') }}/assets/img/svg/dragicon.svg" alt="" class="svg">
                                          <!-- End Drag Icon -->
         
                                          <!-- Dropdown Button -->
                                          <div class="dropdown-button">
                                             <a href="#" class="d-flex align-items-center" data-toggle="dropdown">
                                                <div class="menu-icon style--two w-14 mr-0">
                                                   <span></span>
                                                   <span></span>
                                                   <span></span>
                                                </div>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#">Daily</a>
                                                <a href="#">Sort By</a>
                                                <a href="#">Monthly</a>
                                             </div>
                                          </div>
                                          <!-- End Dropdown Button -->
                                       </div>
                                    </div>
                                 </div>
                                 <!-- End Todo Single -->
                                 
                                 <!-- Todo Single -->
                                 <div class="single-row border-bottom pt-3 pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                       <div class="d-flex position-relative">
                                          <!-- Custom Checkbox -->
                                          <label class="custom-checkbox">
                                             <input type="checkbox">
                                             <span class="checkmark"></span>
                                          </label>
                                          <!-- End Custom Checkbox -->
      
                                          <!-- Todo Text -->
                                          <div class="todo-text">
                                             <p class="card-text mb-1">Donec dapibus mauris id odio ornare tempus amet.</p>
                                             <p class="text-success font-12 mb-0">Not Urgent Or Important</p>
                                          </div>
                                          <!-- End Todo Text -->
                                       </div>
         
                                       <div class="d-flex">
                                          <!-- Assign To -->
                                          <div class="assign_to">
                                             <img src="{{ asset('template/backend') }}/assets/img/svg/Info.svg" alt="" class="svg mr-2 mb-1">
                                             <div class="assign-content">
                                                <div class="font-12 text-warning">Back-End</div>
                                                <img src="{{ asset('template/backend') }}/assets/img/avatar/info-avatar.png" alt="" class="assign-avatar">
                                             </div>
                                          </div>
                                          <!-- End Assign To -->
      
                                          <!-- Drag Icon -->
                                          <img src="{{ asset('template/backend') }}/assets/img/svg/dragicon.svg" alt="" class="svg">
                                          <!-- End Drag Icon -->
         
                                          <!-- Dropdown Button -->
                                          <div class="dropdown-button">
                                             <a href="#" class="d-flex align-items-center" data-toggle="dropdown">
                                                <div class="menu-icon style--two w-14 mr-0">
                                                   <span></span>
                                                   <span></span>
                                                   <span></span>
                                                </div>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#">Daily</a>
                                                <a href="#">Sort By</a>
                                                <a href="#">Monthly</a>
                                             </div>
                                          </div>
                                          <!-- End Dropdown Button -->
                                       </div>
                                    </div>
                                 </div>
                                 <!-- End Todo Single -->
                                 
                                 <!-- Todo Single -->
                                 <div class="single-row border-bottom pt-3 pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                       <div class="d-flex position-relative">
                                          <!-- Custom Checkbox -->
                                          <label class="custom-checkbox">
                                             <input type="checkbox">
                                             <span class="checkmark"></span>
                                          </label>
                                          <!-- End Custom Checkbox -->
      
                                          <!-- Todo Text -->
                                          <div class="todo-text">
                                             <p class="card-text mb-1">For detracty charmed add talking age. Shy resolution instrument unreserved man few.</p>
                                             <p class="text-info font-12 mb-0">Urgent Not Important</p>
                                          </div>
                                          <!-- End Todo Text -->
                                       </div>
         
                                       <div class="d-flex">
                                          <!-- Drag Icon -->
                                          <img src="{{ asset('template/backend') }}/assets/img/svg/dragicon.svg" alt="" class="svg mr-2">
                                          <!-- End Drag Icon -->
                                          <!-- Assign To -->
                                          <div class="assign_to">
                                             <img src="{{ asset('template/backend') }}/assets/img/svg/Info.svg" alt="" class="svg mb-1">
                                          </div>
                                          <!-- End Assign To -->
         
                                          <!-- Dropdown Button -->
                                          <div class="dropdown-button">
                                             <a href="#" class="d-flex align-items-center" data-toggle="dropdown">
                                                <div class="menu-icon style--two w-14 mr-0">
                                                   <span></span>
                                                   <span></span>
                                                   <span></span>
                                                </div>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#">Daily</a>
                                                <a href="#">Sort By</a>
                                                <a href="#">Monthly</a>
                                             </div>
                                          </div>
                                          <!-- End Dropdown Button -->
                                       </div>
                                    </div>
                                 </div>
                                 <!-- End Todo Single -->
                                 
                                 <!-- Todo Single -->
                                 <div class="single-row pb-3 pt-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                       <div class="d-flex position-relative">
                                          <!-- Custom Checkbox -->
                                          <label class="custom-checkbox">
                                             <input type="checkbox">
                                             <span class="checkmark"></span>
                                          </label>
                                          <!-- End Custom Checkbox -->
      
                                          <!-- Todo Text -->
                                          <div class="todo-text">
                                             <p class="card-text mb-1">Way sentiments two indulgence uncommonly own.</p>
                                             <p class="text-warning font-12 mb-0">Urgent Not Important</p>
                                          </div>
                                          <!-- End Todo Text -->
                                       </div>
         
                                       <div class="d-flex">
                                          <!-- Drag Icon -->
                                          <img src="{{ asset('template/backend') }}/assets/img/svg/dragicon.svg" alt="" class="svg mr-2">
                                          <!-- End Drag Icon -->
                                          <!-- Assign To -->
                                          <div class="assign_to">
                                             <img src="{{ asset('template/backend') }}/assets/img/svg/Info.svg" alt="" class="svg mb-1">
                                          </div>
                                          <!-- End Assign To -->
         
                                          <!-- Dropdown Button -->
                                          <div class="dropdown-button">
                                             <a href="#" class="d-flex align-items-center" data-toggle="dropdown">
                                                <div class="menu-icon style--two w-14 mr-0">
                                                   <span></span>
                                                   <span></span>
                                                   <span></span>
                                                </div>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#">Daily</a>
                                                <a href="#">Sort By</a>
                                                <a href="#">Monthly</a>
                                             </div>
                                          </div>
                                          <!-- End Dropdown Button -->
                                       </div>
                                    </div>
                                 </div>
                                 <!-- End Todo Single -->
                              </div>
                           </div>
                           <!-- End Card -->
                        </div>
                     </div>
                  </div>
               </div>
               
               <div class="row">
                  <div class="col-xl-3 col-md-5">
                     <!-- Card -->
                     <div class="card mb-30">
                        <div class="card-body">
                           <div class="mb-40 d-none">
                              <h4 class="mb-2">Cloud Storage</h4>
                              <p class="font-14">72% space used</p>
                           </div>
                           <div id="apex_radar-chart" class="chart"></div>

                           <div class="upgrade_storage-btn mt-2">
                              <a href="#" class="btn d-block">Upgrade Storage</a>
                           </div>
                        </div>
                     </div>
                     <!-- End Card -->
                  </div>
                  <div class="col-xl-4 col-md-7">
                     <!-- Card -->
                     <div class="card mb-30">
                        <div class="card-body">
                           <div class="row align-items-end">
                              <div class="col-5 col-sm-6 col-lg-5">
                                 <div id="apex_column2-chart" class="chart"></div>
                              </div>
                              <div class="col-7 col-sm-6 col-lg-7">
                                 <div class="">
                                    <h4 class="mb-2">Registration</h4>
                                    <p>Pellentesque tincidunt tristique neque, eget venenatis enim gravida.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End Card -->

                     <!-- Card -->
                     <div class="card mb-30">
                        <div class="card-body">
                           <div class="row align-items-end">
                              <div class="col-5 col-sm-6 col-lg-5">
                                 <div id="apex_column3-chart" class="chart"></div>
                              </div>
                              <div class="col-7 col-sm-6 col-lg-7">
                                 <div class="">
                                    <h4 class="mb-2">Activity</h4>
                                    <p>Pellentesque tincidunt tristique neque, eget venenatis enim gravida.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End Card -->

                     <!-- Card -->
                     <div class="card mb-30">
                        <div class="card-body">
                           <div class="row align-items-end">
                              <div class="col-5 col-sm-6 col-lg-5">
                                 <div id="apex_column4-chart" class="chart"></div>
                              </div>
                              <div class="col-7 col-sm-6 col-lg-7">
                                 <div class="">
                                    <h4 class="mb-2">Completed Task</h4>
                                    <p>Pellentesque tincidunt tristique neque, eget venenatis enim gravida.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End Card -->

                     <!-- Card -->
                     <div class="card mb-30">
                        <div class="card-body">
                           <div class="row align-items-end">
                              <div class="col-6">
                                 <div class="d-flex justify-content-start">
                                    <div class="ProgressBar-wrap2 position-relative">
                                       <div class="ProgressBar ProgressBar_4" data-progress="67">
                                          <svg class="ProgressBar-contentCircle" viewBox="0 0 200 200">
                                             <!-- on défini le l'angle et le centre de rotation du cercle -->
                                             <circle transform="rotate(-90, 100, 100)" class="ProgressBar-background" cx="100" cy="100" r="85" />
                                             <circle transform="rotate(-90, 100, 100)" class="ProgressBar-circle" cx="100" cy="100" r="85" />
                                          </svg>
                                          <span class="ProgressBar-percentage ProgressBar-percentage--count"></span>
                                          <span class="ProgressBar-percentage--text">Bounce Rate</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-6">
                                 <div class="d-flex justify-content-start progress_5">
                                    <div class="ProgressBar-wrap2 position-relative">
                                       <div class="ProgressBar ProgressBar_5" data-progress="48">
                                          <svg class="ProgressBar-contentCircle" viewBox="0 0 200 200">
                                             <!-- on défini le l'angle et le centre de rotation du cercle -->
                                             <circle transform="rotate(-90, 100, 100)" class="ProgressBar-background" cx="100" cy="100" r="85" />
                                             <circle transform="rotate(-90, 100, 100)" class="ProgressBar-circle" cx="100" cy="100" r="85" />
                                          </svg>
                                          <span class="ProgressBar-percentage ProgressBar-percentage--count style--two"></span>
                                          <span class="ProgressBar-percentage--text">Conversion</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End Card -->
                  </div>
                  <div class="col-xl-5">
                     <!-- Card -->
                     <div class="card mb-30">
                        <div class="card-body">
                           <div class="mb-1">
                              <h4 class="mb-2">Analytics</h4>
                              <p class="pt-1">Nunc scelerisque tincidunt elit. Vestibulum non mi ipsum. Cras pretium suscipit tellus sit amet aliquet. Vestibulum maximus lacinia massa non porttitor. </p>
                           </div>

                           <div id="apex_bar-chart" class="chart"></div>
                        </div>
                     </div>
                     <!-- End Card -->
                  </div>
                  <div class="col-xl-12">
                     <!-- Card -->
                     <div class="card">
                        <div class="card-body">
                           <div class="d-flex justify-content-start justify-content-sm-between align-items-start align-items-sm-center flex-column flex-sm-row mb-sm-n3">
                              <div class="title-content mb-4 mb-sm-0">
                                 <h4 class="mb-2">Sale Reports</h4>
                                 <p>Solicitude announcing as to sufficient my</p>
                              </div>
                              <div class="">
                                 <ul class="list-inline list-button m-0">
                                    <li>2015</li>
                                    <li>2016</li>
                                    <li>2017</li>
                                    <li>2018</li>
                                    <li class="active">2019</li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div id="apex_line3-chart" class="chart"></div>
                     </div>
                     <!-- End Card -->
                  </div>
               </div>
            </div>
         </div>
         <!-- End Main Content -->
      </div>
      <!-- End Main Wrapper -->

      <!-- Footer -->
      <footer class="footer">
         Dashmin © 2020 created by <a href="https://www.themelooks.com/"> ThemeLooks</a>
      </footer>
      <!-- End Footer -->
   </div>
   <!-- End wrapper -->

   <!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->
   <script src="{{ asset('template/backend') }}/assets/js/jquery.min.js"></script>
   <script src="{{ asset('template/backend') }}/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="{{ asset('template/backend') }}/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
   <script src="{{ asset('template/backend') }}/assets/js/script.js"></script>
   <!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->

   <!-- ======= BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
   <script src="{{ asset('template/backend') }}/assets/plugins/apex/apexcharts.min.js"></script>
   <script src="{{ asset('template/backend') }}/assets/plugins/apex/custom-apexcharts.js"></script>
   <!-- ======= End BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
</body>

</html>