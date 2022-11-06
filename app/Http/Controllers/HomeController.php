<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('frontend.index');
    }

    public function checkout() {
        return view('frontend.check-out');
    }
    public function shopping_cart() {
        return view('frontend.shopping-cart');
    }
}
