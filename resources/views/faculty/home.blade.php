@extends('layouts.main')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8">
                <div class="page-section">
                    <div class="width-350 width-300-md width-100pc-xs paragraph-inline">
                        <div class="embed-responsive embed-responsive-16by9">
                            <img class="paragraph-inline width-280 clearfix-xs width-100pc-xs" src="{{ asset('../resources/assets/images/place1-full.jpg') }}" alt="image" />
                        </div>
                    </div>
                    <p>
                        <strong>Lorem ipsum</strong> dolor sit amet, consectetur adipisicing elit. Ad aperiam autem cumque deleniti dicta iusto laboriosam laudantium omnis, possimus praesentium provident quam quas, sapiente sint, ut! Adipisci aliquid assumenda consequuntur cupiditate deleniti dicta dolore dolorem
                        <strong>dolores enim </strong>eos hic illo inventore iure libero magnam minima minus obcaecati optio pariatur porro quibusdam quos reiciendis, sapiente sint veritatis. Eveniet in magni sunt?</p>
                    <p>
                        <strong>Lorem ipsum</strong> dolor sit amet, consectetur adipisicing elit. Ad aperiam autem cumque deleniti dicta iusto laboriosam laudantium omnis, possimus praesentium provident quam quas, sapiente sint, ut! Adipisci aliquid assumenda consequuntur cupiditate deleniti dicta dolore dolorem
                        <strong>dolores enim </strong>eos hic illo inventore iure libero.
                    </p>
                    <br/>
                    <p>
                        <strong>Lorem ipsum</strong> dolor sit amet, consectetur adipisicing elit. Ad aperiam autem cumque deleniti dicta iusto laboriosam laudantium omnis, possimus praesentium provident quam quas, sapiente sint, ut! Adipisci aliquid assumenda consequuntur cupiditate deleniti dicta dolore dolorem
                        <strong>dolores enim </strong>eos hic illo inventore iure libero magnam minima minus obcaecati optio pariatur porro quibusdam quos reiciendis, sapiente sint veritatis. Eveniet in magni sunt?</p>
                    <br/>
                    @include('library.news_tab')
                </div>

                <div class="page-section">
                    <div class="row">
                        <div class="col-md-7">
                            <h2 class="text-headline margin-none">More about the Library</h2>
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
                                            <a href="">Undergraduate</a>
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
                                            <a href="">Postgraduate</a>
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
                                            <a href="">Research</a>
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
                                            <a href="">Library Catalog (OPAC)</a>
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
                                            <a href="">Library Services</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-5">
                            <div class="pull-right">
                                <a class="btn btn-white btn-circle paper-shadow relative" data-z="1" href="#"><i class="md md-add"></i></a>
                            </div>
                            <h2 class="text-headline margin-none">About the Dean</h2>
                            <p class="text-subhead text-light">A few words from the Dean</p>
                            <div class="slick-basic slick-slider" data-items="1" data-items-lg="1" data-items-md="1" data-items-sm="1" data-items-xs="1">
                                <div class="item">
                                    <div class="testimonial">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.</p>
                                            </div>
                                        </div>
                                        <div class="media v-middle">
                                            <div class="media-left">
                                                <img src="{{ asset('../resources/assets/images/people/110/guy-6.jpg') }}" alt="People" class="img-circle width-40" />
                                            </div>
                                            <div class="media-body">
                                                <p class="text-subhead margin-v-5-0">
                                                    <strong>Adrian D. <span class="text-muted">@ Mosaicpro Inc.</span></strong>
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
                    @include('faculty.main_nav')
                    <!-- // END .panel -->
                    <!-- .panel -->
                    <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                        <div class="panel-body">
                            <div class="media v-middle">
                                <div class="media-left">
                                    <!-- <img src="{ /{ asset('../resources/assets/images/people/110/guy-6.jpg') }}" alt="About Adrian" width="60" class="img-circle" /> -->
                                </div>
                                <div class="media-body">
                                    <h4 class="text-title margin-none"><a href="#">Faculty Resources</a></h4>
                                    
                                </div>
                            </div>
                            <br/>
                            <div class="expandable expandable-indicator-white expandable-trigger">
                                <div class="expandable-content">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <a href="#" class="text-light"><i class="fa fa-facebook fa-fw"></i> Share on facebook</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#" class="text-light"><i class="fa fa-twitter fa-fw"></i> Tweet this course</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#" class="text-light"><i class="fa fa-facebook fa-fw"></i> Share on facebook</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#" class="text-light"><i class="fa fa-twitter fa-fw"></i> Tweet this course</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#" class="text-light"><i class="fa fa-facebook fa-fw"></i> Share on facebook</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#" class="text-light"><i class="fa fa-twitter fa-fw"></i> Tweet this course</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#" class="text-light"><i class="fa fa-facebook fa-fw"></i> Share on facebook</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#" class="text-light"><i class="fa fa-twitter fa-fw"></i> Tweet this course</a>
                                        </li>
                                    </ul>
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