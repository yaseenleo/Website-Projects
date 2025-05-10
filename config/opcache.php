<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Opcache URL
    |--------------------------------------------------------------------------
    |
    | The URL to use for the OPcache API. It can be set via the 'OPCACHE_URL'
    | environment variable, or it falls back to the 'app.url' config value.
    |
    */

    'url' => env('OPCACHE_URL', config('app.url')),

    /*
    |--------------------------------------------------------------------------
    | Opcache Prefix
    |--------------------------------------------------------------------------
    |
    | The prefix to use for OPcache API routes. Default is 'opcache-api'.
    |
    */

    'prefix' => 'opcache-api',

    /*
    |--------------------------------------------------------------------------
    | Verify SSL Certificates
    |--------------------------------------------------------------------------
    |
    | Whether to verify SSL certificates when making requests to the
    | OPcache API. Default is true.
    |
    */

    'verify' => true,

    /*
    |--------------------------------------------------------------------------
    | Additional headers
    |--------------------------------------------------------------------------
    |
    |  Additional headers to include when making requests to the OPcache API.
    |
    */

    'headers' => [],

    /*
    |--------------------------------------------------------------------------
    | Include Directories
    |--------------------------------------------------------------------------
    |
    | Directories to include in the OPcache. By default, it includes
    | various Laravel directories such as app, bootstrap, config,
    | resources, routes, storage, and vendor.
    |
    */

    'directories' => [
        base_path('app'),
        base_path('bootstrap'),
        base_path('config'),
        base_path('resources'),
        base_path('routes'),
        base_path('storage'),
        base_path('vendor'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Exclude Directories
    |--------------------------------------------------------------------------
    |
    | Directories or files to exclude from the OPcache. By default, it
    | excludes some common Laravel directories and files such as
    | 'public_html/blog', 'test', 'Test', 'tests', 'Tests', 'stub', 'Stub',
    | 'stubs', 'Stubs', 'dumper', 'Dumper', and 'Autoload'..
    |
    */

    'exclude' => [
        '../public_html/blog',
        'test',
        'Test',
        'tests',
        'Tests',
        'stub',
        'Stub',
        'stubs',
        'Stubs',
        'dumper',
        'Dumper',
        'Autoload',
    ],
];
