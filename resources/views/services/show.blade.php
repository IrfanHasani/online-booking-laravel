@extends('layouts.app')
@section('head')
    @include('includes.head',['title'=>'Create new service'])
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
                        <h3 class="panel-title">Service: {{ $service->name }}</h3>
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('services.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="name">Name: </label>
                                            <input type="text" class="form-control custom-control" id="name" value="{{ $service->name }}" name="name" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="price">Price: </label>
                                            <input type="text" class="form-control custom-control" id="price" value="{{ $service->price }}" name="price" readonly>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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