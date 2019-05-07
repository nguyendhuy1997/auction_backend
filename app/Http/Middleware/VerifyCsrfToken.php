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
        'https://auctionbackend.herokuapp.com/history',
        'https://auctionbackend.herokuapp.com/lastbid',
        'https://auctionbackend.herokuapp.com/wishlist',
        'https://auctionbackend.herokuapp.com/wishstatus',
        'https://auctionbackend.herokuapp.com/getwishlist',
        'https://auctionbackend.herokuapp.com/postproduct',
        'https://auctionbackend.herokuapp.com/loadmore',
        'https://auctionbackend.herokuapp.com/autocomplete',
        'https://auctionbackend.herokuapp.com/relativeproduct',

        //admin//
        'https://auctionbackend.herokuapp.com/admin/product/accept',
        'https://auctionbackend.herokuapp.com/admin/product/decline',
        'https://auctionbackend.herokuapp.com/admin/updateuser',
        'https://auctionbackend.herokuapp.com/admin/login',
        //admin//

        
    ];
}
