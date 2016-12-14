@extends('layouts.login_header')

@section('content')
 <div id="content">
        <div class="container-fluid">
            <div class="lock-container">
                <div class="panel panel-default text-center paper-shadow" data-z="0.5">
                    <h1 class="text-display-1 text-center margin-bottom-none">Sign In</h1>
                    <img src="{{ asset('../resources/assets/images/people/user_no_image.png') }}" class="img-circle width-80">
                    <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                         {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="form-control-material static">
                                <input class="form-control" id="email" name="email" type="text" value="{{ old('email') }}" placeholder="Username">
                                <label for="username">Email</label>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="form-control-material static">
                                <input class="form-control" id="password" name="password" type="password" placeholder="Enter Password">
                                <label for="password">Password</label>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <!-- <a href="" class="btn btn-primary">Login <i class="fa fa-fw fa-unlock-alt"></i></a> -->
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-fw fa-unlock-alt"></i> Login
                                </button>
                        <a href="{{ url('/password/reset') }}" class="forgot-password">Forgot password?</a>
                        <a href="{{ url('/register') }}" class="link-text-color">Create account</a> |
                        <a href="{{ url('/home') }}" class="link-text-color">Home</a>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
