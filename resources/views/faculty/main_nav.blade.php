<div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
    <div class="panel-heading panel-collapse-trigger">
        <h4 class="panel-title "><i class="fa fa-home"></i> {{ $faculty->name }} Home</h4>
    </div>
    <div class="panel-body list-group">
        <ul class="list-group list-group-menu">
            <!-- <li class="list-group-item active"><a class="link-text-color" href="website-take-course.html">Curriculum</a></li> -->
            <!-- <li class="list-group-item"><a class="link-text-color" href="website-course-forums.html">Course Forums</a></li> -->
               @foreach ($mainNavigations as $mainNavigation)

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

                        <?php $code =  strtolower($faculty->code); ?>

                        <!-- if($faculty->category_id == 3) -->
                            <!-- {/{ $mainNavigation->name }} -->
                        <!-- elseif($faculty->category_id == 2) -->
                            <!-- {/{ $faculty->child_type }} -->
                        <!-- elseif($faculty->category_id == 4) -->
                            <!-- {/{ $faculty->child_type }} -->
                        <!-- lseif($faculty->category_id == 1) -->
                            <!-- {/{ $faculty->child_type }} -->
                        <!-- elseif($faculty->category_id == 5) -->
                            <!-- {/{ $faculty->child_type }} -->
                        <!-- else -->
                            <!-- {/{ $mainNavigation->name }} -->
                        <!-- endif -->
                        <!-- / -->

                       <li class="list-group-item {{ $active }} {{ $dropdown }} "> 
                       <!-- mainNavigation->slug -->

                       <a href="{{ route('page.showFacultyPage', array($faculty->slug, $mainNavigation->slug.'-'.$code)) }}" class="link-text-color {{$dropdownToggle}}" data-toggle="{{$dropdown}}" title="{{$mainNavigation->name}}">
                        <i class="{{ $mainNavigation->icon }}"></i> 

                        {{ $mainNavigation->name }}

                        

                        @if($mainNavigation->has_sub_nav == 1)

                            &nbsp;<b class="caret"></b> </a>
                            <ul class="dropdown-menu">
                            <li class="dropdown-header">{{$faculty->name}} {{ $mainNavigation->name }}</li>
                            <li class="divider"></li>
                            

                            <!-- foreach($mainNavigation->subNavigations as $subNavigation) -->

                                <!-- <li><a href="{ /{ $subNavigation->slug }}" title="{ /{ $subNavigation->name }}">{ /{ $subNavigation->name }}</a></li> -->

                            <!-- endforeach -->

                            @foreach($faculty->departments as $department)
                                <li><a href="{{ route('page.showFacultyPage', array($faculty->slug, $department->slug)) }}" title="{{ $department->name }}">{{ $department->name }}</a></li> 
                            @endforeach

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