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
                                    <h3 class=" margin-none">List of News item</h3>
                                </div>
                            </div>
                            <br/>
                           
                        </div>

                        @foreach ($news_lists as $news_list)
                       
                      
                        <div class="panel panel-default curriculum paper-shadow" data-z="0.5">
                            <div class="panel-heading panel-heading-gray" data-toggle="collapse" data-target="#curriculum-{{ $news_list->id }}">
                                <div class="media">
                                    <div class="media-left">
                                        <span class="icon-block half img-circle bg-orange-300 text-white"><i class="fa fa-graduation-cap"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="text-headline">
                                        	@if(strlen($news_list->title) >= 39)
                                                {{ substr($news_list->title, 0, 39).'...' }}
                                            @else
                                                {{ $news_list->title }}
                                            @endif
                                        </h4>
                                        <p>
                                        	<div class="text-light text-caption">
                                                Posted by
                                                <a href="#">
                                                    <i class="fa fa-institution"></i> {{$news_list->author}}</a> &nbsp; | <i class="fa fa-clock-o fa-fw"></i> {{ \Carbon\Carbon::createFromTimeStamp(strtotime($news_list->created_at))->diffForHumans() }}
                                            </div>
                                        </p>
                                    </div>
                                </div>
                                <span class="collapse-status collapse-open"><i class="fa fa-folder-open"></i> Click to Open </span>
                                <span class="collapse-status collapse-close"><i class="fa fa-folder"></i> Click to Close </span>
                            </div>
                            <div class="list-group collapse" id="curriculum-{{ $news_list->id }}">
                                <div class="list-group-item media" data-target="{{route('single.show', $news_list->slug)}}">
                                    <div class="media-left">
                                        <div class="text-crt"></div>
                                    </div>
                                    <div class="media-body">
                                        <!-- <i class="fa fa-fw fa-circle text-grey-200"></i>  -->
                                        	@if($news_list->has_image == 1)
	                                            {!! nl2br($news_list->content) !!}
	                                        @else
	                                            {!! nl2br($news_list->content) !!}
	                                        @endif
                                    </div>
                                    <div class="media-right">
                                        <div class="width-100 text-right text-caption">
                                        	{{ \Carbon\Carbon::createFromTimeStamp(strtotime($news_list->created_at))->diffForHumans() }}
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        @endforeach
                        
                    </div>
                    <div class="pull-right">{{ $news_lists->links() }}</div>
                </div>
	</div>
</div>


@endsection