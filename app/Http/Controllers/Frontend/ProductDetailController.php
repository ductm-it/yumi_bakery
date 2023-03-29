<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductDetailController extends Controller
{
    public function getProductDetail($pro_slug){

        $product = Product::where('pro_slug',$pro_slug)->first();
        $viewData = [
            'product' => $product
        ];
        // dd($viewData);
        return view('frontend.pages.product_detail.index', $viewData);
    }
}
