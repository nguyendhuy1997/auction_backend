<?php

namespace App\Http\Controllers\Ajax;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class productAjax extends Controller
{
    public function getAll()
    {
        $product = Product::where('status', 1)
                            ->get();
        return $product;
    }
}
