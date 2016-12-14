@extends('layouts.main')

@section('content')

     <div class="parallax overflow-hidden bg-blue-400 page-section bg-pink-300">
        <div class="container parallax-layer" data-opacity="true">
            <div class="media v-middle">
                <div class="media-left text-center">
                    <a href="#">
                        <!-- <img src="images/people/110/guy-1.jpg" alt="people" class="img-circle width-80" /> -->
                    </a>
                </div>
                <div class="media-body">
                    <h1 class="text-white text-display-1 margin-v-0">{!! $page->name !!}</h1>
                    <!-- <p class="text-subhead"><a class="link-white text-underline" href="website-instructor-public-profile.html">View public profile</a></p> -->
                </div>
                <div class="media-right">
                    <!-- <span class="label bg-blue-500">The Page was not found!</span> -->
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="page-section padding-top-none">
                        <div class="s-container">
                            <h1 class="text-display-1 margin-top-none">{!! $page->name !!}</h1>
                            <p class="text-light text-caption">
                                posted by
                                <a href="#">
                                    <img src="{{ asset('../resources/assets/images/woman-1.jpg') }}" alt="person" class="img-circle width-20" /> Jennifer Hudson</a> &nbsp; | <i class="fa fa-clock-o fa-fw"></i> 5 minutes ago
                            </p>
                        </div>
                        <!-- This is for the image part of the page -->
                        @if(!empty($page->image))
                            <p>
                                <img class="paragraph-inline width-280 clearfix-xs width-100pc-xs" src="{{ asset('../resources/assets/images/'.$page->image) }}" alt="image" /> 
                                {!! $page->title !!}
                            </p> 
                        @else
                            <p> 
                                {!! $page->title !!}
                            </p> 
                        @endif
                        
                        <p>
                            {!! $page->content !!} 
                        </p>
                            

                        <br/>
                        
                    </div>
                    
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group form-control-material">
                                <input id="forumSearch" type="text" class="form-control" placeholder="Type to search" />
                                <label for="forumSearch">Search ...</label>
                            </div>
                            <a href="#" class="btn btn-inverse paper-shadow relative" data-z="0.5" data-hover-z="1">Search</a>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Categories</h4>
                        </div>
                        <ul class="list-group list-group-menu">
                        @foreach($pages as $key => $value)
                            <li class="list-group-item">
                                <a href="{{url('/'.$value->slug)}}"><i class="fa fa-chevron-right fa-fw"></i> {{ $value->name }}</a>
                            </li>
                        @endforeach
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!--  <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-9">
                    { /!! $page !!}
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div> -->
    
@endsection