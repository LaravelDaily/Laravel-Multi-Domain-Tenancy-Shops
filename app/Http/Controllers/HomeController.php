<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;

class HomeController
{
    public function index()
    {
        $products = Product::inRandomOrder()->take(3)->get();
        $companies = User::whereHas('roles', function ($q) {
            $q->whereTitle('User');
        })->inRandomOrder()->take(8)->get();
        return view('home', compact('products', 'companies'));
    }
}
