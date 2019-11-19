<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;

class ProductsController extends Controller
{
    public function index($subdomain)
    {
        $shop = User::with('products')
            ->whereSubdomain($subdomain)
            ->firstOrFail();
        
        return view('products.index', compact('shop'));
    }

    public function show($subdomain, Product $product)
    {
        $product->load('created_by');

        return view('products.show', compact('product'));
    }
}
