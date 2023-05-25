<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                "id" => "29c3a6be-c042-4efd-a199-7d45b99fdcc2",
                "category" => "Laptop",
                "name" => "Asus Tuf f425",
                "price" => 1900000,
                "sale_price" => 1959000,
                "brands" => "Asus",
                "rating" => 4
            ],
            [
                "id" => "105aea64-0b01-4883-b536-9889f06498d7",
                "category" => "Laptop",
                "name" => "Asus ROG W827",
                "price" => 29900000,
                "sale_price" => 0,
                "brands" => "Asus",
                "rating" => 4
            ],
            [
                "id" => "bb2d6c9e-4a86-485c-bde6-2a83c2b30dd5",
                "category" => "Laptop",
                "name" => "Acer Predator G7281",
                "price" => 17000000,
                "sale_price" => 18000000,
                "brands" => "Acer",
                "rating" => 5
            ],
            [
                "id" => "c2209c46-99b1-4cf5-a1cb-243c4d6ff3bb",
                "category" => "Laptop",
                "name" => "Lenovo V13",
                "price" => 8499000,
                "sale_price" => 0,
                "brands" => "Lenovo",
                "rating" => 3
            ],
            [
                "id" => "8fc7a400-d1e4-4fa1-926a-2ecfdc3266d4",
                "category" => "laptop",
                "name" => "ASUS VIVOBOOK F67mx",
                "price" => 3998000,
                "sale_price" => 5398000,
                "brands" => "Asus",
                "rating" => 4
            ],
            [
                "id" => "976448e1-8e60-48a3-b379-1d1e6973c268",
                "category" => "Laptop",
                "name" => "Axio w289",
                "price" => 1923000,
                "sale_price" => 1903777,
                "brands" => "Axio",
                "rating" => 4
            ],
           
        ];

        return view('product.index', ['products' => $products]);
    }
}
