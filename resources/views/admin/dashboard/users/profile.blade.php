@extends('layouts.admin')

@section('content')
<div class="st-pusher" id="content">
     <div class="st-content">
                <!-- extra div for emulating position:fixed of the menu -->
                <div class="st-content-inner padding-none">
                    <div class="container-fluid">
                        <div class="page-section">
                            <h3 class="text-display-1">{{ Auth::user()->firstname . ' ' . Auth::user()->surname }}'s Profile</h3>
                        </div>
                        <div class="row" data-toggle="isotope">
                           
                           <div class="col-md-9">
                    <!-- Tabbable Widget -->
                    <div class="tabbable paper-shadow relative" data-z="0.5">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs">
                            <li><a href="{{ url('avatar') }}"><i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs"> Avatar</span></a></li>
                            <li class="active"><a href="{{ url('profile') }}"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Profile </span></a></li>
                            <li><a href="{{ url('setting') }}"><i class="fa fa-fw fa-credit-card"></i> <span class="hidden-sm hidden-xs">Settings </span></a></li>

                        </ul>
                        <!-- // END Tabs -->
                        <!-- Panes -->
                        <div class="tab-content">
                            <div id="account" class="tab-pane active">
                            @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            <!-- </h5> -->
                            @include('partials.notification')
                                <form class="form-horizontal" method="POST" action="{{ url('profile', Auth::user()->id) }}">
                                {{ csrf_field() }}
                                <input name="_method" type="hidden" value="PUT">
                                <div class="form-group">
                                        <label for="inputEmail3" class="col-md-2 control-label">Staff Number</label>
                                        <div class="col-md-6">
                                            <div class="form-control-material">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                    <input type="text" class="form-control" id="unique_number" name="unique_number" readonly="TRUE" placeholder="Staff Number" value="{{ Auth::user()->unique_number }}">
                                                    <!-- <label for="inputEmail3">Email address</label> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-md-2 control-label">Username</label>
                                        <div class="col-md-6">
                                            <div class="form-control-material">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="{{ Auth::user()->username }}">
                                                    <!-- <label for="inputEmail3">Email address</label> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-md-2 control-label">Full Name</label>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-control-material">

                                                        <input type="text" class="form-control" id="firstname" name="firstname" value="{{ Auth::user()->firstname }}">
                                                        <!-- <label for="exampleInputFirstName">First name</label> -->
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-control-material">
                                                        <input type="text" class="form-control" id="surname" name="surname" placeholder="Your last name" value="{{ Auth::user()->surname }}" >
                                                        <!-- <label for="exampleInputLastName">Last name</label> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-md-2 control-label">Othernames</label>
                                        <div class="col-md-6">
                                            <div class="form-control-material">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                    <input type="text" class="form-control" id="othername" name="othername" placeholder="Othernames" value="{{ Auth::user()->othername }}">
                                                    <!-- <label for="inputEmail3">Email address</label> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-md-2 control-label">Email</label>
                                        <div class="col-md-6">
                                            <div class="form-control-material">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ Auth::user()->email }}">
                                                    <!-- <label for="inputEmail3">Email address</label> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-md-2 control-label">Phone</label>
                                        <div class="col-md-6">
                                            <div class="form-control-material">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-mobile-phone"></i></span>
                                                    <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number" value="{{ Auth::user()->phone_number }}">
                                                    <!-- <label for="inputEmail3">Email address</label> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-md-2 control-label">Address</label>
                                        <div class="col-md-8">
                                            <div class="form-control-material">
                                                <div class="input-group">
                                                    <!-- <span class="input-group-addon"><i class="fa fa-envelope"></i></span> -->
                                                    
                                                    <textarea id="address" name="address" class="form-control" rows="10">{{ Auth::user()->address }}</textarea>
                                                    <!-- <label for="inputEmail3">Email address</label> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="inputEmail3" class="col-md-2 control-label">Website</label>
                                        <div class="col-md-6">
                                            <div class="form-control-material">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-link"></i></span>
                                                    <input type="text" class="form-control used" id="website" value="www.mosaicpro.biz">
                                                    <label for="website">Website</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                     <label for="inputPassword3" class="col-md-2 control-label">Change Password</label>
                                        <div class="col-md-6">
                                            <div class="radio radio-primary radio-inline">
                                                <input type="radio" name="change" id="change" value="1">
                                                <label for="change">Yes </label>
                                            </div>
                                            <div class="radio radio-danger radio-inline">
                                                <input type="radio" name="change" id="change_" value="0" checked>
                                                <label for="change_">No </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="dropMe" style="display: none;">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Secret Question</label>
                                            <div class="col-sm-9">
                                                <select name="secret_question_id" id="secret_question_id" class="selectpicker" data-style="btn-white" data-live-search="true">
                                                    <option value="">Secret Question</option>
                                                    @foreach( $secret_questions as $secret_question )
                                                        <option value="{{ $secret_question->id }}">{{ strtoupper($secret_question->question) }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                        

                                        <div class="form-group">
                                            <label for="secret_a" class="col-sm-3 control-label">Answer</label>
                                            <div class="col-sm-9">
                                                <div class="form-control-material">
                                                    <input type="secret_answer" class="form-control" id="secret_answer" name="secret_answer" placeholder="Answer">
                                                    <!-- <label for="secret_a">Answer</label> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-md-2 control-label">Password</label>
                                        <div class="col-md-6">
                                            <div class="form-control-material">
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                                <!-- <label for="inputPassword3">Password</label> -->
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group margin-none">
                                        <div class="col-md-offset-2 col-md-10">
                                            <button type="submit" class="btn btn-primary paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated>Save Changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- // END Panes -->
                    </div>
                    <!-- // END Tabbable Widget -->
                    <br/>
                    <br/>
                </div>
                <div class="col-md-3">
                    @include('partials.admin.avatar_side_content')
                </div>

                        </div>
                    </div>
                </div>
                <!-- /st-content-inner -->
            </div>
</div>
    
@endsection

<script src="{{ asset('../resources/assets/js/jquery-1.11.2.min.js') }}"></script>
<script type="text/javascript">
    


$(document).ready(function(){
    if (document.getElementById('change').checked) {
        $("#dropMe").slideDown(500);
         document.getElementById('password').disabled = false;
        console.log("dropDown");
    } 
    if (document.getElementById('change_').checked) {
        $("#dropMe").slideUp(500);
        document.getElementById('password').disabled = true;
        console.log("dropUp");
    } 



     $("#change").click(function(){
        $("#dropMe").slideDown(500);
         document.getElementById('password').disabled = false;
        console.log("drop2");
     });

     $("#change_").click(function(){
        $("#dropMe").slideUp(500);
        document.getElementById('password').disabled = true;
        console.log("dont drop");
     });
});
 
 
</script>