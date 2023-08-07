<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PageController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function products(){

        $products = Product::get();
        return view('pages.products', compact('products'));
    }

    public function contact(){
        return view('pages.contact');
    }
}
