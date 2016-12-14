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
                                <li class="active"><a href="#"><i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs">Update News</span></a></li>
                                <li><a href=""><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Meta</span></a></li>
                                <li><a href=""><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Lessons</span></a></li>
                            </ul>
                            <!-- // END Tabs -->
                            <!-- Panes -->
                            <div class="tab-content">
                                <div id="course" class="tab-pane active">
                                    <form class="form-horizontal" method="POST" action="{{ route('newss.update', $news->slug) }}">
                                     {{ csrf_field() }}
                                     <input name="_method" type="hidden" value="PUT">
                                        <div class="form-group form-control-material">
                                            <input type="text" name="title" id="title" placeholder="News Title" class="form-control used" value="{{ (old('title')) ? old('title') : $news->title }}" />
                                            <label for="title">Title</label>
                                        </div>

                                        <div class="form-group">
                                            <label for="select"  control-label">Type</label>
                                            <div class="">
                                                <select id="itype" name="itype" class="form-control select2">
                                                    <option value="">--Selecet--</option>
                                                    <option value="1" {{ ($news->itype == 1) ? "selected='selected'" : '' }}>News</option>
                                                    <option value="2" {{ ($news->itype == 2) ? "selected='selected'" : '' }}>Events</option>
                                                    <option value="3" {{ ($news->itype == 3) ? "selected='selected'" : '' }}>Job Vacancy</option>
                                                    <option value="4" {{ ($news->itype == 4) ? "selected='selected'" : '' }}>Sales of Forms</option>
                                                    <option value="5" {{ ($news->itype == 5) ? "selected='selected'" : '' }}>Advertisement</option>
                                                    <option value="6" {{ ($news->itype == 6) ? "selected='selected'" : '' }}>Inugural Lectures</option>
                                                    <option value="7" {{ ($news->itype == 7) ? "selected='selected'" : '' }}>Conferences</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="select"  control-label">Latest News</label>
                                            <div class="">
                                                <select id="latest_news" name="latest_news" class="form-control select2">
                                                    <option value="">--Selecet--</option>
                                                    <option value="0" {{ ($news->latest_news == 0) ? "selected='selected'" : '' }}>No</option>
                                                    <option value="1" {{ ($news->latest_news == 1) ? "selected='selected'" : '' }}>Yes</option>
                                                    
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="content">Content</label>
                                            <textarea name="content" id="content" cols="30" rows="10" class="summernote">{{ (old('content')) ? old('content') : $news->content }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="select"  control-label">Has Image</label>
                                            <div class="">
                                                <select id="has_image" name="has_image" class="form-control select2">
                                                    <option value="">--Selecet--</option>
                                
                                                    <option value="0" {{ ($news->has_image == 0) ? "selected='selected'" : '' }}>No</option>
                                                    <option value="1" {{ ($news->has_image == 1) ? "selected='selected'" : '' }}>Yes</option>
                                                    
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="select"  control-label">Priority</label>
                                            <div class="">
                                                <select id="position" name="position" class="form-control select2">
                                                    <option value="">--Selecet--</option>
                                                    <option value="1" {{ ($news->position == 1) ? "selected='selected'" : '' }}>High</option>
                                                    <option value="2" {{ ($news->position == 2) ? "selected='selected'" : '' }}>Medium</option>
                                                    <option value="3" {{ ($news->position == 3) ? "selected='selected'" : '' }}>Low</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="select"  control-label">Level</label>
                                            <div class="">
                                                <select id="level" name="level" class="form-control select2">
                                                    <option value="">--Selecet--</option>
                                                    <option value="1" {{ ($news->level == 1) ? "selected='selected'" : '' }}>Home</option>
                                                    <option value="2" {{ ($news->level == 2) ? "selected='selected'" : '' }}>Faculty/Directorate</option>
                                                    <option value="3" {{ ($news->level == 3) ? "selected='selected'" : '' }}>Departments/Units</option>
                                                   
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="select"  control-label">Visible</label>
                                            <div class="">
                                                <select id="visible" name="visible" class="form-control select2">
                                                    <option value="">--Selecet--</option>
                                                    <option value="0" {{ ($news->visible == 0) ? "selected='selected'" : '' }}>No</option>
                                                    <option value="1" {{ ($news->visible == 1) ? "selected='selected'" : '' }}>Yes</option>
                                                   
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group form-control-material">
                                            <input type="text" name="author" id="author" placeholder="News Author" class="form-control used" value="{{ (old('author')) ? old('author') : $news->author }}" />
                                            <label for="title">Author</label>
                                        </div>

                                        <div class="form-group">
                                            <label for="select"  control-label">Archived</label>
                                            <div class="">
                                                <select id="archived" name="archived" class="form-control select2">
                                                    <option value="">--Selecet--</option>
                                                    <option value="0" {{ ($news->archived == 0) ? "selected='selected'" : '' }}>No</option>
                                                    <option value="1" {{ ($news->archived == 1) ? "selected='selected'" : '' }}>Yes</option>
                                                    
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="select"  control-label">Verified</label>
                                            <div class="">
                                                <select id="verified" name="verified" class="form-control select2">
                                                    <option value="">--Selecet--</option>
                                                    <option value="0" {{ ($news->verified == 0) ? "selected='selected'" : '' }}>No</option>
                                                    <option value="1" {{ ($news->verified == 1) ? "selected='selected'" : '' }}>Yes</option>
                                                    
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="select"  control-label">Deleted</label>
                                            <div class="">
                                                <select id="deleted" name="deleted" class="form-control select2">
                                                    <option value="">--Selecet--</option>
                                                    <option value="0" {{ ($news->deleted == 0) ? "selected='selected'" : '' }}>No</option>
                                                    <option value="1" {{ ($news->deleted == 1) ? "selected='selected'" : '' }}>Yes</option>
                                                   
                                                </select>
                                            </div>
                                        </div>

                                        
                                    
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-user"></i> Update News</button>
                                         <!-- <a href="{ /{ route('newss.index') }}" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Back to News"><i
                                            class="fa fa-arrow-left"></i> Back to News</a> -->
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
		

