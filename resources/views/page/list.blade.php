@extends('layouts.main')

@section('content')
<!-- 
     <div class="parallax overflow-hidden bg-blue-400 page-section third">
        <div class="container parallax-layer" data-opacity="true">
            <div class="media v-middle">
                <div class="media-left text-center">
                    <a href="#">
                        <img src="images/people/110/guy-1.jpg" alt="people" class="img-circle width-80" />
                    </a>
                </div>
                <div class="media-body">
                    <h1 class="text-white text-display-1 margin-v-0">Parent/Child</h1>
                    <p class="text-subhead"><a class="link-white text-underline" href="website-instructor-public-profile.html">View public profile</a></p>
                </div>
                <div class="media-right">
                    <span class="label bg-blue-500">Instructor</span>
                </div>
            </div>
        </div>
    </div> -->

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
                                    <h3 class=" margin-none">List of {{ ucfirst($subNav) }}</h3>
                                </div>
                            </div>
                            <br/>
                           
                        </div>

                        @foreach ($list as $item)
                       
                      
                        <div class="panel panel-default curriculum paper-shadow" data-z="0.5">
                      
                        <h4 class="text-headline" style="margin-left: 10px;">
                                            @if(strlen($item->name) >= 80)
                                               <a href="{{ $item->slug }}">{{ substr($item->name, 0, 80).'...' }} ( {{ $item->code }} ) <i class="fa fa-hand-o-left"></i></a>
                                            @else
                                               <a href="{{ $item->slug }}">{{ $item->name }} ( {{ $item->code }} ) <i class="fa fa-hand-o-left"></i></a>
                                            @endif
                                        </h4>
                            <div class="panel-heading panel-heading-gray" data-toggle="collapse" data-target="#curriculum-{{ $item->id }}">
                                <div class="media">
                                    <div class="media-left">
                                        
                                        @if(empty($item->image))
                                            <span class="icon-block bg-blue-300 text-white"><i class="fa fa-institution"></i></span>
                                        @else
                                            <span class="icon-block  text-white"><img src="{{ asset('../resources/assets/images/'.$item->image) }}" alt="people" class=" width-100" /> </span>
                                        @endif
                                       
                                        <!-- <i class="fa fa-graduation-cap"></i> -->
                                       
                                    </div>
                                    <div class="media-body">
                                        <!-- <h4 class="text-headline">
                                            if(strlen($item->name) >= 39)
                                               { /{ substr($item->name, 0, 39).'...' }}
                                            else
                                               { /{ $item->name }} 
                                            endif
                                        </h4> -->
                                        <p>
                                            <div class="text-light text-caption">
                                                About {{ $item->name }}
                                                <br>
                                                <a href="#">
                                                    @if(strlen($item->description) >= 250)
                                                        {!! substr($item->description, 0, 250).'...' !!}
                                                    @else
                                                        {!! $item->description !!}
                                                    @endif
                                                </a>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                                
                                    <span class="collapse-status collapse-open"><i class="fa fa-folder"></i> Open {!! ucfirst($item->child_type) !!}</span>
                                    <span class="collapse-status collapse-close"><i class="fa fa-folder-open"></i> Close {!! ucfirst($item->child_type) !!}</span>
                                

                            </div>
                            <div class="list-group collapse" id="curriculum-{{ $item->id }}">
            
                                @foreach( $item->departments as $index => $department )
                                    <div class="list-group-item media" data-target="{{ route('page.showFacultyPage', array($item->slug, $department->slug)) }}">
                                        <div class="media-left">
                                            <div class="text-crt">{!! $index + 1 !!}.</div>
                                        </div>
                                        <div class="media-body">
                                            <i class="fa fa-fw fa-circle text-blue-300"></i> {!! $department->name !!}
                                        </div>
                                        <div class="media-right">
                                            <div class="width-100 text-right text-caption">2:03 min</div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                        @endforeach
                        
                    </div>
                </div>
    </div>
</div>
    
@endsection