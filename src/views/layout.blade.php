<!DOCTYPE html>
<html lang="{{ Config::get('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="topcu">

    <title>
        @section('title')
        @if (isset($page_title))
        {{ $page_title }}
        @endif
        @show
        @if ($brand_title = Config::get('cimple::brand_title'))
        | {{ $brand_title }}
        @endif
    </title>
    {{ HTML::style(Config::get('cimple::package_asset_path').'/css/bootstrap.min.css') }}
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @foreach (Config::get('cimple::css') as $link)
    {{ HTML::style($link) }}
    @endforeach
    {{ HTML::style(Config::get('cimple::package_asset_path').'/css/cimple.css') }}
    @section('styles')
    @show
</head>
<body>
<div id="page-wrapper">

    @if ($top_bar = Config::get('cimple::top_bar'))
        @include($top_bar)
    @endif

    <div id="main">

        @if ($nav_bar = Config::get('cimple::nav_bar'))
            @include($nav_bar)
        @endif

        <section id="content-wrapper" class="container">
            <div id="mobile-header">
                <button type="button" id="toggle-menu"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>

                <a class="mobile-logo" href="{{ Config::get('cimple::brand_title_link') }}" title="{{$brand_title}}">
                    <img src="{{Config::get('cimple::brand_logo')}}" class="logo"/>
                </a>
            </div>
            <div id="content">

                @if ($content_top = Config::get('cimple::content_top'))
                    @include($content_top)
                @endif

                @if ($messages_bar = Config::get('cimple::messages_bar'))
                    @include($messages_bar)
                @endif

                @yield('content')
            </div>
        </section>
    </div>
</div>

{{ HTML::script(Config::get('cimple::package_asset_path').'/js/jquery-1.11.2.min.js') }}
{{ HTML::script(Config::get('cimple::package_asset_path').'/js/bootstrap.min.js') }}

@foreach (Config::get('cimple::js') as $link)
    {{ HTML::script($link) }}
@endforeach
{{ HTML::script(Config::get('cimple::package_asset_path').'/js/cimple.js') }}
@section('scripts')
@show
</body>
</html>