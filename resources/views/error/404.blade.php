@extends('layouts.main')

@section('content')

     <div class="parallax overflow-hidden bg-blue-400 page-section third">
        <div class="container parallax-layer" data-opacity="true">
            <div class="media v-middle">
                <div class="media-left text-center">
                    <a href="#">
                        <!-- <img src="images/people/110/guy-1.jpg" alt="people" class="img-circle width-80" /> -->
                    </a>
                </div>
                <div class="media-body">
                    <h1 class="text-white text-display-1 margin-v-0">Page Not Found!</h1>
                    <!-- <p class="text-subhead"><a class="link-white text-underline" href="website-instructor-public-profile.html">View public profile</a></p> -->
                </div>
                <div class="media-right">
                    <span class="label bg-blue-500">The Page was not found!</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-9">
                    {!! $msg !!}
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
    
@endsection