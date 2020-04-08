<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('front.home');
    }
    
    public function login() {
        return view('front.login');
    }

    public function register() {
        return view('front.register');
    }
    
    public function productView() {
        return view('front.product-view');
    }

    public function vendor() {
        return view('front.vendor');
    }
}
