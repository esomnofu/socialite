<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    
    'facebook' => [
        'client_id' => '1930410873890748',
        'client_secret' => '4e3ba2aeb1c7f1ff5dc054321c9989f1',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',  
    ],
    
    
    'twitter' => [
        'client_id' => 'GEJubcfCQzt9G1ZJrq62Rp6Am',
        'client_secret' => 'kQWkKd90azBvm7RMpgHFzl6Smj4KmPIQUIKalM5tQpz41F8NVD',
        'redirect' => 'http://localhost:8000/auth/twitter/callback',  
    ],
    
    
    'google' => [
        'client_id' => '1041342383498-851cd481pmhpc4alo4ir0r96ngavjc31.apps.googleusercontent.com',
        'client_secret' => 'sHtzC-vCcyKzWIUuZ8m1GTfY',
        'redirect' => 'http://localhost:8000/auth/google/callback',  
    ]
    
    
    

];
