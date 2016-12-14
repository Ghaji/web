<div class="collapse navbar-collapse" id="main-nav">
                <ul class="nav navbar-nav navbar-nav-margin-left">

                 @foreach ($navigations as $navigation)

                    @if($navigation->has_sub_nav == 1)

                        <?php $dropdownToggle = 'dropdown-toggle'; ?>
                        <?php $dropdown = 'dropdown'; ?>

                    @else

                        <?php $dropdownToggle = ''; ?>
                        <?php $dropdown = ''; ?>

                    @endif

                   <li class="{{ $dropdown }} ">

                   <a href="#" class="{{$dropdownToggle}}" data-toggle="{{$dropdown}}" title="{{$navigation->name}}"><i class="{{ $navigation->icon }}"></i> {{ $navigation->name }}

                    @if($navigation->has_sub_nav == 1)

                        &nbsp;<b class="caret"></b> </a>
                        <ul class="dropdown-menu">
                        <li class="dropdown-header">The University {{ $navigation->name }}</li>
                        <!-- <li class="divider"></li> -->
                        

                        @foreach($navigation->subNavigations as $subNavigation)

                            <li><a href="" title="{{ $subNavigation->name }}">{{ $subNavigation->name }}</a></li>

                        @endforeach

                        </ul></li>

                    @else

                       </a>
                       </li>

                    @endif

                @endforeach

                </ul>
                <div class="navbar-right">
                    <ul class="nav navbar-nav navbar-nav-bordered navbar-nav-margin-right">
                    @if (Auth::guest())
                        <li class="dropdown user">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                 Access <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/login') }}"><i class="fa fa-bar-chart-o"></i> Login</a></li>
                                <li><a href="{{ url('/register') }}"><i class="fa fa-mortar-board"></i> Register</a></li>
                            </ul>
                        </li>
                    @else
                        <!-- user -->
                        <li class="dropdown user">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('/uploads/avatars/'.Auth::user()->avatar ) }}" alt="" class="img-circle" /> Bill<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="website-student-dashboard.html"><i class="fa fa-bar-chart-o"></i> Dashboard</a></li>
                                <li><a href="website-student-courses.html"><i class="fa fa-mortar-board"></i> My Courses</a></li>
                                <li><a href="website-student-profile.html"><i class="fa fa-user"></i> Profile</a></li>
                                <li><a href="login.html"><i class="fa fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </li>
                        <!-- // END user -->
                    @endif
                    </ul>
                    <!-- <a href="{{ url('/login') }}" class="navbar-btn btn btn-primary">Log In</a> -->
                    
                </div>
                
            </div>