<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Genies Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for genies services such
    | as Credit Engine, EKYC and Face Matching and more. This file provides the
    | de facto location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'credit-engine' => [
        'url' => env('CREDIT_ENGINE_URL'),
        'api-token' => env('CREDIT_ENGINE_API_TOKEN'),
    ],

    'face-matching' => [
        'url' => env('FACE_MATCHING_URL'),
        'api-token' => env('FACE_MATCHING_API_KEY'),
    ],

    'ekyc' => [
        'url' => env('EKYC_URL'),
        'default_credential' => [
            'grant_type' => env('EKYC_GRANT_TYPE'),
            'client_id' => env('EKYC_CLIENT_ID'),
            'client_secret' => env('EKYC_CLIENT_SECRET'),
            'username' => env('EKYC_USERNAME'),
            'password' => env('EKYC_PASSWORD'),
            'api_token' => env('EKYC_API_TOKEN'),
        ],
        'project' => [
            'id' => env('EKYC_PROJECT_ID'),
            'name' => env('EKYC_PROJECT_NAME'),
        ],
        'aws_bucket' => env('EKYC_AWS_BUCKET'),
    ],

    'carro' => [
        'url' => env('CARRO_URL'),
    ],

];
