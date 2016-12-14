
@extends('layouts.main')

@section('content')
    @include('partials.header')
    <div class="parallax cover overlay cover-image-full home">
        <img class="parallax-layer" src="{{ asset('../resources/assets/images/_student.PNG') }}" alt="Learning Cover" />
        <div class="parallax-layer overlay overlay-full overlay-bg-white bg-transparent" data-speed="8" data-opacity="true">
            <div class="v-center">
                <div class="page-section overlay-bg-white-strong relative paper-shadow" data-z="1">
                    <h1 class="text-display-2 margin-v-0-15 display-inline-block">Latest News</h1>
                    <p class="text-subhead">
                        Any Important notice for the whole community and the world at large...
                    </p>
                    <a class="btn btn-green-500 btn-lg paper-shadow" data-hover-z="2" data-animated data-toggle="modal" href="#modal-overlay-signup">University of Jos, Nigeria</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            @include('partials.index.latest')
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">

            @include('partials.index.side_nav')
            
        </div>

        <div class="col-md-9">
           @include('partials.index.news_tab')
        </div>
    </div>
        
        <div class="page-section-heading">
            <h2 class="text-display-1">Campus Life</h2>
            <!-- <p class="lead text-muted">Learn about all of the features we offer.</p> -->
        </div>
        @include('partials.index.megalinks')
    </div>
    <br/>
    <div class="page-section bg-white">
        <div class="container">
            <!-- <div class="text-center">
                <h3 class="text-display-1">Featured Courses</h3>
                <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div> -->
            <br/>
            @include('partials.index.slider_menu')
            <!-- <div class="text-center">
                <br/>
                <a class="btn btn-lg btn-primary" href="website-directory-grid.html">Browse Courses</a>
            </div> -->
        </div>
    </div>
    <!-- <div class="parallax cover overlay height-300 margin-none">
        <img class="parallax-layer" data-auto-offset="true" data-auto-size="false" src="{{ asset('../resources/assets/images/photodune-6745579-mo') }}dern-creative-man-relaxing-on-workspace-m.jpg" alt="Learning Cover" />
        <div class="parallax-layer overlay overlay-full overlay-bg-white bg-transparent" data-opacity="true" data-speed="8">
            <div class="v-center">
                <div class="page-section">
                    <h1 class="text-display-2 overlay-bg-white margin-v-0-15 inline-block">Feedback</h1>
                    <br/>
                    <p class="lead text-overlay overlay-bg-white-strong inline-block">How others use E-learning to improve their skills</p>
                </div>
            </div>
        </div>
    </div> -->
   <!--  <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.</p>
                            </div>
                        </div>
                        <div class="media v-middle">
                            <div class="media-left">
                                <img src="{{ asset('../resources/assets/images/people/50/guy-1.jpg"') }} alt="People" class="img-circle width-40" />
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
                <div class="col-md-4">
                    <div class="testimonial">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.</p>
                            </div>
                        </div>
                        <div class="media v-middle">
                            <div class="media-left">
                                <img src="{{ asset('../resources/assets/images/people/50/guy-2.jpg"') }} alt="People" class="img-circle width-40" />
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
                <div class="col-md-4">
                    <div class="testimonial">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.</p>
                            </div>
                        </div>
                        <div class="media v-middle">
                            <div class="media-left">
                                <img src="{{ asset('../resources/assets/images/people/50/guy-8.jpg"') }} alt="People" class="img-circle width-40" />
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
        <br/>
    </div> -->
   <!--  <div class="modal grow modal-overlay modal-backdrop-body fade" id="modal-overlay-signup">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <div class="modal-dialog">
            <div class="v-cell">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="wizard-container wizard-1" id="wizard-demo-1">
                            <div data-scrollable-h>
                                <ul class="wiz-progress">
                                    <li class="active">Plan &amp; Payment</li>
                                    <li>Account Setup</li>
                                    <li>Personal Details</li>
                                </ul>
                            </div>
                            <form action="#" data-toggle="wizard" class="max-width-400 h-center">
                                <fieldset class="step relative paper-shadow form-horizontal" data-z="2">
                                    <div class="page-section-heading">
                                        <h2 class="text-h3 margin-v-0">Payment</h2>
                                        <h3 class="text-h4 margin-v-10 text-grey-400">Your plan is
                                            <strong class="text-uppercase">learner</strong> for
                                            <strong>&dollar;19.99/mo</strong>
                                        </h3>
                                        <a href="pricing.html">See pricing</a>
                                    </div>
                                    <hr/>
                                    <div class="form-group">
                                        <label for="credit-card" class="col-xs-4 control-label">Credit Card</label>
                                        <div class="col-xs-8">
                                            <div class="form-control-material">
                                                <input type="text" class="form-control" id="credit-card" placeholder="**** **** **** 2422">
                                                <label for="credit-card">Credit Card</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="card-expiration" class="col-xs-4 control-label">Expiration:</label>
                                        <div class="col-xs-8">
                                            <select id="card-expiration" data-toggle="select2">
                                                <option value="1" selected>January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                            <select data-toggle="select2">
                                                <option value="2015" selected>2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cvv" class="col-xs-4 control-label">CVV</label>
                                        <div class="col-xs-8">
                                            <div class="form-control-material">
                                                <input type="email" class="form-control" id="cvv" placeholder="123">
                                                <label for="cvv">CVV</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="button" class="wiz-next btn btn-primary">Next</button>
                                    </div>
                                </fieldset>
                                <fieldset class="step relative paper-shadow" data-z="2">
                                    <div class="page-section-heading">
                                        <h2 class="text-h3 margin-v-0">Create your account</h2>
                                        <h3 class="text-h4 margin-v-10 text-grey-400">This is a multi step form</h3>
                                    </div>
                                    <div class="form-group form-control-material">
                                        <input class="form-control" type="text" id="wiz-email" placeholder="Email" />
                                        <label for="wiz-email">Email:</label>
                                    </div>
                                    <div class="form-group form-control-material">
                                        <input class="form-control" type="password" id="wiz-password" placeholder="Password" />
                                        <label for="wiz-password">Password:</label>
                                    </div>
                                    <div class="form-group form-control-material">
                                        <input class="form-control" type="password" id="wiz-password2" placeholder="Confirm Password" />
                                        <label for="wiz-password2">Confirm Password:</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <button type="button" class="wiz-prev btn btn-default">Previous</button>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <button type="button" class="wiz-next btn btn-primary">Next</button>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="step relative paper-shadow" data-z="2">
                                    <div class="page-section-heading">
                                        <h2 class="text-h3 margin-v-0">Personal Details</h2>
                                        <h3 class="text-h4 margin-v-10 text-grey-400">Your personal details are safe with us</h3>
                                    </div>
                                    <div class="form-group form-control-material">
                                        <input class="form-control" type="text" id="wiz-fname" placeholder="First name" />
                                        <label for="wiz-fname">First name:</label>
                                    </div>
                                    <div class="form-group form-control-material">
                                        <input class="form-control" type="tel" id="wiz-lname" placeholder="Last name" />
                                        <label for="wiz-lname">Last name:</label>
                                    </div>
                                    <div class="form-group form-control-material">
                                        <input class="form-control" type="text" id="wiz-phone" placeholder="Phone" />
                                        <label for="wiz-phone">Phone:</label>
                                    </div>
                                    <div class="form-group form-control-material">
                                        <textarea rows="5" class="form-control" id="wiz-address" placeholder="Your address"></textarea>
                                        <label for="wiz-address">Address:</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <button type="button" class="wiz-prev btn btn-default">Previous</button>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <button type="button" class="wiz-step btn btn-primary" data-target="0">Submit</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    
    <!-- // Footer -->
   @endsection



