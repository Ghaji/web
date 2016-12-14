

						<!-- extra div for emulating position:fixed of the menu -->
        <div class="st-content-inner padding-none">
	        <div class="container-fluid">
	            <div class="row">
			        <div class="col-md-9 col-lg-11 ">
                    <h4 class="page-section-heading"></h4>
                        <div class="panel panel-default">
                        <br><br>
                        <div class="col-sm-8 col-md-offset-2 form-group">
	                        <h1 class="page-header">Navigation List
							    <div class="pull-right">
							        <a href="javascript:ajaxLoad('create')" class="btn btn-primary pull-right"><i
							                    class="glyphicon glyphicon-plus-sign"></i> New</a>
							    </div>
							</h1>
						</div>
						<div class="col-sm-7 form-group">
						    <div class="input-group">
						        <input class="form-control" id="search" value="{{ Session::get('menu_search') }}"
						               onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('dashboard/menu/navigation')}}?ok=1&search='+this.value)"
						               placeholder="Search..."
						               type="text">

						        <span class="input-group-btn">
						            <button type="button" class="btn btn-default"
						                    onclick="ajaxLoad('{{url('dashboard/menu/navigation')}}?ok=1&search='+$('#search').val())"><i
						                        class="glyphicon glyphicon-search"></i>
						            </button>
						        </span>
						    </div>
						</div>
			                <!-- Data table -->
			                <table class="table" cellspacing="0" width="100%">
			                	<thead>
			                		<tr>
			                			<td></td>
			                			<td></td>
			                		</tr>
			                	</thead>
			                    <thead>
			                        <tr>
			                        	<th>S/N</th>
			                            <th>Menu Name</th>
			                            <th>Menu Slug</th>
			                            <th>Position</th>
			                            <th>Children</th>
			                            <th>Visible</th>
			                            <th>Craeted date</th>
			                            <th>Weight</th>
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
			                    	  @foreach ($getNavigations as $getNavigation)

			                    	  	<tr>
			                                <td>{{ $sn }}</td>
			                                <td>{{ $getNavigation->name }}</td>
			                                <td>{{ $getNavigation->slug }}</td>
			                                <td><span class="text-display">{{ $getNavigation->position }}</span></td>
			                                <td>
			                                	@if($getNavigation->has_sub_nav == 1)
				                        	  		<span class="badge badge-primary">{{$getNavigation->has_sub_nav}}</span>
				                        	  	@else
				                        	  		<span class="badge badge-danger">{{$getNavigation->has_sub_nav}}</span>
				                        	  	@endif
			                                </td>
			                                <td>
			                                	@if($getNavigation->visible == 1)
				                        	  		<span class="badge badge-primary">{{$getNavigation->visible}}</span>
				                        	  	@else
				                        	  		<span class="badge badge-danger">{{$getNavigation->visible}}</span>
				                        	  	@endif
			                                </td>
			                                <td><span class="label label-success">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($getNavigation->created_at))->diffForHumans() }}</span></td>
			                                <td>
			                                	@if($getNavigation->weight == 1)
				                        	  		<span class="badge badge-primary">{{$getNavigation->weight}}</span>
				                        	  	@else
				                        	  		<span class="badge badge-danger">{{$getNavigation->weight}}</span>
				                        	  	@endif
			                                </td>
			                                <td class="text-center">
			                                	
			                                    <a href="javascript:ajaxLoad('update/{{$getNavigation->slug}}')" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>

			                                    <a href="javascript:if(confirm('Are you sure want to delete?')) ajaxLoad('delete/{{$getNavigation->id}}')" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Delete"><i
			                                class="fa fa-trash"></i></a>
			                                    
			                                </td>
			                            </tr>

			                            <?php $sn ++; ?>
			                    	  @endforeach
			                       
			                   
			                    </tbody>
			                </table>

			                <div class="pull-right">{!! $getNavigations->links() !!}</div>
			            </div>
                    </div>

                </div>
                
				<div class="row">
				    <i class="col-sm-12">
				        Total: {{$getNavigations->total()}} records
				    </i>
				</div>
            </div>
        </div>
		
	            
			       