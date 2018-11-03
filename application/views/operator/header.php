<!DOCTYPE html>
<html lang="en">
<head>
    <title>Operator | Buku Tamu</title>
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/utama/img/faicon.png">

    <!-- CSS--> 
    <link href="<?php echo base_url(); ?>assets/operator/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url(); ?>assets/operator/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url(); ?>assets/operator/js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
   
</head>
<body>
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="blue">
                <div class="nav-wrapper">
                    <h1 class="logo-wrapper"><a href="<?php echo base_url('admin');?>" class="brand-logo darken-1">Operator | Buku Tamu</a></h1>
                </div>
            </nav>
        </div>
    </header>

     <div id="main">
        <div class="wrapper">

            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s8 m8 l8">
                                
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?=$namaOp ?><i class="mdi-navigation-arrow-drop-down right"></i></a>
                                <p class="user-roal">Operator | Buku Tamu</p>
                            </div>
                        </div>
                    </li>
                    <li class="bold"><a href="<?php echo base_url('operator/beranda');?>" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="bold"><a href="<?php echo base_url('operator/tampilSeluruh');?>" class="waves-effect waves-cyan"><i class="mdi-action-list"></i> Pengunjung Seluruh</a>
                    <li><a href="<?php echo base_url();?>login/logout"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                    
                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
            </aside>
           
           

    
          