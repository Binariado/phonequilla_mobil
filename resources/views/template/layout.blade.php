@php
    use App\Info;
    $info=Info::all()->first();
@endphp
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-language" content="es"/>
    <meta name="language" content="español">
    <meta name="robots" content="index,follow"/>
    <meta name="googlebot" content="index, follow" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="description" content="" >
    <meta name="keywords" content="">
    <meta name="copyright" content="iphonequilla.com">
    <meta property="og:title" content="Iphone quilla"/>
    <meta property="og:title" content="Iphone"/>
    <meta property="og:type" content="Website"/>
    <meta property="og:url" content="{{url('/')}}"/>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" type="image/png" href="{{ asset("logos/favicon.png") }}" sizes="32x32" />
    {{-- <link rel="shortcut icon" type="image/png" href="{{ asset("logos/favicon.png") }}" sizes="16x16" /> --}}
    {{-- <meta property="og:image" content="{{asset('img/seo.png')}}"/> --}}
    <script src="https://kit.fontawesome.com/621f121ca6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{  url(mix("css/app.css")) }}" async>
    @yield('style')
    <script async>
        var https = "{{url('/')}}/";
    </script>
</head>
<body class="d-flex flex-column align-content-start flex-wrap">

    {{-- <div class="load">
        <div class="c-spinner">
            <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div> --}}

    <section id="loading">
            <div><img class="pulse animated infinite" src="{{asset('img/logos/logo1.svg')}}" alt=""> </div>
    </section>

    <div  id='iphonequilla'>
        @yield('content')
    </div>
    @yield('modal')
    <script src="{{ url(mix("js/app.js")) }}" async></script>
    @yield('script')
    @include('template.footer')
    <div class="wp-float-desktop hvr-bob">
        <a href="https://wa.me/57{{$info->number_whatsapp}}" target="_blank">
            <img src="{{asset('img/fondos/whatsapp.png')}}" alt="">
        </a>
    </div>
</body>
</html>
