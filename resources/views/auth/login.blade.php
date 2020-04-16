@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 col-centered">
            <div class="user-card">
                @if(Session::has('status'))
                <div class="alert alert-success">
                    <p>{{ Session::get('status') }}</p>
                </div>
                @endif
                <h1 class="login-header">Sign in</h1>
                <form class="form-signin" role="form" method="POST" action="{{ url('/login') }}">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="account-email" class="control-label">
                            E-mail Address
                        </label>
                        <input type="email" id="account-email" class="form-control user-input" name="email" value="{{ old('email') }}" placeholder="E-mail Address">
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
                        <input type="password" id="account-password" class="form-control user-input" name="password" placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input class="magic-checkbox" type="checkbox" name="layout" id="remember-me" value="option">
                        <label for="remember-me">Remember me</label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-block user-btn">
                         Sign in
                        </button>
                    </div>
                    <div class="form-group">
                        <a class="" href="{{ url('password/email') }}">Forgot your Password?</a>
                    </div>
                    <div class="form-group">
                        <a href="{{ url('/register') }}">Don't have an account?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 
@endsection
