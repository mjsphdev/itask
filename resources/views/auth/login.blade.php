@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-4 col-md-offset-4">

            @if(Session::has('status'))
                <div class="alert alert-success">
                    <p>{{ Session::get('status') }}</p>
                </div>
            @endif

            <h1 class="login-header">Login To iTask</h1>
            <form class="form-signin" role="form" method="POST" action="{{ url('/login') }}">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="account-email" class="control-label">
                        E-Mail Address
                    </label>
                    <input type="email" id="account-email" class="form-control user-input" name="email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="account-password" class="control-label">
                        Password
                    </label>
                    <input type="password" id="account-password" class="form-control user-input" name="password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <input class="magic-checkbox" type="checkbox" name="layout" id="remember-me" value="option">
                    <label for="remember-me">Remeber Me</label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-primary btn-block">
                       Login
                    </button>
                    <a class="btn btn-link" href="{{ url('password/email') }}">Forgot Your Password?</a>
                </div>
                <div class="form-group">
                    Don't have an account? <a href="{{ url('/register') }}"><u>Create a iTask account</u>.</a>
                </div>
            </form>
        </div>
    </div>
@endsection
