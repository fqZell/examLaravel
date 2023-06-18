<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function createProduct(ProductRequest $request) {
        $validated = $request->validated();

        $products = Product::query()->create($validated);

        return redirect()->route('home');
    }

    public function delete(Product $product) {
        $product->delete();

        return redirect()->route('home');
    }

    public function update(Product $product, ProductRequest $request) {
        $validated = $request->validated();

        $product->update($validated);

        return redirect()->route('home');
    }

    public function updateProduct(Product $product) {
        return view('updateProduct', compact('product'));
    }
}
