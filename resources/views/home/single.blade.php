@extends('layouts.main')

@section('content')
<div class="st-pusher" id="content">
     <div class="st-content">
         <div class="st-content-inner padding-top-none">
                    <div class="container-fluid">
                        <div class="page-section">
                            <div class="media media-grid v-middle">
                                <div class="media-left">
                                    <span class="icon-block s30 bg-blue-300 text-white">{{ $news->id }}</span>
                                </div>
                                <div class="media-body">
                                    <h3 class=" margin-none">Single News - {{ $news->display_line }} </h3>
                                </div>
                            </div>
                            <br/>
                            
                        </div>
                        
                        
                        <div class="panel panel-default curriculum open paper-shadow" data-z="0.5">
                            <div class="panel-heading panel-heading-gray" data-toggle="collapse" data-target="#curriculum-{{ $news->id }}">
                                <div class="media">
                                    <div class="media-left">
                                        <span class="icon-block img-circle bg-indigo-300 half text-white"><i class="fa fa-graduation-cap"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="text-headline">
                                            @if(strlen($news->title) >= 39)
                                                {{ substr($news->title, 0, 39).'...' }}
                                            @else
                                                {{ $news->title }}
                                            @endif
                                        </h4>
                                        <p>
                                            <div class="text-light text-caption">
                                                posted by
                                                <a href="#">
                                                    <img src="{{ asset('../resources/assets/images/people/110/guy-6.jpg') }}" alt="{{$news->author}}" class="img-circle width-20" /> {{$news->author}}</a> &nbsp; | <i class="fa fa-clock-o fa-fw"></i> {{ \Carbon\Carbon::createFromTimeStamp(strtotime($news->created_at))->diffForHumans() }}
                                            </div>
                                        </p>
                                    </div>
                                </div>
                                <span class="collapse-status collapse-open"><i class="fa fa-folder-open"></i> Click to Open </span>
                                <span class="collapse-status collapse-close"><i class="fa fa-folder"></i> Click to Close </span>
                            </div>
                            <div class="list-group collapse in" id="curriculum-{{ $news->id }}">
                                <div class="list-group-item media" data-target="{{route('single.show', $news->slug)}}">
                                    <div class="media-left">
                                        <!-- <div class="text-crt">1.</div> -->
                                    </div>
                                    <div class="media-body">
                                        <!-- <i class="fa fa-fw fa-circle text-green-300"></i>  -->
                                        @if($news->has_image)
                                            {!! nl2br($news->content) !!}
                                        @else
                                            {!! nl2br($news->content) !!}
                                        @endif
                                    </div>
                                    <div class="media-right">
                                        <div class="width-100 text-right text-caption">
                                            <i class="fa fa-clock-o fa-fw"></i> {{ \Carbon\Carbon::createFromTimeStamp(strtotime($news->created_at))->diffForHumans() }}
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="pull-left">
                            <a href="{{ route('list.listshow') }}" class="btn btn-primary">Back to News List</a>
                        </div>
                        <br><br><br>
                    </div>
                </div>
	</div>
</div>


@endsection
