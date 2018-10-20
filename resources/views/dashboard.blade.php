@extends('layouts.app')
@section('head')
            @include('includes.head',['title'=>'Dashboard'])
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
@endsection
<!-- monitor -->
@section('content')
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
@endsection

@section('scripts')
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
@endsection