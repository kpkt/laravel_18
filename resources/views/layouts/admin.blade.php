<html>
<head>
    <title>Tutorial - @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('bootadmin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootadmin/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootadmin/css/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootadmin/css/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootadmin/css/bootadmin.min.css') }}">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand navbar-dark bg-primary">
    <a class="sidebar-toggle mr-3" href="#"><i class="fa fa-bars"></i></a>
    <a class="navbar-brand" href="https://bootadmin.net">BootAdmin</a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-envelope"></i> 5</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-bell"></i> 3</a></li>
            <li class="nav-item dropdown">
                <a href="#" id="dd_user" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Doe</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd_user">
                    <a href="#" class="dropdown-item">Profile</a>
                    <a href="#" class="dropdown-item">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="d-flex">
    @include('layouts.partials.sidebar')

    <div class="content p-4">
        @yield('content')
    </div>

</div>

<script src="{{ asset('bootadmin/js/jquery.min.js') }}"></script>
<script src="{{ asset('bootadmin/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('bootadmin/js/datatables.min.js') }}"></script>
<script src="{{ asset('bootadmin/js/moment.min.js') }}"></script>
<script src="{{ asset('bootadmin/js/fullcalendar.min.js') }}"></script>
<script src="{{ asset('bootadmin/js/bootadmin.min.js') }}"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
@yield('bottom-script')

</body>
</html>