<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index() {
        $product = Product::select('id', 'name', 'price', 'image')->orderBy('id', 'DESC')->skip(0)->take(6)->get();
        $products = Product::select('id', 'name', 'price', 'image')->orderBy('id', 'ASC')->skip(0)->take(6)->get();
        return view('pages.home', compact('product','products'));
    }
}
