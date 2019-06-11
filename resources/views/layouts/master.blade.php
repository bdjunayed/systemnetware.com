<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     @include('layouts.meta')

    {{--@yield('page_meta')
    @yield('title') --}}

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}" />

    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body>
    {{-- Home Page Background Images --}}
    <div class="body_background">
        
        
        @include('layouts.header')


        @yield('content')



        @include('layouts.footer')



    </div>{{-- body_background --}}


<script src="{{mix('js/manifest.js')}}"></script>
<script src="{{mix('js/vendor.js')}}"></script>
<script src="{{mix('js/app.js')}}"></script>
<script>
    $(document).ready(function(){
        $('.ipad_menu ul li').on('click',function(){
        $('.ipad_menu ul li').removeClass('active');
        $(this).addClass('active');
        });
    });  
</script>
</body>
</html>

