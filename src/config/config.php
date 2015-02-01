<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Brand title
    |--------------------------------------------------------------------------
    |
    | This value will be used in brand titles and html document titles (appended)
    |
    */
    'brand_title' => 'Cimple',
    /*
    |--------------------------------------------------------------------------
    | Brand logo
    |--------------------------------------------------------------------------
    |
    |
    */
    'brand_logo' => '/packages/topcu/cimple/images/logo.png',

    /*
    |--------------------------------------------------------------------------
    | Brand Link
    |--------------------------------------------------------------------------
    |
    | This will be used to create link for brand title.
    |
    */
    'brand_title_link' => '#',

    /*
    |--------------------------------------------------------------------------
    | Navbar partial
    |--------------------------------------------------------------------------
    |
    | The partial view to generate menu.
    | Override it in order to generate your menu
    |
    */
    'nav_bar' => 'cimple::nav_bar',

    /*
    |--------------------------------------------------------------------------
    | Navbar items
    |--------------------------------------------------------------------------
    |
    | Navbar links hash as [link_route_name => link_text]
    |
    */
    'nav_routes' => [
        "home" => "Another Link",
    ],



    /*
    |--------------------------------------------------------------------------
    | Topbar partial
    |--------------------------------------------------------------------------
    |
    | The partial view to generate top section.
    | Override it in order to generate your own
    |
    */
    'top_bar' => 'cimple::top_bar',

    /*
    |--------------------------------------------------------------------------
    | Content Top partial
    |--------------------------------------------------------------------------
    |
    | The partial view to generate content on top of success & warning messages
    |
    */
    'content_top' =>  'cimple::content_top',
    /*
    |--------------------------------------------------------------------------
    | Messages partial
    |--------------------------------------------------------------------------
    |
    | The partial view to generate success & warning messages
    | Override it in order to generate your own
    |
    */
    'messages_bar' => 'cimple::messages_bar',


    /*
    |--------------------------------------------------------------------------
    | Package asset path
    |--------------------------------------------------------------------------
    |
    | Asset directory in which template files located.
    |
    */
    'package_asset_path' => '/packages/topcu/cimple',

    /*
    |--------------------------------------------------------------------------
    | CSS
    |--------------------------------------------------------------------------
    |
    | Array of paths for additional CSS files to load
    |
    */
    'css' => array(),

    /*
    |--------------------------------------------------------------------------
    | JS
    |--------------------------------------------------------------------------
    |
    | Array of paths for additional JS files to load
    |
    */
    'js' => array()

);