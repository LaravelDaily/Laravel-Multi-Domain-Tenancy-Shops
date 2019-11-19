<?php

namespace App\Http\Controllers;

use App\User;

class ProductsController extends Controller
{
    public function index($subdomain)
    {
        $shop = User::whereSubdomain($subdomain)
            ->firstOrFail();
        
        return view('shop', compact('shop'));
    }
}
