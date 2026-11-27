<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Enabled locales
    |--------------------------------------------------------------------------
    |
    | Add or remove locale codes for your app. Names, native labels, and
    | text direction come from Multira's catalog automatically.
    |
    | Override a locale with the locales key below.
    |
    */

    'supported' => ['ar', 'en'],

    /*
    |--------------------------------------------------------------------------
    | Custom locale metadata (optional)
    |--------------------------------------------------------------------------
    |
    | Use this to override catalog values or add a locale that is not listed.
    |
    */

    'locales' => [
        // 'en' => ['name' => 'English', 'native' => 'English', 'script' => 'Latn', 'regional' => 'en_GB', 'dir' => 'ltr'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Language switcher order
    |--------------------------------------------------------------------------
    |
    | Leave empty to follow the supported array.
    |
    */

    'localesOrder' => ['ar', 'en'],

    /*
    |--------------------------------------------------------------------------
    | Locale URL aliases
    |--------------------------------------------------------------------------
    |
    | Example: use /uk in the URL instead of /en-GB
    | 'localesMapping' => ['en-GB' => 'uk'],
    |
    */

    'localesMapping' => [],

    /*
    |--------------------------------------------------------------------------
    | Hide the default locale in URLs
    |--------------------------------------------------------------------------
    |
    | If the default locale is en and this is true:
    |   /about  and  /en/about  are the same page
    |
    | Use with the localizationRedirect middleware.
    |
    */

    'hideDefaultLocaleInURL' => false,

    /*
    |--------------------------------------------------------------------------
    | Detect locale from the browser
    |--------------------------------------------------------------------------
    |
    | On the first visit without a locale in the URL, use Accept-Language.
    |
    */

    'useAcceptLanguageHeader' => false,

    /*
    |--------------------------------------------------------------------------
    | setlocale suffix
    |--------------------------------------------------------------------------
    */

    'utf8suffix' => env('MULTIRA_UTF8SUFFIX', PHP_OS_FAMILY === 'Windows' ? '' : '.UTF-8'),

    /*
    |--------------------------------------------------------------------------
    | Ignored paths and HTTP methods
    |--------------------------------------------------------------------------
    */

    'urlsIgnored' => [],

    'httpMethodsIgnored' => ['POST', 'PUT', 'PATCH', 'DELETE'],

    /*
    |--------------------------------------------------------------------------
    | Session and cookie keys
    |--------------------------------------------------------------------------
    */

    'session_key' => 'locale',

    'cookie' => [
        'name' => 'locale',
        'minutes' => 60 * 24 * 365,
    ],

    /*
    |--------------------------------------------------------------------------
    | Eloquent JSON translations
    |--------------------------------------------------------------------------
    |
    | The source locale stays in the database.
    | Other locales are stored in lang/{locale}.json, keyed by the source text.
    |
    |   lang/es.json => { "Hello": "Hola" }
    |
    */

    'source_locale' => 'ar',

    'target_locales' => ['en'],

    /*
    |--------------------------------------------------------------------------
    | Translatable model groups
    |--------------------------------------------------------------------------
    |
    | Key   = group name used in Multira translation routes
    | Value = Eloquent model that uses the Translatable trait
    |
    |   POST /multira/translations/posts/title
    |
    */

    'groups' => [
        // 'posts' => \App\Models\Post::class,
        // 'pages' => \App\Models\Page::class,
        'faculties' => \App\Models\Faculty::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Package routes
    |--------------------------------------------------------------------------
    */

    'routes' => [
        'enabled' => true,
        'prefix' => 'multira',
        'middleware' => ['web'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Default middleware for Multira::routes()
    |--------------------------------------------------------------------------
    */

    'route_middleware' => [
        'localeSessionRedirect',
        'localizationRedirect',
        'localeViewPath',
    ],

];
