@extends('layouts.admin')

@section('content')
<div class="st-pusher" id="content">
     <div class="st-content">
        <!-- extra div for emulating position:fixed of the menu -->
        <div class="st-content-inner padding-none">
	        <div class="container-fluid">
	            <div class="row">
			        <div class="col-md-10 col-lg-11 ">

						<h4 class="page-section-heading">News List - <a href="{{ route('newss.create') }}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Add News Item"><i
			                                class="fa fa-plus"></i> Add News Item</a></h4>
			            <div class="panel panel-default">
			            <h4 class="page-section-heading">
							@include('partials.notification')
						</h4>
			                <!-- Data table -->
			                <table data-toggle="data-table" class="table" cellspacing="0" width="100%">
			                    <thead>
			                        <tr>
			                        	<th>S/N</th>
			                            <th>Title</th>
			                            <th>Latest</th>
			                            <th>Type</th>
			                            <th>News Author</th>
			                            <th>Position</th>
			                            <th>Visible</th>
			                            <th>Date Created</th>			                     
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
			                    	  @foreach ($getNews as $getNew)

			                    	  	<tr>
			                                <td>{{ $sn }}</td>
			                                <td>
											@if(strlen($getNew->title) >= 39)
												{{ substr($getNew->title, 0, 39).'...' }}
											@else
			                                	{{ $getNew->title }}
			                                @endif
			                                </td>
			                                <td>
			                                	@if($getNew->latest_news == 1)
				                        	  		<span class="label label-primary">Yes</span>
				                        	  	@else
				                        	  		<span class="label label-danger">No</span>
				                        	  	@endif
			                                </td>
			                                <td>
			                                	@if($getNew->itype == 1)
			                                		<span class="label label-success">News</span>
			                                	@elseif($getNew->itype == 2)
			                                		<span class="label label-success">Events</span>
			                                	@elseif($getNew->itype == 3)
			                                		<span class="label label-success">Job Vacancy</span>
			                                	@elseif($getNew->itype == 4)
			                                		<span class="label label-success">Sales of Forms</span>
			                                	@elseif($getNew->itype == 5)
			                                		<span class="label label-success">Advertisement</span>
			                                	@elseif($getNew->itype == 6)
			                                		<span class="label label-success">Inugural Lectures</span>
			                                	@else
			                                		<span class="label label-success">Conferences</span>
			                                	@endif
			                                </td>
			                                <td>
			                                	@if(strlen($getNew->author) > 17)
												{{ substr($getNew->author, 0, 17).'...' }}
												@else
				                                	{{ $getNew->author }}
				                                @endif
			                                </td>
			                                <td>
			                                	@if($getNew->position > 0)
				                        	  		<span class="label label-warning">{{$getNew->position}}</span>
				                        	  	@endif
			                                </td>
			                                <td>
			                                	@if($getNew->visible == 1)
				                        	  		<span class="label label-primary">Yes</span>
				                        	  	@else
				                        	  		<span class="label label-danger">No</span>
				                        	  	@endif
			                                </td>
			                                <td><span class="label label-success">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($getNew->created_at))->diffForHumans() }}</span></td>
			                                
			                                <td class="text-center">
			                                	
			                                    <a href="{{ route('newss.show', $getNew->slug) }}" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>

			                                    <a href="{{ route('newss.destroy', $getNew->slug) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Delete"><i
			                                class="fa fa-times"></i></a>
			                                    
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