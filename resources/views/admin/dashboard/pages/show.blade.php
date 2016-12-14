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
                                    <form class="form-horizontal" method="POST" action="{{ route('pages.update', $page->slug) }}">
                                     {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="PUT">
                                        <div class="form-group">
                                         <label for="publish" class="col-md-1 control-label">Parent Page</label>
                                            <div class="col-md-8">
                                                @if($page->s1 == 1)
                                                    <div class="radio radio-primary radio-inline">
                                                        <input type="radio" name="s1" id="s1" value="1" checked>
                                                        <label for="s1">Main Page</label>
                                                    </div>
                                                    <div class="radio radio-success radio-inline">
                                                        <input type="radio" name="s1" id="s1_" value="2" >
                                                        <label for="s1_">Sub Page</label>
                                                    </div>
                                                    <div class="radio radio-danger radio-inline">
                                                        <input type="radio" name="s1" id="s1__" value="3" >
                                                        <label for="s1__">No Page</label>
                                                    </div>
                                                @elseif($page->s1 == 2)
                                                    <div class="radio radio-primary radio-inline">
                                                        <input type="radio" name="s1" id="s1" value="1" >
                                                        <label for="s1">Main Page</label>
                                                    </div>
                                                    <div class="radio radio-success radio-inline">
                                                        <input type="radio" name="s1" id="s1_" value="2" checked>
                                                        <label for="s1_">Sub Page</label>
                                                    </div>
                                                    <div class="radio radio-danger radio-inline">
                                                        <input type="radio" name="s1" id="s1__" value="3" >
                                                        <label for="s1__">No Page</label>
                                                    </div>
                                                @else
                                                    <div class="radio radio-primary radio-inline">
                                                        <input type="radio" name="s1" id="s1" value="1" >
                                                        <label for="s1">Main Page</label>
                                                    </div>
                                                    <div class="radio radio-success radio-inline">
                                                        <input type="radio" name="s1" id="s1_" value="2" >
                                                        <label for="s1_">Sub Page</label>
                                                    </div>
                                                    <div class="radio radio-danger radio-inline">
                                                        <input type="radio" name="s1" id="s1__" value="3" checked>
                                                        <label for="s1__">No Page</label>
                                                    </div>
                                                @endif
                    
                                            </div>
                                        </div>
                                        <div id="dropMain" style="display: none;">
                                            <div class="form-group">
                                            <label for="select" class="col-sm-3 control-label">Main Menu</label>
                                            <div class="col-sm-9">
                                                <select id="slug" name="slug" class="selectpicker" data-style="btn-white" data-live-search="true">
                                                    <option value="">--Select--</option>
                                                    @foreach( $main_menus as $main_menu )
                                                        @if($main_menu->slug == $page->slug)
                                                            <option value="{{ $main_menu->slug }}" selected='selected'>{{ $main_menu->name }}</option>
                                                        @else
                                                            <option value="{{ $main_menu->slug }}">{{ strtoupper($main_menu->name) }}</option>
                                                        @endif
                                                        
                                                    @endforeach

                                                
                                                </select>
                                            </div>
                                        </div>
                                        </div>
                                            
                                        <div id="dropSub" style="display: none;">
                                            <div class="form-group">
                                            <label for="select" class="col-sm-3 control-label">Sub Menu</label>
                                            <div class="col-sm-9">
                                                <select id="slug1" name="slug1" class="selectpicker" data-style="btn-white" data-live-search="true">
                                                    <option value="">--Select--</option>
                                                    @foreach( $sub_menus as $sub_menu )
                                                        @if($sub_menu->slug == $page->slug)
                                                            <option value="{{ $sub_menu->slug }}" selected='selected'>{{ $sub_menu->name }}</option>
                                                        @else
                                                            <option value="{{ $sub_menu->slug }}">{{ strtoupper($sub_menu->name) }}</option>
                                                        @endif
                                                        
                                                    @endforeach
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        </div>

                                        <!-- <div id="dropNo" class="form-group" style="display: none;">
                                            <div class="form-group">
                                                <label for="slug" class="col-sm-3 control-label" >Published Date</label>
                                                <div class="col-sm-9 form-control-material">
                                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Page Slug">
                                                </div>
                                            </div>
                                        </div> -->
                                        <div id="dropNo" style="display: none;">
                                            <div class="form-group">
                                                <label for="slug" class="col-sm-3 control-label" >Any Menu</label>
                                                <div class="col-sm-9 form-control-material">
                                                    <input type="text" class="form-control" id="slug2" name="slug2" placeholder="Page Slug" value="{{ (old('slug')) ? old('slug') : $page->slug }}">
                                                </div>
                                            </div>
                                        </div>

                                        
                                        <div class="form-group">
                                            <label for="select" class="control-label">Category</label>
                                            <div class="">
                                                <select id="category" name="category" class="form-control selectpicker" data-style="btn-white" data-live-search="true">
                                                    <option value="">--Select--</option>
                                                    <option value="main"{{ ($page->category == 'main') ? "selected='selected'" : '' }}>main</option>
                                                    <option value="faculty" {{ ($page->category == 'faculty') ? "selected='selected'" : '' }}>faculty</option>
                                                    <option value="department" {{ ($page->category == 'department') ? "selected='selected'" : '' }}>department</option>
                                                    <option value="special" {{ ($page->category == 'special') ? "selected='selected'" : '' }}>special</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="title" class="control-label">Page Owner</label>
                                        <div class="form-control-material">
                                            <input type="text" name="owner" id="owner" placeholder="Page Owner" class="form-control" value="{{ (old('owner')) ? old('owner') : $page->owner }}" />
                                        </div>    
                                        </div>

                                        <div class="form-group">
                                        <label for="title" class="control-label">Page Title</label>
                                        <div class="form-control-material">
                                            <input type="text" name="title" id="title" placeholder="Page Title" class="form-control" value="{{ (old('title')) ? old('title') : $page->title }}" />
                                        </div>    
                                        </div>

                                        <div class="form-group">
                                        <label for="title" class="control-label">Name</label>
                                        <div class="form-control-material">
                                            <input type="text" name="name" id="name" placeholder="Page Name" class="form-control" value="{{ (old('name')) ? old('name') : $page->name }}" />
                                        </div>    
                                        </div>

                                        <div class="form-group">
                                            <label for="select" class="control-label">Position</label>
                                            <div class="">
                                                <select id="position" name="position" class="form-control selectpicker" data-style="btn-white" data-live-search="true">
                                                    <option value="">--Select--</option>
                                                    <option value="1" {{ ($page->position == 1) ? "selected='selected'" : '' }}>High</option>
                                                    <option value="2" {{ ($page->position == 2) ? "selected='selected'" : '' }}>Medium</option>
                                                    <option value="3" {{ ($page->position == 3) ? "selected='selected'" : '' }}>Low</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="content">Content</label>
                                            <textarea name="content" id="content" cols="30" rows="10" class="summernote">{{ (old('content')) ? old('content') : $page->content }}</textarea>
                                        </div>


                                        <div class="form-group">
                                            <label for="select" class="control-label">Visible</label>
                                            <div class="">
                                                <select id="visible" name="visible" class="form-control selectpicker" data-style="btn-white" data-live-search="true">
                                                    <option value="">--Select--</option>
                                                    <option value="0" {{ ($page->visible == 0) ? "selected='selected'" : '' }}>No</option>
                                                    <option value="1" {{ ($page->visible == 1) ? "selected='selected'" : '' }}>Yes</option>
                                                   
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="select"  class="control-label">Weight</label>
                                            <div class="">
                                                <select id="weight" name="weight" class="form-control selectpicker" data-style="btn-white" data-live-search="true">
                                                    <option value="">--Selecet--</option>
                                                    <option value="0" {{ ($page->weight == 0) ? "selected='selected'" : '' }}>No</option>
                                                    <option value="1" {{ ($page->weight == 1) ? "selected='selected'" : '' }}>Yes</option>
                                                    
                                                </select>
                                            </div>
                                        </div>

                                        

                                        <div class="form-group">
                                         <label for="publish" class="col-md-1 control-label">Publish</label>
                                            <div class="col-md-8">
                                                @if($page->publish == 1)
                                                <div class="radio radio-primary radio-inline">
                                                    <input type="radio" name="publish" id="publish" value="1" checked>
                                                    <label for="publish">Yes </label>
                                                </div>
                                                <div class="radio radio-danger radio-inline">
                                                    <input type="radio" name="publish" id="publish_" value="0">
                                                    <label for="publish_">No </label>
                                                </div>
                                                @else
                                                <div class="radio radio-primary radio-inline">
                                                    <input type="radio" name="publish" id="publish" value="1">
                                                    <label for="publish">Yes </label>
                                                </div>
                                                <div class="radio radio-danger radio-inline">
                                                    <input type="radio" name="publish" id="publish_" value="0" checked>
                                                    <label for="publish_">No </label>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div id="dropMe" style="display: none;">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" >Publisher Name</label>
                                                <div class="col-sm-9 form-control-material">
                                                    <input type="text" class="form-control" id="publisher_name" name="publisher_name" value="{{ (old('publisher_name')) ? old('publisher_name') : $page->publisher_name }}" placeholder="Publisher Name">

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="published_date" class="col-sm-3 control-label" >Published Date</label>
                                                <div class="col-sm-9 form-control-material">                                                    
                                                        <input type="text" class="form-control datepicker" id="published_date" name="published_date" value="{{ (old('published_date')) ? old('published_date') : $page->published_date }}" placeholder="Published Date">   
                                                </div>
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


<script src="{{ asset('../resources/assets/js/jquery-1.11.2.min.js') }}"></script>
<script type="text/javascript">
    


$(document).ready(function(){
    if (document.getElementById('publish').checked) {
        $("#dropMe").slideDown(500);
         // document.getElementById('password').disabled = false;
        console.log("dropDown");
    } 
    if (document.getElementById('publish_').checked) {
        $("#dropMe").slideUp(500);
        // document.getElementById('password').disabled = true;
        console.log("dropUp");
    } 



     $("#publish").click(function(){
        $("#dropMe").slideDown(500);
         // document.getElementById('password').disabled = false;
        console.log("drop2");
     });

     $("#publish_").click(function(){
        $("#dropMe").slideUp(500);
        // document.getElementById('password').disabled = true;
        console.log("dont drop");
     });

    if (document.getElementById('s1').checked) {
        $("#dropMain").slideDown(500);
         // document.getElementById('password').disabled = false;
        console.log("dropDown");
    } 

    if (document.getElementById('s1_').checked) {
        $("#dropSub").slideDown(500);
         // document.getElementById('password').disabled = false;
        console.log("dropDown");
    }

    if (document.getElementById('s1__').checked) {
        $("#dropMain").slideUp(500);
        $("#dropSub").slideUp(500);
        $("#dropNo").slideDown(500);
        console.log("dropDown");
    }  

     $("#s1").click(function(){
        $("#dropMain").slideDown(500);
        $("#dropSub").slideUp(500);
        $("#dropNo").slideUp(500);
         // document.getElementById('password').disabled = false;
        console.log("drop2");
     });

     $("#s1_").click(function(){
        $("#dropSub").slideDown(500);
        $("#dropMain").slideUp(500);
        $("#dropNo").slideUp(500);
        // document.getElementById('password').disabled = true;
        console.log("dont drop");
     });

     $("#s1__").click(function(){
        $("#dropNo").slideDown(500);
        $("#dropSub").slideUp(500);
        $("#dropMain").slideUp(500);
        // document.getElementById('password').disabled = true;
        console.log("dont drop");
     });
});
 
 
</script>


		

