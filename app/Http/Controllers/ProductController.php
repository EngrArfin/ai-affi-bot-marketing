<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function all(Request $request){
        $products = Product::all();

        return view('admin.pages.index',[
            "products" => $products
        ]);
    }

    function create(Request $request){
        Product::create(
            [
                'name' => $request->name,
                'product_url' => $request->image
            ]
        );

        return redirect('/admin');
    }

    function checkout(Request $request){
        Order::create([
            "name" => "Product 2",
            "price" => 300,
            "refer" => $request->session()->get('refer_id') ? $request->session()->get('refer_id') : null
        ]);

        return true;
    }
}
