@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 col-centered">
            <div class="user-card">
                <h1 class="login-header">Reset Password</h1>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                    {!! csrf_field() !!}

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label">E-mail Address</label>
                        <input type="email" class="form-control user-input" name="email" value="{{ $email or old('email') }}" placeholder="E-mail Address">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="control-label">Enter new Password</label>
                        <input type="password" class="form-control user-input" name="password" placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label for="password_confirmation" class="control-label">Confirm new Password</label>
                            <input type="password" class="form-control user-input" name="password_confirmation" placeholder="Confirm Password">

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-block user-btn">
                            Reset Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
</div>
@endsection
