<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ShopController extends Controller
{
    public function categories()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function categoryProducts($id)
    {
        $category = Category::with('products')->findOrFail($id);
        return view('categories.show', compact('category'));
    }

    public function product($id)
    {
        $product = Product::with('tags')->findOrFail($id);
        return view('products.show', compact('product'));
    }
}
