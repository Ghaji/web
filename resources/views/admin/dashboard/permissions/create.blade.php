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
                                <li class="active"><a href="#"><i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs">Create Permission</span></a></li>
                    
                            </ul>
                            <!-- // END Tabs -->
                            <!-- Panes -->
                            <div class="tab-content">

                                <div id="course" class="tab-pane active">
                                    <!-- <form class="form-horizontal" method="POST" action="{ /{ route('pages.store') }}"> -->
                                    {!! Form::open(array('route' => 'permissions.store','method'=>'POST','class'=>'form-horizontal')) !!}
                                     {{ csrf_field() }}
                                        
                                        <div class="form-group">
                                        <label for="title" class="control-label">Name</label>
                                        <div class="form-control-material">
                                            <input type="text" name="name" id="name" placeholder="Role Name" class="form-control" value="{{ old('name') }}" />
                                        </div>    
                                        </div>

                                        <div class="form-group">
                                        <label for="title" class="control-label">Display Name</label>
                                        <div class="form-control-material">
                                            <input type="text" name="display_name" id="display_name" placeholder="Display Name" class="form-control" value="{{ old('display_name') }}" />
                                        </div>    
                                        </div>

                                        <div class="form-group">
                                            <label for="content">Description</label>
                                            <textarea name="description" id="description" cols="30" rows="10" class="summernote">{{ old('description') }}</textarea>
                                        </div>

                                        <!-- <div class="form-group"> -->
                                         <!-- <label for="permission" class="col-md-1 control-label">Permission:</label> -->
                                            <!-- <div class="col-md-8"> -->
                                                
                                                
                                                    <!-- foreach($permission as $value) -->
                                                       <!--  <div class="checkbox checkbox-info checkbox-circle">
                                                        <input type="checkbox" id="{ /{ $value->id }}" name="permission[]" value="{ /{ $value->id }}">
                                                        <label for="{ /{ $value->id }}">{ /{ $value->display_name }}</label>
                                                        <br/>
                                                        </div> -->
                                                    <!-- endforeach -->

                                            <!-- </div> -->
                                        <!-- </div> -->

                                        <div class="form-group">
                                            <p style="height: 30px;">
                                                <hr>
                                            </p>

                                        </div>
                                        

                                        
                                    
                                    <div class="text-left">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-user"></i> Create Page</button>
                                    </div>
                                    {!! Form::close() !!}
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



		

