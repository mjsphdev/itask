@extends('layouts.app')

@section('content')
<div class="profile-con" style="padding-left: 10px !important; padding-top: 60px !important; padding-right: 10px; padding-bottom: 0px;">
    @include('layouts.partials.profileintro')
    <div class="container">
        <div class="row" style="margin-top: 20px;">
            <div class="col-lg-8 col-lg-offset-2">
                <ul>
                    @foreach($userActivity as $activity)
                        <li>
                            <div class="media media-activity">
                                <div class="media-body" style="padding-top: 1px;">
                                    <p style="margin-bottom: 1px;"><b><span style="text-transform: capitalize;">{{ Auth::user()->name }}</span></b> @if($activity->activity_description == "created a board") created a board @elseif($activity->activity_description == "un-fav a board") Un Favourite a board @elseif($activity->activity_description == "fav a board") Favourite a board @elseif($activity->activity_description == "created a list") created a list @elseif($activity->activity_description == "deleted a list") Deleted a list @elseif($activity->activity_description == "created a card") Created a Card @elseif($activity->activity_description == "deleted a card") Deleted a Card @elseif($activity->activity_description == "edit list name") Edit List Name @elseif($activity->activity_description == "deleted a list") Deleted a List @elseif($activity->activity_description == "card is edited") Edit the Card @elseif($activity->activity_description == "task is added") Added a task @elseif($activity->activity_description == "task is deleted") Task is Deleted @elseif($activity->activity_description == "posted a comment") Posted a Comment on a card @endif  </p>
                                    <p style="margin-bottom: 1px;"><i class="fas fa-clock"></i> {{ Carbon\Carbon::parse($activity->created_at)->toDayDateTimeString() }}</p>
                                </div>
                            </div>
                        </li>
                        <hr>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="create-board">
    <h4>
        <a style="color:#26d684;" href="{{ route('user.profile') }}"><i class="fas fa-id-badge"></i> Profile</a>
    </h4>
</div>
@endsection