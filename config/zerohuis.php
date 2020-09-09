<?php


return [

    /*
    |--------------------------------------------------------------------------
    | cookie
    |--------------------------------------------------------------------------
    |
    | Define some settings for cookies set in the Zerohuis application
    |
    */
    'cookie'      => [
        /*
         * Minutes the cookie will be valid
         */
        'minutes' => env('ZEROHUIS_COOKIE_MINUTES', 60),
    ],

];
