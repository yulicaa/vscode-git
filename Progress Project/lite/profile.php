<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logo-icon.jpg">
    <title>SIRUSAK</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header card-no-border">

    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
   
    <div id="main-wrapper">
        
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                        <b>
                            <i class="fa fa-hospital-o m-r-10" aria-hidden="true"></i>
                            
                        </b>
                     
                        <span>
                         
                            <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                        </span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item hidden-sm-down">
                            <form class="app-search p-l-20">
                                <input type="text" class="form-control" placeholder="Search for..."> <a class="srh-btn"><i class="ti-search"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../assets/images/users/1.jpg" alt="user" class="profile-pic m-r-5" />Yuli Dwi</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
     
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li>
                            <a href="index.php" class="waves-effect"><i class="fa fa-clock-o m-r-10" aria-hidden="true"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="profile.php" class="waves-effect"><i class="fa fa-user m-r-10" aria-hidden="true"></i>Profile</a>
                        </li>
                        <li>
                            <div class="dropdown" >
                            <a href="" class="dropdown-toggle" class="waves-effect" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <i class="fa fa-table m-r-10" aria-hidden="true"></i>Tabel Data<span class="caret"></span>
                            </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="pasien.php" class="waves-effect"><i class="fa fa-user m-r-10" aria-hidden="true"></i>Daftar Pasien</a></li>
                                    <li><a href="dokter.php">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="icon-fontawesome.php" class="waves-effect"><i class="fa fa-font m-r-10" aria-hidden="true"></i>Icons</a>
                        </li>
                        <li>
                            <a href="map-google.php" class="waves-effect"><i class="fa fa-globe m-r-10" aria-hidden="true"></i>Google Map</a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        
        <div class="page-wrapper">
       
            <div class="container-fluid">
             
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Profile</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                </div>
                
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-block">
                                <center class="m-t-30"> <img src="../assets/images/users/1.jpg" class="img-circle" width="150" />
                                    <h4 class="card-title m-t-10">Yuli Dwi Cahyanti</h4>
                                    <h6 class="card-subtitle">Admin</h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->

                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
                                        <label class="col-md-12">Nama Lengkap</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Yuli Dwi Cahyanti" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" placeholder="yulica57@admin.com" class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" value="password" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="0812 5269 1095" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Message</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control form-control-line"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Select Country</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line">
                                                <option>Indonesia</option>    
                                                <option>London</option>
                                                <option>Usa</option>
                                                <option>Canada</option>
                                                <option>Thailand</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
              
            </div>
           
            <footer class="footer text-center">
                © 2018 Yuli Dwi Ca
            </footer>
          
        </div>
      
    </div>
    
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
