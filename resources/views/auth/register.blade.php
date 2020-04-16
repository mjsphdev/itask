@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 col-centered">
            <div class="user-card">
            <h1 class="login-header">Create an account</h1>
            <form role="form" class="form-signin" method="POST" action="{{ url('/register') }}">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="account-email" class="control-label"> 
                        E-mail Address
                    </label>
                    <input id="account-email" type="email" class="form-control user-input" name="email" value="{{ old('email') }}" placeholder="E-mail Address">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="user-name" class="control-label"> 
                        Full Name
                    </label>
                    <input type="text" id="user-name" class="form-control user-input" name="name" value="{{ old('name') }}" placeholder="Full Name">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <label for="user-username" class="control-label">
                        Username
                    </label>
                    <input type="text" id="user-username" class="form-control user-input" name="username" value="{{ old('username') }}" placeholder="Username">
                    @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('section') ? ' has-error' : '' }}">
                    <label for="user-section" class="control-label">
                        Section
                    </label>
                    <select id="user-section" class="user-input-select form-control" name="section" value="{{ old('section') }}">
                       <option disabled selected>Choose Section</option>
                       <option value="NSIS">NSIS</option>
                       <option value="NAS">NAS</option>
                       <option value="NIEPS">NIEPS</option>
                    </select>
                    @if ($errors->has('section'))
                        <span class="help-block">
                            <strong>{{ $errors->first('section') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="account-password" class="control-label">
                        Password
                    </label>
                    <input type="password" id="account-password" class="form-control user-input" name="password"  placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label for="account-repassword" class="control-label">
                        Confirm password
                    </label>
                    <input type="password" id="account-repassword" class="form-control user-input" name="password_confirmation" placeholder="Confirm Password">
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg  btn-block user-btn">
                       Sign up
                    </button>
                </div>
                <div class="form-group">
                    <a href="{{ url('/login') }}">Already have an account?</a>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection
