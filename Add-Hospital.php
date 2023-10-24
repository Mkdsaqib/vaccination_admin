<?php include 'connection\database.php' ?>

<?php




if(isset($_POST['submit'])){

   $hospital_name = $_POST['hospital_name'];
$Address = $_POST['address'];
$Email = $_POST['email'];
$URL = $_POST['url'];
$Telephone = $_POST['telephone'];
$Password = $_POST['password'];
$Description = $_POST['description'];
// $File_input = $_POST['img'];




// $user_image = $_FILES['img'];

// Get the file name and temporary file name.
$imagename = $_FILES['img']['name'];
$imagetmpname = $_FILES['img']['tmp_name'];

// Move the uploaded file to the destination directory.
move_uploaded_file($imagetmpname, "assets/images/" . $imagename);


$register_user_query = "INSERT INTO `hosp-reg`(`hospital_name`, `address`, `email`, `url`, `telephone`, `password`, `description`, `img`) VALUES (:hospital_name,:address,:email,:url,:telephone,:password,:description,:img)";
	
$register_user_query_prepare = $connection->prepare($register_user_query);
$register_user_query_prepare->bindParam('hospital_name',$hospital_name);
$register_user_query_prepare->bindParam(':address',$Address);
$register_user_query_prepare->bindParam(':email',$Email);
$register_user_query_prepare->bindParam(':url',$URL);
$register_user_query_prepare->bindParam(':telephone',$Telephone);
$register_user_query_prepare->bindParam(':password',$Password);
$register_user_query_prepare->bindParam(':description',$Description);
$register_user_query_prepare->bindParam(':img',$imagename);

$register_user_query_prepare->execute();



// Get the uploaded file information.





}


?>





<!DOCTYPE html>
<html lang="en">

<head>
   <title>ADD HOSPITAL</title>
   <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

   <!-- Meta -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="description" content="codedthemes">
   <meta name="keywords" content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
   <meta name="author" content="codedthemes">

   <!-- Favicon icon -->
   <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
   <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

   <!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

   <!-- themify -->
   <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">

   <!-- iconfont -->
   <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

   <!-- simple line icon -->
   <link rel="stylesheet" type="text/css" href="assets/icon/simple-line-icons/css/simple-line-icons.css">

   <!-- Required Fremwork -->
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/css/bootstrap.min.css">

   <!-- bash syntaxhighlighter css -->
   <link type="text/css" rel="stylesheet" href="assets/plugins/syntaxhighlighter/styles/shCoreDjango.css" />

   <!-- Style.css -->
   <link rel="stylesheet" type="text/css" href="assets/css/main.css">

   <!-- Responsive.css-->
   <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">



</head>

<body class="sidebar-mini fixed">
   <div class="wrapper">
      <div class="loader-bg">
         <div class="loader-bar">
         </div>
      </div>
      <!-- Navbar-->
      <header class="main-header-top hidden-print">
         <a href="index.html" class="logo"><img class="img-fluid able-logo" src="assets/images/logo.png" alt="Theme-logo"></a>
         <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
            <ul class="top-nav lft-nav">
               <li>
                  <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                     <i class="ti-files"> </i><span> Files</span>
                  </a>
               </li>
               <li class="dropdown">
                  <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                     <span>Dropdown </span><i class=" icofont icofont-simple-down"></i>
                  </a>
                  <ul class="dropdown-menu settings-menu">
                     <li><a href="#">List item 1</a></li>
                     <li><a href="#">List item 2</a></li>
                     <li><a href="#">List item 3</a></li>
                     <li><a href="#">List item 4</a></li>
                     <li><a href="#">List item 5</a></li>
                  </ul>
               </li>
               <li class="dropdown pc-rheader-submenu message-notification search-toggle">
                  <a href="#!" id="morphsearch-search" class="drop icon-circle txt-white">
                     <i class="ti-search"></i>
                  </a>
               </li>
            </ul>
            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu">
               <ul class="top-nav">
                  <!--Notification Menu-->
                  <li class="dropdown notification-menu">
                     <a href="#!" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                        <i class="icon-bell"></i>
                        <span class="badge badge-danger header-badge">9</span>
                     </a>
                     <ul class="dropdown-menu">
                        <li class="not-head">You have <b class="text-primary">4</b> new notifications.</li>
                        <li class="bell-notification">
                           <a href="javascript:;" class="media">
                              <span class="media-left media-icon">
                    <img class="img-circle" src="assets/images/avatar-1.png" alt="User Image">
                  </span>
                              <div class="media-body"><span class="block">Lisa sent you a mail</span><span class="text-muted block-time">2min ago</span></div>
                           </a>
                        </li>
                        <li class="bell-notification">
                           <a href="javascript:;" class="media">
                              <span class="media-left media-icon">
                    <img class="img-circle" src="assets/images/avatar-2.png" alt="User Image">
                  </span>
                              <div class="media-body"><span class="block">Server Not Working</span><span class="text-muted block-time">20min ago</span></div>
                           </a>
                        </li>
                        <li class="bell-notification">
                           <a href="javascript:;" class="media"><span class="media-left media-icon">
                    <img class="img-circle" src="assets/images/avatar-3.png" alt="User Image">
                  </span>
                                    <div class="media-body"><span class="block">Transaction xyz complete</span><span class="text-muted block-time">3 hours ago</span></div></a>
                        </li>
                        <li class="not-footer">
                           <a href="#!">See all notifications.</a>
                        </li>
                     </ul>
                  </li>
                  <!-- chat dropdown -->
                  <li class="pc-rheader-submenu ">
                     <a href="#!" class="drop icon-circle displayChatbox">
                        <i class="icon-bubbles"></i>
                        <span class="badge badge-danger header-badge">5</span>
                     </a>

                  </li>
                  <!-- window screen -->
                  <li class="pc-rheader-submenu">
                     <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                        <i class="icon-size-fullscreen"></i>
                     </a>

                  </li>
                  <!-- User Menu-->
                  <li class="dropdown">
                     <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                        <span><img class="img-circle " src="assets/images/avatar-1.png" style="width:40px;" alt="User Image"></span>
                        <span>SAQIB <b>SHEIKH</b> <i class=" icofont icofont-simple-down"></i></span>

                     </a>
                     <ul class="dropdown-menu settings-menu">
                        <li><a href="#!"><i class="icon-settings"></i> Settings</a></li>
                        <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                        <li><a href="#"><i class="icon-envelope-open"></i> My Messages</a></li>
                        <li class="p-0">
                           <div class="dropdown-divider m-0"></div>
                        </li>
                        <li><a href="#"><i class="icon-lock"></i> Lock Screen</a></li>
                        <li><a href="login1.html"><i class="icon-logout"></i> Logout</a></li>

                     </ul>
                  </li>
               </ul>

               <!-- search -->
               <div id="morphsearch" class="morphsearch">
                  <form class="morphsearch-form">

                     <input class="morphsearch-input" type="search" placeholder="Search..." />

                     <button class="morphsearch-submit" type="submit">Search</button>

                  </form>
                  <div class="morphsearch-content">
                     <div class="dummy-column">
                        <h2>People</h2>
                        <a class="dummy-media-object" href="#!">
                           <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan" />
                           <h3>Sara Soueidan</h3>
                        </a>

                        <a class="dummy-media-object" href="#!">
                           <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G" alt="Shaun Dona" />
                           <h3>Shaun Dona</h3>
                        </a>
                     </div>
                     <div class="dummy-column">
                        <h2>Popular</h2>
                        <a class="dummy-media-object" href="#!">
                           <img src="assets/images/avatar-1.png" alt="PagePreloadingEffect" />
                           <h3>Page Preloading Effect</h3>
                        </a>

                        <a class="dummy-media-object" href="#!">
                           <img src="assets/images/avatar-1.png" alt="DraggableDualViewSlideshow" />
                           <h3>Draggable Dual-View Slideshow</h3>
                        </a>
                     </div>
                     <div class="dummy-column">
                        <h2>Recent</h2>
                        <a class="dummy-media-object" href="#!">
                           <img src="assets/images/avatar-1.png" alt="TooltipStylesInspiration" />
                           <h3>Tooltip Styles Inspiration</h3>
                        </a>
                        <a class="dummy-media-object" href="#!">
                           <img src="assets/images/avatar-1.png" alt="NotificationStyles" />
                           <h3>Notification Styles Inspiration</h3>
                        </a>
                     </div>
                  </div>
                  <!-- /morphsearch-content -->
                  <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
               </div>
               <!-- search end -->
            </div>
         </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print ">
         <section class="sidebar" id="sidebar-scroll">
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
                <li class="nav-level">--- Navigation</li>
                <li class="treeview">
                    <a class="waves-effect waves-dark" href="index.html">
                        <i class="icon-speedometer"></i><span> Dashboard</span>
                    </a>                
                </li>
                <li class="nav-level">--- Components</li>
                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span> UI Elements</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i> Accordion</a></li>
                        <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i> Button</a></li>
                        <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i> Label Badge</a></li>
                        <li><a class="waves-effect waves-dark" href="bootstrap-ui.html"><i class="icon-arrow-right"></i> Grid system</a></li>
                        <li><a class="waves-effect waves-dark" href="box-shadow.html"><i class="icon-arrow-right"></i> Box Shadow</a></li>
                        <li><a class="waves-effect waves-dark" href="color.html"><i class="icon-arrow-right"></i> Color</a></li>
                        <li><a class="waves-effect waves-dark" href="light-box.html"><i class="icon-arrow-right"></i> Light Box</a></li>
                        <li><a class="waves-effect waves-dark" href="notification.html"><i class="icon-arrow-right"></i> Notification</a></li>
                        <li><a class="waves-effect waves-dark" href="panels-wells.html"><i class="icon-arrow-right"></i> Panels-Wells</a></li>
                        <li><a class="waves-effect waves-dark" href="tabs.html"><i class="icon-arrow-right"></i> Tabs</a></li>
                        <li><a class="waves-effect waves-dark" href="tooltips.html"><i class="icon-arrow-right"></i> Tooltips</a></li>
                        <li><a class="waves-effect waves-dark" href="typography.html"><i class="icon-arrow-right"></i> Typography</a></li>
                    </ul>
                </li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-chart"></i><span> Charts &amp; Maps</span><span class="label label-success menu-caption">New</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li><a class="waves-effect waves-dark" href="float-chart.html"><i class="icon-arrow-right"></i> Float Charts</a></li>
                        <li><a class="waves-effect waves-dark" href="morris-chart.html"><i class="icon-arrow-right"></i> Morris Charts</a></li>
                    </ul>
                </li>

                <li class="active treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-book-open"></i><span> Forms</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li class="active"><a class="waves-effect waves-dark" href="form-elements-bootstrap.html"><i class="icon-arrow-right"></i> Form Elements Bootstrap</a></li>
                        
                        <li><a class="waves-effect waves-dark" href="form-elements-advance.html"><i class="icon-arrow-right"></i> Form Elements Advance</a></li>
                    </ul>
                </li>
                
                <li class="treeview">
                    <a class="waves-effect waves-dark" href="basic-table.html">
                        <i class="icon-list"></i><span> Table</span>
                    </a>                
                </li>


                <li class="nav-level">--- More</li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-docs"></i><span>Pages</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li class="treeview"><a href="#!"><i class="icon-arrow-right"></i><span> Authentication</span><i class="icon-arrow-down"></i></a>
                            <ul class="treeview-menu">
                                <li><a class="waves-effect waves-dark" href="register1.html" target="_blank"><i class="icon-arrow-right"></i> Register 1</a></li>
                                
                                <li><a class="waves-effect waves-dark" href="login1.html" target="_blank"><i class="icon-arrow-right"></i><span> Login 1</span></a></li>
                                <li><a class="waves-effect waves-dark" href="forgot-password.html" target="_blank"><i class="icon-arrow-right"></i><span> Forgot Password</span></a></li>
                                
                            </ul>
                        </li>
                        
                        <li><a class="waves-effect waves-dark" href="404.html" target="_blank"><i class="icon-arrow-right"></i> Error 404</a></li>
                        <li><a class="waves-effect waves-dark" href="sample-page.html"><i class="icon-arrow-right"></i> Sample Page</a></li>
                        
                    </ul>
                </li>


                <li class="nav-level">--- Menu Level</li>

                <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icofont icofont-company"></i><span>Menu Level 1</span><i class="icon-arrow-down"></i></a>
                    <ul class="treeview-menu">
                        <li>
                            <a class="waves-effect waves-dark" href="#!">
                                <i class="icon-arrow-right"></i>
                                Level Two
                            </a>
                        </li>
                        <li class="treeview">
                            <a class="waves-effect waves-dark" href="#!">
                                <i class="icon-arrow-right"></i>
                                <span>Level Two</span>
                                <i class="icon-arrow-down"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a class="waves-effect waves-dark" href="#!">
                                        <i class="icon-arrow-right"></i>
                                        Level Three
                                    </a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-dark" href="#!">
                                        <i class="icon-arrow-right"></i>
                                        <span>Level Three</span>
                                        <i class="icon-arrow-down"></i>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li>
                                            <a class="waves-effect waves-dark" href="#!">
                                                <i class="icon-arrow-right"></i>
                                                Level Four
                                            </a>
                                        </li>
                                        <li>
                                            <a class="waves-effect waves-dark" href="#!">
                                                <i class="icon-arrow-right"></i>
                                                Level Four
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
         </section>
      </aside>
      <!-- Sidebar chat start -->
      <div id="sidebar" class="p-fixed header-users showChat">
         <div class="had-container">
            <div class="card card_main header-users-main">
               <div class="card-content user-box">

                  <div class="md-group-add-on p-20">
                     <span class="md-add-on">
                                    <i class="icofont icofont-search-alt-2 chat-search"></i>
                                 </span>
                     <div class="md-input-wrapper">
                        <input type="text" class="md-form-control" name="username" id="search-friends">
                        <label>Search</label>
                     </div>

                  </div>
                  <div class="media friendlist-main">

                     <h6>Friend List</h6>

                  </div>
                  <div class="main-friend-list">
                     <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                           <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Josephin Doe</div>
                           <span>20min ago</span>
                        </div>
                     </div>
                     <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                           <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Alice</div>
                           <span>1 hour ago</span>
                        </div>
                     </div>
                     <div class="media friendlist-box" data-id="7" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip" data-placement="left" title="Michael Scofield">
                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
                           <div class="live-status bg-danger"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Michael Scofield</div>
                           <span>3 hours ago</span>
                        </div>
                     </div>
                     <div class="media friendlist-box" data-id="5" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left" title="Irina Shayk">
                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-4.png" alt="Generic placeholder image">
                           <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Irina Shayk</div>
                           <span>1 day ago</span>
                        </div>
                     </div>
                     <div class="media friendlist-box" data-id="6" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-5.png" alt="Generic placeholder image">
                           <div class="live-status bg-danger"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Sara Tancredi</div>
                           <span>2 days ago</span>
                        </div>
                     </div>
                     <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                           <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Josephin Doe</div>
                           <span>20min ago</span>
                        </div>
                     </div>
                     <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                           <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Alice</div>
                           <span>1 hour ago</span>
                        </div>
                     </div>
                     <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                           <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Josephin Doe</div>
                           <span>20min ago</span>
                        </div>
                     </div>
                     <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                           <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Alice</div>
                           <span>1 hour ago</span>
                        </div>
                     </div>
                     <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                           <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Josephin Doe</div>
                           <span>20min ago</span>
                        </div>
                     </div>
                     <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                           <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Alice</div>
                           <span>1 hour ago</span>
                        </div>
                     </div>
                     <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                           <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Josephin Doe</div>
                           <span>20min ago</span>
                        </div>
                     </div>
                     <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                           <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Josephin Doe</div>
                           <span>20min ago</span>
                        </div>
                     </div>
                     <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                           <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Josephin Doe</div>
                           <span>20min ago</span>
                        </div>
                     </div>
                     <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                        <a class="media-left" href="#!">
                           <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                           <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                           <div class="friend-header">Josephin Doe</div>
                           <span>20min ago</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </div>
      <div class="showChat_inner">
         <div class="media chat-inner-header">
            <a class="back_chatBox">
               <i class="icofont icofont-rounded-left"></i> Josephin Doe
            </a>
         </div>
         <div class="media chat-messages">
            <a class="media-left photo-table" href="#!">
               <img class="media-object img-circle m-t-5" src="assets/images/avatar-1.png" alt="Generic placeholder image">
               <div class="live-status bg-success"></div>
            </a>
            <div class="media-body chat-menu-content">
               <div class="">
                  <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                  <p class="chat-time">8:20 a.m.</p>
               </div>
            </div>
         </div>
         <div class="media chat-messages">
            <div class="media-body chat-menu-reply">
               <div class="">
                  <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                  <p class="chat-time">8:20 a.m.</p>
               </div>
            </div>
            <div class="media-right photo-table">
               <a href="#!">
                  <img class="media-object img-circle m-t-5" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                  <div class="live-status bg-success"></div>
               </a>
            </div>
         </div>
         <div class="media chat-reply-box">
            <div class="md-input-wrapper">
               <input type="text" class="md-form-control" id="inputEmail" name="inputEmail">
               <label>Share your thoughts</label>
               <span class="highlight"></span>
               <span class="bar"></span> <button type="button" class="chat-send waves-effect waves-light">
                     <i class="icofont icofont-location-arrow f-20 "></i>
                 </button>

            </div>

         </div>
      </div>
      <!-- Sidebar chat end-->
      <div class="content-wrapper">
         <!-- Container-fluid starts -->
         <div class="container-fluid">
            <!-- Main content starts -->
            <div>
               <!-- Row Starts -->
               <div class="row">
                  <div class="col-sm-12 p-0">
                     <div class="main-header">
                        <h4>ADD HOSPITAL</h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                           <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a>
                           </li>
                           <li class="breadcrumb-item"><a href="#">Forms Components</a>
                          
                        </ol>
                     </div>
                  </div>
               </div>
               <!-- Row end -->

               <!-- Row start -->
               <div class="row">
                  <!-- Form Control starts -->
     
                  <!-- Form Control ends -->

                  <!-- Textual inputs starts -->
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header">
                           <h5 class="card-header-text"> ADD HOSPITAL</h5>
                           <div class="f-right">
                              <a href="" data-toggle="modal" data-target="#textual-input-Modal"><i class="icofont icofont-code-alt"></i></a>
                           </div>
                        </div>
                        <div class="modal fade modal-flex" id="textual-input-Modal" tabindex="-1" role="dialog">
                           <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    <h5 class="modal-title">Code Explanation For Textual Input Types </h5>
                                 </div>
                                 <!-- end of modal-header -->
                                 <div class="modal-body">
                                    <pre class="brush: html">
                      	&lt;note&gt; This Code Write inside &lt;form&gt; tag

						/* use for text textual input */

						&lt;div class="form-group row"&gt;
							&lt;label for="example-text-input" class="col-xs-2 col-form-label form-control-label"&gt;Text&lt;label&gt;
								&lt;div class="col-sm-10"&gt;
									&lt;input class="form-control" type="text" value="Artisanal kale" id="example-text-input"&gt;
								&lt;/div&gt;
						&lt;/div&gt;

						/* use for search textual input */

						&lt;div class="form-group row"&gt;
							&lt;label for="example-search-input" class="col-xs-2 col-form-label form-control-label"&gt;Search&lt;/label&gt;
							&lt;div class="col-sm-10"&gt;
								&lt;input class="form-control" type="search" value="How do I shoot web" id="example-search-input"&gt;
							&lt;/div&gt;
						&lt;/div&gt;

						/* use for email textual input */

						&lt;div class="form-group row"&gt;
							&lt;label for="example-email-input" class="col-xs-2 col-form-label form-control-label"&gt;Email&lt;/label&gt;
							&lt;div class="col-sm-10"&gt;
								&lt;input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input"&gt;
							&lt;/div&gt;
						&lt;/div&gt;

						/* use for Url textual input */

						&lt;div class="form-group row"&gt;
							&lt;label for="example-url-input" class="col-xs-2 col-form-label form-control-label"&gt;URL&lt;/label&gt;
							&lt;div class="col-sm-10"&gt;
								&lt;input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input"&gt;
							&lt;/div&gt;
						&lt;/div&gt;

						/* use for Telephone textual input */

						&lt;div class="form-group row"&gt;
							&lt;label for="example-tel-input" class="col-xs-2 col-form-label form-control-label"&gt;Telephone&lt;/label&gt;
							&lt;div class="col-sm-10"&gt;
								&lt;input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input"&gt;
							&lt;/div&gt;
						&lt;/div&gt;

						/* use for Password textual input */

						&lt;div class="form-group row"&gt;
							&lt;label for="example-password-input" class="col-xs-2 col-form-label form-control-label"&gt;Password&lt;/label&gt;
							&lt;div class="col-sm-10"&gt;
								&lt;input class="form-control" type="password" value="hunter2" id="example-password-input"&gt;
							&lt;/div&gt;
						&lt;/div&gt;

						/* use for Static Control textual input */

						&lt;div class="form-group row"&gt;
							&lt;label class="col-sm-2 col-form-label form-control-label"&gt;Static Control&lt;/label&gt;
							&lt;div class="col-sm-10"&gt;
								&lt;p class="form-control-static"&gt;email@example.com&lt;/p&gt;
							&lt;/div&gt;
						&lt;/div&gt;

						/* use for Number textual input */

						&lt;div class="form-group row"&gt;
							&lt;label for="example-number-input" class="col-xs-2 col-form-label form-control-label"&gt;Number&lt;/label&gt;
							&lt;div class="col-sm-10"&gt;
								&lt;input class="form-control" type="number" value="42" id="example-number-input"&gt;
							&lt;/div&gt;
						&lt;/div&gt;

						/* use for Date and Time textual input */

						&lt;div class="form-group row"&gt;
							&lt;label for="example-datetime-local-input" class="col-xs-2 col-form-label form-control-label"&gt;Date and time&lt;/label&gt;
							&lt;div class="col-sm-10"&gt;
								&lt;input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input"&gt;
							&lt;/div&gt;
						&lt;/div&gt;

						/* use for Date textual input */

						&lt;div class="form-group row"&gt;
							&lt;label for="example-date-input" class="col-xs-2 col-form-label form-control-label"&gt;Date&lt;/label&gt;
							&lt;div class="col-sm-10"&gt;
								&lt;input class="form-control" type="date" value="2011-08-19" id="example-date-input"&gt;
							&lt;/div&gt;
						&lt;/div&gt;

						/* use for Month textual input */

						&lt;div class="form-group row"&gt;
							&lt;label for="example-month-input" class="col-xs-2 col-form-label form-control-label"&gt;Month&lt;/label&gt;
							&lt;div class="col-sm-10"&gt;
								&lt;input class="form-control" type="month" value="2011-08" id="example-month-input"&gt;
							&lt;/div&gt;
						&lt;/div&gt;

						/* use for Week textual input */

						&lt;div class="form-group row"&gt;
							&lt;label for="example-week-input" class="col-xs-2 col-form-label form-control-label"&gt;Week&lt;/label&gt;
							&lt;div class="col-sm-10"&gt;
								&lt;input class="form-control" type="week" value="2011-W33" id="example-week-input"&gt;
							&lt;/div&gt;
						&lt;/div&gt;

						/* use for Time textual input */

						&lt;div class="form-group row"&gt;
							&lt;label for="example-time-input" class="col-xs-2 col-form-label form-control-label"&gt;Time&lt;/label&gt;
							&lt;div class="col-sm-10"&gt;
								&lt;input class="form-control" type="time" value="13:45:00" id="example-time-input"&gt;
							&lt;/div&gt;
						&lt;/div&gt;

						/* use for Color textual input */

						&lt;div class="form-group row"&gt;
							&lt;label for="example-color-input" class="col-xs-2 col-form-label form-control-label"&gt;Color&lt;/label&gt;
							&lt;div class="col-sm-10"&gt;
								&lt;input type="color" class="" name="favcolor" value="#1b8bf9" id="example-color-input"&gt;
							&lt;/div&gt;
						&lt;/div&gt;

						/* use for File Upload Textual */

						&lt;div class="form-group row"&gt;
							&lt;label for="file" class="col-md-2 col-form-label form-control-label">File input&lt;/label&gt;
							&lt;div class="col-md-9"&gt;
								&lt;label for="file" class="custom-file"&gt;
									&lt;input type="file" id="file" class="custom-file-input"&gt;
									&lt;span class="custom-file-control"&gt;&lt;/span&gt;
								&lt;/label&gt;
							&lt;/div&gt;
						&lt;/div&gt;
                      </pre>
                                 </div>
                                 <!-- end of modal-body -->
                              </div>
                              <!-- end of modal-content -->
                           </div>
                           <!-- end of modal-dialog -->+
                        </div>
                        <!-- end of modal -->
                        <div class="card-block">
                           <form action='Add-Hospital.php' method='post' enctype="multipart/form-data">
                              <div class="form-group row">
                                 <label for="example-text-input" class="col-xs-2 col-form-label form-control-label">Hospital Name</label>
                                 <div class="col-sm-10">
                                    <input class="form-control" name="hospital_name" type="text" id="example-text-input">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="example-search-input" class="col-xs-2 col-form-label form-control-label">Address</label>
                                 <div class="col-sm-10">
                                    <input class="form-control" name="address" type="search" id="example-search-input">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="example-email-input" class="col-xs-2 col-form-label form-control-label">Email</label>
                                 <div class="col-sm-10">
                                    <input class="form-control" name="email" type="email" id="example-email-input">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="example-url-input" class="col-xs-2 col-form-label form-control-label">URL</label>
                                 <div class="col-sm-10">
                                    <input class="form-control" name="url" type="url" id="example-url-input">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="example-tel-input" class="col-xs-2 col-form-label form-control-label">Telephone</label>
                                 <div class="col-sm-10">
                                    <input class="form-control" name="telephone" type="tel" id="example-tel-input">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="example-password-input" class="col-xs-2 col-form-label form-control-label">Password</label>
                                 <div class="col-sm-10">
                                    <input class="form-control" name="password" type="password" id="example-password-input">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="example-Description-input" class="col-xs-2 col-form-label form-control-label">Description</label>
                                 <div class="col-sm-10">
                                    <input class="form-control" name="description" type="Text" id="example-Despcription-input">
                                 </div>
                              </div>
            
                              <div class="form-group row">
                                 <label for="file" class="col-md-2 col-form-label form-control-label">File input</label>
                                 <div class="col-md-9">
                                    <label for="file" class="custom-file">
                                                <input type="file" value="Upload Image" name="img" id="file" class="custom-file-input">
                                                <span class="custom-file-control"></span>
                                            </label>
                                 </div>
                              </div>

                              <div class="form-group row">
                                 <div class="col-sm-6">
                                    <input class="form-control" name="submit" type="submit" id="example-Despcription-input">
                                 </div>
                              </div>
            


                           </form>
                        </div>
                     </div>
                  </div>
                  <!-- Textual inputs ends -->
               </div>
               <!-- Row end -->

               <!-- Row end -->
            </div>
            <!-- Main content ends -->
         </div>
         <!-- Container-fluid ends -->
      </div>
   </div>


   <!-- Required Jqurey -->
   <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
   <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
   <script src="assets/plugins/tether/dist/js/tether.min.js"></script>

   <!-- Required Fremwork -->
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

   <!-- waves effects.js -->
   <script src="assets/plugins/Waves/waves.min.js"></script>

   <!-- Scrollbar JS-->
   <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
   <script src="assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

   <!--classic JS-->
   <script src="assets/plugins/classie/classie.js"></script>

   <!-- notification -->
   <script src="assets/plugins/notification/js/bootstrap-growl.min.js"></script>

   <!-- Highliter js -->
   <script type="text/javascript" src="assets/plugins/syntaxhighlighter/scripts/shCore.js"></script>
   <script type="text/javascript" src="assets/plugins/syntaxhighlighter/scripts/shBrushJScript.js"></script>
   <script type="text/javascript" src="assets/plugins/syntaxhighlighter/scripts/shBrushXml.js"></script>
   <script type="text/javascript">
      SyntaxHighlighter.all();
   </script>

   <!-- custom js -->
   <script type="text/javascript" src="assets/js/main.min.js"></script>
   <script type="text/javascript" src="assets/pages/elements.js"></script>
   <script src="assets/js/menu.min.js"></script>

</body>

</html>
