@extends('layouts.admin')

@section('content')
<div class="st-pusher" id="content">
     <div class="st-content">
                <!-- extra div for emulating position:fixed of the menu -->
                <div class="st-content-inner padding-none">
                    <div class="container-fluid">
                        <div class="page-section">
                            <h3 class="text-display-1">{{ Auth::user()->firstname . ' ' . Auth::user()->surname }}'s Profile</h3>
                        </div>
                        <div class="row" data-toggle="isotope">
                           
                           <div class="col-md-9">
                    <!-- Tabbable Widget -->
                    <div class="tabbable paper-shadow relative" data-z="0.5">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs">
                            <li><a href="{{url('avatar')}}"><i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs"> Avatar</span></a></li>
                            <li><a href="{{url('profile')}}"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Profile </span></a></li>
                            <li class="active"><a href="{{url('setting')}}"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Settings </span></a></li>

                        </ul>
                        <!-- // END Tabs -->
                        <!-- Panes -->
                        <div class="tab-content">
                            <div id="account" class="tab-pane active">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-md-2 control-label">Account Status</label>
                                        <div class="col-md-6">
                                           
                                            @if(Auth::user()->suspended == 1)
                                                <span class="label label-info">This account is currently active</span>
                                            @else
                                                <span class="label label-warning">This account is currently inactive</span>
                                            @endif
                                                
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-md-2 control-label">Visibility Status</label>
                                        <div class="col-md-6">
                                           
                                            @if(Auth::user()->visible == 1)
                                                <span class="label label-info">This account is currently visible</span>
                                            @else
                                                <span class="label label-warning">This account is currently not visible</span>
                                            @endif
                                                
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-md-2 control-label">Last Login</label>
                                        <div class="col-md-6">
                                            <div class="form-control-material">
                                                <div class="input-group">
                                                    <span class="label label-success">
                                            @if(Auth::user()->last_login != "")

                                                {{ \Carbon\Carbon::createFromTimeStamp(strtotime(Auth::user()->last_login))->diffForHumans() }}
                                            @else
                                                {{ 'No attempt' }}
                                            @endif
                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-md-2 control-label">Last Account Update</label>
                                        <div class="col-md-6">
                                            <div class="form-control-material">
                                                <div class="input-group">
                                                    <span class="label label-info">
                                            @if(Auth::user()->updated_at != "")

                                                {{ \Carbon\Carbon::createFromTimeStamp(strtotime(Auth::user()->updated_at))->diffForHumans() }}
                                            @else
                                                {{ 'No attempt' }}
                                            @endif
                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-md-2 control-label">Date created</label>
                                        <div class="col-md-6">
                                            <div class="form-control-material">
                                                <div class="input-group">
                                                    <span class="label label-success">
                                            @if(Auth::user()->created_at != "")

                                                {{ \Carbon\Carbon::createFromTimeStamp(strtotime(Auth::user()->created_at))->diffForHumans() }}
                                            @else
                                                {{ 'No attempt' }}
                                            @endif
                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                   <!--  <div class="form-group">
                                        
                                       {!! QrCode::size(150)->generate(Auth::user()->firstname . ' ' . Auth::user()->surname.' '.Auth::user()->username.' '.Auth::user()->unique_number.' '.Auth::user()->email); !!}
                                        <p>Scan to confirm account details.</p>
                                        
                                    </div> -->
                                    
                                </form>
                            </div>
                        </div>
                        <!-- // END Panes -->
                    </div>
                    <!-- // END Tabbable Widget -->
                    <br/>
                    <br/>
                </div>
                <div class="col-md-3">
                    @include('partials.admin.avatar_side_content')
                </div>
                <!-- /st-content-inner -->
            </div>
</div>
    
@endsection