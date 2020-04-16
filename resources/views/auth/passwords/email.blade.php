@extends('layouts.app')

<!-- Main Content -->
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 col-centered">
        <div class="user-card">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
             @endif
            <div class="form-group">
                <a href="{{ url('/login') }}"><< Back</a>
            </div>
            <h1 class="login-header">Reset Password</h1>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                {!! csrf_field() !!}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label">E-mail Address</label>
                        <input type="email" class="form-control user-input" name="email" value="{{ old('email') }}" placeholder="E-mail Address">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg  btn-block user-btn">
                        Send Password Reset Link
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
