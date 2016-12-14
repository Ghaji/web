
<div class="row" data-toggle="gridalicious">
            <div class="media">
                <a href="{{ url('/'.$sug_day->slug) }}">
                    <div class="media-left padding-none">
                        <div class="bg-green-300 text-white">
                            <div class="panel-body">
                                <i class="fa fa-tasks fa-2x fa-fw"></i>
                            </div>
                        </div>
                    </div>
                    <div class="media-body">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="text-headline">{{$sug_day->name}}</div>
                                <p>{{ $sug_day->title }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="media">
                <a href="{{ url('/'.$miss_ujay->slug) }}">
                    <div class="media-left padding-none">
                        <div class="bg-purple-300 text-white">
                            <div class="panel-body">
                                <i class="fa fa-life-bouy fa-2x fa-fw"></i>
                            </div>
                        </div>
                    </div>
                    <div class="media-body">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="text-headline">{{$miss_ujay->name}}</div>
                                <p>{{ $miss_ujay->title }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="media">
                <a href="{{ url('/'.$sports->slug) }}">
                <div class="media-left padding-none">
                    <div class="bg-orange-400 text-white">
                        <div class="panel-body">
                            <i class="fa fa-soccer-ball-o  fa-2x fa-fw"></i>
                        </div>
                    </div>
                </div>
                <div class="media-body">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="text-headline">{{$sports->name}}</div>
                            <p>{{ $sports->title }}</p>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="media">
                <a href="{{ url('/'.$campus_fm->slug) }}">
                    <div class="media-left padding-none">
                        <div class="bg-cyan-400 text-white">
                            <div class="panel-body">
                                <i class="fa fa-headphones fa-2x fa-fw"></i>
                            </div>
                        </div>
                    </div>
                    <div class="media-body">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="text-headline">{{$campus_fm->name}}</div>
                                <p>{{ $campus_fm->title }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="media">
                <a href="{{ url('/'.$magazine->slug) }}">
                    <div class="media-left padding-none">
                        <div class="bg-pink-400 text-white">
                            <div class="panel-body">
                                <i class="fa fa-print fa-2x fa-fw"></i>
                            </div>
                        </div>
                    </div>
                    <div class="media-body">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="text-headline">{{$magazine->name}}</div>
                                <p>{{ $magazine->title }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="media">
                <a href="{{ url('/'.$live_streaming->slug) }}">
                    <div class="media-left padding-none">
                        <div class="bg-red-400 text-white">
                            <div class="panel-body">
                                <i class="fa fa-film fa-2x fa-fw"></i>
                            </div>
                        </div>
                    </div>
                    <div class="media-body">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="text-headline">{{$live_streaming->name}}</div>
                                <p>{{ $live_streaming->title }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>