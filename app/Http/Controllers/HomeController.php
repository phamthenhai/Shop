<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    public function getAllProduct(){
        $data = Product::select("id", "name", "price", "discount", "image_link", "image_list", "content")->orderBy("id", "DESC")->get()->toArray();
        return view('primary.index', compact("data"));
    }
    public function getProductDetail($id){
        $data = Product::find($id);
        return view('primary.detail')->with(compact("data"));
    }
}
