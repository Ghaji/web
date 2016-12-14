
@extends('layouts.admin')

@section('content')
<div class="st-pusher" id="content">
     <div class="st-content">
                <!-- extra div for emulating position:fixed of the menu -->
                <div class="st-content-inner padding-none">
                    <div class="container-fluid">
                        <div class="page-section">
                            <h1 class="text-display-1">Dashboard</h1>
                        </div>
                        <div class="row" data-toggle="isotope">
                           <!--  <div class="item col-xs-12 col-lg-6">
                                <div class="panel panel-default paper-shadow" data-z="0.5">
                                    <div class="panel-heading">
                                        <div class="media v-middle">
                                            <div class="media-body">
                                                <h4 class="text-headline margin-none">Earnings</h4>
                                                <p class="text-subhead text-light">This Month</p>
                                            </div>
                                            <div class="media-right">
                                                <a class="btn btn-white btn-flat" href="app-instructor-earnings.html">Reports</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div id="line-holder" data-toggle="flot-chart-earnings" class="flotchart-holder height-200"></div>
                                    </div>
                                    <hr/>
                                    <div class="panel-body">
                                        <div class="row text-center">
                                            <div class="col-md-6">
                                                <h4 class="margin-none">Gross Revenue</h4>
                                                <p class="text-display-1 text-warning margin-none">102.4k</p>
                                            </div>
                                            <div class="col-md-6">
                                                <h4 class="margin-none">Net Revenue</h4>
                                                <p class="text-display-1 text-success margin-none">55k</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-xs-12 col-lg-6">
                                <div class="panel panel-default paper-shadow" data-z="0.5">
                                    <div class="panel-heading">
                                        <h4 class="text-headline margin-none">My Courses</h4>
                                        <p class="text-subhead text-light">Your recent courses</p>
                                    </div>
                                    <ul class="list-group">
                                        <li class="list-group-item media v-middle">
                                            <div class="media-body">
                                                <a href="app-instructor-course-edit-course.html" class="text-subhead list-group-link">Basics of HTML</a>
                                            </div>
                                            <div class="media-right">
                                                <div class="progress progress-mini width-100 margin-none">
                                                    <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item media v-middle">
                                            <div class="media-body">
                                                <a href="app-instructor-course-edit-course.html" class="text-subhead list-group-link">Angular in Steps</a>
                                            </div>
                                            <div class="media-right">
                                                <div class="progress progress-mini width-100 margin-none">
                                                    <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item media v-middle">
                                            <div class="media-body">
                                                <a href="app-instructor-course-edit-course.html" class="text-subhead list-group-link">Bootstrap Foundations</a>
                                            </div>
                                            <div class="media-right">
                                                <div class="progress progress-mini width-100 margin-none">
                                                    <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="panel-footer text-right">
                                        <a href="app-instructor-courses.html" class="btn btn-white paper-shadow relative" data-z="0" data-hover-z="1" data-animated>View all</a>
                                        <a href="app-instructor-course-edit-course.html" class="btn btn-primary paper-shadow relative" data-z="0" data-hover-z="1" data-animated>CREATE COURSE <i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-xs-12 col-lg-6">
                                <div class="s-container">
                                    <h4 class="text-headline margin-none">Comments</h4>
                                    <p class="text-subhead text-light">Latest student comments </p>
                                </div>
                                <div class="panel panel-default">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class="media v-middle margin-v-0-10">
                                                <div class="media-body">
                                                    <p class="text-subhead">
                                                        <a href="#">
                                                            <img src="images/people/110/guy-4.jpg" alt="person" class="width-30 img-circle" />
                                                        </a> &nbsp;
                                                        <a href="#">mosaicpro</a>
                                                        <span class="text-caption text-light">50 min ago</span>
                                                    </p>
                                                </div>
                                                <div class="media-right">
                                                    <div class="width-50 text-right">
                                                        <a href="#" class="btn btn-white btn-xs"><i class="fa fa-reply"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, blanditiis eligendi expedita ipsam minus non numquam quidem reiciendis ut?</p>
                                            <p class="text-light"><span class="caption">Course:</span> <a href="app-student-course.html">Basics Of HTML</a></p>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media v-middle margin-v-0-10">
                                                <div class="media-body">
                                                    <p class="text-subhead">
                                                        <a href="#">
                                                            <img src="images/people/110/guy-4.jpg" alt="person" class="width-30 img-circle" />
                                                        </a> &nbsp;
                                                        <a href="#">mosaicpro</a>
                                                        <span class="text-caption text-light">16 min ago</span>
                                                    </p>
                                                </div>
                                                <div class="media-right">
                                                    <div class="width-50 text-right">
                                                        <a href="#" class="btn btn-white btn-xs"><i class="fa fa-reply"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, blanditiis eligendi expedita ipsam minus non numquam quidem reiciendis ut?</p>
                                            <p class="text-light"><span class="caption">Course:</span> <a href="app-student-course.html">Basics Of HTML</a></p>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media v-middle margin-v-0-10">
                                                <div class="media-body">
                                                    <p class="text-subhead">
                                                        <a href="#">
                                                            <img src="images/people/110/guy-2.jpg" alt="person" class="width-30 img-circle" />
                                                        </a> &nbsp;
                                                        <a href="#">mosaicpro</a>
                                                        <span class="text-caption text-light">43 min ago</span>
                                                    </p>
                                                </div>
                                                <div class="media-right">
                                                    <div class="width-50 text-right">
                                                        <a href="#" class="btn btn-white btn-xs"><i class="fa fa-reply"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, blanditiis eligendi expedita ipsam minus non numquam quidem reiciendis ut?</p>
                                            <p class="text-light"><span class="caption">Course:</span> <a href="app-student-course.html">Basics Of HTML</a></p>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media v-middle margin-v-0-10">
                                                <div class="media-body">
                                                    <p class="text-subhead">
                                                        <a href="#">
                                                            <img src="images/people/110/guy-4.jpg" alt="person" class="width-30 img-circle" />
                                                        </a> &nbsp;
                                                        <a href="#">mosaicpro</a>
                                                        <span class="text-caption text-light">47 min ago</span>
                                                    </p>
                                                </div>
                                                <div class="media-right">
                                                    <div class="width-50 text-right">
                                                        <a href="#" class="btn btn-white btn-xs"><i class="fa fa-reply"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, blanditiis eligendi expedita ipsam minus non numquam quidem reiciendis ut?</p>
                                            <p class="text-light"><span class="caption">Course:</span> <a href="app-student-course.html">Basics Of HTML</a></p>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media v-middle margin-v-0-10">
                                                <div class="media-body">
                                                    <p class="text-subhead">
                                                        <a href="#">
                                                            <img src="images/people/110/guy-2.jpg" alt="person" class="width-30 img-circle" />
                                                        </a> &nbsp;
                                                        <a href="#">mosaicpro</a>
                                                        <span class="text-caption text-light">39 min ago</span>
                                                    </p>
                                                </div>
                                                <div class="media-right">
                                                    <div class="width-50 text-right">
                                                        <a href="#" class="btn btn-white btn-xs"><i class="fa fa-reply"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, blanditiis eligendi expedita ipsam minus non numquam quidem reiciendis ut?</p>
                                            <p class="text-light"><span class="caption">Course:</span> <a href="app-student-course.html">Basics Of HTML</a></p>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->
                            <div class="item col-xs-12 col-lg-6">
                                
                                    <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                                        <div class="panel-heading panel-collapse-trigger">
                                            <h4 class="panel-title">Site Menu</h4>
                                        </div>
                                        <div class="panel-body list-group">
                                            <ul class="list-group list-group-menu">
                                                <li class="list-group-item"><a class="link-text-color" href="{{route('menu.index')}}">Main Navigation</a></li>
                                                <li class="list-group-item"><a class="link-text-color" href="website-instructor-courses.html">Sub Navigations</a></li>
                                                <li class="list-group-item"><a class="link-text-color" href="website-instructor-messages.html">Pages</a></li>
                                                <li class="list-group-item"><a class="link-text-color" href="website-instructor-earnings.html">Content</a></li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                
                            </div>

                            <div class="item col-xs-12 col-lg-6">
                                
                                    <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                                        <div class="panel-heading panel-collapse-trigger">
                                            <h4 class="panel-title">User Menu</h4>
                                        </div>
                                        <div class="panel-body list-group">
                                            <ul class="list-group list-group-menu">
                                                <li class="list-group-item"><a class="link-text-color" href="website-instructor-dashboard.html">Main Navigation</a></li>
                                                <li class="list-group-item"><a class="link-text-color" href="website-instructor-courses.html">Sub Navigations</a></li>
                                                <li class="list-group-item"><a class="link-text-color" href="website-instructor-messages.html">Pages</a></li>
                                                <li class="list-group-item"><a class="link-text-color" href="website-instructor-earnings.html">Content</a></li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                
                            </div>

                            <div class="item col-xs-12 col-lg-6">
                                
                                    <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                                        <div class="panel-heading panel-collapse-trigger">
                                            <h4 class="panel-title">News Menu</h4>
                                        </div>
                                        <div class="panel-body list-group">
                                            <ul class="list-group list-group-menu">
                                                <li class="list-group-item"><a class="link-text-color" href="{{route('menu.index')}}">Main Navigation</a></li>
                                                <li class="list-group-item"><a class="link-text-color" href="website-instructor-courses.html">Sub Navigations</a></li>
                                                <li class="list-group-item"><a class="link-text-color" href="website-instructor-messages.html">Pages</a></li>
                                                <li class="list-group-item"><a class="link-text-color" href="website-instructor-earnings.html">Content</a></li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                
                            </div>

                            <div class="item col-xs-12 col-lg-6">
                                
                                    <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                                        <div class="panel-heading panel-collapse-trigger">
                                            <h4 class="panel-title">Image Menu</h4>
                                        </div>
                                        <div class="panel-body list-group">
                                            <ul class="list-group list-group-menu">
                                                <li class="list-group-item"><a class="link-text-color" href="website-instructor-dashboard.html">Main Navigation</a></li>
                                                <li class="list-group-item"><a class="link-text-color" href="website-instructor-courses.html">Sub Navigations</a></li>
                                                <li class="list-group-item"><a class="link-text-color" href="website-instructor-messages.html">Pages</a></li>
                                                <li class="list-group-item"><a class="link-text-color" href="website-instructor-earnings.html">Content</a></li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /st-content-inner -->
            </div>
</div>
    
@endsection