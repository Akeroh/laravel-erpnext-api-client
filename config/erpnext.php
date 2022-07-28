<?php

return [
    /*
     * ERPNext server domain address
     */
    'domain' => env('ERPNEXT_DOMAIN', ''),
    /*
     * ERPNext user name
     */
    'username' => env('ERPNEXT_USER_NAME', ''),
    /*
     * ERPNext user password
     */
    'password' => env('ERPNEXT_USER_PASSWORD', ''),

    'cfAccessId' => env('ERPNEXT_CF_ACCESS_ID', ''),
    'cfAccessSecret' => env('ERPNEXT_CF_ACCESS_SECRET', '')
];
