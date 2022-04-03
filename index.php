<?php
   //include auth_session.php file on all user panel pages
   include("auth_session.php");
   ?>
<?php 
   if (!isset($_SESSION['username'])) {
   	$_SESSION['msg'] = "You must log in first";
   	header('location: login.php');
   }
   
   if (isset($_GET['logout'])) {
   	session_destroy();
   	unset($_SESSION['username']);
   	header("location: login.php");
   }
   
   ?>
<?php  
   $url = "https://bitpay.com/api/rates";
   
   $json = file_get_contents($url);
   $data = json_decode($json, TRUE);
   
   $rate = $data[2]["rate"];   //$data[1] is outdated now, they have updated their json order. This new number 2 now fetches USD price. 
   $usd_price = 10;     # Let cost of elephant be 10$
   $bitcoin_price = round( $usd_price / $rate , 8 );
   ?>
<!doctype html>
<html lang="en" class="no-focus">
   <head>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <title>Verified Shop Spam Tools</title>
      <!-- Icons -->
      <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
      <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
      <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
      <!-- END Icons -->
      <!-- Stylesheets -->
      <!-- Fonts and Codebase framework -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
      <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
      <!-- END Stylesheets -->
   </head>
   <body>
      <div id="page-container" class="sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed page-header-modern main-content-boxed">
         <!-- Side Overlay-->
         <aside id="side-overlay">
            <!-- Side Header -->
            <div class="content-header content-header-fullrow">
               <div class="content-header-section align-parent">
                  <!-- Close Side Overlay -->
                  <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                  <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                  <i class="fa fa-times text-danger"></i>
                  </button>
                  <!-- END Close Side Overlay -->
                  <!-- User Info -->
                  <div class="content-header-item">
                     <a class="img-link mr-5" href="be_pages_generic_profile.html">
                     <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
                     </a>
                     <a class="align-middle link-effect text-primary-dark font-w600" href="be_pages_generic_profile.html"><?php echo $_SESSION['username']; ?></a>
                  </div>
                  <!-- END User Info -->
               </div>
            </div>
            <!-- END Side Header -->
         </aside>
         <!-- END Side Overlay -->
         <nav id="sidebar">
            <!-- Sidebar Content -->
            <div class="sidebar-content">
               <!-- Side Header -->
               <div class="content-header content-header-fullrow px-15">
                  <!-- Mini Mode -->
                  <div class="content-header-section sidebar-mini-visible-b">
                     <!-- Logo -->
                     <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                     <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                     </span>
                     <!-- END Logo -->
                  </div>
                  <!-- END Mini Mode -->
                  <!-- Normal Mode -->
                  <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                     <!-- Close Sidebar, Visible only on mobile screens -->
                     <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                     <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                     <i class="fa fa-times text-danger"></i>
                     </button>
                     <!-- END Close Sidebar -->
                     <!-- Logo -->
                     <div class="content-header-item">
                        <a class="link-effect font-w700" href="index.php">
                        <i class="si si-fire text-primary"></i>
                        <span class="font-size-xl text-dual-primary-dark">Spam</span><span class="font-size-xl text-primary">ToolZ</span>
                        </a>
                     </div>
                     <!-- END Logo -->
                  </div>
                  <!-- END Normal Mode -->
               </div>
               <!-- END Side Header -->
               <!-- Side User -->
               <div class="content-side content-side-full content-side-user px-10 align-parent">
                  <!-- Visible only in mini mode -->
                  <div class="sidebar-mini-visible-b align-v animated fadeIn">
                     <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
                  </div>
                  <!-- END Visible only in mini mode -->
                  <!-- Visible only in normal mode -->
                  <div class="sidebar-mini-hidden-b text-center">
                     <a class="img-link" href="profile.php">
                     <img class="img-avatar" src="assets/media/avatars/avatar15.jpg" alt="">
                     </a>
                     <ul class="list-inline mt-10">
                        <li class="list-inline-item">
                           <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="profile.php"><?php echo $_SESSION['username']; ?></a>
                        </li>
                        <li class="list-inline-item">
                           <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                           <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                           <i class="si si-drop"></i>
                           </a>
                        </li>
                        <li class="list-inline-item">
                           <a onclick="return confirm('Are you sure to logout?');" class="link-effect text-dual-primary-dark" href="logout.php">
                           <i class="si si-logout"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <!-- END Visible only in normal mode -->
               </div>
               <!-- END Side User -->
               <!-- Side Navigation -->
               <div class="content-side content-side-full">
                  <ul class="nav-main">
                     <li class="open">
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-home"></i><span class="sidebar-mini-hide">Main Navigation</span></a>
                        <ul>
                           <li>
                              <a class="active" href="index.php"><span class="sidebar-mini-hide"><i class="si si-home"></i> Dashboard</span></a>
                           </li>
                           <li>
                              <a href="rules.php"><span class="sidebar-mini-hide"><i class="fa fa-edit"></i> Rules</span></a>
                           </li>
                           <li>
                              <a  href="profile.php"><span class="sidebar-mini-hide"><i class="fa fa-key"></i> Profile Settings</span></a>
                           </li>
                           <li>
                              <a  href="add.php"><span class="sidebar-mini-hide"><i class="fa fa-money"></i> Balance</span></a>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-basket"></i><span class="sidebar-mini-hide">Stuff</span></a>
                        <ul>
                           <li>
                              <a  href="cpanel.php"><span class="sidebar-mini-hide"><i class="si si-rocket"></i> Cpanels</span></a>
                           </li>
                           <li>
                              <a  href="shell.php"><span class="sidebar-mini-hide"><i class="si si-ghost"></i> Shells</span></a>
                           </li>
                           <li>
                              <a  href="ssh.php"><span class="sidebar-mini-hide"><i class="si si-settings"></i> SSH/WHM</span></a>
                           </li>
                           <li>
                              <a  href="smtp.php"><span class="sidebar-mini-hide"><i class="fa fa-inbox"></i> SMTP</span></a>
                           </li>
                           <li>
                              <a  href="mailer.php"><span class="sidebar-mini-hide"><i class="si si-envelope"></i> Mailers</span></a>
                           </li>
                           <li>
                              <a  href="webmail.php"><span class="sidebar-mini-hide"><i class="si si-envelope-letter"></i> Webmail</span></a>
                           </li>
                           <li>
                              <a  href="leads.php"><span class="sidebar-mini-hide"><i class="fa fa-group"></i> Leads</span></a>
                           </li>
                           <li>
                              <a  href="account.php"><span class="sidebar-mini-hide"><i class="si si-lock-open"></i> Accounts</span></a>
                           </li>
                           <li>
                              <a  href="rdp.php"><span class="sidebar-mini-hide"><i class="si si-screen-desktop"></i> RDP</span></a>
                           </li>
                           <li>
                              <a  href="stuff.php"><span class="sidebar-mini-hide"><i class="si si-shuffle"></i> Others</span></a>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-credit-card"></i><span class="sidebar-mini-hide">Cards</span></a>
                        <ul>
                           <li>
                              <a  href="cards.php"><span class="sidebar-mini-hide"><i class="si si-credit-card"></i> Cards</span></a>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-basket-loaded"></i><span class="sidebar-mini-hide">Purchased Stuff</span></a>
                        <ul>
                           <li>
                              <a  href="mystuff.php"><span class="sidebar-mini-hide"><i class="si si-shuffle"></i> MY Orders</span></a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
               <!-- END Side Navigation -->
            </div>
            <!-- Sidebar Content -->
         </nav>
         <!-- END Sidebar -->
         <!-- Header -->
         <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
               <!-- Left Section -->
               <div class="content-header-section">
                  <!-- Toggle Sidebar -->
                  <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                  <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                  <i class="fa fa-navicon"></i>
                  </button>
                  <!-- END Toggle Sidebar -->
               </div>
               <!-- END Left Section -->
               <marquee behavior="alternate" direction="right"><button type="button" onclick="location='rules.php'" class="btn btn-alt-danger min-width-125" data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;"><span class="click-ripple animate" style="height: 125px; width: 125px; top: -39.9px; left: -38.425px;"></span>Attention to new members here, Please read the <b>RULES</b> before you buy</button></marquee>
               <!-- Right Section -->
               <div class="content-header-section">
                  <!-- User Dropdown -->
                  <div class="btn-group" role="group">
                     <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="fa fa-user d-sm-none"></i>
                     <span class="d-none d-sm-inline-block"><?php echo $_SESSION['username']; ?></span>
                     <i class="fa fa-angle-down ml-5"></i>
                     </button>
                     <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                        <h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">User</h5>
                        <a class="dropdown-item" href="profile.php">
                        <i class="si si-user mr-5"></i> Profile
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="inbox.php">
                        <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                        <span class="badge badge-primary">0</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="invoices.php">
                        <span><i class="si si-note mr-5"></i> Invoices</span>
                        <span class="badge badge-primary">0</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a onclick="return confirm('Are you sure to logout?');" class="dropdown-item" href="logout.php">
                        <i class="si si-logout mr-5"></i> Sign Out
                        </a>
                     </div>
                  </div>
                  <!-- END User Dropdown -->
                  <!-- Notifications -->
                  <div class="btn-group" role="group">
                     <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="fa fa-bell"></i>
                     <span class="badge badge-primary badge-pill">0</span>
                     </button>
                     <div class="dropdown-menu dropdown-menu-right min-width-300" aria-labelledby="page-header-notifications">
                        <h5 class="h6 text-center py-10 mb-0 border-b text-uppercase">Notifications</h5>
                        <ul class="list-unstyled my-20">
                           <!---
                              <li>
                                  <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                      <div class="ml-5 mr-15">
                                          <i class="fa fa-fw fa-check text-success"></i>
                                      </div>
                                      <div class="media-body pr-10">
                                          <p class="mb-0">You’ve upgraded to a VIP account successfully!</p>
                                          <div class="text-muted font-size-sm font-italic">15 min ago</div>
                                      </div>
                                  </a>
                              </li>
                              <li>
                                  <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                      <div class="ml-5 mr-15">
                                          <i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
                                      </div>
                                      <div class="media-body pr-10">
                                          <p class="mb-0">Please check your payment info since we can’t validate them!</p>
                                          <div class="text-muted font-size-sm font-italic">50 min ago</div>
                                      </div>
                                  </a>
                              </li>
                              <li>
                                  <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                      <div class="ml-5 mr-15">
                                          <i class="fa fa-fw fa-times text-danger"></i>
                                      </div>
                                      <div class="media-body pr-10">
                                          <p class="mb-0">Web server stopped responding and it was automatically restarted!</p>
                                          <div class="text-muted font-size-sm font-italic">4 hours ago</div>
                                      </div>
                                  </a>
                              </li>
                              <li>
                                  <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                      <div class="ml-5 mr-15">
                                          <i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
                                      </div>
                                      <div class="media-body pr-10">
                                          <p class="mb-0">Please consider upgrading your plan. You are running out of space.</p>
                                          <div class="text-muted font-size-sm font-italic">16 hours ago</div>
                                      </div>
                                  </a>
                              </li>
                              <li>
                                  <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                      <div class="ml-5 mr-15">
                                          <i class="fa fa-fw fa-plus text-primary"></i>
                                      </div>
                                      <div class="media-body pr-10">
                                          <p class="mb-0">New purchases! +$250</p>
                                          <div class="text-muted font-size-sm font-italic">1 day ago</div>
                                      </div>
                                  </a>
                              </li>
                              !--->
                        </ul>
                     </div>
                  </div>
                  <!-- END Notifications -->
               </div>
               <!-- END Right Section -->
            </div>
            <!-- END Header Content -->
            <!-- Header Search -->
            <div id="page-header-search" class="overlay-header">
               <div class="content-header content-header-fullrow">
                  <form action="be_pages_generic_search.html" method="post">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <!-- Close Search Section -->
                           <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                           <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                           <i class="fa fa-times"></i>
                           </button>
                           <!-- END Close Search Section -->
                        </div>
                        <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                        <div class="input-group-append">
                           <button type="submit" class="btn btn-secondary">
                           <i class="fa fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <!-- END Header Search -->
            <!-- Header Loader -->
            <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-primary">
               <div class="content-header content-header-fullrow text-center">
                  <div class="content-header-item">
                     <i class="fa fa-sun-o fa-spin text-white"></i>
                  </div>
               </div>
            </div>
<?php

$servername = "208.109.23.206";
$username = "uuzzeeerr";
$password = "RaX147021@@";
$dbname = "ssppmm";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE tools SET tools = tools+352 WHERE id ='1'";
$result = $conn->query($sql);
?>
            <!-- END Header Loader -->
         </header>
         <!-- END Header -->
         <!-- Main Container -->
         <main id="main-container">
            <!-- Page Content -->
            <div class="content">
               <div class="row invisible" data-toggle="appear">
                  <!-- Row #1 -->
                  <div class="col-6 col-xl-3">
                     <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full clearfix">
                           <div class="float-right mt-15 d-none d-sm-block">
                              <i class="si si-bag fa-2x text-primary-light"></i>
                           </div>
                           <div class="font-size-h3 font-w600 text-primary" data-toggle="countTo" data-speed="15000" data-to="<?php $servername = "208.109.23.206"; $username = "uuzzeeerr"; $password = "RaX147021@@"; $dbname = "ssppmm"; $conn = new mysqli($servername, $username, $password, $dbname); if ($conn->connect_error) {  die("Connection failed: " . $conn->connect_error); } $username = $_SESSION['username']; $sql = "SELECT * FROM tools WHERE id='1'"; $result = $conn->query($sql); if ($result->num_rows > 0) {   while($row = $result->fetch_assoc()) {    echo "" . $row["tools"]. "";  } } ?>">0</div>
                           <div class="font-size-sm font-w600 text-uppercase text-muted">Total Stuff in Store</div>
                        </div>
                     </a>
                  </div>
                  <div class="col-6 col-xl-3">
                     <a class="block block-rounded block-bordered block-link-shadow" href="add.php">
                        <div class="block-content block-content-full clearfix">
                           <div class="float-right mt-15 d-none d-sm-block">
                              <i class="si si-wallet fa-2x text-earth-light"></i>
                           </div>
                           <div class="font-size-h3 font-w600 text-earth">$<span data-toggle="countTo" data-speed="1000" data-to="0">0</span></div>
                           <div class="font-size-sm font-w600 text-uppercase text-muted">Account Balance</div>
                        </div>
                     </a>
                  </div>
                  <div class="col-6 col-xl-3">
                     <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full clearfix">
                           <div class="float-right mt-15 d-none d-sm-block">
                              <i class="si si-clock fa-2x text-elegance-light"></i>
                           </div>
                           <div class="font-size-h3 font-w600 text-elegance"><?php echo "" . date("h:i A"); ?></div>
                           <div class="font-size-sm font-w600 text-uppercase text-muted"><?php echo "" . date("l");?>,  <?php echo "" . date("m/d/Y") ;?></div>
                        </div>
                     </a>
                  </div>
                  <div class="col-6 col-xl-3">
                     <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full clearfix">
                           <div class="float-right mt-15 d-none d-sm-block">
                              <i class="fa fa-bitcoin fa-2x text-warning"></i>
                           </div>
                           <div class="font-size-h3 font-w600 text-warning">$<span data-toggle="countTo" data-speed="3000" data-to="<?php include("test.php"); ?>">0</span></div>
                           <div class="font-size-sm font-w600 text-uppercase text-muted">Bitcoin Price</div>
                        </div>
                     </a>
                  </div>
                  <!-- END Row #1 -->
               </div>
               <div class="row invisible" data-toggle="appear">
                  <!-- Row #3 -->
                  <div class="col-md-6">
                     <div class="block block-rounded block-bordered">
                        <div class="block-header block-header-default border-b">
                           <h3 class="block-title"><i class="fa fa-newspaper-o fa-1x"></i>&nbsp;<b>News</b></h3>
                           <div class="block-options">
                              <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                              <i class="si si-refresh"></i>
                              </button>
                           </div>
                        </div>
                        <div class="block-content">
                           <button type="button" class="btn btn-sm btn-success min-width-125 js-click-ripple-enabled" data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;"><span class="click-ripple animate" style="height: 125px; width: 125px; top: -39.9px; left: 9.57495px;"></span>[03-06-2021]</button>&nbsp;<button type="button" class="btn btn-sm btn-info min-width-125 js-click-ripple-enabled" data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;" onclick="window.open('https://checker.spamtoolz.net')"><span class="click-ripple animate" style="height: 125px; width: 125px; top: -39.9px; left: 13.9px;"></span>Checker Services Launched Now, 3 days free subscription.</button>
                           </p>
                           <hr>
                           <button type="button" class="btn btn-sm btn-success min-width-125 js-click-ripple-enabled" data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;"><span class="click-ripple animate" style="height: 125px; width: 125px; top: -39.9px; left: 9.57495px;"></span>[02-17-2021]</button>&nbsp;<button type="button" class="btn btn-sm btn-info min-width-125 js-click-ripple-enabled" data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;"><span class="click-ripple animate" style="height: 125px; width: 125px; top: -39.9px; left: 13.9px;"></span>Social Media Buttons Has been Added</button>
                           </p>
                           <hr>
                           <button type="button" class="btn btn-sm btn-success min-width-125 js-click-ripple-enabled" data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;"><span class="click-ripple animate" style="height: 125px; width: 125px; top: -39.9px; left: 9.57495px;"></span>[12-07-2020]</button>&nbsp;<button type="button" class="btn btn-sm btn-info min-width-125 js-click-ripple-enabled" data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;"><span class="click-ripple animate" style="height: 125px; width: 125px; top: -39.9px; left: 13.9px;"></span>New Sellers have been accepted</button>
                           </p>
                           <hr>
                           <button type="button" class="btn btn-sm btn-success min-width-125 js-click-ripple-enabled" data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;"><span class="click-ripple animate" style="height: 125px; width: 125px; top: -39.9px; left: 9.57495px;"></span>[10-13-2020]</button>&nbsp;<button onclick="location='add.php'" type="button" class="btn btn-sm btn-info min-width-125 js-click-ripple-enabled" data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;"><span class="click-ripple animate" style="height: 125px; width: 125px; top: -39.9px; left: 13.9px;"></span>Perfect Money is Online now</button>
                           </p>
                           <hr>
                           <button type="button" class="btn btn-sm btn-success min-width-125 js-click-ripple-enabled" data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;"><span class="click-ripple animate" style="height: 125px; width: 125px; top: -39.9px; left: 9.57495px;"></span>[09-26-2020]</button>&nbsp;<button type="button" class="btn btn-sm btn-info min-width-125 js-click-ripple-enabled" data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;" onclick="window.open('https://free.spamtoolz.net')"><span class="click-ripple animate" style="height: 125px; width: 125px; top: -39.9px; left: 13.9px;"></span>Free Spam Tools</button>
                           </p>
                           <hr>
                           <button type="button" class="btn btn-sm btn-success min-width-125 js-click-ripple-enabled" data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;"><span class="click-ripple animate" style="height: 125px; width: 125px; top: -39.9px; left: 9.57495px;"></span>[09-20-2020]</button>&nbsp;<button type="button" class="btn btn-sm btn-danger min-width-125 js-click-ripple-enabled" data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;"><span class="click-ripple animate" style="height: 125px; width: 125px; top: -39.9px; left: 13.9px;"></span>Perfect Money is offline now...</button>
                           </p>
                           <hr>
                           <button type="button" class="btn btn-sm btn-success min-width-125 js-click-ripple-enabled" data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;"><span class="click-ripple animate" style="height: 125px; width: 125px; top: -39.9px; left: 9.57495px;"></span>[05-26-2020]</button>&nbsp;<button type="button" class="btn btn-sm btn-info min-width-125 js-click-ripple-enabled" data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;"><span class="click-ripple animate" style="height: 125px; width: 125px; top: -39.9px; left: 13.9px;"></span>You can now buy credit cards).</button>
                           </p>
                           <hr>
                           <button type="button" class="btn btn-sm btn-success min-width-125 js-click-ripple-enabled" data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;"><span class="click-ripple animate" style="height: 125px; width: 125px; top: -39.9px; left: 9.57495px;"></span>[04-25-2020]</button>&nbsp;<button type="button" class="btn btn-sm btn-info min-width-125 js-click-ripple-enabled" data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;"><span class="click-ripple animate" style="height: 125px; width: 125px; top: -39.9px; left: -38.425px;"></span>You can buy again now, 5$ added to all old users.</button>
                           </p>
                           <hr>
                           <button type="button" class="btn btn-sm btn-success min-width-125 js-click-ripple-enabled" data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;"><span class="click-ripple animate" style="height: 125px; width: 125px; top: -39.9px; left: 9.57495px;"></span>[04-24-2020]</button>&nbsp;<button type="button" class="btn btn-sm btn-danger min-width-125 js-click-ripple-enabled" data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;"><span class="click-ripple animate" style="height: 125px; width: 125px; top: -39.9px; left: -38.425px;"></span>You can't buy!, We are sorry....</button>
                           </p>
                           <hr>
                           <button type="button" class="btn btn-sm btn-success min-width-125 js-click-ripple-enabled" data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;"><span class="click-ripple animate" style="height: 125px; width: 125px; top: -39.9px; left: 9.57495px;"></span>[02-12-2020]</button>&nbsp;<button type="button" class="btn btn-sm btn-info min-width-125 js-click-ripple-enabled" data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;"><span class="click-ripple animate" style="height: 125px; width: 125px; top: -39.9px; left: -38.425px;"></span>New Tools Have been Added from our best seller Seller_166.</button>
                           </p>
                           <hr>
                           <button type="button" class="btn btn-sm btn-success min-width-125 js-click-ripple-enabled" data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;"><span class="click-ripple animate" style="height: 125px; width: 125px; top: -39.9px; left: 9.57495px;"></span>[01-08-2020]</button>&nbsp;<button type="button" class="btn btn-sm btn-danger min-width-125 js-click-ripple-enabled" data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;"><span class="click-ripple animate" style="height: 125px; width: 125px; top: -39.9px; left: -38.425px;"></span>Read The Rules!</button>
                           </p>
                           <hr>
                           <button type="button" class="btn btn-sm btn-success min-width-125 js-click-ripple-enabled" data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;"><span class="click-ripple animate" style="height: 125px; width: 125px; top: -39.9px; left: 9.57495px;"></span>[12-19-2019]</button>&nbsp;<button type="button" class="btn btn-sm btn-info min-width-125 js-click-ripple-enabled" data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;"><span class="click-ripple animate" style="height: 125px; width: 125px; top: -39.9px; left: -38.425px;"></span>We have updated our Design we hope you enjoy it.</button>
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="block block-rounded block-bordered">
                        <div class="block-header block-header-default border-b">
                           <h3 class="block-title"><b>Our Domains</b></h3>
                           <div class="block-options">
                              <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                              <i class="si si-refresh"></i>
                              </button>
                           </div>
                        </div>
                        <div class="block-content">
            <h6><b>Main Domain :</b> <font color="green">spamtoolz.net / spamtoolz.site</font></h6>
            <h6><b>Tor Domain :</b> <font color="#794493">spammf7lm6yeiucm.onion</font></h6>
            <h6><b>Checker Services :</b> <font color="green">checker.spamtoolz.net</font> / <font color="#794493">checker3wcw3ijhr.onion</font></h6>
            <h6><b>Free Tools :</b> <font color="green">free.spamtoolz.net</font></h6>
                                                                                   <center>
                            <a href="https://www.facebook.com/spamtoolz.net/" target="_Blank"><img alt="Facebook" src="ccimg/facebook.png"></a>
                            <a href="https://www.youtube.com/channel/UCH0-ioUo7fQj0s_pCjArTTA" target="_Blank"><img alt="YouTube" src="ccimg/youtube.png"></a>
                            <a href="https://icq.im/spamtoolz.net" target="_Blank"><img alt="ICQ" src="ccimg/icq1.png"></a>
                            <a href="https://t.me/spamtoolz_net" target="_Blank"><img alt="Telegram" src="ccimg/telegram.png"></a>
                            </center>
                            <br>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="block block-rounded block-bordered">
                        <div class="block-header block-header-default border-b">
                           <h3 class="block-title"><b>Top Sellers</b></h3>
                           <div class="block-options">
                              <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                              <i class="si si-refresh"></i>
                              </button>
                           </div>
                        </div>
                        <div class="block-content">
                           <table class="table table-borderless table-striped">
                              <table class="table table-bordered table-striped">
                                 <thead>
                                    <tr>
                                       <th>Seller Name</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td style="width:50%;"><i style="margin-center:10px;color: #f39c12;" class="fas fa-star"></i>Seller_166</td>
                                    </tr>
                                    <tr>
                                       <td style="width:50%;"><i style="margin-center:10px;color: #f39c12;" class="fas fa-star"></i>Seller_328</td>
                                    </tr>
                                    <tr>
                                       <td style="width:50%;"><i style="margin-center:10px;color: #f39c12;" class="fas fa-star"></i>Seller_227</td>
                                    </tr>
                                    <tr>
                                       <td style="width:50%;"><i style="margin-center:10px;color: #f39c12;" class="fas fa-star"></i>Seller_297</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </table>
                        </div>
                     </div>
                  </div>
                  
                  <!-- END Row #3 -->
               </div>
            </div>
            <!-- END Page Content -->
         </main>
         <!-- END Main Container -->
         <!-- Footer -->
         <center><img style="width: 120px" src="assets/media/photos/se.png"/></center>
         <hr>
         <footer id="page-footer" class="opacity-0">
            <div class="content py-20 font-size-xs clearfix">
               <div class="float-left">
                  Copyright &copy; 2017 - <span class="js-year-copy"></span> <a class="font-w600" href="#">spamtoolz.net</a>. All rights reserved.
               </div>
            </div>
         </footer>
         <!-- END Footer -->
         <?php
            $servername = "208.109.23.206";
            $username = "uuzzeeerr";
            $password = "RaX147021@@";
            $dbname = "ssppmm";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            $usernme = $_SESSION['username'];
            $sql = "SELECT * FROM users WHERE username='$usernme'";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
            $we= $row["welcome"];
                
            }
            if ($we == '0') {
            ?>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>
            <script>
$(document).ready(function(){ 
    $('.btn').click(function(){ 
        var clickBtnValue = $(this).val(); 
        var ajaxurl = 'welcome.php', 
        data =  {'action': clickBtnValue}; 
        $.post(ajaxurl, data, function (response) { 

        }); 
    }); 
 
}); 
            </script>
         <!-- Onboarding Modal functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js -->
         <div class="modal fade" id="modal-onboarding" tabindex="-1" role="dialog" aria-labelledby="modal-onboarding" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-popout" role="document">
               <div class="modal-content rounded">
                  <div class="block block-rounded block-transparent mb-0 bg-pattern" >
                     <div class="block-content block-content-full">
                        <div class="js-slider slick-dotted-inner" data-dots="true" data-arrows="false" data-infinite="false">
                           <div class="pb-50">
                              <div class="row justify-content-center text-left">
                                 <div class="col-md-10 col-lg-8">
                                    <center>
                                       <h3 class="font-size-h2 mt-20">Welcome to SpamToolz.net!</h3>
                                    </center>
                                    <p class="text-muted">
                                       We are very happy to announce that our shop is finally cleared of dead tools(+50k tools deleted),this resulted on 40% more sales and about 4% only refunded.
                                       Spamtoolz is since 2017 and we are very serious we won't let our users and sellers down.
                                       <br><br>
                                       15 support team , manual checking and verifying accounts in only few minutes , we guarantee the best quality of tools ever !
                                       <br><br>
                                       IMPORTANT: Official domains are <font color="green">SPAMTOOLZ.NET</font> & <font color="green">SPAMTOOLZ.SITE</font> , (Beware from other domains are FAKE&SCAM)
                                       <br><br>ONION(Darkweb): <font color="#794493"><b>spammf7lm6yeiucm.onion</b></font> <br><br>
                                       Everything now on store is valid and checked by our staff and will be checked every day after 24hours pass.
                                       <br><br>
                                       Regards, Spamtoolz Staff.
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="slick-slide pb-50">
                              <div class="row justify-content-center text-center">
                                 <div class="col-md-10 col-lg-8">
                                    <input type="submit" class="btn btn-sm btn-hero btn-noborder btn-success mb-10 mx-5" value="Get Started" data-dismiss="modal" aria-label="Close" >
                                    </input>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- END Onboarding Modal -->
         <?php
            }
            ?>
      </div>
      <!-- END Page Container -->
      <script src="assets/js/codebase.core.min.js"></script>
      <!--
         Codebase JS
         
         Custom functionality including Blocks/Layout API as well as other vital and optional helpers
         webpack is putting everything together at assets/_es6/main/app.js
         -->
      <script src="assets/js/codebase.app.min.js"></script>
      <!-- Page JS Plugins -->
      <script src="assets/js/plugins/chartjs/Chart.bundle.min.js"></script>
      <!-- Page JS Code -->
      <script src="assets/js/pages/be_pages_dashboard.min.js"></script>
   </body>
</html>