@extends('layouts.app')

@section('content')
<div class="profile-con" style="padding-left: 10px !important; padding-top: 60px !important; padding-right: 10px; padding-bottom: 0px;">
    @include('layouts.partials.profileintro')
    <div class="container">
        <div class="row media-activity" style="margin-top: 15px;">
            <div class="col-lg-5 col-lg-offset-3">
                <form action="" method="POST" role="form">                
                    <div class="form-group">
                        <label for="">Username: </label>
                        <a href="#" data-type="text" class="input-editable editable-click" id="card_title_editable" style="text-transform: capitalize;">{{ Auth::user()->name }}</a>
                    </div>
                    <div class="form-group">
                        <label for="">Email: </label>
                        <a href="#" data-type="text" class="input-editable editable-click" id="card_title_editable" style="text-transform: capitalize;">{{ Auth::user()->email }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="create-board">
    <h4>
        <a style="color:#26d684;" href="{{ route('user.activity') }}"><i class="fas fa-chart-line"></i> My Activity</a>
    </h4>
</div>
@endsection