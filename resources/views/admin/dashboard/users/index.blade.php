@extends('layouts.admin')

@section('content')
<div class="st-pusher" id="content">
     <div class="st-content">
        <!-- extra div for emulating position:fixed of the menu -->
        <div class="st-content-inner padding-none">
	        <div class="container-fluid">
	            <div class="row">
			        <div class="col-md-10 col-lg-11 ">

						<h4 class="page-section-heading">List Site Users - <a href="{{ route('users.create') }}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Add New User"><i
			                                class="fa fa-plus"></i> Add New User</a></h4>
			            <div class="panel panel-default">
			            <h4 class="page-section-heading">
							@include('partials.notification')
						</h4>
			                <!-- Data table -->
			                <table data-toggle="data-table" class="table" cellspacing="0" width="100%">
			                    <thead>
			                        <tr>
			                        	<th>S/N</th>
			                            <th>Full Name</th>
			                            <!-- <th>Username</th> -->
			                            <th>Email</th>
			                            <th>Users Role(s)</th>
			                            <!-- <th>Phone Number</th> -->
			                            <!-- <th>Suspended</th> -->
			                            <!-- <th>Visible</th> -->
			                            <th>Last Login</th>			                     
			                            <th>Manage</th>
			                        </tr>
			                    </thead>
			                    <!-- <tfoot>
			                        <tr>
			                        	<th>S/N</th>
			                            <th>Menu Name</th>
			                            <th>Menu Slug</th>
			                            <th>Position</th>
			                            <th>Children</th>
			                            <th>Visible</th>
			                            <th>Craeted date</th>
			                            <th>Weight</th>
			                        </tr>
			                    </tfoot> -->
			                    
			                    <tbody>
			                    <?php  $sn = 1; ?>
			                    	  @foreach ($getUsers as $getUser)

			                    	  	<tr>
			                                <td>{{ $sn }}</td>
			                                <td>
			                                <img src="{{ asset('/uploads/avatars/'.$getUser->avatar ) }}" width="40" class="img-circle" />
			                                {{ $getUser->firstname }} {{ $getUser->surname }}</td>
			                                <!-- <td>{ /{ $getUser->username }}</td> -->
			                                <td>{{$getUser->email}}</td>
			                                <td>
			                                	@if(!empty($getUser->roles))
													@foreach($getUser->roles as $v)
														<label class="badge badge-primary">{{ $v->display_name }}</label>
													@endforeach
												@endif
			                                </td>
			                                <!-- <td>{ /{ $getUser->phone_number }}</td> -->
			                                <!-- <td> -->
			                                	<!-- if($getUser->suspended == 1) -->
				                        	  		<!-- <span class="label label-primary">Yes</span> -->
				                        	  	<!-- else -->
				                        	  		<!-- <span class="label label-danger">No</span> -->
				                        	  	<!-- endif -->
			                                <!-- </td> -->
			                                <!-- <td> -->
			                                	<!-- if($getUser->visible == 1) -->
				                        	  		<!-- <span class="badge badge-primary">Yes</span> -->
				                        	  	<!-- else -->
				                        	  		<!-- <span class="badge badge-danger">No</span> -->
				                        	  	<!-- endif -->
			                                <!-- </td> -->
			                                <td><span class="label label-success">
			                                @if($getUser->last_login != "")

			                                	{{ \Carbon\Carbon::createFromTimeStamp(strtotime($getUser->last_login))->diffForHumans() }}
			                                @else
			                                	{{ 'No attempt' }}
			                                @endif
			                                </span></td>
			                                
			                                <td class="text-center">
			                                	
			                                    <a href="{{ route('users.show', $getUser->id) }}" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>

			                                    <a href="javascript:if(confirm('Are you sure want to delete?')) {{ $getUser->id }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Delete"><i
			                                class="fa fa-trash"></i></a>
			                                    
			                                </td>
			                            </tr>

			                            <?php $sn ++; ?>
			                    	  @endforeach
			                       
			                   
			                    </tbody>
			                </table>
			                <!-- // Data table -->
			            </div>
			            
			        </div>
			    </div>
	            
	        </div>
	    </div>
	    <!-- /st-content-inner -->
	</div>
</div>


@endsection