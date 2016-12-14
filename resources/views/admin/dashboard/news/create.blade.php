@extends('layouts.admin')

@section('content')
<!-- <div class="st-pusher" id="content">
     <div class="st-content">
        
        <div class="st-content-inner padding-none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2 ">
                    	<h4 class="page-section-heading">
                    		@include('partials.notification')

                    	</h4>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="POST" action="{ /{ route('newss.store') }}">
                                    {{ csrf_field() }}
                                    
                                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }} form-control-material static required">
                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Enter Menu Name">
                                        <label for="name">Menu Name</label>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                    <div class="form-group {{ $errors->has('slug') ? ' has-error' : '' }} form-control-material static required">
                                        <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}" placeholder="Enter Menu slug">
                                        <label for="slug">Menu Slug</label>

                                        @if ($errors->has('slug'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('slug') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('position') ? ' has-error' : '' }} form-control-material static required">
                                        <input type="text" class="form-control" id="position" name="position" value="{{ old('position') }}" placeholder="Enter Menu Position">
                                        <label for="position">Menu Position</label>

                                        @if ($errors->has('position'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('position') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                    <div class="form-group {{ $errors->has('has_sub_nav') ? ' has-error' : '' }} required">
                                        <label class="col-sm-3 control-label">Has Sub-Navigation</label>
                                        <div class="col-sm-9">
                                            <select id="has_sub_nav" name="has_sub_nav" class="selectpicker" data-style="btn-white" data-live-search="true" data-size="5">
                                                <option value="">--Select--</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>

                                            </select>

                                            @if ($errors->has('has_sub_nav'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('has_sub_nav') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('visible') ? ' has-error' : '' }}">
                                        <label class="col-sm-3 control-label">Visible</label>
                                        <div class="col-sm-9">
                                            <select id="visible" name="visible" class="selectpicker" data-style="btn-white" data-live-search="true" data-size="5">
                                                <option value="">--Select--</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                                
                                            </select>

                                            @if ($errors->has('visible'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('visible') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('weight') ? ' has-error' : '' }}">
                                        <label class="col-sm-3 control-label">Weight</label>
                                        <div class="col-sm-9">
                                            <select id="weight" name="weight" class="selectpicker" data-style="btn-white" data-live-search="true" data-size="5">
                                                <option value="">--Select--</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>

                                            </select>

                                            @if ($errors->has('weight'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('weight') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>
                                                                                                  
                                    <div class="form-group">
                                        <div class="form-control-material static">
                                            
                                                <input type="text" id="icon" name="icon" value="{{ old('icon') }}" class="form-control" placeholder="Enter icon Code ">
                                                <label for="icon">Has Icon</label>
                                            
                                        </div>
                                    </div> 
                                    <div class="form-group">        
                                                
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="col-sm-offset-1 col-sm-9">
                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-user"></i> Create Menu</button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="col-sm-offset-6 col-sm-2">
                                                    
                                                    <a href="{ /{route('newss.index')}}" class="btn btn-danger"><i class="fa fa-close"></i> Back To Menu List</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        </div>
                                    </div>			      
                                </form> 

                            </div>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="st-pusher" id="content">
            <!-- sidebar effects INSIDE of st-pusher: -->
            <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->
            <!-- this is the wrapper for the content -->
            <div class="st-content">
                <!-- extra div for emulating position:fixed of the menu -->
                <div class="st-content-inner padding-none">
                    <div class="container-fluid">
                        <div class="page-section">
                            <!-- <h5 class="text-display-1"> -->
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
                        </div>

                        <!-- Tabbable Widget -->
                        <div class="tabbable paper-shadow relative" data-z="0.5">
                            <!-- Tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#"><i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs">Create News</span></a></li>
                                <li><a href=""><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Meta</span></a></li>
                                <li><a href=""><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Lessons</span></a></li>
                            </ul>
                            <!-- // END Tabs -->
                            <!-- Panes -->
                            <div class="tab-content">
                                <div id="course" class="tab-pane active">
                                    <form class="form-horizontal" method="POST" action="{{ route('newss.store') }}">
                                     {{ csrf_field() }}
                                        <div class="form-group">
                                        <label for="title">Title</label>
                                            <input type="text" name="title" id="title" placeholder="News Title" class="form-control" value="{{ old('title') }}" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="select" control-label">Type</label>
                                            <div class="">
                                                <select id="itype" name="itype" class="form-control select2">
                                                    <option value="">--Selecet--</option>
                                                    <option value="1">News</option>
                                                    <option value="2">Events</option>
                                                    <option value="3">Jod Vacancy</option>
                                                    <option value="4">Sales of Forms</option>
                                                    <option value="5">Advertisement</option>
                                                    <option value="6">Inugural Lectures</option>
                                                    <option value="7">Conference</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="select"  control-label">Latest News</label>
                                            <div class="">
                                                <select id="latest_news" name="latest_news" class="form-control select2">
                                                    <option value="">--Selecet--</option>
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>
                                                    
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="content">Content</label>
                                            <textarea name="content" id="content" cols="30" rows="10" class="summernote">{{ old('content') }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="select"  control-label">Has Image</label>
                                            <div class="">
                                                <select id="has_image" name="has_image" class="form-control select2">
                                                    <option value="">--Selecet--</option>
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>
                                                    
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="select" control-label">Priority</label>
                                            <div class="">
                                                <select id="position" name="position" class="form-control select2">
                                                    <option value="">--Selecet--</option>
                                                    <option value="1">High</option>
                                                    <option value="2">Medium</option>
                                                    <option value="3">Low</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="select" control-label">Level</label>
                                            <div class="">
                                                <select id="level" name="level" class="form-control select2">
                                                    <option value="">--Selecet--</option>
                                                    <option value="1">Home</option>
                                                    <option value="2">Faculty/Directorate</option>
                                                    <option value="3">Department/Unit</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="select" control-label">Visible</label>
                                            <div class="">
                                                <select id="visible" name="visible" class="form-control select2">
                                                    <option value="">--Selecet--</option>
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>
                                                   
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                        <label for="title">Author</label>
                                            <input type="text" name="author" id="author" placeholder="News Author" class="form-control used" value="{{ old('author') }}" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="select"  control-label">Archived</label>
                                            <div class="">
                                                <select id="archived" name="archived" class="form-control select2">
                                                    <option value="">--Selecet--</option>
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>
                                                    
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="select"  control-label">Verified</label>
                                            <div class="">
                                                <select id="verified" name="verified" class="form-control select2">
                                                    <option value="">--Selecet--</option>
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>
                                                    
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="select"  control-label">Deleted</label>
                                            <div class="">
                                                <select id="deleted" name="deleted" class="form-control select2">
                                                    <option value="">--Selecet--</option>
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>
                                                   
                                                </select>
                                            </div>
                                        </div>

                                        
                                    
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-user"></i> Create News</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <!-- // END Panes -->
                        </div>
                        <!-- // END Tabbable Widget -->
                    </div>
                </div>
                <!-- /st-content-inner -->
            </div>
            <!-- /st-content -->
</div>

@endsection
		

