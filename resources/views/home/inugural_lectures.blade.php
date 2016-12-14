@extends('layouts.main')

@section('content')
<div class="st-pusher" id="content">
     <div class="st-content">
         <div class="st-content-inner padding-top-none">
                    <div class="container-fluid">
                        <div class="page-section">
                            <div class="media media-grid v-middle">
                                <div class="media-left">
                                    <span class="icon-block s30 bg-blue-300 text-white">All</span>
                                </div>
                                <div class="media-body">
                                    <h3 class=" margin-none">List of Inugural Lectures</h3>
                                </div>
                            </div>
                            <br/>
                           
                        </div>

                        @foreach ($lectures as $lecture)
                       
                      
                        <div class="panel panel-default curriculum paper-shadow" data-z="0.5">
                            <div class="panel-heading panel-heading-gray" data-toggle="collapse" data-target="#curriculum-{{ $lecture->id }}">
                                <div class="media">
                                    <div class="media-left">
                                        <span class="icon-block half img-circle bg-orange-300 text-white"><i class="fa fa-graduation-cap"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="text-headline">
                                        	@if(strlen($lecture->title) >= 39)
                                                {{ substr($lecture->title, 0, 39).'...' }}
                                            @else
                                                {{ $lecture->title }}
                                            @endif
                                        </h4>
                                        <p>
                                        	<div class="text-light text-caption">
                                                Posted by
                                                <a href="#">
                                                    <i class="fa fa-institution"></i> {{$lecture->author}}</a> &nbsp; | <i class="fa fa-clock-o fa-fw"></i> {{ \Carbon\Carbon::createFromTimeStamp(strtotime($lecture->created_at))->diffForHumans() }}
                                            </div>
                                        </p>
                                    </div>
                                </div>
                                <span class="collapse-status collapse-open"><i class="fa fa-folder-open"></i> Click to Open </span>
                                <span class="collapse-status collapse-close"><i class="fa fa-folder"></i> Click to Close </span>
                            </div>
                            <div class="list-group collapse" id="curriculum-{{ $lecture->id }}">
                                <div class="list-group-item media" data-target="{{route('single.show', $lecture->slug)}}">
                                    <div class="media-left">
                                        <div class="text-crt"></div>
                                    </div>
                                    <div class="media-body">
                                        <!-- <i class="fa fa-fw fa-circle text-grey-200"></i>  -->
                                        	@if($lecture->has_image == 1)
	                                            {!! nl2br($lecture->content) !!}
	                                        @else
	                                            {!! nl2br($lecture->content) !!}
	                                        @endif
                                    </div>
                                    <div class="media-right">
                                        <div class="width-100 text-right text-caption">
                                        	{{ \Carbon\Carbon::createFromTimeStamp(strtotime($lecture->created_at))->diffForHumans() }}
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        @endforeach
                        
                    </div>
                    <div class="pull-right">{{ $lectures->links() }}</div>
                </div>
	</div>
</div>


@endsection