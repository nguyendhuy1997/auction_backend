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
        'http://127.0.0.1:8000/login',
        'http://127.0.0.1:8000/register',
        'http://127.0.0.1:8000/checkemail',
        'http://127.0.0.1:8000/bid',
        'http://127.0.0.1:8000/buynow',
        'http://127.0.0.1:8000/countdown',
        'http://127.0.0.1:8000/history',
        'http://127.0.0.1:8000/postproduct',


        //admin//
        'http://127.0.0.1:8000/admin/product/accept',
        'http://127.0.0.1:8000/admin/product/decline',
        'http://127.0.0.1:8000/admin/user/accept',
        'http://127.0.0.1:8000/admin/user/decline'
        //admin//

        
    ];
}
