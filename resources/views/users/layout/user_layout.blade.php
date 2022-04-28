<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags  -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" />
    <title>BingHR Dashboard | Simple Crud App</title>

    <!--Core CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" rel="stylesheet" />

</head>

<style>
control > ::placeholder{
    color: #000000;
}
*::placeholder{
    color: #000000;
    opacity: 1;
}
*::-moz-placeholder{
    color: #000000
}
*:-ms-input-placeholder{
    color: #000000
}
</style>

<body>
    <div id="huro-app" class="app-wrapper">
        <div class="app-overlay"></div>
        <!--Pageloader-->
        <!-- Pageloader -->
        <div class="pageloader"></div>
        <div class="infraloader is-active"></div>
        <!--Mobile navbar-->
        <nav class="navbar mobile-navbar no-shadow is-hidden-desktop is-hidden-tablet" aria-label="main navigation">
            <div class="container">
                <!-- Brand -->
                <div class="navbar-brand">
                    <!-- Mobile menu toggler icon -->
                    <div class="brand-start">
                        <div class="navbar-burger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <a class="navbar-item is-brand" href="index.html">
                        <img class="light-image" src="{{ asset('img/logos/logo/logo.svg') }}" alt="">
                        <img class="dark-image" src="{{ asset('img/logos/logo/logo-light.svg') }}" alt="">
                    </a>

                    <div class="brand-end">
                        <div class="navbar-item has-dropdown is-notification is-hidden-tablet is-hidden-desktop">
                            <a class="navbar-link is-arrowless" href="javascript:void(0);">
                                <i data-feather="bell"></i>
                                <span class="new-indicator pulsate"></span>
                            </a>
                            <div class="navbar-dropdown is-boxed is-right">
                                <div class="heading">
                                    <div class="heading-left">
                                        <h6 class="heading-title">Notifications</h6>
                                    </div>
                                    <div class="heading-right">
                                        <a class="notification-link" href="#">See all</a>
                                    </div>
                                </div>
                                <div class="inner has-slimscroll">

                                    <ul class="notification-list">
                                        <li>
                                            <a class="notification-item">
                                                <div class="img-left">
                                                    <img class="user-photo" alt=""
                                                        src="https://via.placeholder.com/150x150"
                                                        data-demo-src="img/avatars/photos/13.jpg" />
                                                </div>
                                                <div class="user-content">
                                                    <p class="user-info"><span class="name">Tara
                                                            S.</span> sent you a message.</p>
                                                    <p class="time">2 hours ago</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="notification-item">
                                                <div class="img-left">
                                                    <img class="user-photo" alt=""
                                                        src="https://via.placeholder.com/150x150"
                                                        data-demo-src="img/avatars/photos/25.jpg" />
                                                </div>
                                                <div class="user-content">
                                                    <p class="user-info"><span class="name">Melany
                                                            W.</span> left a comment.</p>
                                                    <p class="time">3 hours ago</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown is-right is-spaced dropdown-trigger user-dropdown">
                            <div class="is-trigger" aria-haspopup="true">
                                <div class="profile-avatar">
                                    <img class="avatar" src="https://via.placeholder.com/150x150"
                                        data-demo-src="img/avatars/photos/8.jpg" alt="">
                                </div>
                            </div>
                            <div class="dropdown-menu" role="menu">
                                <div class="dropdown-content">
                                    <div class="dropdown-head">
                                        <div class="h-avatar is-large">
                                            <img class="avatar" src="https://via.placeholder.com/150x150"
                                                data-demo-src="img/avatars/photos/8.jpg" alt="">
                                        </div>
                                        <div class="meta">
                                            <span>Erik Kovalsky</span>
                                            <span>Product Managerdd</span>
                                        </div>
                                    </div>
                                    <a href="#" class="dropdown-item is-media">
                                        <div class="icon">
                                            <i class="lnil lnil-user-alt"></i>
                                        </div>
                                        <div class="meta">
                                            <span>Profile</span>
                                            <span>View your profile</span>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <a href="#" class="dropdown-item is-media">
                                        <div class="icon">
                                            <i class="lnil lnil-cog"></i>
                                        </div>
                                        <div class="meta">
                                            <span>Settings</span>
                                            <span>Account settings</span>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <div class="dropdown-item is-button">
                                        <button class="button h-button is-primary is-raised is-fullwidth logout-button">
                                            <span class="icon is-small">
                                                <i data-feather="log-out"></i>
                                            </span>
                                            <span>Logout</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
        <!--Mobile sidebar-->
        <div class="mobile-main-sidebar">
            <div class="inner">
                <ul class="icon-side-menu">
                    <li>
                        <a href="" id="home-sidebar-menu-mobile">
                            <i data-feather="search"></i>
                        </a>
                    </li>
                    <li>
                        <a href="" id="layouts-sidebar-menu-mobile">
                            <i data-feather="calendar"></i>
                        </a>
                    </li>
                    <li>
                        <a href="" id="elements-sidebar-menu-mobile">
                            <i data-feather="user"></i>
                        </a>
                    </li>
                    <li>
                        <a href="" id="open-messages-mobile">
                            <i data-feather="message-circle"></i>
                        </a>
                    </li>
                    <li>
                        <a href="" id="components-sidebar-menu-mobile">
                            <i data-feather="file"></i>
                        </a>
                    </li>
                </ul>

                <ul class="bottom-icon-side-menu">
                    <li>
                        <a href="javascript:" class="right-panel-trigger" data-panel="search-panel">
                            <i data-feather="search"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i data-feather="settings"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--Circular menu-->
        <div id="circular-menu" class="circular-menu">

            <a class="floating-btn" onclick="document.getElementById('circular-menu').classList.toggle('active');">
                <i aria-hidden="true" class="fas fa-bars"></i>
                <i aria-hidden="true" class="fas fa-times"></i>
            </a>

            <div class="items-wrapper">
                <div class="menu-item is-flex">
                    <label class="dark-mode">
                        <input type="checkbox" checked>
                        <span></span>
                    </label>
                </div>
                <a class="menu-item is-flex right-panel-trigger" data-panel="languages-panel">
                    <img src="{{ asset('img/icons/flags/united-states-of-america.svg') }}" alt="">
                </a>
                <a href="/admin-profile-notifications.html" class="menu-item is-flex">
                    <i data-feather="bell"></i>
                </a>
                <a class="menu-item is-flex right-panel-trigger" data-panel="activity-panel">
                    <i data-feather="grid"></i>
                </a>
            </div>

        </div>
        <!--Sidebar-->
        <div class="main-sidebar" style="background-color:#0395FF">
            <div class="sidebar-brand">
                <a href="/">
                    <img class="light-image" src="{{asset('img/logos/binghr.svg')}}" alt="">
                    <img class="dark-image" src="{{asset('img/logos/binghr.svg')}}" alt="">
                </a>
            </div>
            <div class="sidebar-inner">

                <div class="naver"></div>

                <ul class="icon-menu">
                    <!-- Activity -->
                    <li>
                        <a href="" id="home-sidebar-menu" data-content="Dashboards">
                            <i class="sidebar-svg" data-feather="search"></i>
                        </a>
                    </li> <!-- Layouts -->
                    <li>
                        <a href="" id="layouts-sidebar-menu" data-content="Layouts">
                            <i class="sidebar-svg" data-feather="calendar"></i>
                        </a>
                    </li> <!-- Bounties -->
                    <li>
                        <a href="" id="elements-sidebar-menu" data-content="Elements">
                            <i class="sidebar-svg" data-feather="user"></i>
                        </a>
                    </li> <!-- Bugs -->
                    <li>
                        <a href="" id="components-sidebar-menu" data-content="Components">
                            <i class="sidebar-svg" data-feather="file"></i>
                        </a>
                    </li> <!-- Messaging -->
                    <li id="messages-menu">
                        <a href="" id="open-messages" data-content="Messaging">
                            <i class="sidebar-svg" data-feather="message-circle"></i>
                        </a>
                    </li>
                </ul>

                <!-- User account for desktop view-->
                <ul class="bottom-menu">

                    <!-- Wallet -->
                    <li>
                        <a href="" id="open-settings" data-content="Settings">
                            <i class="sidebar-svg" data-feather="settings"></i>
                        </a>
                    </li>
                    <!-- Profile -->
                    <li id="user-menu">
                        <div id="profile-menu" class="dropdown profile-dropdown dropdown-trigger is-spaced is-up">
                            <img src="https://via.placeholder.com/150x150"
                                data-demo-src="img/avatars/photos/8.jpg" alt="">
                            <span class="status-indicator"></span>

                            <div class="dropdown-menu" role="menu">
                                <div class="dropdown-content">
                                    <div class="dropdown-head">
                                        <div class="h-avatar is-large">
                                            <img class="avatar" src="https://via.placeholder.com/150x150"
                                                data-demo-src="img/avatars/photos/8.jpg" alt="">
                                        </div>
                                        <div class="meta">
                                            <span>Erik Kovalsky</span>
                                            <span>Product Manager</span>
                                        </div>
                                    </div>
                                    <a href="" class="dropdown-item is-media">
                                        <div class="icon">
                                            <i class="lnil lnil-user-alt"></i>
                                        </div>
                                        <div class="meta">
                                            <span>Profile</span>
                                            <span>View your profile</span>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <a href="#" class="dropdown-item is-media">
                                        <div class="icon">
                                            <i class="lnil lnil-cog"></i>
                                        </div>
                                        <div class="meta">
                                            <span>Settings</span>
                                            <span>Account settings</span>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <div class="dropdown-item is-button">
                                        <button
                                            class="button h-button is-primary is-raised is-fullwidth logout-button">
                                            <span class="icon is-small">
                                                <i data-feather="log-out"></i>
                                            </span>
                                            <span>Logout</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Notifications -->
                    <li class="right-panel-trigger">
                        <a href="">
                            <i class="sidebar-svg" data-feather="align-left"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!--Page body-->
        <!-- sidebar with contents -->
        <div id="home-sidebar" class="sidebar-panel is-generic">
            <div class="subpanel-header">

                <div class="dropdown project-dropdown dropdown-trigger is-spaced">
                    <div class="h-avatar is-small">
                        <span class="avatar is-fake is-h-green">
                            <span>H</span>
                        </span>
                    </div>
                    <span class="status-indicator"></span>

                    <div class="dropdown-menu" role="menu">
                        <div class="dropdown-content">
                            <div class="dropdown-block">
                                <div class="h-avatar is-small">
                                    <span class="avatar is-fake is-warning">
                                        <span>D</span>
                                    </span>
                                </div>
                                <div class="meta">
                                    <span class="dark-inverted">Delivery App Project</span>
                                    <span>Food For Good</span>
                                </div>
                            </div>
                            <div class="dropdown-block">
                                <div class="h-avatar is-small">
                                    <span class="avatar is-fake is-h-green">
                                        <span>H</span>
                                    </span>
                                </div>
                                <div class="meta">
                                    <span class="dark-inverted">Health and Fitness Dashboard</span>
                                    <span>Fit'n'Dance</span>
                                </div>
                            </div>
                            <div class="dropdown-block">
                                <div class="h-avatar is-small">
                                    <span class="avatar is-fake is-info">
                                        <span>L</span>
                                    </span>
                                </div>
                                <div class="meta">
                                    <span class="dark-inverted">Learning Tracker Dashboard</span>
                                    <span>Fit'n'Dance</span>
                                </div>
                            </div>
                            <div class="dropdown-block">
                                <div class="h-avatar is-small">
                                    <span class="avatar is-fake is-h-purple">
                                        <span>B</span>
                                    </span>
                                </div>
                                <div class="meta">
                                    <span class="dark-inverted">Banking and Finance Dashboard</span>
                                    <span>H Bank</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="no-mb">Dashboards</h3>
                <div class="panel-close">
                    <i data-feather="x"></i>
                </div>
            </div>
            <div class="inner" data-simplebar>
                <ul>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Personal <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-personal-1.html">
                                    <i class="lnil lnil-analytics-alt-1"></i>
                                    <span>Personal V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-personal-2.html">
                                    <i class="lnil lnil-pie-chart"></i>
                                    <span>Personal V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-personal-3.html">
                                    <i class="lnil lnil-stats-up"></i>
                                    <span>Personal V3</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Finance <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-finance-1.html">
                                    <i class="lnil lnil-analytics-alt-1"></i>
                                    <span>Analytics Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-finance-2.html">
                                    <i class="lnil lnil-stats-up"></i>
                                    <span>Stocks Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-finance-3.html">
                                    <i class="lnil lnil-credit-card"></i>
                                    <span>Sales Dashboard</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Banking <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-banking-1.html">
                                    <i class="lnil lnil-bank"></i>
                                    <span>Banking V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-banking-2.html">
                                    <i class="lnil lnil-bank"></i>
                                    <span>Banking V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-banking-3.html">
                                    <i class="lnil lnil-bank"></i>
                                    <span>Banking V3</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Business <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-business-1.html">
                                    <i class="lnil lnil-plane-alt"></i>
                                    <span>Flights Booking</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-business-2.html">
                                    <i class="lnil lnil-apartment"></i>
                                    <span>Company Board</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-business-3.html">
                                    <i class="lnil lnil-users-alt"></i>
                                    <span>HR Board</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-business-4.html">
                                    <i class="lnil lnil-graduate"></i>
                                    <span>Course Board</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-business-5.html">
                                    <i class="lnil lnil-briefcase"></i>
                                    <span>Jobs Board</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Lifestyle <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-lifestyle-1.html">
                                    <i class="lnil lnil-cardiology"></i>
                                    <span>Influencer</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-lifestyle-2.html">
                                    <i class="lnil lnil-cloud-sun"></i>
                                    <span>Hobbies</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-lifestyle-3.html">
                                    <i class="lnil lnil-hospital-alt-3"></i>
                                    <span>Health</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-lifestyle-4.html">
                                    <i class="lnil lnil-books"></i>
                                    <span>Writer</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-lifestyle-5.html">
                                    <i class="lnil lnil-video-alt-1"></i>
                                    <span>Video</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-lifestyle-6.html">
                                    <i class="lnil lnil-tshirt"></i>
                                    <span>Soccer</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Ecommerce <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-ecommerce-1.html">
                                    <i class="lnil lnil-cart"></i>
                                    <span>Ecommerce V1</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Maps <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-map-1.html">
                                    <i class="lnil lnil-map"></i>
                                    <span>Map View V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-map-2.html">
                                    <i class="lnil lnil-map"></i>
                                    <span>Map View V2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Apps <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-apps-1.html">
                                    <i class="lnil lnil-pizza"></i>
                                    <span>Food Delivery</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-apps-2.html">
                                    <i class="lnil lnil-envelope"></i>
                                    <span>Inbox</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-messaging-chat.html">
                                    <i class="lnil lnil-bubble"></i>
                                    <span>Messaging V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/webapp-messaging-chat.html">
                                    <i class="lnil lnil-bubble"></i>
                                    <span>Messaging V2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="/wizard-v1.html">Wizard</a>
                    </li>
                    <li class="divider"></li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Charts <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-charts-apex.html">
                                    <i class="lnil lnil-pie-chart-alt"></i>
                                    <span>Apex Charts</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-charts-billboardjs.html">
                                    <i class="lnil lnil-bar-chart"></i>
                                    <span>Billboard JS</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Widgets <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-widgets-ui.html">
                                    <i class="lnil lnil-layout-alt-1"></i>
                                    <span>UI Widgets</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-widgets-creative.html">
                                    <i class="lnil lnil-layout-alt-2"></i>
                                    <span>Creative Widgets</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-widgets-list.html">
                                    <i class="lnil lnil-layout-alt-1"></i>
                                    <span>List Widgets</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-widgets-stats.html">
                                    <i class="lnil lnil-layout-alt-2"></i>
                                    <span>Stat Widgets</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Form Layouts <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-form-layouts-1.html">
                                    <i class="lnil lnil-passport"></i>
                                    <span>Form Layout V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-form-layouts-2.html">
                                    <i class="lnil lnil-passport"></i>
                                    <span>Form Layout V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-form-layouts-3.html">
                                    <i class="lnil lnil-passport"></i>
                                    <span>Form Layout V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-form-layouts-4.html">
                                    <i class="lnil lnil-passport"></i>
                                    <span>Form Layout V4</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-form-layouts-5.html">
                                    <i class="lnil lnil-passport"></i>
                                    <span>Form Layout V5</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Starters <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-blank-page-1.html">
                                    <i class="lnil lnil-layout"></i>
                                    <span>Regular Sidebar</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-blank-page-2.html">
                                    <i class="lnil lnil-layout"></i>
                                    <span>Curved Sidebar</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-blank-page-3.html">
                                    <i class="lnil lnil-layout"></i>
                                    <span>Colored Sidebar</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-blank-page-4.html">
                                    <i class="lnil lnil-layout"></i>
                                    <span>Curved Colored</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-blank-page-5.html">
                                    <i class="lnil lnil-layout"></i>
                                    <span>Sidebar Labels</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-blank-page-6.html">
                                    <i class="lnil lnil-layout"></i>
                                    <span>Hover Labels</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-blank-page-7.html">
                                    <i class="lnil lnil-layout"></i>
                                    <span>Floating Sidebar</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="webapp-blank-page-1.html">
                                    <i class="lnil lnil-layout-alt-1"></i>
                                    <span>Regular Navbar</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="webapp-blank-page-2.html">
                                    <i class="lnil lnil-layout-alt-1"></i>
                                    <span>Fading Navbar</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="webapp-blank-page-3.html">
                                    <i class="lnil lnil-layout-alt-1"></i>
                                    <span>Colored Navbar</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="webapp-blank-page-4.html">
                                    <i class="lnil lnil-layout-alt-1"></i>
                                    <span>Dropdown Navbar</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="webapp-blank-page-5.html">
                                    <i class="lnil lnil-layout-alt-1"></i>
                                    <span>Colored Dropdown</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="webapp-blank-page-6.html">
                                    <i class="lnil lnil-layout-alt-1"></i>
                                    <span>Clean Navbar</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="webapp-blank-page-7.html">
                                    <i class="lnil lnil-layout-alt-1"></i>
                                    <span>Clean Centered</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="webapp-blank-page-8.html">
                                    <i class="lnil lnil-layout-alt-1"></i>
                                    <span>Clean Transparent</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        <div class="mobile-subsidebar">
            <div class="inner">
                <div class="sidebar-title">
                    <h3>Dashboards</h3>
                </div>

                <ul class="submenu" data-simplebar>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Personal <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-personal-1.html">
                                    <i class="lnil lnil-analytics-alt-1"></i>
                                    <span>Personal V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-personal-2.html">
                                    <i class="lnil lnil-pie-chart"></i>
                                    <span>Personal V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-personal-3.html">
                                    <i class="lnil lnil-stats-up"></i>
                                    <span>Personal V3</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Finance <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-finance-1.html">
                                    <i class="lnil lnil-analytics-alt-1"></i>
                                    <span>Analytics Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-finance-2.html">
                                    <i class="lnil lnil-stats-up"></i>
                                    <span>Stocks Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-finance-3.html">
                                    <i class="lnil lnil-credit-card"></i>
                                    <span>Sales Dashboard</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Banking <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-banking-1.html">
                                    <i class="lnil lnil-bank"></i>
                                    <span>Banking V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-banking-2.html">
                                    <i class="lnil lnil-bank"></i>
                                    <span>Banking V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-banking-3.html">
                                    <i class="lnil lnil-bank"></i>
                                    <span>Banking V3</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Business <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-business-1.html">
                                    <i class="lnil lnil-plane-alt"></i>
                                    <span>Flights Booking</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-business-2.html">
                                    <i class="lnil lnil-apartment"></i>
                                    <span>Company Board</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-business-3.html">
                                    <i class="lnil lnil-users-alt"></i>
                                    <span>HR Board</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-business-4.html">
                                    <i class="lnil lnil-graduate"></i>
                                    <span>Course Board</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-business-5.html">
                                    <i class="lnil lnil-briefcase"></i>
                                    <span>Jobs Board</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Lifestyle <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-lifestyle-1.html">
                                    <i class="lnil lnil-cardiology"></i>
                                    <span>Influencer</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-lifestyle-2.html">
                                    <i class="lnil lnil-cloud-sun"></i>
                                    <span>Hobbies</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-lifestyle-3.html">
                                    <i class="lnil lnil-hospital-alt-3"></i>
                                    <span>Health</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-lifestyle-4.html">
                                    <i class="lnil lnil-books"></i>
                                    <span>Writer</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-lifestyle-5.html">
                                    <i class="lnil lnil-video-alt-1"></i>
                                    <span>Video</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-lifestyle-6.html">
                                    <i class="lnil lnil-tshirt"></i>
                                    <span>Soccer</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Ecommerce <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-ecommerce-1.html">
                                    <i class="lnil lnil-cart"></i>
                                    <span>Ecommerce V1</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Maps <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-map-1.html">
                                    <i class="lnil lnil-map"></i>
                                    <span>Map View V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-map-2.html">
                                    <i class="lnil lnil-map"></i>
                                    <span>Map View V2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Apps <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-apps-1.html">
                                    <i class="lnil lnil-pizza"></i>
                                    <span>Food Delivery</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-apps-2.html">
                                    <i class="lnil lnil-envelope"></i>
                                    <span>Inbox</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-messaging-chat.html">
                                    <i class="lnil lnil-bubble"></i>
                                    <span>Messaging V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/webapp-messaging-chat.html">
                                    <i class="lnil lnil-bubble"></i>
                                    <span>Messaging V2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="/wizard-v1.html">Wizard</a>
                    </li>
                    <li class="divider"></li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Charts <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-charts-apex.html">
                                    <i class="lnil lnil-pie-chart-alt"></i>
                                    <span>Apex Charts</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-charts-billboardjs.html">
                                    <i class="lnil lnil-bar-chart"></i>
                                    <span>Billboard JS</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Widgets <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-widgets-ui.html">
                                    <i class="lnil lnil-layout-alt-1"></i>
                                    <span>UI Widgets</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-widgets-creative.html">
                                    <i class="lnil lnil-layout-alt-2"></i>
                                    <span>Creative Widgets</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-widgets-list.html">
                                    <i class="lnil lnil-layout-alt-1"></i>
                                    <span>List Widgets</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-dashboards-widgets-stats.html">
                                    <i class="lnil lnil-layout-alt-2"></i>
                                    <span>Stat Widgets</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Form Layouts <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="/admin-form-layouts-1.html">
                                    <i class="lnil lnil-passport"></i>
                                    <span>Form Layout V1</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-form-layouts-2.html">
                                    <i class="lnil lnil-passport"></i>
                                    <span>Form Layout V2</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-form-layouts-3.html">
                                    <i class="lnil lnil-passport"></i>
                                    <span>Form Layout V3</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-form-layouts-4.html">
                                    <i class="lnil lnil-passport"></i>
                                    <span>Form Layout V4</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="/admin-form-layouts-5.html">
                                    <i class="lnil lnil-passport"></i>
                                    <span>Form Layout V5</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <div class="collapse-wrap">
                            <a href="javascript:void(0);" class="parent-link">Starters <i
                                    data-feather="chevron-right"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a class="is-submenu" href="admin-blank-page-1.html">
                                    <i class="lnil lnil-layout"></i>
                                    <span>Regular Sidebar</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-blank-page-2.html">
                                    <i class="lnil lnil-layout"></i>
                                    <span>Curved Sidebar</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-blank-page-3.html">
                                    <i class="lnil lnil-layout"></i>
                                    <span>Colored Sidebar</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="admin-blank-page-4.html">
                                    <i class="lnil lnil-layout"></i>
                                    <span>Curved Colored</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="webapp-blank-page-1.html">
                                    <i class="lnil lnil-layout-alt-1"></i>
                                    <span>Regular Navbar</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="webapp-blank-page-2.html">
                                    <i class="lnil lnil-layout-alt-1"></i>
                                    <span>Fading Navbar</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="webapp-blank-page-3.html">
                                    <i class="lnil lnil-layout-alt-1"></i>
                                    <span>Colored Navbar</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="webapp-blank-page-4.html">
                                    <i class="lnil lnil-layout-alt-1"></i>
                                    <span>Dropdown Navbar</span>
                                </a>
                            </li>
                            <li>
                                <a class="is-submenu" href="webapp-blank-page-5.html">
                                    <i class="lnil lnil-layout-alt-1"></i>
                                    <span>Colored Dropdown</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Content Wrapper -->
        <div class="view-wrapper" data-naver-offset="150" data-menu-item="#home-sidebar-menu"
            data-mobile-item="#home-sidebar-menu-mobile">

            <div class="page-content-wrapper">
                <div class="page-content is-relative">

                    <div class="page-title has-text-centered">
                        <!-- Sidebar Trigger -->
                        <div class="huro-hamburger nav-trigger push-resize" data-sidebar="home-sidebar">
                            <span class="menu-toggle has-chevron">
                                <span class="icon-box-toggle">
                                    <span class="rotate">
                                        <i class="icon-line-top"></i>
                                        <i class="icon-line-center"></i>
                                        <i class="icon-line-bottom"></i>
                                    </span>
                                </span>
                            </span>
                        </div>

                        <div class="title-wrap">
                            <h1 class="title is-4">Dashboard</h1>
                        </div>
                        <!--Select Year Widget-->
                        <div class="search-widget is-straight ml-4" style="padding: 0px; background-color:transparent; max-width:fit-content;">
                            <div class="field">
                                <div class="select">
                                    <select style="border-color: transparent">
                                        <option>Year</option>
                                        <option>2022</option>
                                        <option>2021</option>
                                        <option>2020</option>
                                        <option>2019</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--Top Nav Search Widget-->
                        <div class="search-widget is-straight ml-4" style="padding: 0px; background-color:transparent; max-width:230px;">
                            <div class="field">
                                <div class="control">
                                    <input type="text" class="input" placeholder="Search..." style="background:#fff;height: 32px;border-radius:9px;color:rgb(27, 27, 27);font-size:12px">
                                    <button class="search-button" style="background:transparent;color:rgb(176, 176, 176);padding-top:4px;padding-bottom:14px">
                                        <i data-feather="search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="toolbar ml-auto">
                            <div class="toolbar-link">
                                <label class="dark-mode ml-auto">
                                    <input type="checkbox" checked>
                                    <span></span>
                                </label>
                            </div>

                            <div class="dropdown dropdown-trigger">
                                <div class="is-trigger">
                                    <button class="button" aria-haspopup="true"
                                        aria-controls="dropdown-menu" style="background-color:transparent;border-color:transparent">
                                        <span>Language</span>
                                        <span class="icon is-small">
                                            <i class="fas fa-angle-down" aria-hidden="true"></i>
                                        </span>
                                    </button>
                                </div>
                                <div class="dropdown-menu" id="dropdown-menu" role="menu">
                                    <div class="dropdown-content" style="text-align: left">
                                        <a href="#" class="dropdown-item font-size-base">
                                            French
                                        </a>
                                        <a href="#" class="dropdown-item font-size-base">
                                            German
                                        </a>
                                        <a class="dropdown-item font-size-base">
                                           Poutugese
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown dropdown-trigger">
                                <div class="is-trigger">
                                    <button class="button" aria-haspopup="true"
                                        aria-controls="dropdown-menu" style="background-color:transparent;border-color:transparent">
                                        <span>Reports</span>
                                        <span class="icon is-small">
                                            <i class="fas fa-angle-down" aria-hidden="true"></i>
                                        </span>
                                    </button>
                                </div>
                                <div class="dropdown-menu" id="dropdown-menu" role="menu">
                                    <div class="dropdown-content" style="text-align: left">
                                        <a href="#" class="dropdown-item font-size-base">
                                            Active
                                        </a>
                                        <a href="#" class="dropdown-item font-size-base">
                                            Inactive
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown dropdown-trigger">
                                <div class="is-trigger">
                                    <button class="button" aria-haspopup="true"
                                        aria-controls="dropdown-menu" style="background-color:transparent;border-color:transparent">
                                        <span>Project</span>
                                        <span class="icon is-small">
                                            <i class="fas fa-angle-down" aria-hidden="true"></i>
                                        </span>
                                    </button>
                                </div>
                                <div class="dropdown-menu" id="dropdown-menu" role="menu">
                                    <div class="dropdown-content" style="text-align: left">
                                        <a href="#" class="dropdown-item font-size-base">
                                            Completed
                                        </a>
                                        <a href="#" class="dropdown-item font-size-base">
                                            Ongoing
                                        </a>
                                        <a class="dropdown-item font-size-base">
                                           Finished
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <div class="toolbar-notifications is-hidden-mobile">
                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                    <div class="is-trigger" aria-haspopup="true">
                                        <i class="fas fa-envelope" style="color: #000000;font-size:18px"></i>
                                        <span class="new-indicator pulsate"></span>
                                    </div>
                                </div>
                            </div>


                            <div class="toolbar-notifications is-hidden-mobile">
                                <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                    <div class="is-trigger" aria-haspopup="true">
                                        <i class="fas fa-bell" style="color: #000000;font-size:18px"></i>
                                        <span class="new-indicator pulsate"></span>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <div class="heading">
                                                <div class="heading-left">
                                                    <h6 class="heading-title">Notifications</h6>
                                                </div>
                                                <div class="heading-right">
                                                    <a class="notification-link"
                                                        href="">See all</a>
                                                </div>
                                            </div>
                                            <ul class="notification-list">
                                                <li>
                                                    <a class="notification-item">
                                                        <div class="img-left">
                                                            <img class="user-photo" alt=""
                                                                src="https://via.placeholder.com/150x150"
                                                                data-demo-src="img/avatars/photos/7.jpg" />
                                                        </div>
                                                        <div class="user-content">
                                                            <p class="user-info"><span
                                                                    class="name">Alice C.</span> left a
                                                                comment.</p>
                                                            <p class="time">1 hour ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="notification-item">
                                                        <div class="img-left">
                                                            <img class="user-photo" alt=""
                                                                src="https://via.placeholder.com/150x150"
                                                                data-demo-src="img/avatars/photos/12.jpg" />
                                                        </div>
                                                        <div class="user-content">
                                                            <p class="user-info"><span
                                                                    class="name">Joshua S.</span> uploaded a
                                                                file.</p>
                                                            <p class="time">2 hours ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="notification-item">
                                                        <div class="img-left">
                                                            <img class="user-photo" alt=""
                                                                src="https://via.placeholder.com/150x150"
                                                                data-demo-src="img/avatars/photos/13.jpg" />
                                                        </div>
                                                        <div class="user-content">
                                                            <p class="user-info"><span
                                                                    class="name">Tara S.</span> sent you a
                                                                message.</p>
                                                            <p class="time">2 hours ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="notification-item">
                                                        <div class="img-left">
                                                            <img class="user-photo" alt=""
                                                                src="https://via.placeholder.com/150x150"
                                                                data-demo-src="img/avatars/photos/25.jpg" />
                                                        </div>
                                                        <div class="user-content">
                                                            <p class="user-info"><span
                                                                    class="name">Melany W.</span> left a
                                                                comment.</p>
                                                            <p class="time">3 hours ago</p>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <a class="toolbar-link right-panel-trigger">
                                <i class="fas fa-user" style="color: #000000;font-size:18px"></i>
                            </a>
                        </div>
                    </div>

                    <div class="page-content-inner">

                        <!--Banking Dashboard V1-->
                        <div class="banking-dashboard banking-dashboard-v1">

                            <div class="columns is-multiline">

                                <!--Credit Cards-->
                                <div class="column is-4">
                                    <div class="dashboard-card is-credit-cards">
                                        <div class="title-wrap">
                                            <h3 class="dark-inverted">My Cards</h3>
                                            <button class="button is-circle is-dark-outlined">
                                                <span class="icon is-small">
                                                    <i data-feather="plus"></i>
                                                </span>
                                            </button>
                                        </div>

                                        <div class="card-block">
                                            <div class="card-block-inner is-dark-bordered-12">
                                                <div class="credit-card is-theme-1">
                                                    <div class="shape"></div>
                                                    <div class="top">
                                                        <div class="card-number">
                                                            <span>** 4628</span>
                                                            <img src="img/icons/dashboards/banking/visa-squared-white.svg"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="bottom">
                                                        <span>Credit Card</span>
                                                    </div>
                                                </div>
                                                <div class="credit-card-meta">
                                                    <span>Card Balance</span>
                                                    <span class="dark-inverted">$2,834.31</span>
                                                </div>
                                                <div class="credit-card-end">
                                                    <!--Dropdown-->
                                                    <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                                        <div class="is-trigger" aria-haspopup="true">
                                                            <i data-feather="more-vertical"></i>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a href="#" class="dropdown-item is-media">
                                                                    <div class="icon">
                                                                        <i class="lnil lnil-coins"></i>
                                                                    </div>
                                                                    <div class="meta">
                                                                        <span>Invest</span>
                                                                        <span>Buy more stocks</span>
                                                                    </div>
                                                                </a>
                                                                <a href="#" class="dropdown-item is-media">
                                                                    <div class="icon">
                                                                        <i class="lnil lnil-dollar-up"></i>
                                                                    </div>
                                                                    <div class="meta">
                                                                        <span>Compare</span>
                                                                        <span>Compare with others</span>
                                                                    </div>
                                                                </a>
                                                                <a href="#" class="dropdown-item is-media">
                                                                    <div class="icon">
                                                                        <i class="lnil lnil-bank"></i>
                                                                    </div>
                                                                    <div class="meta">
                                                                        <span>Trade</span>
                                                                        <span>View opportunities</span>
                                                                    </div>
                                                                </a>
                                                                <hr class="dropdown-divider">
                                                                <a href="#" class="dropdown-item is-media">
                                                                    <div class="icon">
                                                                        <i class="lnil lnil-wallet-alt-1"></i>
                                                                    </div>
                                                                    <div class="meta">
                                                                        <span>Wallet</span>
                                                                        <span>Open stock wallet</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info-block-inner">
                                                <div class="title-wrap">
                                                    <h3 class="dark-inverted">Information</h3>
                                                    <a class="action-link">Edit</a>
                                                </div>
                                                <div class="info-block-line">
                                                    <h4 class="dark-inverted">Status</h4>
                                                    <span><i aria-hidden="true"
                                                            class="fas fa-circle text-success"></i>Active</span>
                                                </div>
                                                <div class="info-block-line">
                                                    <h4 class="dark-inverted">Expires in</h4>
                                                    <span>134 days</span>
                                                </div>
                                                <div class="info-block-line">
                                                    <h4 class="dark-inverted">Type</h4>
                                                    <span class="has-image">
                                                        <img src="img/icons/dashboards/banking/visa-squared-color.svg"
                                                            alt="">
                                                        Credit card
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="card-block-inner is-dark-bordered-12">
                                                <div class="credit-card is-theme-2">
                                                    <div class="shape"></div>
                                                    <div class="top">
                                                        <div class="card-number">
                                                            <span>** 2649</span>
                                                            <img src="img/icons/dashboards/banking/visa-squared-white.svg"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="bottom">
                                                        <span>Debit Card</span>
                                                    </div>
                                                </div>
                                                <div class="credit-card-meta">
                                                    <span>Card Balance</span>
                                                    <span class="dark-inverted">$10,563.18</span>
                                                </div>
                                                <div class="credit-card-end">
                                                    <!--Dropdown-->
                                                    <div class="dropdown is-spaced is-dots is-right dropdown-trigger">
                                                        <div class="is-trigger" aria-haspopup="true">
                                                            <i data-feather="more-vertical"></i>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a href="#" class="dropdown-item is-media">
                                                                    <div class="icon">
                                                                        <i class="lnil lnil-coins"></i>
                                                                    </div>
                                                                    <div class="meta">
                                                                        <span>Invest</span>
                                                                        <span>Buy more stocks</span>
                                                                    </div>
                                                                </a>
                                                                <a href="#" class="dropdown-item is-media">
                                                                    <div class="icon">
                                                                        <i class="lnil lnil-dollar-up"></i>
                                                                    </div>
                                                                    <div class="meta">
                                                                        <span>Compare</span>
                                                                        <span>Compare with others</span>
                                                                    </div>
                                                                </a>
                                                                <a href="#" class="dropdown-item is-media">
                                                                    <div class="icon">
                                                                        <i class="lnil lnil-bank"></i>
                                                                    </div>
                                                                    <div class="meta">
                                                                        <span>Trade</span>
                                                                        <span>View opportunities</span>
                                                                    </div>
                                                                </a>
                                                                <hr class="dropdown-divider">
                                                                <a href="#" class="dropdown-item is-media">
                                                                    <div class="icon">
                                                                        <i class="lnil lnil-wallet-alt-1"></i>
                                                                    </div>
                                                                    <div class="meta">
                                                                        <span>Wallet</span>
                                                                        <span>Open stock wallet</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dashboard-card is-transactions">
                                        <div class="title-wrap">
                                            <h3 class="dark-inverted">Transactions</h3>
                                            <a class="action-link">View All</a>
                                        </div>

                                        <div class="transactions">
                                            <div class="media-flex-center">
                                                <div class="h-icon is-green is-rounded">
                                                    <i class="lnil lnil-service"></i>
                                                </div>
                                                <div class="flex-meta is-lighter">
                                                    <span>Food Delivery</span>
                                                    <span>Oct 23, 2020 - 8:46pm</span>
                                                </div>
                                                <div class="flex-end">
                                                    <span class="dark-inverted">- $41.49</span>
                                                </div>
                                            </div>
                                            <div class="media-flex-center">
                                                <div class="h-icon is-orange is-rounded">
                                                    <i class="lnil lnil-analytics-alt-1"></i>
                                                </div>
                                                <div class="flex-meta is-lighter">
                                                    <span>Market Earnings</span>
                                                    <span>Oct 18, 2020 - 9:11am</span>
                                                </div>
                                                <div class="flex-end">
                                                    <span class="dark-inverted">+ $263.39</span>
                                                </div>
                                            </div>
                                            <div class="media-flex-center">
                                                <div class="h-icon is-purple is-rounded">
                                                    <i class="lnil lnil-cart-alt"></i>
                                                </div>
                                                <div class="flex-meta is-lighter">
                                                    <span>Online Order</span>
                                                    <span>Oct 16, 2020 - 2:13pm</span>
                                                </div>
                                                <div class="flex-end">
                                                    <span class="dark-inverted">- $92.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="column is-8">

                                    <div class="columns is-multiline">
                                        <div class="column is-6">
                                            <div class="dashboard-card">
                                                <div class="title-wrap">
                                                    <h3 class="dark-inverted">Quick Transfer</h3>
                                                </div>

                                                <div class="field">
                                                    <div class="control is-combo">
                                                        <div class="image-combo-box">
                                                            <div class="box-inner">
                                                                <div class="combo-item">
                                                                    <img src="https://via.placeholder.com/150x150"
                                                                        data-demo-src="img/avatars/photos/8.jpg"
                                                                        alt="">
                                                                    <span class="selected-item">Select an
                                                                        account</span>
                                                                </div>
                                                            </div>
                                                            <div class="box-chevron">
                                                                <i data-feather="chevron-down"></i>
                                                            </div>
                                                            <div class="box-dropdown">
                                                                <div class="dropdown-inner has-slimscroll">
                                                                    <ul>
                                                                        <li>
                                                                            <span class="item-icon">
                                                                                <img src="https://via.placeholder.com/150x150"
                                                                                    data-demo-src="img/icons/dashboards/banking/bank-1.svg"
                                                                                    alt="">
                                                                            </span>
                                                                            <span class="item-name">4156 1000
                                                                                56565 17</span>
                                                                            <span class="checkmark">
                                                                                <i data-feather="check"></i>
                                                                            </span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="item-icon">
                                                                                <img src="https://via.placeholder.com/150x150"
                                                                                    data-demo-src="img/icons/dashboards/banking/bank-2.svg"
                                                                                    alt="">
                                                                            </span>
                                                                            <span class="item-name">2247 2427
                                                                                89975 12</span>
                                                                            <span class="checkmark">
                                                                                <i data-feather="check"></i>
                                                                            </span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="item-icon">
                                                                                <img src="https://via.placeholder.com/150x150"
                                                                                    data-demo-src="img/icons/dashboards/banking/bank-3.svg"
                                                                                    alt="">
                                                                            </span>
                                                                            <span class="item-name">2247 2427
                                                                                89975 12</span>
                                                                            <span class="checkmark">
                                                                                <i data-feather="check"></i>
                                                                            </span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <p class="context-text">Select one of your bank accounts to transfer
                                                    some funds.
                                                    The
                                                    transfer cannot exceed 20% of your balance.</p>
                                                <div class="level is-mobile">
                                                    <div class="level-left"></div>
                                                    <div class="level-right">
                                                        <div class="level-item">
                                                            <a class="action-link">Confirm</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="dashboard-card" data-toggle="popover" data-pop-mode="hover"
                                                data-pop-width="220" data-pop-title="Level 3"
                                                data-pop-content="Awesome! You're already a level 3 customer. Keep up for more."
                                                data-pop-position="auto" data-pop-icon="lnil lnil-crown-alt-1"
                                                data-pop-iconbg="green">
                                                <div class="title-wrap">
                                                    <h3 class="dark-inverted">Overall Progress</h3>
                                                    <span class="title-meta dark-inverted">Lvl 3</span>
                                                </div>

                                                <div class="progress-wrap m-b-10 m-t-10">
                                                    <progress class="progress is-primary is-tiny" value="65"
                                                        max="100">65%</progress>
                                                </div>
                                                <p class="context-text">This is your Huro customer level. Reach out
                                                    higher
                                                    levels to unlock achievements, special gifts, and more.</p>
                                                <div class="level is-mobile">
                                                    <div class="level-left"></div>
                                                    <div class="level-right">
                                                        <div class="level-item">
                                                            <a class="action-link">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="column is-6">
                                            <div class="dashboard-card is-contacts">
                                                <div class="title-wrap">
                                                    <h3 class="dark-inverted">Send Money To</h3>
                                                </div>

                                                <div class="people-wrap">
                                                    <div class="people">
                                                        <div class="h-avatar is-small">
                                                            <span class="avatar is-fake is-warning"
                                                                data-user-popover="36">
                                                                <span>BT</span>
                                                            </span>
                                                        </div>
                                                        <div class="h-avatar is-small">
                                                            <img class="avatar"
                                                                src="https://via.placeholder.com/150x150"
                                                                data-demo-src="img/avatars/photos/18.jpg" alt=""
                                                                data-user-popover="7">
                                                        </div>
                                                        <div class="h-avatar is-small">
                                                            <span class="avatar is-fake is-info"
                                                                data-user-popover="34">
                                                                <span>JD</span>
                                                            </span>
                                                        </div>
                                                        <div class="h-avatar is-small">
                                                            <img class="avatar"
                                                                src="https://via.placeholder.com/150x150"
                                                                data-demo-src="img/avatars/photos/7.jpg" alt=""
                                                                data-user-popover="0">
                                                        </div>
                                                    </div>

                                                    <div class="actions">
                                                        <span>See all Contacts</span>
                                                        <a class="is-dark-primary-hover"><i
                                                                data-feather="arrow-right"></i></a>
                                                    </div>
                                                </div>

                                                <div class="transfer-form">
                                                    <div class="field">
                                                        <div class="control is-combo">
                                                            <div class="image-combo-box">
                                                                <div class="box-inner">
                                                                    <div class="combo-item">
                                                                        <img src="https://via.placeholder.com/150x150"
                                                                            data-demo-src="img/avatars/photos/8.jpg"
                                                                            alt="">
                                                                        <span class="selected-item">Select an
                                                                            account</span>
                                                                    </div>
                                                                </div>
                                                                <div class="box-chevron">
                                                                    <i data-feather="chevron-down"></i>
                                                                </div>
                                                                <div class="box-dropdown">
                                                                    <div class="dropdown-inner has-slimscroll">
                                                                        <ul>
                                                                            <li>
                                                                                <span class="item-icon">
                                                                                    <img src="https://via.placeholder.com/150x150"
                                                                                        data-demo-src="img/icons/dashboards/banking/bank-1.svg"
                                                                                        alt="">
                                                                                </span>
                                                                                <span class="item-name">4156 1000
                                                                                    56565 17</span>
                                                                                <span class="checkmark">
                                                                                    <i data-feather="check"></i>
                                                                                </span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="item-icon">
                                                                                    <img src="https://via.placeholder.com/150x150"
                                                                                        data-demo-src="img/icons/dashboards/banking/bank-2.svg"
                                                                                        alt="">
                                                                                </span>
                                                                                <span class="item-name">2247 2427
                                                                                    89975 12</span>
                                                                                <span class="checkmark">
                                                                                    <i data-feather="check"></i>
                                                                                </span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="item-icon">
                                                                                    <img src="https://via.placeholder.com/150x150"
                                                                                        data-demo-src="img/icons/dashboards/banking/bank-3.svg"
                                                                                        alt="">
                                                                                </span>
                                                                                <span class="item-name">2247 2427
                                                                                    89975 12</span>
                                                                                <span class="checkmark">
                                                                                    <i data-feather="check"></i>
                                                                                </span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="field">
                                                        <label>Amount</label>
                                                        <div class="field has-addons">

                                                            <div class="control">
                                                                <span class="select currency-select">
                                                                    <select>
                                                                        <option>$</option>
                                                                        <option>£</option>
                                                                        <option>€</option>
                                                                    </select>
                                                                </span>
                                                            </div>
                                                            <div class="control is-expanded">
                                                                <input class="input" type="text"
                                                                    placeholder="Amount of money">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <p class="context-text">Funds will reach destination tomorrow.
                                                    </p>

                                                    <div class="submit-wrap">
                                                        <button
                                                            class="button h-button is-fullwidth is-primary is-big is-raised is-bold">Send
                                                            Money</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="column is-12">
                                            <div class="dashboard-card is-income">

                                                <div class="field">
                                                    <div class="control">
                                                        <div class="h-select">
                                                            <div class="select-box">
                                                                <span>Last 10 days</span>
                                                            </div>
                                                            <div class="select-icon">
                                                                <i data-feather="chevron-down"></i>
                                                            </div>
                                                            <div class="select-drop has-slimscroll-sm">
                                                                <div class="drop-inner">
                                                                    <div class="option-row">
                                                                        <input type="radio" name="period_select"
                                                                            checked>
                                                                        <div class="option-meta">
                                                                            <span>Last 10 days</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="option-row">
                                                                        <input type="radio" name="period_select">
                                                                        <div class="option-meta">
                                                                            <span>Last month</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="option-row">
                                                                        <input type="radio" name="period_select">
                                                                        <div class="option-meta">
                                                                            <span>Last 3 months</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="option-row">
                                                                        <input type="radio" name="period_select">
                                                                        <div class="option-meta">
                                                                            <span>Last 6 months</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="income-chart"></div>
                                            </div>
                                        </div>
                                    </div>



                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>

        <!--Huro Scripts-->
        <!--Load Mapbox-->

        <!-- Concatenated plugins -->
        <script src="{{asset('js/app.js')}}"></script>

        <!-- Huro js -->
        <script src="{{asset('js/functions.js')}}"></script>
        <script src="{{asset('js/main.js')}}" async></script>
        <script src="{{asset('js/components.js')}}" async></script>
        <script src="{{asset('js/popover.js')}}" async></script>
        <script src="{{asset('js/widgets.js')}}" async></script>


        <!-- Additional Features -->
        <script src="js/touch.js" async></script>

        <!-- Landing page js -->

        <!-- Dashboards js -->










        <script src="{{asset('js/banking-1.js')}}" async></script>







        <!-- Charts js -->



        <!--Forms-->

        <!--Wizard-->

        <!-- Layouts js -->











        <script src="{{asset('js/syntax.js')}}" async></script>
    </div>
</body>

</html>
