<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Facebook Configuration
    |--------------------------------------------------------------------------
    |
    | Contains the Facebook URL.
    |
    | URL: The URL for Facebook.
    |
    */

    'facebook' => [
        'url' => env('FACEBOOK_URL')
    ],

    /*
    |--------------------------------------------------------------------------
    | Instagram Configuration
    |--------------------------------------------------------------------------
    |
    | Contains the Instagram URL.
    |
    | URL: The URL for Instagram.
    |
    */

    'instagram' => [
        'url' => env('INSTAGRAM_URL')
    ],

    /*
    |--------------------------------------------------------------------------
    | Twitter Configuration
    |--------------------------------------------------------------------------
    |
    | Contains the Twitter URL.
    |
    | URL: The URL for Twitter.
    |
    */

    'twitter' => [
        'url' => env('TWITTER_URL')
    ],

    /*
    |--------------------------------------------------------------------------
    | Pinterest Configuration
    |--------------------------------------------------------------------------
    |
    | Contains the Pinterest URL.
    |
    | URL: The URL for Pinterest.
    |
    */

    'pinterest' => [
        'url' => env('PINTEREST_URL')
    ],

    /*
    |--------------------------------------------------------------------------
    | LinkedIn Configuration
    |--------------------------------------------------------------------------
    |
    | Contains the LinkedIn URL.
    |
    | URL: The URL for LinkedIn.
    |
    */

    'linkedin-in' => [
        'url' => env('LINKED_IN_URL')
    ],

    /*
    |--------------------------------------------------------------------------
    | TikTok Configuration
    |--------------------------------------------------------------------------
    |
    | Contains the TikTok URL.
    |
    | URL: The URL for TikTok.
    |
    */

    'tiktok' => [
        'url' => env('TIKTOK_URL')
    ],

    /*
    |--------------------------------------------------------------------------
    | WhatsApp Configuration
    |--------------------------------------------------------------------------
    |
    | Contains the WhatsApp URL and number.
    |
    | URL: The URL for WhatsApp, constructed using the WHATS_APP_URL environment variable.
    | Number: The WhatsApp phone number.
    |
    */

    'whatsapp' => [
        'url' => env('WHATS_APP_URL'),
        'number' => env('WHATS_APP')
    ],

    /*
    |--------------------------------------------------------------------------
    | Phone Configuration
    |--------------------------------------------------------------------------
    |
    | Contains the phone number.
    |
    | Number: The application's phone number.
    |
    */

    'phone' => [
        'url' => env('PHONE_URL'),
        'number' => env('PHONE_NO')
    ],

    /*
    |--------------------------------------------------------------------------
    | Email Configuration
    |--------------------------------------------------------------------------
    |
    | Contains the email address.
    |
    | Email: The application's email address.
    |
    */

    'email' => env('MAIL_FROM_ADDRESS'),

    /*
    |--------------------------------------------------------------------------
    | Direct Chat Configuration
    |--------------------------------------------------------------------------
    |
    | Contains the direct chat URL.
    |
    | URL: The URL for direct chat.
    |
    */

    'direct_chat_url' => env('LIVE_CHAT'),

    /*
    |--------------------------------------------------------------------------
    | Currency Configuration
    |--------------------------------------------------------------------------
    |
    | Contains the currency symbol.
    |
    | Symbol: The symbol for the currency used in the application.
    |
    */

    'currency_symbol' => env('CURRENCY_SYMBOL')

];
