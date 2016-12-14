@extends('layouts.main')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8">
                <div class="page-section">
                    
                    <!-- <p>{ /!! $page->content !!}</p> -->
                    
                    <p class="margin-none">
                        <span class="label bg-gray-dark">New</span>
                        <span class="label label-grey-200">WordPress</span>
                        <span class="label label-grey-200">Beginner</span>
                    </p>
                </div>
                <div class="page-section">
                    <div class="row">
                        <div class="col-md-7">
                            <h2 class="text-headline margin-none">What you'll learn</h2>
                            <p class="text-subhead text-light">A minus obcaecati optio pariatur porro.</p>
                            <ul class="list-group relative paper-shadow" data-hover-z="0.5" data-animated>
                                <li class="list-group-item">
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <div class="icon-block s30 bg-red-300 text-white img-circle">
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="media-body text-body-2">
                                            Basics of GIT and how to become a STAR.
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item paper-shadow">
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <div class="icon-block s30 bg-green-300 text-white img-circle">
                                                <i class="fa fa-database"></i>
                                            </div>
                                        </div>
                                        <div class="media-body text-body-2">
                                            Database connections & some other nice features.
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item paper-shadow">
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <div class="icon-block s30 bg-indigo-300 text-white img-circle">
                                                <i class="fa fa-trophy"></i>
                                            </div>
                                        </div>
                                        <div class="media-body text-body-2">
                                            Eaque ex exercitationem quia reprehenderit?
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item paper-shadow">
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <div class="icon-block s30 bg-orange-300 text-white img-circle">
                                                <i class="fa fa-code-fork"></i>
                                            </div>
                                        </div>
                                        <div class="media-body text-body-2">
                                            Ab distinctio nemo, provident quia quibusdam ullam.
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item paper-shadow">
                                    <div class="media v-middle">
                                        <div class="media-left">
                                            <div class="icon-block s30 bg-grey-500 text-white img-circle">
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="media-body text-body-2">
                                            Conclusion & Notes.
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-5">
                            <div class="pull-right">
                                <a class="btn btn-white btn-circle paper-shadow relative" data-z="1" href="#"><i class="md md-add"></i></a>
                            </div>
                            <h2 class="text-headline margin-none">Testimonials</h2>
                            <p class="text-subhead text-light">A few words from our past students</p>
                            <div class="slick-basic slick-slider" data-items="1" data-items-lg="1" data-items-md="1" data-items-sm="1" data-items-xs="1">
                                <div class="item">
                                    <div class="testimonial">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.</p>
                                            </div>
                                        </div>
                                        <div class="media v-middle">
                                            <div class="media-left">
                                                <img src="images/people/50/guy-6.jpg" alt="People" class="img-circle width-40" />
                                            </div>
                                            <div class="media-body">
                                                <p class="text-subhead margin-v-5-0">
                                                    <strong>Adrian D. <span class="text-muted">@ Mosaicpro Inc.</span></strong>
                                                </p>
                                                <p class="small">
                                                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.</p>
                                            </div>
                                        </div>
                                        <div class="media v-middle">
                                            <div class="media-left">
                                                <img src="images/people/50/guy-2.jpg" alt="People" class="img-circle width-40" />
                                            </div>
                                            <div class="media-body">
                                                <p class="text-subhead margin-v-5-0">
                                                    <strong>Adrian D. <span class="text-muted">@ Mosaicpro Inc.</span></strong>
                                                </p>
                                                <p class="small">
                                                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.</p>
                                            </div>
                                        </div>
                                        <div class="media v-middle">
                                            <div class="media-left">
                                                <img src="images/people/50/guy-8.jpg" alt="People" class="img-circle width-40" />
                                            </div>
                                            <div class="media-body">
                                                <p class="text-subhead margin-v-5-0">
                                                    <strong>Adrian D. <span class="text-muted">@ Mosaicpro Inc.</span></strong>
                                                </p>
                                                <p class="small">
                                                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.</p>
                                            </div>
                                        </div>
                                        <div class="media v-middle">
                                            <div class="media-left">
                                                <img src="images/people/50/guy-4.jpg" alt="People" class="img-circle width-40" />
                                            </div>
                                            <div class="media-body">
                                                <p class="text-subhead margin-v-5-0">
                                                    <strong>Adrian D. <span class="text-muted">@ Mosaicpro Inc.</span></strong>
                                                </p>
                                                <p class="small">
                                                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="page-section">
                    <!-- .panel -->
                    <!-- <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                        <div class="panel-heading">
                            <h4 class="text-headline">Course</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-caption">
                                <i class="fa fa-clock-o fa-fw"></i> 4 hrs &nbsp;
                                <i class="fa fa-calendar fa-fw"></i> 21/10/14
                                <br/>
                                <i class="fa fa-user fa-fw"></i> Instructor: Adrian Demian
                                <br/>
                                <i class="fa fa-mortar-board fa-fw"></i> Max. students: 50
                                <br/>
                                <i class="fa fa-check fa-fw"></i> Attending: 30
                            </p>
                        </div>
                        <hr class="margin-none" />
                        <div class="panel-body text-center">
                            <p><a class="btn btn-success btn-lg paper-shadow relative" data-z="1" data-hover-z="2" data-animated href="website-take-course.html">Start Course</a></p>
                            <p class="text-body-2">or <a href="#">buy course for $1</a></p>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="#" class="text-light"><i class="fa fa-facebook fa-fw"></i> Share on facebook</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="text-light"><i class="fa fa-twitter fa-fw"></i> Tweet this course</a>
                            </li>
                        </ul>
                    </div> -->
                    <!-- @ /include('faculty.main_nav') -->
                    <!-- // END .panel -->
                    <!-- .panel -->
                    <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                        <div class="panel-body">
                            <div class="media v-middle">
                                <div class="media-left">
                                    <img src="images/people/110/guy-6.jpg" alt="About Adrian" width="60" class="img-circle" />
                                </div>
                                <div class="media-body">
                                    <h4 class="text-title margin-none"><a href="#">Adrian Demian</a></h4>
                                    <span class="caption text-light">Biography</span>
                                </div>
                            </div>
                            <br/>
                            <div class="expandable expandable-indicator-white expandable-trigger">
                                <div class="expandable-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus aut consectetur consequatur cum cupiditate debitis doloribus, error ex explicabo harum illum minima mollitia nisi nostrum officiis omnis optio qui quisquam saepe sit sunt totam vel velit voluptatibus? Adipisci ducimus expedita id nostrum quas quia!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // END .panel -->
                </div>
                <!-- // END .page-section -->
            </div>
        </div>
    </div>

@endsection