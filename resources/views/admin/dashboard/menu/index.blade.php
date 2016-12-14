@extends('layouts.admin')

@section('content')
<div class="st-pusher" id="content">
    <div class="st-content">
        <div class="st-content-inner padding-none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9 col-lg-11 ">
                    <h4 class="page-section-heading">Menu List - <a href="{{ route('menu.create') }}" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Add Menu"><i
                                            class="fa fa-plus"></i> Add Menu</a></h4>
                    
                        <div class="panel panel-default">
                        <h4 class="page-section-heading">
                            @include('partials.notification')
                        </h4>
                            <!-- Data table -->
                            <table data-toggle="data-table" class="table" cellspacing="0" width="100%">
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
                                                
                                                <a href="{{ route('menu.show', $getNavigation->slug) }}" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>

                                                <a href="{{ route('menu.destroy', $getNavigation->slug) }} " class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Delete"><i
                                            class="fa fa-trash"></i></a>
                                                
                                            </td>
                                        </tr>

                                        <?php $sn ++; ?>
                                      @endforeach
                                   
                               
                                </tbody>
                            </table>

                            <!-- <div class="pull-right">{ /!! $getNavigations->links() !!}</div> -->
                        </div>
                    </div>

                </div>
                
                <div class="row">
                    <i class="col-sm-12">
                        <!-- Total: { /{$getNavigations->total()}} records -->
                    </i>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection