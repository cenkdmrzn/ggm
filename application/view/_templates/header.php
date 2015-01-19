<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Glacial Google Map</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="<?php echo URL; ?>css/main.css" rel="stylesheet" type="text/css" />
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo URL; ?>css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:http:// -->
    <!--[if lt IE 9]>
    <script src="https:http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:http://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo URL; ?>js/AdminLTE/app.js" type="text/javascript"></script>
</head>
<body class="ggm_skin-blue">
<!-- header logo: style can be found in header.less -->
<header class="ggm_header"> <a href="../__pages/index.html" class="ggm_logo"> Glacial Google Module </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="ggm_navbar ggm_navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="ggm_navbar-btn ggm_sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="ggm_sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
        <div class="ggm_navbar-right">
            <ul class="nav ggm_navbar-nav">
                <li class="dropdown user user-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="glyphicon glyphicon-user"></i> <span>Profle Name<i class="ggm_caret"></i></span> </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header bg-light-blue"> <img src="<?php echo URL; ?>img/avatar3.png" class="img-circle" alt="User Image" />
                            <p> Profile Name <small>web site</small> </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="ggm_user-footer">
                            <div class="pull-left"> <a href="#" class="btn btn-default btn-flat">Profile</a> </div>
                            <div class="pull-right"> <a href="#" class="btn btn-default btn-flat">Sign out</a> </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="ggm_wrapper ggm_row-offcanvas ggm_row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="ggm_left-side ggm_sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="ggm_sidebar">
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="ggm_sidebar-menu">
                <li> <a href="<?php echo URL; ?>home"> <i class="fa fa-dashboard"></i> <span>Home Page</span> </a> </li>
                <li class="treeview"> <a href="#"> <i class="fa fa-user-md"></i> <span>Doctors</span> <i class="fa fa-angle-left pull-right"></i> </a>
                    <ul class="ggm_treeview-menu">
                        <li><a href="<?php echo URL; ?>doctors/adddoctor"><i class="fa fa-plus"></i>Add Doctor</a></li>
                        <li><a href="<?php echo URL; ?>doctors/doctorlist"><i class="fa fa-th-list"></i>Doctor List</a></li>
                    </ul>
                </li>
                <li class="treeview"> <a href="#"> <i class="fa fa-map-marker"></i> <span>Locations</span> <i class="fa fa-angle-left pull-right"></i> </a>
                    <ul class="ggm_treeview-menu">
                        <li><a href="<?php echo URL; ?>locations/addlocation"><i class="fa fa-plus"></i>Add Location</a></li>
                        <li><a href="<?php echo URL; ?>locations/locationlist"><i class="fa fa-th-list"></i>Location List</a></li>
                    </ul>
                </li>
                <li class="treeview"> <a href="#"> <i class="fa fa-edit"></i> <span>Services</span> <i class="fa fa-angle-left pull-right"></i> </a>
                    <ul class="ggm_treeview-menu">
                        <li class="active"><a href="<?php echo URL; ?>services/add"><i class="fa fa-plus"></i>Add Service</a></li>
                        <li><a href="<?php echo URL; ?>services"><i class="fa fa-th-list"></i>Service List</a></li>
                    </ul>
                </li>
                <li class="treeview"> <a href="#"> <i class="fa fa-users"></i> <span>Clients</span> <i class="fa fa-angle-left pull-right"></i> </a>
                    <ul class="ggm_treeview-menu">
                        <li><a href="<?php echo URL; ?>clients/add"><i class="fa fa-plus"></i>Add Client</a></li>
                        <li><a href="<?php echo URL; ?>clients"><i class="fa fa-th-list"></i>Client List</a></li>
                    </ul>
                </li>
                <li> <a href="<?php echo URL; ?>mapconfig/"> <i class="fa fa-cogs"></i> <span>Map Config</span> </a> </li>
                <li> <a href="../__pages/preview.html"> <i class="fa fa-desktop"></i> <span>Preview</span> </a> </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>