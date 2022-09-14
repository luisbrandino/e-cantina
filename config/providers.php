<?php 

return [
    'microsoft' => [
        'enabled' => true,
        'name' => 'Microsoft',
        'base_uri' => env('MICROSOFT_BASE_URI'),
        'auth_uri' => env('MICROSOFT_OAUTH_AUTH_URI'),
        'client_id' => env('MICROSOFT_OAUTH_ID'),
        'redirect_uri' => env('MICROSOFT_REDIRECT_URI'),
        'secret' => env('MICROSOFT_OAUTH_SECRET'),
        'scope' => env('MICROSOFT_OAUTH_SCOPE')
    ]
];