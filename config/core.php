<?php

// config for Notch/Core
return [
    'currency' => [
        'default' => 'XAF',
        'api_key' => env('EXCHANGE_HOST_API_KEY'),
        /*
        |--------------------------------------------------------------------------
        | Default Storage Driver
        |--------------------------------------------------------------------------
        |
        | Here you may specify the default storage driver that should be used
        | by the framework.
        |
        | Supported: "database", "filesystem", "model"
        |
        */

        'driver' => 'model',

        /*
        |--------------------------------------------------------------------------
        | Default Storage Driver
        |--------------------------------------------------------------------------
        |
        | Here you may specify the default cache driver that should be used
        | by the framework.
        |
        | Supported: all cache drivers supported by Laravel
        |
        */

        'cache_driver' => 'redis',

        /*
        |--------------------------------------------------------------------------
        | Storage Specific Configuration
        |--------------------------------------------------------------------------
        |
        | Here you may configure as many storage drivers as you wish.
        |
        */

        'drivers' => [

            'database' => [
                'class' => \Notch\Core\Currency\Drivers\Database::class,
                'connection' => null,
                'table' => 'currencies',
            ],

            'filesystem' => [
                'class' => \Notch\Core\Currency\Drivers\Filesystem::class,
                'disk' => 'local',
                'path' => 'currencies.json',
            ],

            'model' => [
                'table' => 'currencies',
                'class' => \Notch\Core\Currency\Models\Currency::class,
            ],

        ],

        /*
        |--------------------------------------------------------------------------
        | Currency Formatter
        |--------------------------------------------------------------------------
        |
        | Here you may configure a custom formatting of currencies. The reason for
        | this is to help further internationalize the formatting past the basic
        | format column in the table. When set to `null` the package will use the
        | format from storage.
        |
        |
        */

        'formatter' => null,

        /*
        |--------------------------------------------------------------------------
        | Currency Formatter Specific Configuration
        |--------------------------------------------------------------------------
        |
        | Here you may configure as many currency formatters as you wish.
        |
        */

        'formatters' => [

            'php_intl' => [
                'class' => PHPIntl::class,
            ],

        ],

        'connection' => null
    ],
    'balance' => [
        'balance_table' => 'balance_history',
        'sandbox_table' => 'sandbox_balance_history',
        'available_table' => 'available_balance_history',
        'connection' => null
    ],
];
