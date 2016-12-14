 
 <!-- Tabbable Widget -->
<div class="tabbable tabs-blocks">
    <!-- Tabs -->
    <ul class="nav nav-tabs">
        <li class="active"><a href="#news" data-toggle="tab"><i class="fa fa-home"></i> News</a></li>
        <li><a href="#liveEvents" data-toggle="tab"><i class="fa fa-bullhorn"></i> Live Events</a></li>
        <li><a href="#jobVacancy" data-toggle="tab"><i class="fa fa-briefcase "></i> Job Vacancy</a></li>
        <li><a href="#salesForms" data-toggle="tab"><i class="fa fa-file-text"></i> Sales of Forms</a></li>
        <li><a href="#Advertisement" data-toggle="tab"><i class="fa fa-adn"></i> Advertisement</a></li>
        <li><a href="#lectures" data-toggle="tab"><i class="fa fa-graduation-cap"></i> Inugural Lectures</a></li>
        <li><a href="#conferences" data-toggle="tab"><i class="fa fa-institution"></i> Conferences</a></li>
    </ul>
    <!-- // END Tabs -->
    <!-- Panes -->
    <div class="tab-content">

        <div id="news" class="tab-pane active">
            
                <div class="panel panel-default paper-shadow news" data-z="0.5">
                    <ul class="list-group">
                        @foreach ($news as $new)
                            <li class="list-group-item media v-middle">
                                <div class="media-left">
                                    <div class="icon-block half img-circle bg-grey-300">
                                        <i class="fa fa-file-text text-white"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="text-subhead margin-none">
                                        <a href="{{ route('single.show', $new->slug) }}" class="link-text-color">
                                            @if(strlen($new->title) >= 50)
                                                {{ substr($new->title, 0, 50).'...' }}
                                            @else
                                                {{ $new->title }}
                                            @endif
                                        </a>
                                    </h4>
                                    <div class="text-light text-caption">
                                        posted by
                                        <a href="#">
                                            <img src="{{ asset('../resources/assets/images/people/110/guy-6.jpg') }}" alt="{{$new->author}}" class="img-circle width-20" /> {{$new->author}}</a> &nbsp; | <i class="fa fa-clock-o fa-fw"></i> {{ \Carbon\Carbon::createFromTimeStamp(strtotime($new->created_at))->diffForHumans() }}
                                    </div>
                                </div>
                                <div class="media-right">
                                    
                                    @if($new->latest_news == 1)
                                        <a href="" class="icon-block s25 img-circle bg-green-200">
                                        <i class="fa fa-comments text-white"></i> 
                                        
                                        </a>
                                    @else
                                        <a href="" class="icon-block s25 img-circle bg-red-200">
                                        <i class="fa fa-comments text-white"></i> 
                                        
                                        </a>
                                    @endif
                                </div>
                            </li>
                        @endforeach
                        
                    </ul>
                   
                </div>

        </div>
        <div id="liveEvents" class="tab-pane">
                
                <div class="panel panel-default paper-shadow events" data-z="0.5">
                    <ul class="list-group">
                        @foreach ($events as $event)
                            <li class="list-group-item media v-middle">
                                <div class="media-left">
                                    <div class="icon-block half img-circle bg-grey-300">
                                        <i class="fa fa-file-text text-white"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="text-subhead margin-none">
                                        <a href="{{ route('single.show', $event->slug) }}" class="link-text-color">
                                            @if(strlen($event->title) >= 50)
                                                {{ substr($event->title, 0, 50).'...' }}
                                            @else
                                                {{ $event->title }}
                                            @endif
                                        </a>
                                    </h4>
                                    <div class="text-light text-caption">
                                        posted by
                                        <a href="#">
                                            <img src="{{ asset('../resources/assets/images/people/110/guy-6.jpg') }}" alt="{{$event->author}}" class="img-circle width-20" /> {{$event->author}}</a> &nbsp; | <i class="fa fa-clock-o fa-fw"></i> {{ \Carbon\Carbon::createFromTimeStamp(strtotime($event->created_at))->diffForHumans() }}
                                    </div>
                                </div>
                                <div class="media-right">
                                    
                                    @if($event->latest_news == 1)
                                        <a href="" class="icon-block s25 img-circle bg-green-200">
                                        <i class="fa fa-comments text-white"></i> 
                                        
                                        </a>
                                    @else
                                        <a href="" class="icon-block s25 img-circle bg-red-200">
                                        <i class="fa fa-comments text-white"></i> 
                                        
                                        </a>
                                    @endif
                                </div>
                            </li>
                        @endforeach
                        
                    </ul>
                </div>
              
        </div>
        <div id="jobVacancy" class="tab-pane">

                <div class="panel panel-default paper-shadow job" data-z="0.5">
                    <ul class="list-group">
                        @foreach ($jobs as $job)
                            <li class="list-group-item media v-middle">
                                <div class="media-left">
                                    <div class="icon-block half img-circle bg-grey-300">
                                        <i class="fa fa-file-text text-white"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="text-subhead margin-none">
                                        <a href="{{ route('single.show', $job->slug) }}" class="link-text-color">
                                            @if(strlen($job->title) >= 50)
                                                {{ substr($job->title, 0, 50).'...' }}
                                            @else
                                                {{ $job->title }}
                                            @endif
                                        </a>
                                    </h4>
                                    <div class="text-light text-caption">
                                        posted by
                                        <a href="#">
                                            <img src="{{ asset('../resources/assets/images/people/110/guy-6.jpg') }}" alt="{{$job->author}}" class="img-circle width-20" /> {{$job->author}}</a> &nbsp; | <i class="fa fa-clock-o fa-fw"></i> {{ \Carbon\Carbon::createFromTimeStamp(strtotime($job->created_at))->diffForHumans() }}
                                    </div>
                                </div>
                                <div class="media-right">
                                    
                                    @if($job->latest_news == 1)
                                        <a href="" class="icon-block s25 img-circle bg-green-200">
                                        <i class="fa fa-comments text-white"></i> 
                                        
                                        </a>
                                    @else
                                        <a href="" class="icon-block s25 img-circle bg-red-200">
                                        <i class="fa fa-comments text-white"></i> 
                                        
                                        </a>
                                    @endif
                                </div>
                            </li>
                        @endforeach
                        
                    </ul>
                </div>
        </div>
        <div id="salesForms" class="tab-pane">
                
                <div class="panel panel-default paper-shadow forms" data-z="0.5">
                    <ul class="list-group">
                        @foreach ($forms as $form)
                            <li class="list-group-item media v-middle">
                                <div class="media-left">
                                    <div class="icon-block half img-circle bg-grey-300">
                                        <i class="fa fa-file-text text-white"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="text-subhead margin-none">
                                        <a href="{{ route('single.show', $form->slug) }}" class="link-text-color">
                                            @if(strlen($form->title) >= 50)
                                                {{ substr($form->title, 0, 50).'...' }}
                                            @else
                                                {{ $form->title }}
                                            @endif
                                        </a>
                                    </h4>
                                    <div class="text-light text-caption">
                                        posted by
                                        <a href="#">
                                            <img src="{{ asset('../resources/assets/images/people/110/guy-6.jpg') }}" alt="{{$form->author}}" class="img-circle width-20" /> {{$form->author}}</a> &nbsp; | <i class="fa fa-clock-o fa-fw"></i> {{ \Carbon\Carbon::createFromTimeStamp(strtotime($form->created_at))->diffForHumans() }}
                                    </div>
                                </div>
                                <div class="media-right">
                                    
                                    @if($form->latest_news == 1)
                                        <a href="" class="icon-block s25 img-circle bg-green-200">
                                        <i class="fa fa-comments text-white"></i> 
                                        
                                        </a>
                                    @else
                                        <a href="" class="icon-block s25 img-circle bg-red-200">
                                        <i class="fa fa-comments text-white"></i> 
                                        
                                        </a>
                                    @endif
                                </div>
                            </li>
                        @endforeach
                        
                    </ul>
                </div>

        </div>
        <div id="Advertisement" class="tab-pane">
                
                <div class="panel panel-default paper-shadow advert" data-z="0.5">
                    <ul class="list-group">
                        @foreach ($adverts as $advert)
                            <li class="list-group-item media v-middle">
                                <div class="media-left">
                                    <div class="icon-block half img-circle bg-grey-300">
                                        <i class="fa fa-file-text text-white"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="text-subhead margin-none">
                                        <a href="{{ route('single.show', $advert->slug) }}" class="link-text-color">
                                            @if(strlen($advert->title) >= 50)
                                                {{ substr($advert->title, 0, 50).'...' }}
                                            @else
                                                {{ $advert->title }}
                                            @endif
                                        </a>
                                    </h4>
                                    <div class="text-light text-caption">
                                        posted by
                                        <a href="#">
                                            <img src="{{ asset('../resources/assets/images/people/110/guy-6.jpg') }}" alt="{{$advert->author}}" class="img-circle width-20" /> {{$advert->author}}</a> &nbsp; | <i class="fa fa-clock-o fa-fw"></i> {{ \Carbon\Carbon::createFromTimeStamp(strtotime($advert->created_at))->diffForHumans() }}
                                    </div>
                                </div>
                                <div class="media-right">
                                    
                                    @if($advert->latest_news == 1)
                                        <a href="" class="icon-block s25 img-circle bg-green-200">
                                        <i class="fa fa-comments text-white"></i> 
                                        
                                        </a>
                                    @else
                                        <a href="" class="icon-block s25 img-circle bg-red-200">
                                        <i class="fa fa-comments text-white"></i> 
                                        
                                        </a>
                                    @endif
                                </div>
                            </li>
                        @endforeach
                        
                    </ul>
                </div>

        </div>
        <div id="lectures" class="tab-pane">
                <div class="panel panel-default paper-shadow lectures" data-z="0.5">
                    <ul class="list-group">
                        @foreach ($lectures as $lecture)
                            <li class="list-group-item media v-middle">
                                <div class="media-left">
                                    <div class="icon-block half img-circle bg-grey-300">
                                        <i class="fa fa-file-text text-white"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="text-subhead margin-none">
                                        <a href="{{ route('single.show', $lecture->slug) }}" class="link-text-color">
                                            @if(strlen($lecture->title) >= 50)
                                                {{ substr($lecture->title, 0, 50).'...' }}
                                            @else
                                                {{ $lecture->title }}
                                            @endif
                                        </a>
                                    </h4>
                                    <div class="text-light text-caption">
                                        posted by
                                        <a href="#">
                                            <img src="{{ asset('../resources/assets/images/people/110/guy-6.jpg') }}" alt="{{$lecture->author}}" class="img-circle width-20" /> {{$lecture->author}}</a> &nbsp; | <i class="fa fa-clock-o fa-fw"></i> {{ \Carbon\Carbon::createFromTimeStamp(strtotime($lecture->created_at))->diffForHumans() }}
                                    </div>
                                </div>
                                <div class="media-right">
                                    
                                    @if($lecture->latest_news == 1)
                                        <a href="" class="icon-block s25 img-circle bg-green-200">
                                        <i class="fa fa-comments text-white"></i> 
                                        
                                        </a>
                                    @else
                                        <a href="" class="icon-block s25 img-circle bg-red-200">
                                        <i class="fa fa-comments text-white"></i> 
                                        
                                        </a>
                                    @endif
                                </div>
                            </li>
                        @endforeach
                        
                    </ul>
                </div>
        </div>
        <div id="conferences" class="tab-pane">

                <div class="panel panel-default paper-shadow conf" data-z="0.5">
                    <ul class="list-group">
                        @foreach ($conferences as $conference)
                            <li class="list-group-item media v-middle">
                                <div class="media-left">
                                    <div class="icon-block half img-circle bg-grey-300">
                                        <i class="fa fa-file-text text-white"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="text-subhead margin-none">
                                        <a href="{{ route('single.show', $conference->slug) }}" class="link-text-color">
                                            @if(strlen($conference->title) >= 50)
                                                {{ substr($conference->title, 0, 50).'...' }}
                                            @else
                                                {{ $conference->title }}
                                            @endif
                                        </a>
                                    </h4>
                                    <div class="text-light text-caption">
                                        posted by
                                        <a href="#">
                                            <img src="{{ asset('../resources/assets/images/people/110/guy-6.jpg') }}" alt="{{$conference->author}}" class="img-circle width-20" /> {{$conference->author}}</a> &nbsp; | <i class="fa fa-clock-o fa-fw"></i> {{ \Carbon\Carbon::createFromTimeStamp(strtotime($conference->created_at))->diffForHumans() }}
                                    </div>
                                </div>
                                <div class="media-right">
                                    
                                    @if($conference->latest_news == 1)
                                        <a href="" class="icon-block s25 img-circle bg-green-200">
                                        <i class="fa fa-comments text-white"></i> 
                                        
                                        </a>
                                    @else
                                        <a href="" class="icon-block s25 img-circle bg-red-200">
                                        <i class="fa fa-comments text-white"></i> 
                                        
                                        </a>
                                    @endif
                                </div>
                            </li>
                        @endforeach
                        
                    </ul>
                </div>
        </div>
    </div>
    <!-- // END Panes -->
</div>

