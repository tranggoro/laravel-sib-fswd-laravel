<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = [

            [
                "id" => "1d17a400-d1e4-4fa1-926a-2ecfdc3266d4",
                "name" => "laptop"
            ],
            
        ];
        return view('category.index', compact('categories'));
    }
}
