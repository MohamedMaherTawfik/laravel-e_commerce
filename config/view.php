<?php

use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| View Storage Paths
|--------------------------------------------------------------------------
|
| Here, you may specify the paths that Laravel will look in for views.
|
*/

return [

    /*
    |--------------------------------------------------------------------------
    | Default Storage Path
    |--------------------------------------------------------------------------
    |
    | This option determines where views should be stored.
    |
    */

    'paths' => [
        resource_path('views'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Storage Path
    |--------------------------------------------------------------------------
    |
    | This option determines where views should be stored.
    |
    */

    'compiler' => 'blade',

    /*
    |--------------------------------------------------------------------------
    | View Caching
    |--------------------------------------------------------------------------
    |
    | This option determines if views should be cached.
    |
    */

    'cached' => false,

];