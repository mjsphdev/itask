@if(!Auth::check())
   
@endif
@if (Auth::check())
    <button type="button" class="navbar-toggle toggle-left pull-left" data-toggle="sidebar" data-target=".sidebar-left" style="margin:.5rem; border-color: none; position: absolute; z-index: 1000;">
      <span class="icon-bar nav-toggle-icon"></span>
      <span class="icon-bar nav-toggle-icon"></span>
      <span class="icon-bar nav-toggle-icon"></span>
      <span class="icon-bar nav-toggle-icon"></span>
    </button>

    <div class="col-xs-7 col-sm-2 col-md-2 frame sidebar sidebar-left sidebar-animate">
        <h1 class="navigation-header"><a href="{{ route('user.dashboard') }}">iTask</a></h1>
        <ul class="nav navbar-stacked sidebar-inner">
            <li>
                <div class="media" style="padding-left: 15px;">
                    <div class="media-body">
                        <h4 class="media-heading" style="text-transform: capitalize; font-weight: bold;">{{ Auth::user()->name }}</h4>
                        <p><i class="fas fa-envelope"></i> {{ Auth::user()->email }}</p>
                        <p><i class="fas  fa-calendar"></i> Joined on {{ Carbon\Carbon::parse(Auth::user()->created_at)->toFormattedDateString() }}</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="panel-group" style="padding-top: 15px; padding-left: 15px; padding-right: 15px;">
                    <div class="panel panel-default" style="width: 295px;">
                        <p style="border-bottom: 1px solid #fff;"></p>
                    </div>
                </div>
            </li>
            <li class="menu-main" style="padding-left: 15px; padding-right: 30px;">
                <a  class="menu-list"  href="{{ route('user.dashboard') }}" style="color: #154134;"><i class="fas fa-home"></i> Home</a>                
            </li>
            <li style="padding-left: 15px; padding-right: 30px;">
                <a class="menu-list" href="{{ route('user.activity') }}" style="color: #154134;"><i class="fas fa-chart-line"></i> My Activity</a>
            </li>
            <li style="padding-left: 15px; padding-right: 30px;">
                <a class="menu-list" href="{{ route('user.profile') }}" style="color: #154134;"><i class="fas fa-user"></i> Profile</a>
            </li>
            <li style="padding-left: 15px; padding-right: 30px;">
                <a  class="menu-list" href="{{ url('/logout') }}" style="color: #154134;"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
            </li>

        </ul>
    </div>
@endif
<div class="overlay"></div>