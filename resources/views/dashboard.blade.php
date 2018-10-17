<!DOCTYPE html>
<html lang="en" class="fullscreen">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Online Booking | Dashboard</title>

    <!-- Favicon -->
    <!--[if IE]><link rel="shortcut icon" href="/img/favicons/favicon.ico"><![endif]-->
    <link rel="icon" href="/img/favicons/favicon.png">

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Datepicker -->
    <link rel="stylesheet" href="/css/bootstrap-datetimepicker.min.css">


    <!-- Font -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="/css/sidebar.css">
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/base.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="page dashboard-page fullscreen relative">

<!-- aside -->
<aside class="aside">
    <div class="aside-content">
        <div class="logo">
            <img src="/img/dashboard-logo.png" alt="CRM" class="img-responsive">
        </div>

        <nav class="aside-menu">
            <ul>
                <li>
                    <a href="/dashboard.html"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
                </li>

                <li>
                    <a href="#" class="toggle-menu">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <span>Customers</span>
                        <div class="icon"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>
                    </a>
                    <ul class="nested-menu">
                        <li>
                            <a href="#">Add Customers</a>
                        </li>
                        <li>
                            <a href="#">Groups</a>
                        </li>
                        <li>
                            <a href="#">List</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#" class="toggle-menu">
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                        <span>My bookings</span>
                        <div class="icon"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#" class="toggle-menu">
                        <i class="fa fa-file-text-o" aria-hidden="true"></i>
                        <span>Report</span>
                        <div class="icon"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>
                    </a>
                    <ul class="nested-menu">
                        <li>
                            <a href="#">Project Report</a>
                        </li>
                        <li>
                            <a href="#">Client Report</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- /aside -->

<!-- content -->
<main class="dashboard-content relative">
    <!-- header -->
    <header class="header">
        <div class="header-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-2">
                        <div class="bt-menu-trigger">
                            <span></span>
                        </div>
                    </div>
                    <div class="col-xs-10">
                        <ul class="settings">
                            <li class="dropdown">
                                <a data-toggle="dropdown">
                                    <i class="fa fa-cog" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-wifi" aria-hidden="true"></i>Wi-fi</a></li>
                                    <li><a href="#"><i class="fa fa-area-chart" aria-hidden="true"></i>Settings</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a data-toggle="dropdown">
                                    <img src="/img/avatar.png" alt="avatar" class="img-circle">
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>User Profile</a></li>
                                    <li><a href="#"><i class="fa fa-inbox" aria-hidden="true"></i>Inbox</a></li>
                                    <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-content">
            <div class="container-fluid">
                <div class="row col-xs-12 clearfix">
                    <div class="icon">
                        <i class="fa fa-tachometer" aria-hidden="true"></i>
                    </div>
                    <div class="header-title">
                        <h2>Admin Dashboard</h2>
                        <p>Very detailed & featured admin.</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /header -->

    <!-- monitor -->
    <section class="monitor padding-space-half">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6 col-mobile">
                    <div class="monitor-box relative">
                        <div class="icon">
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                        </div>
                        <h4>Clients</h4>

                        <div class="count-number">
                            <p>11 <i class="fa fa-long-arrow-up" aria-hidden="true"></i></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-mobile">
                    <div class="monitor-box relative">
                        <div class="icon">
                            <i class="fa fa-user-secret" aria-hidden="true"></i>
                        </div>
                        <h4>Employees</h4>

                        <div class="count-number">
                            <p>2 <i class="fa fa-long-arrow-up" aria-hidden="true"></i></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-6 col-mobile">
                    <div class="monitor-box relative">
                        <div class="icon">
                            <i class="fa fa-money" aria-hidden="true"></i>
                        </div>
                        <h4>Total Expense</h4>

                        <div class="count-number">
                            <p>121 <i class="fa fa-long-arrow-up" aria-hidden="true"></i></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-mobile">
                    <div class="monitor-box relative">
                        <div class="icon">
                            <i class="fa fa-files-o" aria-hidden="true"></i>
                        </div>
                        <h4>Bookings for today</h4>

                        <div class="count-number">
                            <p>98 <i class="fa fa-long-arrow-up" aria-hidden="true"></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /monitor -->

    <!-- calendar -->
    <section class="board calendar padding-space-half">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="board-box">
                        <div class="board-title">
                            <h4>Calendar</h4>
                        </div>
                        <div class="calendar-wrapper">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /calendar -->

</main>
<!-- /content -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/js/jquery-3.2.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.min.js"></script>
<!-- Moment -->
<script src="/js/moment.min.js"></script>
<!-- Bootstrap Datepicker -->
<script src="/js/bootstrap-datetimepicker.min.js"></script>
<!-- Main -->
<script src="/js/main.js"></script>
</body>
</html>