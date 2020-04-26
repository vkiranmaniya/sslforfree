<?php

return [

    /*
    |--------------------------------------------------------------------------
    | SSL For free Verification Tokens
    |--------------------------------------------------------------------------
    |
    | Go to the https://www.sslforfree.com/ and enter your domain name,
    | Choose manual way of verification and download the verification files,
    | use file name as key and file content as value in this config file
    |
    */

    'verification' => [
        [
            'key' => 'sample_key_1',
            'value' => 'sample_value_1'
        ],
        [
            'key' => 'sample_key_2',
            'value' => 'sample_value_2'
        ]
    ],
];
