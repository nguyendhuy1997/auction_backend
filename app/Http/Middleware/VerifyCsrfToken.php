<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/login',
        '/register',
        '/checkemail',
        '/bid',
        '/buynow',
        '/countdown',
        '/history',
        '/lastbid',
        '/wishlist',
        '/wishstatus',
        '/getwishlist',
        '/postproduct',
        '/loadmore',
        '/autocomplete',
        '/relativeproduct',

        //admin//
        '/admin/product/accept',
        '/admin/product/decline',
        '/admin/updateuser',
        '/admin/login',
        //admin//

        
    ];
}
