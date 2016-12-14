@extends('layouts.admin')

@section('content')

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
                                <li class="active"><a href="#"><i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs">Create Pages</span></a></li>
                                <li><a href=""><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Meta</span></a></li>
                                <li><a href=""><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Lessons</span></a></li>
                            </ul>
                            <!-- // END Tabs -->
                            <!-- Panes -->
                            <div class="tab-content">
                                <div id="course" class="tab-pane active">
                                    <form class="form-horizontal" method="POST" action="{{ route('pages.update', $faculty->slug) }}">
                                     {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="PUT">
                                        

                                        
                                        <div class="form-group">
                                            <label for="select" class="control-label">Category Name</label>
                                            <div class="">
                                                <select id="category_name" name="category_name" class="form-control selectpicker" data-style="btn-white" data-live-search="true">
                                                    <option value="">--Select--</option>
                                                    <option value="faculties"{{ ($faculty->category_name == 'faculties') ? "selected='selected'" : '' }}>Faculties</option>
                                                    <option value="directorates" {{ ($faculty->category_name == 'directorates') ? "selected='selected'" : '' }}>Directorates</option>
                                                    <option value="centers" {{ ($faculty->category_name == 'centers') ? "selected='selected'" : '' }}>Centers</option>
                                                    <option value="services" {{ ($faculty->category_name == 'services') ? "selected='selected'" : '' }}>Services</option>
                                                    <option value="schools" {{ ($faculty->category_name == 'schools') ? "selected='selected'" : '' }}>Schools</option>
                                                    <option value="institutes" {{ ($faculty->category_name == 'institutes') ? "selected='selected'" : '' }}>Institutes</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="title" class="control-label">Sub Category Name</label>
                                        <div class="form-control-material">
                                            <input type="text" name="child_type" id="child_type" placeholder="Sub Category Name" class="form-control" value="{{ (old('child_type')) ? old('child_type') : $faculty->child_type }}" />
                                        </div>    
                                        </div>

                                        <div class="form-group">
                                        <label for="title" class="control-label">Name</label>
                                        <div class="form-control-material">
                                            <input type="text" name="name" id="name" placeholder="Page Name" class="form-control" value="{{ (old('name')) ? old('name') : $faculty->name }}" />
                                        </div>    
                                        </div>

                                        <div class="form-group">
                                        <label for="title" class="control-label">Code e.g (Natural Sciences = NS)</label>
                                        <div class="form-control-material">
                                            <input type="text" name="code" id="code" placeholder="Code Name" class="form-control" value="{{ (old('code')) ? old('code') : $faculty->code }}" />
                                        </div>    
                                        </div>

                                        <div class="form-group">
                                        
                                        <label for="title" class="control-label">Upload Faculty Image<i class="fa fa-upl"></i></label>
                                        <div class="form-control-material">
                                                     <input type="file" name="image" id="image">
                                                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea name="description" id="description" cols="30" rows="10" class="summernote">{{ (old('description')) ? old('description') : $faculty->description }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="select" class="control-label">Position</label>
                                            <div class="">
                                                <select id="position" name="position" class="form-control selectpicker" data-style="btn-white" data-live-search="true">
                                                    <option value="">--Select--</option>
                                                    <option value="1" {{ ($faculty->position == 1) ? "selected='selected'" : '' }}>High</option>
                                                    <option value="2" {{ ($faculty->position == 2) ? "selected='selected'" : '' }}>Medium</option>
                                                    <option value="3" {{ ($faculty->position == 3) ? "selected='selected'" : '' }}>Low</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="select" class="control-label">Visible</label>
                                            <div class="">
                                                <select id="visible" name="visible" class="form-control selectpicker" data-style="btn-white" data-live-search="true">
                                                    <option value="">--Select--</option>
                                                    <option value="0" {{ ($faculty->visible == 0) ? "selected='selected'" : '' }}>No</option>
                                                    <option value="1" {{ ($faculty->visible == 1) ? "selected='selected'" : '' }}>Yes</option>
                                                   
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="select"  class="control-label">Weight</label>
                                            <div class="">
                                                <select id="weight" name="weight" class="form-control selectpicker" data-style="btn-white" data-live-search="true">
                                                    <option value="">--Selecet--</option>
                                                    <option value="0" {{ ($faculty->weight == 0) ? "selected='selected'" : '' }}>No</option>
                                                    <option value="1" {{ ($faculty->weight == 1) ? "selected='selected'" : '' }}>Yes</option>
                                                    
                                                </select>
                                            </div>
                                        </div>

                                    <div class="text-left">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-user"></i> Create Page</button>
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




		

