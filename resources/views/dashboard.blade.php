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
         <!--   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

            <![endif]-->
@endsection
<!-- monitor -->
@section('content')
    @can('employees',\Illuminate\Support\Facades\Auth::user())
    <section class="monitor padding-space-half">
        <div class="container-fluid">
            <div class="row">
                <a href="{{route('customers.index')}}"><div class="col-md-3 col-sm-6 col-xs-6 col-mobile">
                    <div class="monitor-box relative">
                        <div class="icon">
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                        </div>
                        <h4>Customers</h4>

                        <div class="count-number">
                            <p>{{ count(\App\Entities\User::where('role_id',2)->get()) }} <i class="fa fa-long-arrow-up" aria-hidden="true"></i></p>
                        </div>
                    </div>
                </div><a/>

                <a href="{{ route('employees.index') }}">
                    <div class="col-md-3 col-sm-6 col-xs-6 col-mobile">
                    <div class="monitor-box relative">
                        <div class="icon">
                            <i class="fa fa-user-secret" aria-hidden="true"></i>
                        </div>
                        <h4>Employees</h4>

                        <div class="count-number">
                            <p>{{ count(\App\Entities\Employee::all()) }} <i class="fa fa-long-arrow-up" aria-hidden="true"></i></p>
                        </div>
                    </div>
                </div>
                </a>

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
    @endcan
    <!-- /monitor -->
    <!-- calendar -->
    <section class="board calendar padding-space-half">
        <a href="{{ route('appointments.create') }}"><span style="margin-left:30px"><button class="btn btn-default custom-btn btn-inline"> ADD NEW</button></span></a>
        <div id="appointment-calendar" style="margin-top: 20px;margin-left: 30px;width: 95%"></div>
    </section>
    <!-- /calendar -->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js'></script>

    <script>
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#appointment-calendar').fullCalendar({
                height:750,
                header: { center: 'month,agendaWeek,listWeek' },
                events : [
                        @foreach($appointments as $appointment)
                    {
                        title : '{{ $appointment->user->first_name. ' '. $appointment->user->last_name }}',
                        start : '{{ $appointment->date.' '.$appointment->start_time }}',
                        end : '{{ $appointment->date.' '.$appointment->finish_time }}',
                        url: '{{ route('appointments.show',$appointment->id) }}',
                        backgroundColor:'#3e4140',
                    },
                    @endforeach
                ]
            })
        });
    </script>
@endsection

@section('scripts')
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- Moment -->
    <script src="/js/moment.min.js"></script>
    <!-- Bootstrap Datepicker -->
    <script src="/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Main -->
    <script src="/js/main.js"></script>
@endsection
