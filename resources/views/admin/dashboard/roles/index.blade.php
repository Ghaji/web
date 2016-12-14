@extends('layouts.admin')

@section('content')
	<div class="st-pusher" id="content">
	     <div class="st-content">
	        <!-- extra div for emulating position:fixed of the menu -->
	        <div class="st-content-inner padding-none">
		        <div class="container-fluid">
		            <div class="row">
				        <div class="col-md-10 col-lg-11 ">

							<h4 class="page-section-heading">List of Roles - <a href="{{ route('roles.create') }}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Add New User"><i
				                                class="fa fa-plus"></i> Add Roles</a></h4>
				            <div class="panel panel-default">
				            <h4 class="page-section-heading">
								@include('partials.notification')
							</h4>
				                <!-- Data table -->
				                <table data-toggle="data-table" class="table" cellspacing="0" width="100%">
				                    <thead>
				                        <tr>
				                        	<th>S/N</th>
				                            <th>Name</th>
				                            <th>Display Name</th>
				                            <th>Description</th>
				                            <th>Date Created</th>			                     
				                            <th>Manage</th>
				                        </tr>
				                    </thead>
				                    <!-- <tfoot>
				                        <tr>
				                        	<th>S/N</th>
				                            <th>Name</th>
				                            <th>Display Name</th>
				                            <th>Description</th>
				                            <th>Date Created</th>
				                            <th>Manage</th>
				                        </tr>
				                    </tfoot> -->
				                    
				                    <tbody>
				                    <?php  $sn = 1; ?>
				                    	  @foreach ($roles as $role)

				                    	  	<tr>
				                                <td>{{ $sn }}</td>
				                                <td> {{ $role->name }}</td>
				                                <td>{{$role->display_name}}</td>
				                                <td>
				                                	
				                                	@if(strlen($role->description) >= 39)
		                                                {!! substr($role->description, 0, 39).'...' !!}
		                                            @else
		                                                {!! $role->description !!}
		                                            @endif
				                                </td>
				                                <td><span class="label label-success">
				                                	{!! \Carbon\Carbon::createFromTimeStamp(strtotime($role->created_at))->diffForHumans() !!}
				                                </span></td>
				                                
				                                <td class="text-center">
				                                    <a href="{{ route('roles.show', $role->id) }}" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Show"><i class="fa fa-folder-open"></i></a>
				                                 	@permission('role-edit')
													<a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('roles.edit',$role->id) }}"><i class="fa fa-pencil"></i> </a>
													@endpermission

					                                @permission('role-delete')
													{!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
										            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Delete']) !!}
										            <!-- <i class="fa fa-trash"></i> -->
										        	{!! Form::close() !!}
										        	@endpermission
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