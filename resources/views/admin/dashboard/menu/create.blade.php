@extends('layouts.admin')

@section('content')
<div class="st-pusher" id="content">
     <div class="st-content">
        <!-- extra div for emulating position:fixed of the menu -->
        <div class="st-content-inner padding-none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2 ">
                    	<h4 class="page-section-heading">
                    		@include('partials.notification')

                    	</h4>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="POST" action="{{ route('menu.store') }}">
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
                                    <div class="form-group {{ $errors->has('category') ? ' has-error' : '' }}">
                                        <label class="col-sm-3 control-label">Category</label>
                                        <div class="col-sm-9">
                                            <select id="category" name="category" class="selectpicker" data-style="btn-white" data-live-search="true" data-size="5">
                                                <option value="">--Select--</option>
                                                <option value="primary">Primary Menu</option>
                                                <option value="secondary">Secondary Menu</option>
                                                <option value="faculty">Faculty Menu</option>
                                                <option value="department">Department Menu</option>
                                                
                                            </select>

                                            @if ($errors->has('category'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('category') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>
                                    <!-- <div class="form-group { /{ $errors->has('slug') ? ' has-error' : '' }} form-control-material static required">
                                        <input type="text" class="form-control" id="slug" name="slug" value="{ /{ old('slug') }}" placeholder="Enter Menu slug">
                                        <label for="slug">Menu Slug</label>

                                        if ($errors->has('slug'))
                                            <span class="help-block">
                                                <strong>{ /{ $errors->first('slug') }}</strong>
                                            </span>
                                        endif
                                    </div> -->
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

                                    <div class="form-group {{ $errors->has('navigation_type') ? ' has-error' : '' }} required">
                                        <label class="col-sm-3 control-label">Navigation Type</label>
                                        <div class="col-sm-9">
                                            <select id="navigation_type" name="navigation_type" class="selectpicker" data-style="btn-white" data-live-search="true" data-size="5">
                                                <option value="">--Select--</option>
                                                <option value="fixed">Fixed Menu</option>
                                                <option value="dynamic">Dynamic Menu</option>

                                            </select>

                                            @if ($errors->has('navigation_type'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('navigation_type') }}</strong>
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
                                            <!-- <div class="input-group"> -->
                                                <!-- <span class="input-group-addon"><i class="fa fa-user"></i></span> -->
                                                <input type="text" id="icon" name="icon" value="{{ old('icon') }}" class="form-control" placeholder="Enter icon Code ">
                                                <label for="icon">Has Icon</label>
                                            <!-- </div> -->
                                        </div>
                                    </div> 
                                    <div class="form-group">        
                                        <!-- This is form-group to create space between the form and the button -->        
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
                                                    <!-- <button type="reset" class="btn btn-danger"><i class="fa fa-close"></i> Cancel</button> -->
                                                    <a href="{{route('menu.index')}}" class="btn btn-danger"><i class="fa fa-close"></i> Back To Menu List</a>
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
</div>

@endsection
		

