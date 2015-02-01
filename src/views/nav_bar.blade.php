<?php $current_route_name = Route::currentRouteName(); ?>
<aside id="sidebar" class="navmenu navmenu-default navmenu-fixed-left offcanvas-sm">
    <ul class="nav navmenu-nav">
        <li class="navmenu-brand visible-xs {{$current_route_name === 'home' ? 'active' : ''}}">
            <a href="{{ Config::get('cimple::brand_title_link') }}">{{$brand_title}}</a>
        </li>

        @foreach(Config::get("cimple::nav_routes") as $route_name => $route_title)
        <li class="{{$route_name === $current_route_name ? 'active' : ''}}">
            <a href="{{URL::route($route_name)}}">
                {{$route_title}}
            </a>
        </li>
        @endforeach

    </ul>
</aside>