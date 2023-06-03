<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getAction()
    {
        $categories = Category::where('id', 1)->get();
        dd($categories->toArray());
    }
}
