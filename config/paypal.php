<?php
// In config/paypal.php
return [
    'client_id' => 'AYXkibOYEdd1NuOrzkqYvPIJNFFe5iQCjqfzUQOn4Dvx_aRdx0F2xtxTgOsYI7NXFAxMscfOODXWtPLc',
    'secret' => 'EEUZVmqKRDYI9rrTnx0KeJpCFoO1BPjznHM7kHVWNSjWdMdh8xVW6CubBTw33KyoATXfHR01UU-s0iVW',
    'settings' => [
        'mode' => 'sandbox', // or 'live' for production
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path('logs/paypal.log'),
        'log.LogLevel' => 'ERROR',
    ],
];
