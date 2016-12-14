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
                            <li class="active"><a href="{{ url('avatar') }}"><i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs">Avatar</span></a></li>
                            <li><a href="{{ url('profile') }}"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Profile </span></a></li>
                            <li><a href="{{ url('setting') }}"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Settings </span></a></li>

                        </ul>
                        <!-- // END Tabs -->
                        <!-- Panes -->
                        <div class="tab-content">
                            <div id="account" class="tab-pane active">
                            @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            <!-- </h5> -->
                            @include('partials.notification')
                                <form class="form-horizontal" enctype="multipart/form-data" action="avatar" method="POST">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Avatar</label>
                                        <div class="col-md-6">
                                            <div class="media v-middle">
                                                <div class="media-left">
                                                    <div class="icon-block width-100 bg-grey-100">
                                                        <!-- <i class="fa fa-photo text-light"></i> -->
                                                        <img src="{{ asset('/uploads/avatars/'.Auth::user()->avatar ) }}" alt="people" class="img-circle width-80" />
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <!-- <a href="#" class="btn btn-white btn-sm paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated>  -->
                                                     <!-- <form enctype="multipart/form-data" action="profile" method="POST"> -->
                                                     Upload Image<i class="fa fa-upl"></i>
                                                     <input type="file" name="avatar" id="avatar">
                									 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                									 <!-- <input type="submit" class="btn btn-sm btn-primary" name="Add Image" value="Add Image"> -->
                                                     <!-- </form> -->
                                                     <!-- </a> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                              
                                    <div class="form-group margin-none">
                                        <div class="col-md-offset-2 col-md-10">
                                            <button type="submit" class="btn btn-primary paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated>Save Changes</button>
                                        </div>
                                    </div>
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

                        </div>
                    </div>
                </div>
                <!-- /st-content-inner -->
            </div>
</div>
    
@endsection