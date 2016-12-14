
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
                    <h3 class="text-white text-display margin-v-0">{{ $page->name }}</h3>            
                </div>
                <div class="media-right">
                    <span class="label bg-blue-500">University of Jos</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="panel panel-default paper-shadow" data-z="0.5">
                        <div class="panel-heading">
                            <h4 class="text-headline">{{$page->name}}</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-body-2">
                                {!! $page->content !!}
                            </p>
                        </div>
                        <div class="panel-footer">
                            <div class="text-left">
                                <!-- <button class="btn btn-success"><i class="fa fa-save fa-fw"></i> Save Answer</button> -->
                                <a href="{{ route('home') }}" class="btn btn-primary"><i class="fa fa-chevron-right fa-fw"></i> Back </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
    
@endsection