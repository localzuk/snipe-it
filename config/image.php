<?php

/*
 |--------------------------------------------------------------------------
 | DO NOT EDIT THIS FILE DIRECTLY.
 |--------------------------------------------------------------------------
 | This file reads from your .env configuration file and should not
 | be modified directly.
*/

return [

    /*
    |--------------------------------------------------------------------------
    | Image Driver
    |--------------------------------------------------------------------------
    |
    | Intervention Image supports "GD Library" and "Imagick" to process images
    | internally. You may choose one of them according to your PHP
    | configuration. By default PHP's "GD Library" implementation is used.
    |
    | Supported: "gd", "imagick"
    |
    */

    'driver' =>  env('IMAGE_LIB', 'gd'),

];
