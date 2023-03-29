<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
        $products = Product::paginate(12);

        $categories = Category::paginate(12);

        $viewData = [
            'categories' => $categories,
            'products' => $products
        ];
        return view('frontend.pages.home.index', $viewData);
    }

    public function getFormRegister(){
        return view('auth.register');
    }
    public function getFormLogin(){
        return view('auth.login');
    }
}
