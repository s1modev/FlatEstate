<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    @yield('header')
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- custom style -->
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
</head>
<body class="hold-transition sidebar-mini"> 
<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('admin.account.update')}}" class="nav-link">Settings</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <form action="{{route('admin.logout')}}" method="POST">
                @csrf
                <button class="nav-link" style="outline: none;border: 0px; background: transparent; ">Logout</button>
            </form>
        </li>
    </ul>

</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.home.dashboard')}}" class="brand-link">
        <img src="{{asset('img/loggo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <h4 class="brand-text font-weight-light mt-1">FlatEstate</h4>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('user_avatar/user.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <span href="#" class="d-block text-white">{{session('admin_name')}}</span>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
                <a href="{{route('admin.home.dashboard')}}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('package.dashboard')}}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Packages
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('user.dashboard')}}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Users
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('order.dashboard')}}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Orders
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.post.dashboard')}}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Posts
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('page.dashboard')}}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Pages
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.dashboard')}}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Admins
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class=" content-wrapper mt-3 ">
    <div class="content">
        <div class="container-fluid">
            @yield('content')
        </div>
        
    </div>
    
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
        Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Made By Simodev</strong>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- AdminLTE App -->
<script src="{{asset('js/app.js')}}"></script>

@yield('script')
</body>
</html>



