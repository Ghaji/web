@extends('layouts.admin')

@section('content')
<div class="st-pusher" id="content">
     <div class="st-content">
        <!-- extra div for emulating position:fixed of the menu -->
        <div class="st-content-inner padding-none">
	        <div class="container-fluid">
	            <div class="row">
			        <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 ">

						<h4 class="page-section-heading">
							@include('partials.notification')
						</h4>
			            <div class="panel panel-default">

                        <div class="panel-body">

                        		@if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            <!-- <form role="form" method="POST" action="{ /{ route('users.store') }}"> -->
                            {!! Form::open(array('route' => 'users.store','method'=>'POST', 'class' => 'form-horizontal')) !!}
                            	{{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-control-material static required">
                                            <input type="text" class="form-control" id="unique_number" name="unique_number" value="{{ old('unique_number') }}" placeholder="Your Unique Number" maxlength="4">
                                            <label for="unique_number">Unique Number</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
		                                    <label class="col-sm-3 control-label">User Category</label>
		                                    <div class="col-sm-9">
		                                        <select id="is_admin_user" name="is_admin_user" class="selectpicker" data-style="btn-white" data-live-search="true" data-size="5">
		                                            <option value="">Select a Category ..</option>
		                                            <option value="0">Super Administrator</option>
		                                            <option value="1">Administrator</option>
		                                            <option value="2">Content Uploader</option> 
		                                            <option value="3">News Uploader</option>
		                                            <option value="4">Image Uploader</option>
		                                        </select>

		                                        
		                                    </div>
		                                </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-control-material static required">
                                            <input type="text" class="form-control" id="surname" name="surname" value="{{ old('surname') }}" placeholder="Your Surname">
                                            <label for="surname">Surname</label>

                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-control-material static required">
                                            <input type="text" class="form-control" id="firstname" name="firstname" value="{{ old('firstname') }}" placeholder="Your Firstname">
                                            <label for="firstname">Firstname</label>

                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-control-material static required">
                                            <input type="text" class="form-control" id="othername" name="othername" value="{{ old('othername') }}" placeholder="Your Othername">
                                            <label for="othername">Othername</label>
      
                                        </div>
                                    </div>
                                    <div class="col-md-6">                                
                                        <div class="form-group ">
		                                    <div class="col-sm-12">
		                                        <div class="form-control-material static required">
		                                            <div class="input-group">
		                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
		                                                <input id="addon" type="text" id="username" name="username" value="{{ old('username') }}" class="form-control" placeholder="Username">
		                                                <label for="addon">Username</label>

		                                                
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
                                    </div>
                                </div>
                                <div class="form-group  form-control-material static required">
                                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Enter Email">
                                    <label for="email">Email address</label>

                                    

                                </div>
                                <div class="form-group  form-control-material static required">
                                    <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" placeholder="Enter Phone Number" maxlength="15">
                                    <label for="phone_number">Phone Number</label>

                                    
                                </div>

                              <!--   <div class="row">
	                            	<div class="col-md-6"> -->
	                            		<p class="alert alert-info">Choose Secret Question and Answer</p>
	                                    <div class="form-group">
	                                        <label class="col-sm-3 control-label">Question</label>
	                                        <div class="col-sm-9">
	                                            <select name="secret_question_id" id="secret_question_id" class="selectpicker" data-style="btn-white" data-live-search="true">
	                                                <option value="">Secret Question</option>
	                                                @foreach( $secret_questions as $secret_question )
	                                                    <option value="{{ $secret_question->id }}">{{ strtoupper($secret_question->question) }}</option>
	                                                @endforeach
	                                            </select>

	                                        </div>
	                                    </div>
	                                <!-- </div> -->

	                                <!-- <div class="col-md-6"> -->
	                                    <div class="form-group">
	                                        <label for="secret_a" class="col-sm-3 control-label">Answer</label>
	                                        <div class="col-sm-9">
	                                            <div class="form-control-material">
	                                                <input type="secret_answer" class="form-control" id="secret_answer" name="secret_answer" placeholder="Answer">
	                                                
	                                            </div>
	                                        </div>
	                                    </div>
	                                <!-- </div>
	                                
                                </div> -->

                                <div class="form-group  form-control-material static required">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    <label for="password">Password</label>

                                    
                                </div>
                                <div class="form-group ">
                                        <div class="form-control-material static required">
                                            <textarea id="address" name="address" class="form-control" rows="5" placeholder="Enter Address">{{ old('address') }}</textarea>
                                            <label for="address">Address</label>

                                            
                                        </div>                                    
                                </div>
	                            
                                <div class="row">
	                            	<div class="col-md-6">
	                                    <div class="form-group ">
		                                    <label class="col-sm-3 control-label">Visible</label>
		                                    <div class="col-sm-9">
		                                        <select id="visible" name="visible" class="selectpicker" data-style="btn-white" data-live-search="true" data-size="5">
		                                            <option value="">--Select--</option>
		                                            <option value="1">Yes</option>
		                                            <option value="0">No</option>
		                                            
		                                        </select>

		                                        

		                                    </div>
		                                </div>
	                                </div>
	                                <div class="col-md-6">
	                                    <div class="form-group ">
		                                    <label class="col-sm-3 control-label">Suspended</label>
		                                    <div class="col-sm-9">
		                                        <select id="suspended" name="suspended" class="selectpicker" data-style="btn-white" data-live-search="true" data-size="5">
		                                            <option value="">--Select--</option>
		                                            <option value="1">Yes</option>
		                                            <option value="0">No</option>
		              
		                                        </select>

		                                        

		                                    </div>
		                                </div>
	                                </div>                        
                                </div>
                               
                                <div class="form-group">
                                    
                                    <div style="height: 30px;"></div>
                                    
                                </div>
                                <p class="alert alert-info">Assging User Roles [Multiple Roles can be assign to user]</p>
                                <div class="form-group">
                                    <!-- <label for="select" class="control-label">Roles</label> -->
                                    <div class="">
                                        {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple', 'style' => 'width: 100%;', 'data-toggle' => 'select2', 'data-placeholder' => 'Select to assign role...', 'data-allow-clear' => 'true')) !!}
                                    </div>
                                </div>

	                                
                                <div class="form-group">
                                    
                                    <div style="height: 30px;"></div>
                                    
                                </div>
   
                                <div class="row">
	                            	<div class="col-md-6">
	                                    <div class="form-group">
		                                    <div class="col-sm-offset-1 col-sm-9">
		                                        <button type="submit" class="btn btn-primary"><i class="fa fa-user"></i> Create Account</button>
		                                    </div>
		                                </div>
                                	</div>
	                                
	                                <div class="col-md-6">
	                                    <div class="form-group">
		                                    <div class="col-sm-offset-6 col-sm-2">
		                                        <!-- <button type="reset" class="btn btn-danger"><i class="fa fa-close"></i> Cancel</button> -->
		                                        <a href="{{ route('users.index') }}" class="btn btn-danger"><i class="fa fa-close"></i> Back To Users List</a>
		                                    </div>
		                                </div>
	                                </div>                        
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
			            
			        </div>
			    </div>
	            
	        </div>
	    </div>
	    <!-- /st-content-inner -->
	</div>
</div>


@endsection