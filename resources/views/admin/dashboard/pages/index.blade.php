@extends('layouts.admin')

@section('content')
<div class="st-pusher" id="content">
    <div class="st-content">
        <div class="st-content-inner padding-none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9 col-lg-11 ">
                    <h4 class="page-section-heading">Pages List</h4>
                    
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
                                        <th>Slug</th>
                                        <!-- <th>Parent Name</th> -->
                                        <th>Position</th>
                                       
                                        <th>Active</th>
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
                                <!-- <pre> -->
                                <!-- { {var_dump($getSubNavigations)}} -->
                                <tbody>
                                <?php  $sn = 1; ?>
                                      @foreach ($getPages as $getPage)

                                        <tr>
                                            <td>{{ $sn }}</td>
                                            <td>{{ $getPage->name }}</td>
                                            <td>{{ $getPage->slug }}</td>
                                            <!-- <td><span class="text-display">{ /{ $getPage->navigation->name }}</span></td> -->
                                            <td><span class="text-display">{{ $getPage->position }}</span></td>
                                           
                                            <td>
                                                @if($getPage->visible == 1)
                                                    <span class="label label-primary">Yes</span>
                                                @else
                                                    <span class="label label-danger">No</span>
                                                @endif
                                            </td>
                                            <td><span class="label label-success">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($getPage->created_at))->diffForHumans() }}</span></td>
                                            <td>
                                                @if($getPage->weight == 1)
                                                    <span class="badge badge-primary">{{$getPage->weight}}</span>
                                                @else
                                                    <span class="badge badge-danger">{{$getPage->weight}}</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                
                                                <a href="{{ route('pages.show', $getPage->slug) }}" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>

                                                <a href="{{ route('pages.destroy', $getPage->slug) }} " class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Delete"><i
                                            class="fa fa-trash"></i></a>
                                                
                                            </td>
                                        </tr>

                                        <?php $sn ++; ?>
                                      @endforeach
                                   
                               
                                </tbody>
                            </table>

                            <!-- <div class="pull-right">{ /!! $getPages->links() !!}</div> -->
                        </div>
                    </div>

                </div>
                
                <div class="row">
                    <i class="col-sm-12">
                        <!-- Total: { /{$getPages->total()}} records -->
                    </i>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection