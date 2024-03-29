<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/itask-01.jpg') }}">
    
    <title>iTask Management Sytem</title>
    
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/override.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-editable.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/magic-check.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/font-awesome-css/all.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/selectize.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/animation.css') }}" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script>
        var assetUserImage = "{{ asset('img/user_1.jpg') }}";
    </script>
</head>
<body>
    <div class="spinner">
      <div class="rect1"></div>
      <div class="rect2"></div>
      <div class="rect3"></div>
      <div class="rect4"></div>
      <div class="rect5"></div>
    </div>
    
    @include('layouts.partials.modal')
    @include('layouts.partials.navigation')
    @yield('content')

    
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap-editable.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('js/ajax-loading.js') }}"></script>
    <script src="{{ asset('js/selectize.js') }}"></script>
    <script src="{{ asset('js/board.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script src="{{ asset('js/typed.min.js') }}"></script>
</body>
</html>
