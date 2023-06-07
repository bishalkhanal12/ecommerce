<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $filterCategorySlug = request()->get('category');
        $categories = Category::limit(11)->get();
        $category = Category::where('slug', $filterCategorySlug)->first();
        if($category){
            $products = $category->products()->get();
            return view('products.list',[
                'categories' => $categories,
                'products' => $products
                ]);
        }else
        {
            $products = Product::all();
            return view('products.list',[
                'categories' => $categories,
                'products' => $products
                ]);
        }
    

        
}
public function show($slug)
{
    $product = Product::where('slug', $slug)->first();
    return view('products.show',[

    'product' => $product,
    ]);


}
}
