<div class="collapse navbar-collapse" id="main-nav">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Forum <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="app-forum.html">Forum Home</a></li>
                                <li><a href="app-forum-category.html">Forum Category</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="app-directory-grid.html">Courses Grid</a></li>
                                <li><a href="app-directory-list.html">Courses List</a></li>
                                <li><a href="app-student-course.html">Course Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Student <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="app-student-dashboard.html">Dashboard</a></li>
                                <li><a href="app-student-courses.html">My Courses</a></li>
                                <li><a href="app-take-course.html">Take Course</a></li>
                                <li><a href="app-course-forums.html">Course Forums</a></li>
                                <li><a href="app-take-quiz.html">Take Quiz</a></li>
                                <li><a href="app-student-profile.html">Edit Profile</a></li>
                                <li><a href="app-student-billing.html">Edit Billing</a></li>
                                <li><a href="app-student-messages.html">Messages</a></li>
                            </ul>
                        </li>
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Instructor <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="app-instructor-dashboard.html">Dashboard</a></li>
                                <li><a href="app-instructor-courses.html">My Courses</a></li>
                                <li><a href="app-instructor-course-edit-course.html">Edit Course</a></li>
                                <li><a href="app-instructor-earnings.html">Earnings</a></li>
                                <li><a href="app-instructor-statement.html">Statement</a></li>
                                <li><a href="app-instructor-profile.html">Edit Profile</a></li>
                                <li><a href="app-instructor-billing.html">Edit Billing</a></li>
                                <li><a href="app-instructor-messages.html">Messages</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-nav-bordered navbar-right">
                        <!-- notifications -->
                        <li class="dropdown notifications updates">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="badge badge-primary">4</span>
                            </a>
                            <ul class="dropdown-menu" role="notification">
                                <li class="dropdown-header">Notifications</li>
                                <li class="media">
                                    <div class="pull-right">
                                        <span class="label label-success">New</span>
                                    </div>
                                    <div class="media-left">
                                        <img src="{{ asset('../resources/assets/images/people/50/guy-2.jpg') }}" alt="people" class="img-circle" width="30">
                                    </div>
                                    <div class="media-body">
                                        <a href="#">Adrian D.</a> posted <a href="#">a photo</a> on his timeline.
                                        <br/>
                                        <span class="text-caption text-muted">5 mins ago</span>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="pull-right">
                                        <span class="label label-success">New</span>
                                    </div>
                                    <div class="media-left">
                                        <img src="{{ asset('../resources/assets/images/people/50/guy-6.jpg') }}" alt="people" class="img-circle" width="30">
                                    </div>
                                    <div class="media-body">
                                        <a href="#">Bill</a> posted <a href="#">a comment</a> on Adrian's recent <a href="#">post</a>.
                                        <br/>
                                        <span class="text-caption text-muted">3 hrs ago</span>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left">
                                        <span class="icon-block s30 bg-grey-200"><i class="fa fa-plus"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <a href="#">Mary D.</a> and <a href="#">Michelle</a> are now friends.
                                        <p>
                                            <span class="text-caption text-muted">1 day ago</span>
                                        </p>
                                        <a href="#">
                                            <img class="width-30 img-circle" src="{{ asset('../resources/assets/images/people/50/woman-6.j') }}pg" alt="people">
                                        </a>
                                        <a href="#">
                                            <img class="width-30 img-circle" src="{{ asset('../resources/assets/images/people/50/woman-3.j') }}pg" alt="people">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- // END notifications -->
                        <!-- User -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle user" data-toggle="dropdown">
                                <img src="{{ asset('/uploads/avatars/'.Auth::user()->avatar ) }}" alt="Bill" class="img-circle" width="40" /> 
                                     
                                    @if(strlen(Auth::user()->username) >= 5)
                                        {{ substr(ucfirst(Auth::user()->username), 0, 5).'...' }}
                                    @else
                                        {{ ucfirst(Auth::user()->username) }}
                                    @endif
                                    <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/home') }}"> <i class="fa fa-btn fa-home"></i> Main website</a></li>
                                <li><a href="{{ url('avatar') }}"> <i class="fa fa-btn fa-user"></i> Avatar</a></li>
                                <li><a href="{{ url('profile') }}"><i class="fa fa-btn fa-gear"></i> Account</a></li>
                                <li><a href="{{ url('/logout') }}"> <i class="fa fa-btn fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>