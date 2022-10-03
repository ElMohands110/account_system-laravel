<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Accounts System To Manage Accounts">
    <meta name="author" content="STM">
    <link rel="shortcut icon" href="{{ asset('img/fav.png') }}">
    <title>STM Accounts | @yield('title')</title>
    <style>
        svg{display:block;vertical-align:middle}
        .grid{display:grid}
        .hidden{display:none}
        .items-center{align-items:center}
        .justify-center{justify-content:center}
        .overflow-hidden{overflow:hidden}
    </style>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/overlay-scroll/OverlayScrollbars.min.css') }}">
    <style>
        .my_form {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
        }

        .my_alert {
            position: fixed;
            top: 5rem;
            right: 3rem;
            z-index: 10000;
        }
        td.slice, th.slice {
            border-right: solid 3px;
        }
        .paginate_links a {
            background-color: #1a1e21 !important;
            color: #ffffff;
            border-color: #373a3a !important;
        }
        .paginate_links span {
            background-color: transparent !important;
            border-color: #6c757d !important;
        }
    </style>
</head>
<body>
<div class="page-wrapper">
    <nav class="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}" class="logo text-center">
                <h4>STM Accounts</h4>
            </a>
        </div>
        <div class="sidebarMenuScroll">
            <div class="sidebar-menu">
                <ul>
{{--                    <li @if(Route::current()->getName() == 'dashboard') class="active-page-link" @endif>--}}
{{--                        <a href="{{ route('dashboard') }}">--}}
{{--                            <i class="icon-house_siding gradient-orange"></i>--}}
{{--                            <span>Dashboard</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}

                    <li class="sidebar-dropdown @if(Route::current()->getName() == 'account.sub' || Route::current()->getName() == 'account.main' || Route::current()->getName() == 'account.tree')active @endif">
                        <a href="#">
                            <i class="icon-settings_input_svideo gradient-teal"></i>
                            <span class="menu-text">{{ __('message.accounts') }}</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a @if(Route::current()->getName() == 'account.main') class="current-page" @endif href="{{ route('account.main') }}">{{ __('message.main_accounts') }}</a></li>
                                <li><a @if(Route::current()->getName() == 'account.sub') class="current-page" @endif href="{{ route('account.sub') }}">{{ __('message.sub_accounts') }}</a></li>
                                <li><a @if(Route::current()->getName() == 'account.tree') class="current-page" @endif href="{{ route('account.tree') }}">{{ __('message.accounts_tree') }}</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-dropdown @if(Route::current()->getName() == 'deed_of_arrest.index' || Route::current()->getName() == 'exchange_voucher_registration.index' || Route::current()->getName() == 'voucher_entry')active @endif">
                        <a href="#">
                            <i class="icon-settings_input_svideo gradient-red"></i>
                            <span class="menu-text">{{ __('message.receipts') }}</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a @if(Route::current()->getName() == 'deed_of_arrest.index') class="current-page" @endif href="{{ route('deed_of_arrest.index') }}">{{ __('message.deep_of_arrest') }}</a></li>
                                <li><a @if(Route::current()->getName() == 'exchange_voucher_registration.index') class="current-page" @endif href="{{ route('exchange_voucher_registration.index') }}">{{ __('message.exchange_voucher') }}</a></li>
                                <li><a @if(Route::current()->getName() == 'voucher_entry.index') class="current-page" @endif href="{{ route('voucher_entry.index') }}">{{ __('message.voucher_entry') }}</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-dropdown @if(Route::current()->getName() == 'reports.posts' || Route::current()->getName() == 'reports.post.search' || Route::current()->getName() == 'reports.index' || Route::current()->getName() == 'reports.search')active @endif">
                        <a href="#">
                            <i class="icon-settings_input_svideo gradient-silver-light"></i>
                            <span class="menu-text">{{ __('message.reports&posts') }}</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a @if(Route::current()->getName() == 'reports.posts' || Route::current()->getName() == 'reports.post.search') class="current-page" @endif href="{{ route('reports.posts') }}">{{ __('message.posts') }}</a></li>
                                <li><a @if(Route::current()->getName() == 'reports.index' || Route::current()->getName() == 'reports.search') class="current-page" @endif href="{{ route('reports.index') }}">{{ __('message.reports') }}</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main-container">
        <div class="page-header">
            <div class="breadcrumb-container">
                <div class="toggle-sidebar" id="toggle-sidebar"><i class="icon-menu"></i></div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><i class="icon-house_siding"></i><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item breadcrumb-active" aria-current="page">@yield('link1')</li>
                    @yield('link2')
                </ol>
            </div>
            <div class="header-actions-container">
                <ul class="header-actions">
                    <li class="dropdown d-none d-md-block">
                        <a href="#" id="countries" data-toggle="dropdown" aria-haspopup="true">
                            <img src="{{ asset('img/flags/1x1/gb.svg') }}" class="flag-img" alt="Great Britain">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end mini" aria-labelledby="countries">
                            <div class="country-container">
                                <a href="{{ route('dashboard') }}">
                                    <img src="{{ asset('img/flags/1x1/us.svg') }}" alt="USA">
                                </a>
                                <a href="{{ route('dashboard') }}">
                                    <img src="{{ asset('img/flags/1x1/in.svg') }}" alt="India">
                                </a>
                                <a href="{{ route('dashboard') }}">
                                    <img src="{{ asset('img/flags/1x1/au.svg') }}" alt="Brazil">
                                </a>
                                <a href="{{ route('dashboard') }}">
                                    <img src="{{ asset('img/flags/1x1/tr.svg') }}" alt="Turkey">
                                </a>
                                <a href="{{ route('dashboard') }}">
                                    <img src="{{ asset('img/flags/1x1/id.svg') }}" alt="Indonesia">
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                            <span class="user-name d-none d-md-block">{{ auth()->user()->name }}</span>
                            <span class="avatar">
                                <img src="{{ asset('img/avatar.jpg') }}" alt="Avatar">
                                <span class="status online"></span>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end md" aria-labelledby="userSettings">
                            <div class="header-profile-avatar"><img src="{{ asset('img/avatar.jpg') }}" alt="Avatar"></div>
                            <div class="header-profile-block"><h5>{{ auth()->user()->name }}</h5>
                                <p>Admin</p>
                            </div>
                            <div class="header-profile-actions">
                                <a href="{{ route('profile') }}" class="btn gradient-blue">
                                    <i class="icon-person_outline"></i>
                                    Profile
                                </a>
                                <button id="submit" class="btn badge gradient-red">
                                    <form id="logout" action="{{ route('logout') }}" method="POST">@csrf</form>
                                    <script>
                                        document.querySelector('#submit').onclick = function() {
                                            document.querySelector('#logout').submit()
                                        }
                                    </script>
                                    <i class="icon-power_settings_new"></i>
                                    Logout
                                </button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content-wrapper-scroll">
            <div class="content-wrapper">
                <div class="my_alert">
                    @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session()->get('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if(session()->has('danger'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session()->get('danger') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
                @yield('content')
            </div>
            <div class="app-footer"><span>© STM accounts 2022</span></div>
        </div>
    </div>
</div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/modernizr.js') }}"></script>
<script src="{{ asset('js/moment.js') }}"></script>
<script src="{{ asset('vendor/overlay-scroll/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('vendor/overlay-scroll/custom-scrollbar.js') }}"></script>
<script src="{{ asset('vendor/apex/apexcharts.min.js') }}"></script>
<script src="{{ asset('vendor/apex/custom/home2/byDeviceGraph.js') }}"></script>
<script src="{{ asset('vendor/apex/custom/home2/earningsGraph.js') }}"></script>
<script src="{{ asset('vendor/apex/custom/home2/salesGraph.js') }}"></script>
<script src="{{ asset('vendor/apex/custom/home2/sparklineGraphs.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
