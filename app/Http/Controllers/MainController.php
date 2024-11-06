<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex(){
        return view("home");
    }

    public function showArray(){
        $array = [
            ["id" => 1, "title" => "iphone", "price" => 50000,"pat" => "/img/1.webp"],
            ["id" => 2, "title" => "iphone", "price" => 60000,"pat" => "/img/1.webp"],
            ["id" => 3, "title" => "iphone", "price" => 70000,"pat" => "/img/1.webp"],
            ["id" => 4, "title" => "iphone", "price" => 80000,"pat" => "/img/1.webp"],
            ["id" => 5, "title" => "iphone", "price" => 90000,"pat" => "/img/1.webp"],
            ["id" => 6, "title" => "iphone", "price" => 100000,"pat" => "/img/1.webp"],
            ["id" => 7, "title" => "iphone", "price" => 110000,"pat" => "/img/1.webp"],
        ];
        return view('array', compact("array"));
    }
}
