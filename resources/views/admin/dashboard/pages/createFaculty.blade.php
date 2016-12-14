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
                                <li>
                                    <a href="{{ url('pages/create') }}">
                                        <i class="fa fa-fw fa-lock"></i> 
                                            <span class="hidden-sm hidden-xs">Create Normal Pages</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="{{ url('pages/createFaculty') }}">
                                        <i class="fa fa-fw fa-credit-card"></i> 
                                        <span class="hidden-sm hidden-xs">Create Faculty Pages</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('pages/createDepartment') }}">
                                        <i class="fa fa-fw fa-anchor"></i> 
                                        <span class="hidden-sm hidden-xs">Create Department Pages</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('pages/createSpecialPage') }}">
                                        <i class="fa fa-fw fa-adn"></i> 
                                        <span class="hidden-sm hidden-xs">Create Special Pages</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- // END Tabs -->
                            <!-- Panes -->
                            <div class="tab-content">

                                <div id="course" class="tab-pane active">
                                    <form class="form-horizontal" method="POST" action="{{ route('pages.store') }}">
                                     {{ csrf_field() }}
                                        
                                        <div class="form-group">
                                         <label for="Parent" class="col-md-1 control-label">Parent Page</label>
                                            <div class="col-md-8">
                                                <div class="radio radio-primary radio-inline">
                                                    <input type="radio" name="s1" id="s1" value="1">
                                                    <label for="s1">Main Page</label>
                                                </div>
                                                <div class="radio radio-success radio-inline">
                                                    <input type="radio" name="s1" id="s1_" value="2">
                                                    <label for="s1_">Sub Page</label>
                                                </div>
                                                <div class="radio radio-danger radio-inline">
                                                    <input type="radio" name="s1" id="s1__" value="3" checked>
                                                    <label for="s1__">No Page</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="dropMain" style="display: none;">
                                            <div class="form-group">
                                                <label for="select" class="col-sm-3 control-label">Faculty</label>
                                                <div class="col-sm-9">
                                                    <select id="slug" name="slug" class="selectpicker" data-live-search="true">
                                                        <option value="">--Select--</option>
                                                        @foreach( $faculties as $faculty )
                                                            <option value="{{ $faculty->slug }}">{{ ucfirst($faculty->name) }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                            
                                        <div id="dropSub" style="display: none;">
                                            <div class="form-group">
                                                <label for="select" class="col-sm-3 control-label">Sub Menu</label>
                                                <div class="col-sm-9">
                                                    <select id="slug1" name="slug1" class="selectpicker" data-live-search="true">
                                                        <option value="">--Select--</option>
                                                        @foreach( $sub_menus as $sub_menu )
                                                            <option value="{{ $sub_menu->slug }}">{{ ucfirst($sub_menu->name) }}</option>
                                                        @endforeach
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="dropNo" style="display: none;">
                                            <div class="form-group">
                                                <label for="slug" class="col-sm-3 control-label" >Any Menu</label>
                                                <div class="col-sm-9 form-control-material">
                                                    <input type="text" class="form-control" id="slug2" name="slug2" placeholder="Page Slug" value="{{ old('slug') }}">
                                                </div>
                                            </div>
                                        </div>

                                        

                                        

                                        <div class="form-group">
                                        <label for="title" class="control-label">Name</label>
                                        <div class="form-control-material">
                                            <input type="text" name="name" id="name" placeholder="Page Name" class="form-control" value="{{ old('name') }}" />
                                        </div>    
                                        </div>

                                        <div class="form-group">
                                            <label for="select" class="control-label">Position</label>
                                            <div class="">
                                                <select id="position" name="position" class="form-control selectpicker" data-style="btn-white" data-live-search="true">
                                                    <option value="">--Select--</option>
                                                    <option value="1">High</option>
                                                    <option value="2">Medium</option>
                                                    <option value="3">Low</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="content">Content</label>
                                            <textarea name="content" id="content" cols="30" rows="10" class="summernote">{{ old('content') }}</textarea>
                                        </div>


                                        <div class="form-group">
                                            <label for="select" class="control-label">Visible</label>
                                            <div class="">
                                                <select id="visible" name="visible" class="form-control selectpicker" data-style="btn-white" data-live-search="true">
                                                    <option value="">--Select--</option>
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>
                                                   
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="select"  class="control-label">Weight</label>
                                            <div class="">
                                                <select id="weight" name="weight" class="form-control selectpicker" data-style="btn-white" data-live-search="true">
                                                    <option value="">--Selecet--</option>
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>
                                                    
                                                </select>
                                            </div>
                                        </div>

                                        

                                        <div class="form-group">
                                         <label for="publish" class="col-md-1 control-label">Publish</label>
                                            <div class="col-md-8">
                                                <div class="radio radio-primary radio-inline">
                                                    <input type="radio" name="publish" id="publish" value="1">
                                                    <label for="publish">Yes </label>
                                                </div>
                                                <div class="radio radio-danger radio-inline">
                                                    <input type="radio" name="publish" id="publish_" value="0" checked>
                                                    <label for="publish_">No </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="dropMe" style="display: none;">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" >Publisher Name</label>
                                                <div class="col-sm-9 form-control-material">
                                                    <input type="text" class="form-control" id="publisher_name" name="publisher_name" value="{{ old('publisher_name') }}" placeholder="Publisher Name">

                                                </div>
                                            </div>
                                            

                                            <div class="form-group">
                                                <label for="published_date" class="col-sm-3 control-label" >Published Date</label>
                                                <div class="col-sm-9 form-control-material">
                                                    
                                                        <input type="text" class="form-control datepicker" id="published_date" name="published_date" value="{{ old('published_date') }}" placeholder="Published Date">
                                                        
                                                   
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

    if (document.getElementById('s1__').value) {
        $("#dropNo").slideDown(500);
         // document.getElementById('password').disabled = false;
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


		

