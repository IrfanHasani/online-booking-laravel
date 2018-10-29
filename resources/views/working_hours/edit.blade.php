@extends('layouts.app')
@section('head')
    @include('includes.head',['title'=>'Create new employee'])
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
    <a href="{{ \Illuminate\Support\Facades\URL::previous() }}"><h4>◀ Back</h4></a>

    <div class="form-group padding-space">
        <div class="container-fluid">
            <div class="row col-md-offset-3 col-md-6">
                @include('includes.message-block')
                <div class="panel panel-default panel-custom">
                    <div class="panel-heading panel-custom-heading">
                        <h3 class="panel-title">Working hours of: {{\App\Entities\Employee::find($workingHour->employee_id)->first_name.' '.\App\Entities\Employee::find($workingHour->employee_id)->last_name}} </h3>
                    </div>
                    <div class="panel-body">
                        {!! Form::model($workingHour, ['method' => 'PATCH','route' => ['working-hours.update', $workingHour->id]]) !!}
                        {{ csrf_field() }}
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="employee_id">Employee: </label>
                                        <select name="employee_id" class="form-control custom-control">
                                            @foreach($employees as $employee)
                                                <option value="{{ $employee->id }}" {{ ($workingHour->employee_id == $employee->id)?"selected":"" }}>{{$employee->first_name.' '. $employee->last_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="date">Date: </label>
                                        {!! Form::date('date', null, array('class' => 'form-control custom-control','id' => 'date','required')) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="email">Start time: </label>
                                        {!! Form::time('start_time', null, array('class' => 'form-control custom-control','id' => 'start_time','step'=>100,'required')) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="phone">Finish time: </label>
                                        {!! Form::time('finish_time', null, array('class' => 'form-control custom-control','id' => 'finish_time','step'=>100,'required')) !!}
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-offset-4 col-sm-4 col-xs-offset-2 col-xs-8">
                                    <button type="submit" class="btn btn-default custom-btn btn-block">Submit</button>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var today = new Date().toISOString().split('T')[0];
        document.getElementsByName("date")[0].setAttribute('min', today);
    </script>
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