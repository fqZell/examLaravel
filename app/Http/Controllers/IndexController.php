<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home() {
        $products = Product::query()->get();

        return view('home', [
            'products' => $products
        ]);
    }

    public function signUp() {
        return view('signUp');
    }

    public function signIn() {
        return view('signIn');
    }

    public function createProduct() {
        return view('createProduct');
    }
}
