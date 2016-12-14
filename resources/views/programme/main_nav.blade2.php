<div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
    <div class="panel-heading panel-collapse-trigger">
        <h4 class="panel-title "><i class="fa fa-home"></i> {{ $department->name }} Home</h4>
    </div>
    <div class="panel-body list-group">
        <ul class="list-group list-group-menu">
            <!-- <li class="list-group-item active"><a class="link-text-color" href="website-take-course.html">Curriculum</a></li> -->
            <!-- <li class="list-group-item"><a class="link-text-color" href="website-course-forums.html">Course Forums</a></li> -->
               @foreach ($departmentNavigations as $mainNavigation)

                        @if($mainNavigation->has_sub_nav == 1)

                            <?php $dropdownToggle = 'dropdown-toggle'; ?>
                            <?php $dropdown = 'dropdown'; ?>

                        @else

                            <?php $dropdownToggle = ''; ?>
                            <?php $dropdown = ''; ?>

                        @endif

                        @if($mainNavigation->id == 10)
                            <?php $active = ''; ?>
                        @else
                            <?php $active = ''; ?>
                        @endif

                       <li class="list-group-item {{ $active }} {{ $dropdown }} ">

                       <a href="{/{ route('page.showDepartments', array($faculty->slug, $department->slug, $mainNavigation->slug.'-'.$department->slug)) }}" class="link-text-color {{$dropdownToggle}}" data-toggle="{{$dropdown}}" title="{{$mainNavigation->name}}"><i class="{{ $mainNavigation->icon }}"></i> {{ $mainNavigation->name }}

                        @if($mainNavigation->has_sub_nav == 1)

                            &nbsp;<b class="caret"></b> </a>
                            <ul class="dropdown-menu">
                            <li class="dropdown-header">{{$department->name}} {{ $mainNavigation->name }}</li>
                            <li class="divider"></li>
                            

                            <!-- foreach($mainNavigation->subNavigations as $subNavigation) -->

                                <!-- <li><a href="{ /{ $subNavigation->slug }}" title="{ /{ $subNavigation->name }}">{ /{ $subNavigation->name }}</a></li> -->

                            <!-- endforeach -->

                            <!-- @/foreach($department->programmes as $programme)
                                <li><a href="{/{ route('page.showDepartments', array($faculty->slug, $department->slug, $programme->slug)) }}" title="{/{ $department->name }}">{/{ $programme->name }}</a></li> 
                            @/endforeach -->

                            </ul>
                        </li>

                        @else

                           </a>
                           </li>

                        @endif

                @endforeach
           
        </ul>
    </div>
</div>
                    <!-- <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                        <div class="panel-heading panel-collapse-trigger">
                            <h4 class="panel-title">Instructor</h4>
                        </div>
                        <div class="panel-body">
                            <div class="media v-middle">
                                <div class="media-left">
                                    <img src="images/people/110/guy-6.jpg" alt="About Adrian" width="60" class="img-circle" />
                                </div>
                                <div class="media-body">
                                    <h4 class="text-title margin-none"><a href="#">Adrian Demian</a></h4>
                                    <span class="caption text-light">Biography</span>
                                </div>
                            </div>
                            <br/>
                            <div class="expandable expandable-indicator-white expandable-trigger">
                                <div class="expandable-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus aut consectetur consequatur cum cupiditate debitis doloribus, error ex explicabo harum illum minima mollitia nisi nostrum officiis omnis optio qui quisquam saepe sit sunt totam vel velit voluptatibus? Adipisci ducimus expedita id nostrum quas quia!</p>
                                </div>
                            </div>
                        </div>
                    </div> -->