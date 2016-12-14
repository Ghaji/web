<div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
    <div class="panel-heading panel-collapse-trigger">
        <h4 class="panel-title">My Account</h4>
    </div>
    <div class="panel-body list-group">
        <ul class="list-group list-group-menu">
            <li class="list-group-item"><a class="link-text-color" href="website-student-dashboard.html">Dashboard</a></li>
            <li class="list-group-item"><a class="link-text-color" href="website-student-courses.html">My Courses</a></li>
            <li class="list-group-item active"><a class="link-text-color" href="website-student-profile.html">Profile</a></li>
            <li class="list-group-item"><a class="link-text-color" href="website-student-messages.html">Messages</a></li>
            <li class="list-group-item"><a class="link-text-color" href="login.html"><span>Logout</span></a></li>
        </ul>
    </div>
</div>

<h4>User Details</h4>
<div class="slick-basic slick-slider" data-items="1" data-items-lg="1" data-items-md="1" data-items-sm="1" data-items-xs="1">
    <div class="item">
        <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
            <div class="panel-body">
                <div class="media media-clearfix-xs">
                    <div class="media-left">
                        <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                            <span class="img icon-block s90 bg-default"></span>
                            <span class="overlay overlay-full padding-none icon-block s90 bg-default">
                            <span class="v-center">
                                
                                <img src="{{ asset('/uploads/avatars/'.Auth::user()->avatar ) }}" alt="people" class="img-circle width-60 height-60" />
                            </span>
                            </span>
                
                        </div>
                    </div>
                    <div class="media-body">
                        
                        <p class="small margin-none">
                            {!! QrCode::size(150)->generate(Auth::user()->firstname . ' ' . Auth::user()->surname.' '.Auth::user()->username.' '.Auth::user()->unique_number.' '.Auth::user()->email); !!}
                            
                        </p>

                    </div>
                     <p align="center">Scan to confirm account details.</p>
                </div>
            </div>
        </div>
    </div>
    
    

    </div>
</div>