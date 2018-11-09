<!-- aside -->
<aside class="aside">
    <div class="aside-content">
        <div class="logo">
            <img src="/img/dashboard-logo.png" alt="CRM" class="img-responsive">
        </div>

        <nav class="aside-menu">
            <ul>
                <li>
                    <a href="{{ route('dashboard') }}"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
                </li>

            </ul>

            @can('customers',\Illuminate\Support\Facades\Auth::user())
                <ul>
                    <li>
                        <a href="{{ route('customers.index') }}" class="">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <span>Customers</span>
                        </a>
                    </li>
                </ul>
            @endcan
            @can('appointments',\Illuminate\Support\Facades\Auth::user())
                <ul>
                    <li>
                        <a href="{{ route('appointments.index') }}" class="">
                            <i class="	glyphicon glyphicon-calendar" aria-hidden="true"></i>
                            <span>Appointments</span>
                        </a>
                    </li>
                </ul>
            @endcan
            @can('employees',\Illuminate\Support\Facades\Auth::user())
                <ul>
                    <li>
                        <a href="#" class="toggle-menu">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                            <span>Employees</span>
                            <div class="icon"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>
                        </a>
                        <ul class="nested-menu">
                            <li>
                                <a href="{{ route('employees.index') }}">All</a>
                            </li>
                            <li>
                                <a href="{{ route('employees.create') }}">Create</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                </ul>
                </li>
                </ul>
            @endcan
            @can('services', \Illuminate\Support\Facades\Auth::user())
                <ul>
                    <li>
                        <a href="#" class="toggle-menu">
                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                            <span>Services</span>
                            <div class="icon"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>
                        </a>
                        <ul class="nested-menu">
                            <li>
                                <a href="{{ route('services.index') }}">All</a>
                            </li>
                            <li>
                                <a href="{{ route('services.create') }}">Create</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            @endcan
            @can('employees',\Illuminate\Support\Facades\Auth::user())
                <ul>
                    <li>
                        <a href="#" class="toggle-menu">
                            <i class="fa fa-hourglass-start" aria-hidden="true"></i>
                            <span>Working Hours</span>
                            <div class="icon"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>
                        </a>
                        <ul class="nested-menu">
                            <li>
                                <a href="{{ route('working-hours.index') }}">All</a>
                            </li>
                            <li>
                                <a href="{{ route('working-hours.create') }}">Create</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            @endcan
        </nav>
    </div>
</aside>
<!-- /aside -->
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
                                <li><a href="#" onclick="$('#logout-form').submit();"><i class="fa fa-sign-out"
                                                                                         aria-hidden="true"></i> Sign
                                        Out</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form id="logout-form" method="post" action="{{route('logout')}}">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>


</header>
<!-- /header -->