<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Lnbits Keys
    |--------------------------------------------------------------------------
    |
    | The Lnbits admin key and Invoice/read key will allow your application to call
    | the Lnbits API. The "Invoice/read key" key is typically used when interacting
    | with Lnbits while the "admin key" key accesses private endpoints.
    |
    */

    'wallet_id' => env('LNBITS_WALLET_ID'),

    'admin_key' => env('LNBITS_ADMIN_KEY'),

    'invoice_read_key' => env('LNBITS_READ_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Cashier Path
    |--------------------------------------------------------------------------
    |
    | This is the base URI path where Cashier's views, such as the webhook
    | route, will be available. You're free to tweak this path based on
    | the needs of your particular application or design preferences.
    |
    */

    'path' => env('LNBITS_PATH', 'lnbits'),

    /*
    |--------------------------------------------------------------------------
    | Cashier Webhook
    |--------------------------------------------------------------------------
    |
    | This is the base URI where webhooks from Lnbits will be sent. The URL
    | built into Cashier Bitcoin Lightning is used by default; however, you can add
    | a custom URL when required for any application testing purposes.
    |
    */

    'webhook' => env('CASHIER_WEBHOOK'),

    /*
    |--------------------------------------------------------------------------
    | Currency
    |--------------------------------------------------------------------------
    |
    | This is the default currency that will be used when generating charges
    | from your application. Of course, you are welcome to use any of the
    | various world currencies that are currently supported via Lnbits.
    |
    */

    'currency' => env('CASHIER_CURRENCY', 'USD'),

    /*
    |--------------------------------------------------------------------------
    | Currency Locale
    |--------------------------------------------------------------------------
    |
    | This is the default locale in which your money values are formatted in
    | for display. To utilize other locales besides the default en locale
    | verify you have the "intl" PHP extension installed on the system.
    |
    */

    'currency_locale' => env('CASHIER_CURRENCY_LOCALE', 'en'),

];
