@extends('layouts.admin')

@section('content')
<div class="st-pusher" id="content">
     <div class="st-content">
        <!-- extra div for emulating position:fixed of the menu -->
        <div class="st-content-inner padding-none">
	        <div class="container-fluid">
	            <div class="row">
			        <div class="col-md-10 col-lg-11 ">

						<h4 class="page-section-heading">
						Update {{ucwords($loggedInUser->firstname) . ' ' . ucwords($loggedInUser->surname)}}'s Profile</h4>
			            <div class="panel panel-default">
			            	<h4 class="page-section-heading">
								@include('partials.notification')
							</h4>
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
                            <!-- <form role="form" method="POST" action="{ /{ route('users.update', $loggedInUser->id) }}"> -->
                            {!! Form::model($loggedInUser, ['method' => 'PATCH','route' => ['users.update', $loggedInUser->id]] ) !!}
                            
                            	{{ csrf_field() }}
				    			<input name="_method" type="hidden" value="PUT">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-control-material static required">
                                            <input type="text" class="form-control" id="unique_number" name="unique_number" value="{{ (old('unique_number')) ? old('unique_number') : $loggedInUser->unique_number }}" placeholder="Your Unique Number" maxlength="4">
                                            <label for="unique_number">Unique Number</label>

                                          

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
		                                    <label class="col-sm-3 control-label">User Category</label>
		                                    <div class="col-sm-9">
		                                        <select id="is_admin_user" name="is_admin_user" class="selectpicker" data-style="btn-white" data-live-search="true" data-size="5">
		                                            
		                                            <option value="0" {{ ($loggedInUser->is_admin_user == 0) ? "selected='selected'" : '' }}>Super Administrator</option>
					                				<option value="1" {{ ($loggedInUser->is_admin_user == 1) ? "selected='selected'" : '' }}>Administrator</option>
					                				<option value="2" {{ ($loggedInUser->is_admin_user == 2) ? "selected='selected'" : '' }}>Content Uploader</option>
					                				<option value="3" {{ ($loggedInUser->is_admin_user == 3) ? "selected='selected'" : '' }}>News Uploader</option>
					                				<option value="4" {{ ($loggedInUser->is_admin_user == 4) ? "selected='selected'" : '' }}>Image Uploader</option>
					                				
		                                        </select>
		                                    </div>
		                                </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-control-material static required">
                                            <input type="text" class="form-control" id="surname" name="surname" value="{{ (old('surname')) ? old('surname') : $loggedInUser->surname }}" placeholder="Your Surname">
                                            <label for="surname">Surname</label>

                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-control-material static required">
                                            <input type="text" class="form-control" id="firstname" name="firstname" value="{{ (old('firstname')) ? old('firstname') : $loggedInUser->firstname }}" placeholder="Your Firstname">
                                            <label for="firstname">Firstname</label>

                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-control-material static required">
                                            <input type="text" class="form-control" id="othername" name="othername" value="{{ (old('othername')) ? old('othername') : $loggedInUser->othername }}" placeholder="Your Othername">
                                            <label for="othername">Othername</label>
      
                                        </div>
                                    </div>
                                    <div class="col-md-6">                                
                                        <div class="form-group ">
		                                    <div class="col-sm-12">
		                                        <div class="form-control-material static required">
		                                            <div class="input-group">
		                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
		                                                <input id="addon" type="text" id="username" name="username" value="{{ (old('username')) ? old('username') : $loggedInUser->username }}" class="form-control" placeholder="Username">
		                                                <label for="addon">Username</label>

		                                                
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
                                    </div>
                                </div>
                                <div class="form-group form-control-material static required">
                                    <input type="email" class="form-control" id="email" name="email" value="{{ (old('email')) ? old('email') : $loggedInUser->email }}" placeholder="Enter Email">
                                    <label for="email">Email address</label>

                                

                                </div>
                                <div class="form-group form-control-material static required">
                                    <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ (old('phone_number')) ? old('phone_number') : $loggedInUser->phone_number }}" placeholder="Enter Phone Number" maxlength="15">
                                    <label for="phone_number">Phone Number</label>

                                    
                                </div>
                                 <div class="form-group">
                                   <!--  <div class="checkbox checkbox-success">
                                        <input id="change" name="change" type="checkbox" checked>
                                        <label for="change">Check to change password</label>
                                    </div> -->
                                    <div class="radio radio-primary">
                                        <input type="radio" name="change" id="change" value="1">
                                        <label for="change">Yes Change Password</label>
                                    </div>
                                    <div class="radio radio-warning">
                                        <input type="radio" name="change" id="change_" value="0" checked>
                                        <label for="change_">No Don't Change</label>
                                    </div>
                       
                                </div>
                                <div class="form-group form-control-material static required">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    <label for="password">Password</label>

                                 
                                </div>
                                <div class="form-group">
                                        <div class="form-control-material static required">
                                            <textarea id="address" name="address" class="form-control" rows="5" placeholder="Enter Address">{{ (old('address')) ? old('address') : $loggedInUser->address }}</textarea>
                                            <label for="address">Address</label>

                                            
                                        </div>                                    
                                </div>
	                            <!-- <div class="row">
	                            	<div class="col-md-6">
	                                    <div class="form-group">
		                                    <label class="col-sm-3 control-label">Secret Question</label>
		                                    <div class="col-sm-9">
		                                        <select name="select" class="selectpicker" data-style="btn-white" data-live-search="true" data-size="5">
		                                            <option>Select Secret Question</option>
		                                            <option>Super Administrator</option>
		                                            <option>Administrator</option>
		                                            <option>Content Uploader</option> 
		                                            <option>News Uploader</option>
		                                            <option>Image Uploader</option>
		                                        </select>
		                                    </div>
		                                </div>
	                                </div>
	                                <div class="col-md-6">
	                                    <div class="form-group form-control-material static required">
	                                        <input type="text" class="form-control" id="exampleInputSecretAnswer" placeholder="Your Secret Answer">
	                                        <label for="exampleInputSecretAnswer">Secret Answer</label>
	                                    </div>
	                                </div>
	                                
                                </div> -->
                                <div class="row">
	                            	<div class="col-md-6">
	                                    <div class="form-group">
		                                    <label class="col-sm-3 control-label">Visible</label>
		                                    <div class="col-sm-9">
		                                        <select id="visible" name="visible" class="selectpicker" data-style="btn-white" data-live-search="true" data-size="5">
		                                            <!-- <option value="">--Select--</option> -->
		                                            <option value="1" {{ ($loggedInUser->visible == 1) ? "selected='selected'" : '' }}>Yes</option>
					                				<option value="0" {{ ($loggedInUser->visible == 0) ? "selected='selected'" : '' }}>No</option>
		                                            
		                                        </select>

		                                     

		                                    </div>
		                                </div>
	                                </div>
	                                <div class="col-md-6">
	                                    <div class="form-group">
		                                    <label class="col-sm-3 control-label">Suspended</label>
		                                    <div class="col-sm-9">
		                                        <select id="suspended" name="suspended" class="selectpicker" data-style="btn-white" data-live-search="true" data-size="5">
		                                            <!-- <option value="">--Select--</option> -->
		                                            <option value="1" {{ ($loggedInUser->suspended == 1) ? "selected='selected'" : '' }}>Yes</option>
					                				<option value="0" {{ ($loggedInUser->suspended == 0) ? "selected='selected'" : '' }}>No</option>
		              
		                                        </select>

		                                        

		                                    </div>
		                                </div>
	                                </div>                        
                                </div>

                                <div class="form-group">
                                    
                                    <div style="height: 30px;"></div>
                                    
                                </div>
                                <h4>User Roles [Multiple Roles can be assign to user]</h4>
                                <div class="form-group">
                                    <!-- <label for="select" class="control-label">Roles</label> -->
                                    <div class="">
                                        
                                        {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple', 'style' => 'width: 100%;', 'data-toggle' => 'select2')) !!}
                                    </div>
                                </div>

	                                
                                <div class="form-group">
                                    
                                    <div style="height: 30px;"></div>
                                    
                                </div>

                                <div class="form-group">
                                    
                                    <!-- This is form-group to create space between the form and the button -->
                                    
                                </div>
   
                                <div class="row">
	                            	<div class="col-md-6">
	                                    <div class="form-group">
		                                    <div class="col-sm-offset-1 col-sm-9">
		                                        <button type="submit" class="btn btn-primary"><i class="fa fa-user"></i> Update Account</button>
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