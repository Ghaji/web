@extends('layouts.admin')

@section('content')
<div class="st-pusher" id="content">
     <div class="st-content">
        <!-- extra div for emulating position:fixed of the menu -->
        <div class="st-content-inner padding-none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2 ">
                    	<h4 class="page-section-heading">
                    		@include('partials.notification')

                    	</h4>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="POST" action="{{ route('menu.update', $menu->slug) }}">
                                    
                                    <input name="_method" type="hidden" value="PUT">
                                    @include('admin.dashboard.menu._form')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="col-sm-offset-1 col-sm-9">
                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-user"></i> Update Menu</button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="col-sm-offset-6 col-sm-2">
                                                    <!-- <button type="reset" class="btn btn-danger"><i class="fa fa-close"></i> Cancel</button> -->
                                                    <a href="{{route('menu.index')}}" class="btn btn-danger"><i class="fa fa-close"></i> Back To Menu List</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        </div>
                                    </div>			      
                                </form> 

                            </div>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
		

