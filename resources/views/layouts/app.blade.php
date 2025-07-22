<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Dela+Gothic+One&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Pathway+Gothic+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.2.3/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootsrap-icons/font/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div id="loadingSpinner" class="d-flex justify-content-center align-items-center d-none" style="height: 100vh;">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <div class="main-section row">
        <div id="sidebar" class="col-xxl-2 col-md-3 sticky-top">
            <div class="sidebar-content">
                <div class="sidebar-header">
                    <h1 class="sidebar-title">{{ config('app.name', 'Laravel') }}</h1>
                    <button type="button" class="btn-close text-reset d-md-none d-block" id="sidebarClose"></button>
                </div>
                <div class="navbar-lis-container ">
                    <ul class="list-unstyled sidebar-lists">
                        <li class="{{ request()->is('home') ? 'active' : '' }}">
                            <span><i class="bi bi-grid-1x2"></i></span>
                            <a href="{{ url('/home') }}">Dashboard</a>
                        </li>
                        <li class="{{ request()->is('subscribers') ? 'active' : '' }}">
                            <span><i class="bi bi-people"></i></span>
                            <a href="{{ url('/subscribers') }}">Subscribers</a>
                        </li>
                        <li class="{{ request()->is('analytics') ? 'active' : '' }}">
                            <span><i class="bi bi-bar-chart-line"></i></span>
                            <a href="{{ url('/analytics') }}">Analytics</a>

                        </li>
                        <li class="{{ request()->is('settings') ? 'active' : '' }}">
                            <span><i class="bi bi-gear"></i></span>
                            <a href="{{ url('/settings') }}">Settings</a>
                        </li>
                        <li class="">
                            <span><i class="bi bi-box-arrow-right"></i></span>
                            <a href="{{ url('/logout') }}">Logout</a>
                        </li>

                    </ul>
                    <!-- <p class="list-section-header">Admin Panel</p>
                    <ul class="list-unstyled sidebar-lists">
                        <li class="">
                            <span><i class="bi bi-person"></i></span>
                            <a href="{{ url('/users/view') }}">Users</a>
                        </li>
                        <li class="">
                            <span><i class="bi bi-journal-text"></i></span>
                            <a href="#">User Logs</a>
                        </li>
                    </ul> -->
                    <div class="d-md-none d-block">
                        <p class="list-section-header">User Details</p>
                        <ul class="list-unstyled sidebar-lists">
                            <li class="">
                                <span><i class="bi bi-person"></i></span>
                                <a href="#">Profile</a>
                            </li>
                            <li class="">
                                <span><i class="bi bi-journal-text"></i></span>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-footer">
                    <h4 class="sidebar-footer-title">© {{ date('Y') }} {{ config('app.name', 'Laravel') }}</h4>
                    <p class="sidebar-footer-description">All Rights Reserved. Made with love by Vereigen Media!</p>
                </div>
            </div>
        </div>
        <div id="app" class="col-xxl-10 col-md-9 px-0">
            <nav class="navbar navbar-expand-md navbar-light sticky-top">
                <div class="container-fluid ">
                    <div class="navbar-header ">
                        <h2 class="navbar-brand m-0 p-0">Welcome Back, <b>Admin</b>!</h2>

                        <p class="m-0 nav-breadcrumb">Stay updated with your recent progress and stats.</p>
                    </div>

                    <button class="navbar-toggler" type="button" id="sidebarToggler"
                        aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse d-md-block d-none">
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto navbar-right">
                            <li>
                                <div class="input-group search-input-group">
                                    <input type="text" class="form-control search-input" placeholder="Search here..."
                                        aria-label="Search" aria-describedby="input-addon">
                                    <span class="input-group-text" id="input-addon"><i class="bi bi-search"
                                            style="color:var(--btn-primary-color)"></i></span>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarNotifications" class="nav-link" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <span><i class="bi bi-bell" style="color:var(--btn-primary-color)"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end navbar-menu-dropdown"
                                    aria-labelledby="navbarNotifications">
                                    <div class="dropdown-header">Notifications</div>
                                    <ul class="list-unstyled dropdown-item profile-dropdown dropdown-body">
                                        <li class="">
                                            <span><i class="bi bi-person"></i></span>
                                            <a href="#">Emily Johnson joined as a new subscriber</a>
                                        </li>
                                        <li class="">
                                            <span><i class="bi bi-person"></i></span>
                                            <a href="#">Michael Rodriguez downloaded the premium </a>
                                        </li>
                                        <li class="">
                                            <span><i class="bi bi-person"></i></span>
                                            <a href="#">Sophia Williams opened the newsletter email. </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link p-0" type="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="{{ asset('assets/images/avatar.png') }}" alt="avatar" width="48"
                                        height="48" class="rounded-circle nav-profile-image">
                                </a>

                                <div class="dropdown-menu dropdown-menu-end navbar-menu-dropdown"
                                    aria-labelledby="navbarDropdown">
                                    <div class="dropdown-header">Profile</div>
                                    <ul class="list-unstyled dropdown-item profile-dropdown dropdown-body">
                                        <li class="">
                                            <span><i class="bi bi-person"></i></span>
                                            <a href="#">Profile</a>
                                        </li>
                                        <li class="">
                                            <span><i class="bi bi-journal-text"></i></span>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                        </li>
                                    </ul>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>

    @include('components.alert-modals')
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap-5.2.3/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        window.addEventListener('load', function () {
            $(document).ready(function () {
                const sidebar = $('#sidebar');
                $('#sidebarToggler').on('click', function () {
                    sidebar.removeClass('slideout').addClass('slidein').show();
                });

                $('#sidebarClose').on('click', function () {
                    sidebar.removeClass('slidein').addClass('slideout');

                    setTimeout(() => {
                        sidebar.hide();
                    }, 1000);
                });
            });
        });
    </script>
    @stack('scripts')
</body>

</html>