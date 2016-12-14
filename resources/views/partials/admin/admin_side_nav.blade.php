<div class="sidebar left sidebar-size-3 sidebar-offset-0 sidebar-visible-desktop sidebar-visible-mobile sidebar-skin-dark" id="sidebar-menu" data-type="collapse">
    <div data-scrollable>
        <div class="sidebar-block">
            <div class="profile">
                <a href="#">
                    <img src="{{ asset('/uploads/avatars/'.Auth::user()->avatar ) }}" alt="people" class="img-circle width-80" />
                </a>
                <h4 class="text-display-1 margin-none">{{ Auth::user()->firstname . ' ' . Auth::user()->surname }}</h4>
            </div>
        </div>
        <!-- <ul class="sidebar-menu">
            <li class="active"><a href="{ /{ url('/dashboard') }}"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
            <li><a href="{ /{ route('menu.index') }}"><i class="fa fa-paper-plane"></i><span>Menu</span></a></li>
            <li><a href="{ /{ route('users.index') }}"><i class="fa fa-users"></i><span>Users</span></a></li>
            <li><a href="{ /{ url('/news') }}"><i class="fa fa-newspaper-o"></i><span>News</span></a></li>
            <li><a href="{ /{ url('/images') }}"><i class="fa fa-file-image-o"></i><span>Images</span></a></li>
            <li><a href="{ /{ url('/logout') }}"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
        </ul> -->
        <ul class="sidebar-menu">
        <li><a href="{{ url('/dashboard') }}"><i class="fa fa-bar-chart-o"></i><span>Dashboard</span></a></li>

         @if(Auth::user()->hasRole('Admin'))
        <li class="hasSubmenu">
            <a href="#site-role"><i class="fa fa-bug"></i><span>Roles</span></a>
            <ul id="site-role">
                <li><a href="{{ route('roles.create') }}"><span><i class="fa fa-plus"></i> Add </span></a></li>
                <li><a href="{{url('roles')}}"><span><i class="fa fa-minus"></i> List </span></a></li>
                
            </ul>
        </li>

        <li class="hasSubmenu">
            <a href="#site-permission"><i class="fa fa-bullseye"></i><span>Permissions</span></a>
            <ul id="site-permission">
                <li><a href="{{ route('permissions.create') }}"><span><i class="fa fa-plus"></i> Add </span></a></li>
                <li><a href="{{url('permissions')}}"><span><i class="fa fa-minus"></i> List </span></a></li>
                
            </ul>
        </li>
        
        <li class="hasSubmenu">
            <a href="#site-menu"><i class="fa fa-mortar-board"></i><span>Navigations</span></a>
            <ul id="site-menu">
                <li><a href="{{ route('menu.create') }}"><span><i class="fa fa-plus"></i> Add </span></a></li>
                <li><a href="{{url('/menu')}}"><span><i class="fa fa-minus"></i> List </span></a></li>
                
            </ul>
        </li>
        <li class="hasSubmenu">
            <a href="#sub-menu"><i class="fa fa-gear"></i><span>Sub Navigations</span></a>
            <ul id="sub-menu">
                <li><a href="{{ route('submenu.create') }}"><span><i class="fa fa-plus"></i> Add </span></a></li>
                <li><a href="{{url('/submenu')}}"><span><i class="fa fa-minus"></i> List </span></a></li>
                
            </ul>
        </li>

        <li class="hasSubmenu">
            <a href="#pages"><i class="fa fa-chain-broken"></i><span>Pages</span></a>
            <ul id="pages">
                <li><a href="{{ route('pages.create') }}"><span><i class="fa fa-plus"></i> Add </span></a></li>
                <li><a href="{{url('/pages')}}"><span><i class="fa fa-minus"></i> List </span></a></li>
                
            </ul>
        </li>
        <li class="hasSubmenu">
            <a href="#faculty"><i class="fa fa-chain-broken"></i><span>Faculty</span></a>
            <ul id="faculty">
                <li><a href="{{ route('facultiess.create') }}"><span><i class="fa fa-plus"></i> Add </span></a></li>
                <li><a href="{{url('/facultiess')}}"><span><i class="fa fa-minus"></i> List </span></a></li>
                
            </ul>
        </li>
        <li class="hasSubmenu">
            <a href="#department"><i class="fa fa-chain-broken"></i><span>Department</span></a>
            <ul id="department">
                <li><a href="{{ route('departmentss.create') }}"><span><i class="fa fa-plus"></i> Add </span></a></li>
                <li><a href="{{url('/departmentss')}}"><span><i class="fa fa-minus"></i> List </span></a></li>
                
            </ul>
        </li>
        <li class="hasSubmenu">
            <a href="#user-menu"><i class="fa fa-users"></i><span>Users</span></a>
            <ul id="user-menu">
                <li><a href="{{route('users.create')}}"><span><i class="fa fa-plus"></i> Add </span></a></li>
                <li><a href="{{url('/users')}}"><span><i class="fa fa-minus"></i> List </span></a></li>
            </ul>
        </li>
        @endif
        <li class="hasSubmenu">
            <a href="#news-menu"><i class="fa fa-comments"></i><span>News</span></a>
            <ul id="news-menu">
                <li><a href="{{route('newss.create')}}"><span><i class="fa fa-plus"></i> Add </span></a></li>
                <li><a href="{{url('/newss')}}"><span><i class="fa fa-minus"></i> List </span></a></li>
                
            </ul>
        </li>
        <li class="hasSubmenu">
            <a href="#images-menu"><i class="fa fa-file-text-o"></i><span>Images</span></a>
            <ul id="images-menu">
                <li><a href="{{url('images.create')}}"><span><i class="fa fa-plus"></i> Add </span></a></li>
                <li><a href="{{url('/images')}}"><span> <i class="fa fa-minus"></i>List </span></a></li>
                
            </ul>
        </li>
        <!-- <li><a href="app-student-messages.html"><i class="fa fa-comments"></i><span>Messages</span></a></li> -->
        <li><a href="{{url('/logout')}}"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
    </ul>
    </div>
</div>