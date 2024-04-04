<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function page($page="home"){
        $products = Product::orderBy('id')->get();
        return view($page,['data'=>$products]);
    }
}
