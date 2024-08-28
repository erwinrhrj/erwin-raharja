<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Erwin Raharja : Web Profile</title>

    {{-- START: CSS --}}
    <link rel="stylesheet" href="{{ asset('bootstrap5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/layout/master.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    {{-- END: CSS --}}
    
    {{-- START : FONTAWESOME --}}
    <script src="https://kit.fontawesome.com/9535710087.js" crossorigin="anonymous"></script>
    {{-- END : FONTAWESOME --}}

    {{-- START : JQUERY CDN --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{-- END : JQUERY CDN --}}

    {{-- BOOTSTRAP --}}
    <script src="{{ asset('bootstrap5/js/bootstrap.bundle.min.js') }}"></script>

    {{-- SLICK --}}
    <link rel="stylesheet" href="{{ asset('slick-master/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('slick-master/slick/slick-theme.css') }}">

</head>
<body>

    <div id="e-bg"></div>
    
    {{-- START: TOPBAR --}}
        @include('layout/header')
    {{-- END: TOPBAR --}}


    {{-- START: Content --}}
        @yield('content')
    {{-- END: Content --}}

    {{-- START: FOOTER --}}
        @include('layout/footer')
    {{-- END: FOOTER --}}

    <script type="text/javascript" src="{{ asset('particles-js/particles.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('particles-js/custom.js') }}"></script>
</body>


<script src="{{ asset('jquery/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('slick-master/slick/slick.js') }}"></script>
<script>
    $(document).ready(function(){
        //SAVE-IP
        var APP_URL = {!! json_encode(url('/')) !!}
        // console.log(APP_URL);

        $.post(APP_URL+"/api/save-ip", function( data ) {
            // console.log(data+'cekcek');
        });
    });
</script>
@yield('javascript')


</html>