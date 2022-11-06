<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        echo 'Admin';
    }

    public function show_dashboard() {
        return view('admin_layout');
    }
}
