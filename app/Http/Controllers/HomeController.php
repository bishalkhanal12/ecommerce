<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $Categories = Category::limit(11)->get();
        $sliderCategories = Category::limit(5)->get();
        return view('home',
        [
            'categories' => $Categories,
            'sliderCategories' => $sliderCategories
        ]);
        }
    }
