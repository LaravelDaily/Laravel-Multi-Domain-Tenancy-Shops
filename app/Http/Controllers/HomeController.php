<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use Illuminate\Http\Request;

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

    public function search(Request $request)
    {
        $products = Product::with('created_by')
            ->where('name', 'LIKE', "%$request->search%")
            ->orWhere('description', 'LIKE', "%$request->search%")
            ->get();

        return view('search', compact('products'));
    }
}
